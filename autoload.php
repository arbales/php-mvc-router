<?php

function __autoload($class_name) 
    {
        //class directories
        $directorys = array(
            'models/',
			'controllers/',
			'helpers/',
            'system/',
        );
        
        //for each directory
        foreach($directorys as $directory)
        {
            //see if the file exsists
            if(file_exists($directory.strtolower($class_name) . '.php')){
                require_once($directory.strtolower($class_name) . '.php');
                //only require the class once, so quit after to save effort (if you got more, then name them something else 
                return;
            } elseif(file_exists($directory.$class_name . '.php')){
                require_once($directory.$class_name . '.php');
			}
        }

		throw new Exception("Unable to locate: '$class_name', a class required for this application to function.");
		
    }

?>