<?php
session_start();

?>

<html>

<head>
<title>Rony Riachy CV</title>

<link href="assg2.css" type="text/css" rel="stylesheet">

<script type="text/javascript">

function validation() {
  
   var email = document.getElementById("email").value;
   var message = document.getElementById("message").value;

   if(email.indexOf("@") ==-1){
	alert("Please enter a valid email !");
	}
	else if(message.length < 10){
	alert("Please enter more than 10 characters.");
	}
	else{
	alert("Your message is sent successfully !");
	}
	return false;
}

function show(){

if(document.getElementById("rony1").style.display == "none"){
document.getElementById("rony1").style.display = "inherit";
document.getElementById("rony2").style.display = "inherit";
document.getElementById("rony3").style.display = "inherit";
document.getElementById("rony4").style.display = "inherit";
document.getElementById("rony5").style.display = "inherit";
}
else{
document.getElementById("rony1").style.display = "none";
document.getElementById("rony2").style.display = "none";
document.getElementById("rony3").style.display = "none";
document.getElementById("rony4").style.display = "none";
document.getElementById("rony5").style.display = "none";
}
}

function boula(){

if(document.getElementById("r2").style.display == "none"){
document.getElementById("r1").style.display = "none";
document.getElementById("r2").style.display = "inherit";
document.getElementById("r3").style.display = "none";
}
else{}
}

function rony(){

if(document.getElementById("r1").style.display == "none"){
document.getElementById("r2").style.display = "none";
document.getElementById("r1").style.display = "inherit";
document.getElementById("r3").style.display = "none";
}
else{}
}

function guest(){

if(document.getElementById("r3").style.display == "none"){
document.getElementById("r2").style.display = "none";
document.getElementById("r3").style.display = "inherit";
document.getElementById("r1").style.display = "none";
}
}

</script>




</head>
 
<body>
<div style="width:100%">
<div>
	<img class="im1" src="pic1.jpg" align="left" alt="Rony Riachy Picture"/>
</div>
<div style="text-align:center;">
<br>
	<p><b>Assg.2: CSS, JavaScript, Forms, and PHP</b></p><br>
	<p><i>Brought to you by Rony Riachy</i></p>
</div>
<br>
<br>
<hr>
</div>

<div class="allDiv">
<div class="leftDiv">
<ul>
  <li><a onclick="rony()" href="#home"><i>Home</i></a></li>
  <li><a onclick="boula()" href="#aboutMe"><i>About Me</i></a></li>
  <li><a onclick="show()" href="#courses"><i>Courses</i></a></li>
  <li><a class="pierre1" id="rony1" style="display:none"><i>ENG202</i></a></li>
  <li><a class="pierre1" id="rony2" style="display:none"><i>MTH370</i></a></li>
  <li><a class="pierre1" id="rony3" style="display:none"><i>CSC310</i></a></li>
  <li><a class="pierre1" id="rony4" style="display:none"><i>CSC245</i></a></li>
  <li><a class="pierre1" id="rony5" style="display:none"><i>CSC243</i></a></li>
  <li><a onclick="guest()" href="#guestBook"><i>Guest Book</i></a></li>
</ul>
</div>

<div class="centerDiv">
<p class="pierre2" id="r1"><strong>Welcome to may assignment 2 page.<br /><br /><br /><span style="color:red">HI DOCTOR HARMANANI !!</span><strong><br>

<?php
if(isset($_SESSION['sentence']) && $_SESSION['sentence'] == true)
{
	$username = $_SESSION['username'];
	$message = $_SESSION['message'];

	echo "Error! You,". $username .", have already sent a message which is ".$message.". :D";
}
else
{
	echo "SUCCESSFULLY ADDED !!";
}
?>
</p>

<p style="display:none; padding-top:100px; "id="r2"><br /><br /><br />My name is Rony Riachy and I am 20 years old. My major is computer science and this is my last year. The best course I took, am taking and will take is web programming and I hope to get an A. <3</p>

<form style="display:none;" id="r3"	 class="login" action="login.php" method="POST">
<span style="font-size: 20px">Username:</span><br> <input type="text" style="text-align:center" name="user"><br>
<span style="font-size: 20px">Login Name:</span><br> <input type="text" style="text-align:center" name="loginname"><br>
<span style="font-size: 20px">Email:</span><br> <input type="text" style="text-align:center" name="email"><br>
<span style="font-size: 20px">Message:</span><br> <input type="text" name="comment"></textarea>

<br>
<input onclick="validation()" type="submit" value="Submit" id="submit">

</form>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AdSense -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9077226294608896"
     data-ad-slot="2198267761"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</body>

</html>
