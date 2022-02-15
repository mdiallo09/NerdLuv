<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>nerdLuv</title>
		<link href="./nerdieluv.css" type="text/css" rel="stylesheet" />
	</head>

<body>

	
	<img src = "nerd.jpg">
	<br><br>
	<?php
        $errors = array();
$user = array(
    'name' => '',
    'gender' => '',
    'age' => '',
    'pers' => '',
    'favorite_os' => '',
    'min_age' => '',
    'max_age' => ''
);


if(isset($_POST['name'])) {
    $user['name'] = urlencode($_POST['name']);
}
if(isset($_POST['gender'])) {
    $user['gender'] = urlencode($_POST['gender']);
}
if(isset($_POST['age'])) {
    $user['age'] = urlencode($_POST['age']);
}
if(isset($_POST['pers'])) {
    $user['pers'] = ($_POST['pers']);
}
if(isset($_POST['os'])) {
    $user['favorite_os'] = ($_POST['os']);
}
if(isset($_POST['min_age'])){
    $user['min_age'] = ($_POST['min_age']);
}
if(isset($_POST['max_age'])){
    $user['max_age'] = ($_POST['max_age']);
}




if (empty($errors)) {
    
    $user_details = $user;
    $to_write = implode(",", $user_details);
    file_put_contents("singles.txt", PHP_EOL.$to_write, FILE_APPEND);
?>
    <pre>
        Thank you
        Welcome to NerdLuv, <?= $user["name"] ?>!
        Now <a href="https://codd.cs.gsu.edu/~mdiallo20/WP/HW/HW3/mylogin.php">log in to see your matches!</a>
    </pre>
<?php
}
else {
?>
    <div class="errors">
        Please fix the following errors:
        <ul>
<?php
    foreach ($errors as $error) {
?>
            <li><?= $error ?> </li>
    <?php } ?>
        </ul>
    </div>
<?php
}
?>

<div class = ThisPage>
	<br>	
		This page is for single nerds to meet and date each other! Type in <br>
		your personal information and wait for the nerdly luv to begin!<br>
		Thank you for using our site. <br><br>
		Results and page (C) Copyright NerdLuv Inc.
</div>
	<br>
	<p><img src = "back.jpeg"> <span id = red><a href= "https://codd.cs.gsu.edu/~mdiallo20/WP/HW/HW3/index.php">Back to front page </a> </span> </p>


        <br>
	<br>
	<img src = "html.PNG"> <img src = "css.PNG">
    </body>

</html>