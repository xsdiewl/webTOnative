Set objShell = CreateObject("Wscript.Shell")

strPath = objShell.CurrentDirectory


set shell=CreateObject("Shell.Application")
shell.ShellExecute strPath+"\phpbrowserbox",strPath, "", "runas", 1
set shell=nothing 