<?php
/**
 * 微信公众平台 PHP SDK
 *
 * @author NetPuter <netputer@gmail.com>
 */

  /**
   * 微信公众平台处理类
   */
  class Wechat {

    /**
     * 调试模式，将错误通过文本消息回复显示
     *
     * @var boolean
     */
    private $debug;

    /**
     * 以数组的形式保存微信服务器每次发来的请求
     *
     * @var array
     */
    private $request;
    
    private $xmlobj;

    /**
     * 初始化，判断此次请求是否为验证请求，并以数组形式保存
     *
     * @param string $token 验证信息
     * @param boolean $debug 调试模式，默认为关闭
     */
    public function __construct($token, $debug = FALSE) {
      if ($this->isValid() && $this->validateSignature($token)) {
        exit($_GET['echostr']);
      }

      $this->debug = $debug;
      set_error_handler(array(&$this, 'errorHandler'));
      // 设置错误处理函数，将错误通过文本消息回复显示
      $xml = (array) simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA'], 'SimpleXMLElement', LIBXML_NOCDATA);
      
      $postObj = simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA'], 'SimpleXMLElement', LIBXML_NOCDATA);
	  //调试点
	  //file_put_contents('a.log',"eagle",FILE_APPEND);
	  $this->xmlobj = $postObj;
	  
      $this->request = array_change_key_case($xml, CASE_LOWER);
      // 将数组键名转换为小写，提高健壮性，减少因大小写不同而出现的问题
    }

    /**
     * 判断此次请求是否为验证请求
     *
     * @return boolean
     */
    private function isValid() {
      return isset($_GET['echostr']);
    }

    /**
     * 判断验证请求的签名信息是否正确
     *
     * @param  string $token 验证信息
     * @return boolean
     */
    private function validateSignature($token) {
      $signature = $_GET['signature'];
      $timestamp = $_GET['timestamp'];
      $nonce = $_GET['nonce'];

      $signatureArray = array($token, $timestamp, $nonce);
      sort($signatureArray);
	  //调试点
	  //file_put_contents('a.log',"eagle",FILE_APPEND);

      return sha1(implode($signatureArray)) == $signature;
    }

    /**
     * 获取本次请求中的参数，不区分大小
     *
     * @param  string $param 参数名，默认为无参
     * @return mixed
     */
    protected function getRequest($param = FALSE) {
      if ($param === FALSE) {
        return $this->request;
      }

      $param = strtolower($param);					//转成小写

      if (isset($this->request[$param])) {
        return $this->request[$param];
      }

      return NULL;
    }

     /**
     * 用户关注时触发，回复「欢迎关注」
     *
     * @return void
     */
    protected function onSubscribe() {
      $this->responseText('欢迎关注岭南园林股份有限公司官方微信！');
    }

    /**
     * 用户取消关注时触发
     *
     * @return void
     */
    protected function onUnsubscribe() {
      // 「悄悄的我走了，正如我悄悄的来；我挥一挥衣袖，不带走一片云彩。
      $this->responseText('希望今后还能关注岭南园林股份有限公司官方微信，谢谢您的支持！');
    }

    /**
     * 收到文本消息时触发，回复收到的文本消息内容
     *
     * @return void
     */
    protected function onText() {
		$this->responseText('请点击菜单查找您感兴趣的链接，谢谢！');
		//$this->responseText('收到了文字消息：' . $this->getRequest('content'));
    }

    /**
     * 收到图片消息时触发，回复由收到的图片组成的图文消息
     *
     * @return void
     */
    protected function onImage() {
      $items = array(
        new NewsResponseItem('标题一', '描述一', $this->getRequest('picurl'), $this->getRequest('picurl')),
        new NewsResponseItem('标题二', '描述二', $this->getRequest('picurl'), $this->getRequest('picurl')),
      );

      $this->responseNews($items);
    }

    /**
     * 收到地理位置消息时触发，回复收到的地理位置
     *
     * @return void
     */
    protected function onLocation() {
      $num = 1 / 0;
      // 故意触发错误，用于演示调试功能

      $this->responseText('收到了位置消息：' . $this->getRequest('location_x') . ',' . $this->getRequest('location_y'));
    }

    /**
     * 收到链接消息时触发，回复收到的链接地址
     *
     * @return void
     */
    protected function onLink() {
      $this->responseText('收到了链接：' . $this->getRequest('url'));
    }

    /**
     * 收到未知类型消息时触发，回复收到的消息类型
     *
     * @return void
     */
    protected function onUnknown() {
      $this->responseText('收到了未知类型消息：' . $this->getRequest('msgtype'));
    }
    
    /**
     * 回复文本消息
     *
     * @param  string  $content  消息内容
     * @param  integer $funcFlag 默认为0，设为1时星标刚才收到的消息
     * @return void
     */
    protected function responseText($content, $funcFlag = 0) {
      exit(new TextResponse($this->getRequest('fromusername'), $this->getRequest('tousername'), $content, $funcFlag));
    }

    /**
     * 回复音乐消息
     *
     * @param  string  $title       音乐标题
     * @param  string  $description 音乐描述
     * @param  string  $musicUrl    音乐链接
     * @param  string  $hqMusicUrl  高质量音乐链接，Wi-Fi 环境下优先使用
     * @param  integer $funcFlag    默认为0，设为1时星标刚才收到的消息
     * @return void
     */
    protected function responseMusic($title, $description, $musicUrl, $hqMusicUrl, $funcFlag = 0) {
      exit(new MusicResponse($this->getRequest('fromusername'), $this->getRequest('tousername'), $title, $description, $musicUrl, $hqMusicUrl, $funcFlag));
    }

    /**
     * 回复图文消息
     * @param  array   $items    由单条图文消息类型 NewsResponseItem() 组成的数组
     * @param  integer $funcFlag 默认为0，设为1时星标刚才收到的消息
     * @return void
     */
    protected function responseNews($items, $funcFlag = 0) {
      exit(new NewsResponse($this->getRequest('fromusername'), $this->getRequest('tousername'), $items, $funcFlag));
    }

    /**
     * 分析消息类型，并分发给对应的函数
     *
     * @return void
     */
    public function run() {
      switch ($this->getRequest('msgtype')) {
        case 'event':
          switch ($this->getRequest('event')) {
            case 'subscribe':
              $this->onSubscribe();
              break;
             case 'unsubscribe':
              $this->onUnsubscribe();
              break;
            case 'CLICK':
				//die;
			  $this->receiveEvent($this->xmlobj);
              break;
           }
           break;
         case 'text':
          $this->onText();
          break;
         case 'image':
          $this->onImage();
          break;

        case 'location':
          $this->onLocation();
          break;

        case 'link':
          $this->onLink();
          break;

        default:
          $this->onUnknown();
          break;

      }
    }
    
     /**
     * 自定义的错误处理函数，将 PHP 错误通过文本消息回复显示
     * @param  int $level   错误代码
     * @param  string $msg  错误内容
     * @param  string $file 产生错误的文件
     * @param  int $line    产生错误的行数
     * @return void
     */
    protected function errorHandler($level, $msg, $file, $line) {
      if ( ! $this->debug) {
        return;
      }

      $error_type = array(
        // E_ERROR             => 'Error',
        E_WARNING           => 'Warning',
        // E_PARSE             => 'Parse Error',
        E_NOTICE            => 'Notice',
        // E_CORE_ERROR        => 'Core Error',
        // E_CORE_WARNING      => 'Core Warning',
        // E_COMPILE_ERROR     => 'Compile Error',
        // E_COMPILE_WARNING   => 'Compile Warning',
        E_USER_ERROR        => 'User Error',
        E_USER_WARNING      => 'User Warning',
        E_USER_NOTICE       => 'User Notice',
        E_STRICT            => 'Strict',
        E_RECOVERABLE_ERROR => 'Recoverable Error',
        E_DEPRECATED        => 'Deprecated',
        E_USER_DEPRECATED   => 'User Deprecated',
      );

      $template = <<<ERR
PHP 报错啦！

%s: %s
File: %s
Line: %s
ERR;

      $this->responseText(sprintf($template,
        $error_type[$level],
        $msg,
        $file,
        $line
      ));
    }


  }

  /**
   * 用于回复的基本消息类型
   */
  abstract class WechatResponse {

    protected $toUserName;
    protected $fromUserName;
    protected $funcFlag;

    public function __construct($toUserName, $fromUserName, $funcFlag) {
      $this->toUserName = $toUserName;
      $this->fromUserName = $fromUserName;
      $this->funcFlag = $funcFlag;
    }

    abstract public function __toString();

  }

  /**
   * 用于回复的文本消息类型
   */
  class TextResponse extends WechatResponse {

    protected $content;

    protected $template = <<<XML
<xml>
  <ToUserName><![CDATA[%s]]></ToUserName>
  <FromUserName><![CDATA[%s]]></FromUserName>
  <CreateTime>%s</CreateTime>
  <MsgType><![CDATA[text]]></MsgType>
  <Content><![CDATA[%s]]></Content>
  <FuncFlag>%s<FuncFlag>
</xml>
XML;

    public function __construct($toUserName, $fromUserName, $content, $funcFlag = 0) {
      parent::__construct($toUserName, $fromUserName, $funcFlag);
      $this->content = $content;
    }

    public function __toString() {
      return sprintf($this->template,
        $this->toUserName,
        $this->fromUserName,
        time(),
        $this->content,
        $this->funcFlag
      );
    }

  }

  /**
   * 用于回复的音乐消息类型
   */
  class MusicResponse extends WechatResponse {

    protected $title;
    protected $description;
    protected $musicUrl;
    protected $hqMusicUrl;

    protected $template = <<<XML
<xml>
  <ToUserName><![CDATA[%s]]></ToUserName>
  <FromUserName><![CDATA[%s]]></FromUserName>
  <CreateTime>%s</CreateTime>
  <MsgType><![CDATA[music]]></MsgType>
  <Music>
    <Title><![CDATA[%s]]></Title>
    <Description><![CDATA[%s]]></Description>
    <MusicUrl><![CDATA[%s]]></MusicUrl>
    <HQMusicUrl><![CDATA[%s]]></HQMusicUrl>
  </Music>
  <FuncFlag>%s<FuncFlag>
</xml>
XML;

    public function __construct($toUserName, $fromUserName, $title, $description, $musicUrl, $hqMusicUrl, $funcFlag) {
      parent::__construct($toUserName, $fromUserName, $funcFlag);
      $this->title = $title;
      $this->description = $description;
      $this->musicUrl = $musicUrl;
      $this->hqMusicUrl = $hqMusicUrl;
    }

    public function __toString() {
      return sprintf($this->template,
        $this->toUserName,
        $this->fromUserName,
        time(),
        $this->title,
        $this->description,
        $this->musicUrl,
        $this->hqMusicUrl,
        $this->funcFlag
      );
    }

  }

  /**
   * 用于回复的图文消息类型
   */
  class NewsResponse extends WechatResponse {

    protected $items = array();

    protected $template = <<<XML
<xml>
  <ToUserName><![CDATA[%s]]></ToUserName>
  <FromUserName><![CDATA[%s]]></FromUserName>
  <CreateTime>%s</CreateTime>
  <MsgType><![CDATA[news]]></MsgType>
  <ArticleCount>%s</ArticleCount>
  <Articles>
    %s
  </Articles>
  <FuncFlag>%s<FuncFlag>
</xml>'
XML;

    public function __construct($toUserName, $fromUserName, $items, $funcFlag) {
      parent::__construct($toUserName, $fromUserName, $funcFlag);
      $this->items = $items;
    }

    public function __toString() {
      return sprintf($this->template,
        $this->toUserName,
        $this->fromUserName,
        time(),
        count($this->items),
        implode($this->items),
        $this->funcFlag
      );
    }

  }

  /**
   * 单条图文消息类型
   */
  class NewsResponseItem {

    protected $title;
    protected $description;
    protected $picUrl;
    protected $url;

    protected $template = <<<XML
<item>
  <Title><![CDATA[%s]]></Title>
  <Description><![CDATA[%s]]></Description>
  <PicUrl><![CDATA[%s]]></PicUrl>
  <Url><![CDATA[%s]]></Url>
</item>
XML;

    public function __construct($title, $description, $picUrl, $url) {
      $this->title = $title;
      $this->description = $description;
      $this->picUrl = $picUrl;
      $this->url = $url;
    }

    public function __toString() {
      return sprintf($this->template,
        $this->title,
        $this->description,
        $this->picUrl,
        $this->url
      );
    }

  }
