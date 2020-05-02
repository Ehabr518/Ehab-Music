<script>let userLoggedIn;</script>
<?php
  include("includes/config.php");
  include("includes/classes/Artist.php");
  include("includes/classes/Album.php");
  include("includes/classes/Song.php");
//session_destroy();
  if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
    echo "<script> userLoggedIn = '".$userLoggedIn."' </script>";
  }
  else {
    header("Location: register.php");
  }

 ?>

<html>
<head>
  <title>Welcome to Ehab! Music</title>
  <link rel="stylesheet" type="text/css" href="assests/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='assests/javascript/script.js'></script>
</head>
<body>

 <div id="mainContainer">

   <div id="topContainer">
        <?php include("includes/navBarContainer.php");?>
    <div id='mainViewContainer'>
        <div id="mainContent">
