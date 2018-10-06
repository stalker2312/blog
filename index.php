<?php
require_once 'core/library/main.php';


$url = strtolower($_GET['url']);
$urlSegments = explode('/',$url);

$chtrName = (empty($urlSegments[0]) ? 'main' : $urlSegments[0]);

$actionName = (empty($urlSegments[1]) ? 'action_index' : 'action_'.$urlSegments[1]);

if(file_exists('core/controllers/'.$chtrName.'.php')){
    require_once 'core/controllers/'.$chtrName.'.php';
    
    if(function_exists($actionName)){
    	$actionName();
          }else{
          
          show404page();
      
               }


}

