<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>


<html>
<head>
<title> Home Page </title>    
     <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
</head>
<body>
    
    <div class="container">

    <a class="float-left" href="logout.php"> LOGOUT </a>
    <a class="float-right" href="afterlogin.php"> EMPLOYERS/JOBSEEKERS </a>
    
    
    <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>    
    
    </div>
    
</body>


</html>