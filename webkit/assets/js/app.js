  	window.onload=function() {	
	
	document.title=package.name;
	
	 proc_config('php.ini','bin/php');
	 proc_config('php.ini','bin/apache/bin');

	 proc_config('my.ini','bin/mysql');
	 proc_config('httpd.conf','bin/apache/conf');
	 
	var mysqld=base_path+"/bin/mysql/bin/mysqld.exe"
	var httpd=base_path+"/bin/apache/bin/httpd.exe"
	
	//netsh advfirewall firewall add rule name="mysqld" dir=in action=allow program="E:\wamp\www\phpbrowserbox.com\app1\httpd\bin\mysql\bin\mysqld.exe" enable=yes

	

	var proc = require('child_process');
	
	
	var forker = require('child_process');
	
	/*
	forker.exec('dir', function(err, outstr){
		alert(err+" "+outstr);
	});	
	*/
	
	

	//start apache server
	proc.spawn(httpd);
	
	//start mysql server
	proc.spawn(mysqld);

	location.href="http://localhost:"+package.apache_port+"?apache_port="+package.apache_port+"&mysql_port="+package.mysql_port+"&cache="+Math.random()+"&base_path="+base_path;

	
	gui.Window.get().show();
	} 
