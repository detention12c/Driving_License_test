<?php
session_start();
if(isset($_SESSION['counter']))
{
    $_SESSION['counter']+=1;
}
else{
    $_SESSION['counter']=1;
}
$msg="you have visited this page".$_SESSION['counter'];

?>
<html>

<head>
   
    <title>setting up a php session</title>
</head>
<body>
    <?php echo $msg; ?>
    
</body>
</html>