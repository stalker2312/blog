<?php

  function show404page(){
  	header("HTTP/1.1 404 Not found");
   include 'core/views/'.'404'.'.php';

  	
    }
   
   function renderView($viewName){

     include 'core/views/'.$viewName.'.php';

   }

   