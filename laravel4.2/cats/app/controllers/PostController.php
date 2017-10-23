<?php

class PostController extends BaseController {
        
        public function index()
        {
        	var_dump($_POST); 
		echo $_POST["username"];
                #$argument1 = $argv[1];
		#Use:php exec.php "port2=8099/tcp"
		$argument1 = $_POST["username"];
                $argument2 = $_POST["password"];
		echo exec('ansible-playbook /home/benchen/playbook/fw.yml --extra-vars port2='.$argument1.'/'.$argument2.'', $out);
		$file = 'file.txt';
		foreach($out as $line) {
    		    echo $line;
    	  	    file_put_contents($file, $line, FILE_APPEND);
		} 
        }

}
