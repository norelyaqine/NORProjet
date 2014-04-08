<!DOCTYPE html>

<?php
session_start();

      
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Log in</title>


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:700,400' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css' />


<link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.css" type="text/css" /><!-- Font Awesome -->
<link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->
<link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	

</head>
<body class="sign-in-bg">

	<div class="sign-in">
		<div class="sign-in-head black">
			<div class="sign-in-details">
				<h1>Sign up<i class="fa fa-lock"></i></h1>
				
			</div>
			<div class="log-in-thumb">
				<img src="images/sign-in.jpg" alt="" />
			</div>
			<div class="account">
			   <p><a href="login.php">Already have an account Great! LOG IN Here</p></a>
		    </di>
		</div>
		<div class="sign-in-form">
			<h5><a href="#" title="">Forgot your password?</a></h5>
			<form />
				<i class="fa fa-user"></i><input type="text" placeholder="USER NAME" name="login" />
			</form>
			<form />
				<i class="fa fa-lock"></i><input type="password" placeholder="PASSWORD" name="password" />
			</form>
			<a href="" title="" class="black">LOG IN</a> 
		</div>
		<ul>
			<li><a href="http://www.facebook.com" title=""><i class="fa fa-facebook"></i></a></li>
			<li><a href="http://www.twiter.com" title=""><i class="fa fa-twitter"></i></a></li>
			<li><a href="http://www.google.com" title=""><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>

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

</body>
</html>
