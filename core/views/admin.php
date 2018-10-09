<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <title></title>
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
            <a class="nav-link" href="/main/add">Добавить пост</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Вход</a>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    
<form method="POST" style="margin-top: 60px;">
  <div class="form-group">
    <label for="exampleInputEmail1">Логин</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
require_once 'db.php';




if (
    !empty($_REQUEST['password'])
    and !empty($_REQUEST['email'])
  ) {

$login = $_REQUEST['email']; 
$password = $_REQUEST['password']; 


$s = $pdo->query('SELECT*FROM user ');
foreach ($s as $value) {
 
  
 $saltedPassword = md5($password.$value['salt']);
 if($login == $value['user']and $saltedPassword == $value['password']){

$s = $pdo->query('SELECT*FROM tbl ');  
echo '<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully read this important alert message.
</div>';

foreach ($s as  $value)  {  ?> 

           
        
         <div class="col-md-4">
            <h1> <?echo $value['zag'];?></h1>
            <h2> <? echo $value['name'];?></h2>
            <p> <?echo $value['text'];?></p>
            <p><?echo $value['data'];?></p>
            <img src="/images/<?echo $value['img'];?>" alt="отсутствует">
            <a class="btn btn-primary" href="/main/delete?id=<?echo $value['id'];?>" role="button">Удалить</a>
              <a class="btn btn-primary" href="/main/edit?id=<?echo $value['id'];?>" role="button">Редактировать</a>
            


          </div>
           

             
    
                                   <? } ?>

                                   <?
                        }else 

                        echo '<div class="alert alert-danger" role="alert">
  <strong>Oh snap!</strong> Неверный пароль
</div>';

          }                   

}     


?>

</body>
</html>

