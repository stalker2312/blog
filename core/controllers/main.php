<?php
   function action_index(){
      renderView('start');
   }
   function action_contacts(){
    echo 'Contact_page';  
   }
   
   function action_add(){
   
   renderView('add');

   }
 function action_admin(){
      renderView('admin');
   }
   function action_delete(){
      renderView('delete');
   }
   function action_edit(){
      renderView('edit');
   }