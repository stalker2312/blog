<!DOCTYPE html>
<html>
<head>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		
	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

	<title>Добавить статью</title>

</head>
<body>

    <title>Блог Валерия Проскурякова</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/">Блог</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/main">Домашняя <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="main/add">Добавить пост</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="">О блоге</a>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>




<form style="margin-top: 40px;" action="#" class="form-signin" method="POST" enctype="multipart/form-data">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      
      
      <label for="inputEmail" class="sr-only">Email address</label>
      
      <input type="text" name="name" id="inputEmail" class="form-control" placeholder="имя" required autofocus>
      
      <label for="inputPassword" class="sr-only">Password</label>
      
      <input name="zag" type="text" id="inputPassword" class="form-control" placeholder="заголовок" required>
      
      <textarea placeholder="Текст" name="textarea" > </textarea>
      <input type="file" name="file">

      <button class="btn btn-lg btn-primary btn-block" type="submit">Добавить</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>


<?php
require_once 'db.php';

   $name =  $_POST['name'];
  $zag = $_POST['zag'];
  $text = $_POST['textarea'];
  $filename = $_FILES['file']['name'];
  $target = "images/".basename($_FILES['file']['name']);

  move_uploaded_file($_FILES['tmp_name']['name'], $target);
  
$stmt = $pdo->query("INSERT INTO `tbl` ( name, text,  img, zag) VALUES ('$name','$text','$filename','$zag')");

	
	











 



?>


</html>




