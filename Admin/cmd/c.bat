@echo offset
@echo �ռ��ļ����б�
:: �л�����ʵĿ¼
cd ../Lib/Action/
:: �����������

:: ץȡ��ǰĿ¼�µ�����txt�ļ�д��del.log�ļ���
for %%h in (MisAuto*Action.class.php) do (
echo %%h
set "str=MisAutoTraAction.class.php"
echo ��һ���ַ�Ϊ��%str:~0,10%



echo %str:~0,10% >> action.log
pause && exit
)
@echo �ռ����
pause
exit