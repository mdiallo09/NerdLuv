<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>nerdLuv</title>
		<link href="./nerdieluv.css" type="text/css" rel="stylesheet" />
	</head>

<body>

	
	<img src = "nerd.jpg">
    <?php
    $singles = file("singles.txt");


$user_info_line = '';
for ($i = 0; $i < count($singles); $i++) {
    $user_info_line = strstr($singles[$i], $_GET["name"]);
    if ($user_info_line !== FALSE) {
        break;
    }
}

$user_info = explode(",", $user_info_line);

$user_gender = $user_info[1];
$user_age = (int)$user_info[2];
$user_personality = $user_info[3];
$user_os = $user_info[4];
$user_min_seek = (int)$user_info[5];
$user_max_age = (int)$user_info[6];


$match_gender = '';
if (strcmp($user_gender, 'M') === 0) {
    $match_gender = 'F';
} else {
    $match_gender = 'M';
}


$matches = array();


?>
<div>
<?php
$is_first = true;
for ($i = 0; $i < count($singles); $i++) {
   
    $other_info_array = explode(",", $singles[$i]);
    $other_gender = $other_info_array[1];
    $other_age = (int)$other_info_array[2];
    $other_personality = $other_info_array[3];
    $other_os = $other_info_array[4];
    $other_min_seek = (int)$other_info_array[5];
    $other_max_seek = (int)$other_info_array[6];

 
    if (strcmp($match_gender, $other_gender) === 0) {

      
        $user_matches_others_choice = NULL;
        $other_matches_users_choice = NULL;

        if ($other_min_seek <= $user_age && $user_age <= $other_max_seek)
            $user_matches_others_choice = TRUE;

        if($user_min_seek <= $other_age && $other_age <= $user_max_age)
            $other_matches_users_choice = TRUE;

       
        if($user_matches_others_choice && $other_matches_users_choice){
            if (strcmp($user_os, $other_os) === 0) {

              
                $inRegex = "/[".$user_personality."]/";
                if (preg_match($inRegex, $other_personality) === 1) {
                    $matches[] = $singles[$i];

                    if ($is_first) {
?>
        <br>
        <strong>Matches for <?= $_GET["name"] ?></strong><br>
<?php
                        $is_first = false;
                    }
?>
  <div class="match">
      <img src="user.JPG" alt="photo"/>
      <div>
          <ul>
              <li><p><?= $other_info_array[0] ?></p></li>
              <li><strong>gender:</strong> <?= $other_gender ?></li>
              <li><strong> age:</strong> <?= $other_age ?> </li>
              <li><strong> type:</strong> <?= $other_personality ?> </li>
              <li><strong> OS:</strong> <?= $other_os ?></li>
          </ul>
      </div>
  </div>
<?php
                }
            }
        }
    }
}
?>
</div>

<?php
if (count($matches) === 0) {
?>
<div> No match is found. </div>
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
	<p><span id = red><a href= "https://codd.cs.gsu.edu/~mdiallo20/WP/HW/HW3/index.php"><img src = "logout.jpg"></a> </span> </p>

	
    <br>
	<br>
	<img src = "html.PNG"> <img src = "css.PNG">


















    </body>

</html>