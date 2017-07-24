String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};

	var gui = require("nw.gui");

	var fs = require('fs');

	if(process.env.PWD) {
		process.chdir(process.env.PWD);
	}
	
	
	/**
	* commandline arguments
	*/
	var argv=gui.App.argv;
	
	/**
	* Base dirpath
	*/
	var base_path=process.cwd();
	i=base_path.lastIndexOf('\\');
	base_path=base_path.substr(0,i);
	
	base_path+="\\httpd\\";

	//alert(base_path);
	
	
	var i=0;
	while(i!=-1) {
	base_path=base_path.replace("\\","/");
	i=base_path.indexOf('\\');
	}

	/**
	* Package.JSON Details
	*/
	var package;

	//read config file
	fs.readFile('./package.json', 'utf-8', function (error, contents) {
		package = JSON.parse(contents);
	});
	
	function log(str) {	
		//document.getElementById('text').value+= (str+"\n");
	}
	
    function proc_config(file,path) {
		fs.readFile(base_path+'/config/'+file, 'utf-8', function (error, contents) {
		
			var substr="%phpbrowserbox%";
			var replc=base_path;
			contents = contents.replaceAll(substr, replc);

			contents = contents.replaceAll('%mysql_port%', package.mysql_port);
			contents = contents.replaceAll('%apache_port%', package.apache_port);

			
			fs.writeFile(base_path+"/"+path+"/"+file, contents, function(err) {
			if(err) {
					return log("error:"+err);
			}
			

			log(file+" was saved to "+base_path+"/"+path+"/"+file);
		}); 


		});

	}