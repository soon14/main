:: windows ��ʱ���� ����ű�
set "phproot=E:\installdir\develop\wamp\bin\php\php5.3.10\php.exe"
set "codepath=E:\nbm\work\php\systemui\Admin\cmd\"
set "code=%codepath%\timedtask.php"
:: %phproot% %code%

:: CLI ������ģʽ�µĲ���
set "phptestroot=E:\installdir\develop\wamp\bin\php\php5.3.10\php-cgi.exe"
set "testcode= -q E:\nbm\work\php\tp\Admin\index.php Index/index"
:: D:\php\php.exe -q D:\website\test.php
:: ���ò��� TP CLI ����
%phptestroot%%testcode%
::pause
exit