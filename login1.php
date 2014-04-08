<?php
session_start();
       
       if (isset($_POST['login'])){
           
           $login = $_POST['login'];
           $pas = $_POST['password'];
       
mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');

$query = mysql_query ("SELECT * from login where login = '".$login."' and passe='".$pas."'");
if($rows=mysql_fetch_array($query)){

            $_SESSION['login'] = $login ;
            header("location: acceuil.php");
        }else{
            echo 'incorecte';
        }

 


}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <form name="form" action="" method="POST">
            <label>Login</label>
            <input type="text" name="login">
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit">
        </form>
        
    </body>
</html>