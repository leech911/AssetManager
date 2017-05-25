<!DOCTYPE html>
<head>
<?php
require "./PDO.info";
?>
<?php



	require_once("session.php");
	
	require_once("class.user.php");
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

//require_once("session.php");
//require_once("class.user.php");
//$login = new USER();

//if($login->is_loggedin()!="")
//{
 //       $login->redirect('home.php');
//}else{
//$login->redirect('/assetMan');
//}



//if(!isset($_SESSION['user_session'])){ //if login in session is not set
  //  header("Location: index.php");
//}
?>

<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
<script type="text/javascript" src="./js/myFunctions.js"></script>
<script src= "./js/jquery-1.12.4.js"></script>

<script type="text/javascript" src="js/materialize.min.js"></script> 

<script type="text/javascript" charset="utf8" src="./js/jquery.dataTables.js"></script>

<link type="text/css" rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection"/>

<link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.css">

<link rel="stylesheet" type="text/css" href="./css/css/jquery.dataTables.css">

<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<script src="bootstrap/js/bootstrap.min.js"></script>
