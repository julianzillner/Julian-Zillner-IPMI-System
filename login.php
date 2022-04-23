<?php
	include("inc/header.html");
?>
<?php
session_start();
if(isset($_POST['send']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $username = 'admin'; 
    $password = 'JulianZillner2006';
    
    if($user == $username && $pass == $password)
    {
        $_SESSION['userid'] = 1;
    }
    else
    {
        $error = true;
    }
}

if(isset($_SESSION['userid']))
{
   
    echo 'Erfolgreich angemeldet zum <a href="index.php">Dashboard</a>';
}
else
{
?>
<center>
<h3>Julian Zillner IPMI</h3>	
<form action="login.php" method="post">
    Benutzername:<br>
    <input type="text" name="user">
    <br>Passwort:<br>
    <input type="password" name="pass">
    <br><br>
    <input type="submit" name="send" value="Einloggen">
</form>
	</center>

<?php
}
if(isset($error) && $error == true)
{
    echo '<br>Da hat etwas nicht gestimmt!<br>';
}
?>