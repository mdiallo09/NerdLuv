<?php session_start(); /* Starts the session */



/* Check Login form submitted */

if(isset($_POST['Submit'])){

/* Define username and associated password array */

/* You can change username and associated password array to your pref*/

$logins = array('anakin' => 'skywalker','username1' => 'password1','username2' => 'password2');



/* Check and assign submitted Username and Password to new variable */

$Username = isset($_POST['Username']) ? $_POST['Username'] : '';

$Password = isset($_POST['Password']) ? $_POST['Password'] : '';



/* Check Username and Password existence in defined array */

if (isset($logins[$Username]) && $logins[$Username] == $Password){

/* Success: Set session variables and redirect to Protected page  */

$_SESSION['UserData']['Username']=$logins[$Username];

header("location:index.php");

exit;

} else {

/*Unsuccessful attempt: Set error message */

$msg="<span style='color:red'>Invalid Login Details</span>";

}

}

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">


<link href="nerdluv.css" rel="stylesheet">

</head>

<body>

<img src = "nerd.jpg">
	<br><br>

<br>

<fieldset>

<form id="login" action="matches.php" method="post" name="Login_Form">



  <table width="300" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">

    <?php if(isset($msg)){?>

    <tr>

      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>

    </tr>

    <?php } ?>

    <tr>

      <td colspan="2" text-align="center" valign="top"><h3>Login</h3></td>

    </tr>

    <tr>

      <td align="right" valign="top">Username</td>

      <td><input name="Username" type="text" class="Input"></td>

    </tr>

    <tr>

      <td align="right">Password</td>

      <td><input name="Password" type="password" class="Input"></td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>

   <td>     <tr> Username  => 'anakin' Password => 'skywalker'     </tr></td>

    </tr>

  </table>

</form>

    </fieldset>



    <?php include 'footer.php' ?>

</body>

</html>