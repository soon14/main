:: ��̬��ģ�����ļ�����ű�
::	ע, ���ļ���Ҫ���� ��Ŀ�ļ���Ŀ¼�� /Admin/cmd/

@echo off
cd Dynamicconf/truncate/
set "root=%cd%"
set "action=%root%/action.log"

if EXIST "action.log" (

for /f "tokens=1" %%a in (%action%) do (
	call :removeaction %%a
	call :removemodel %%a
	call :removetpl %%a
	call :removedynamicconf %%a
)

:: ɾ����ɺ����ɾ���б��¼ 
::	:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
::	����ʱ����Ҫɾ��ɾ����¼��
::cd ../../Dynamicconf/truncate/
::del /q/f action.log
::	:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
echo ɾ����ɣ����ɾ���б��¼
) else ( 
@echo ɾ��ʧ�ܣ�������actionɾ���б��¼ )
exit
:removeaction
cd ../../Lib/Action/
set "action=%1Action.class.php"
set "extendAction=%1ExtendAction.class.php"
if exist %action% (del /q/f %action%) else ( @echo �ļ� %action% ������ >> ../../Dynamicconf/truncate/dels.log )
if exist %extendAction% (del /q/f %extendAction%) else ( @echo �ļ� %extendAction% ������ >> ../../Dynamicconf/truncate/dels.log )
goto:eof
:removemodel
cd ../../Lib/Model/
set "model=%1Model.class.php"
set "extendModel=%1ExtendModel.class.php"
set "view=%1ViewModel.class.php"
if exist %model% (del /q/f %model%) else ( @echo �ļ� %model% ������ >> ../../Dynamicconf/truncate/dels.log )
if exist %extendModel% (del /q/f %extendModel%) else ( @echo �ļ� %extendModel% ������ >> ../../Dynamicconf/truncate/dels.log )
if exist %view% (del /q/f %view%) else ( @echo �ļ� %view% ������ >> ../../Dynamicconf/truncate/dels.log )
goto:eof
:removetpl
cd ../../Tpl/default/
set "dir=%1"
if exist %dir% (rd /q/s %dir%) else ( @echo ģ�� %dir% ������ >> ../../Dynamicconf/truncate/dels.log )
goto:eof
:removedynamicconf
cd ../../Dynamicconf/Models/
set "dir=%1"
if exist %dir% (rd /q/s %dir%) else ( @echo ������ %dir% ������ >> ../../Dynamicconf/truncate/dels.log )
goto:eof
:logs
set "name=%1"
echo %name%
@echo %name% ������ >> ../../Dynamicconf/truncate/dels.log
goto:eof