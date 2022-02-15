<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>nerdLuv</title>
		<link href="./nerdieluv.css" type="text/css" rel="stylesheet" />
	</head>

<body>
<form action="https://codd.cs.gsu.edu/~mdiallo20/WP/HW/HW3/signup-submit.php" method="post"> 
	
	<img src = "nerd.jpg">
	<br><br>

	<fieldset> <legend>New User Signup:</legend>
        <div class = column>   <b> Name:</b></div> <input name="name" type="text" size= "16">   <br>     
        <div class = column>   <b> Gender:</b></div> <input name="gender" type="radio" value="M"> Male<input name="gender" type="radio" value="F" onClick="submit();" CHECKED/> Female <br>
        <div class = column>   <b> Age:</b></div> <input name="age" type="text" maxlength= "2" size="6"> <br>
        <div class = column>   <b> Personality type:</b></div> <input name="pers" type="text" size="6" maxlength = 4> (<span id = red> <a href= "http://www.humanmetrics.com/cgi-win/jtypes2.asp">Don't know your type?</a></span>)<br>
        <div class = column>   <b> Favorite OS:</b></div> <select name="os"><option selected = "selected"> Windows <option> Mac OS X <option>Linux </select>  <br>     
        <div class = column>   <b> Seeking age:</b></div> <input name="min_age" type="text" maxlength= "2" size="6" placeholder="min"> to <input name="max_age" type="text" maxlength= "2" size="6" placeholder="max"> <br>

        <input type="submit" value="Sign Up">
</form>
    </fieldset>

 
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