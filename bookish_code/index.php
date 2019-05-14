<!DOCTYPE html>

<?php

session_start();


?>



<html>
<head>
    <title>Bookish</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styleatic.css" media="all" />
	
	<script src="sweetalert2/sweetalert2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="sweetalert2/sweetalert2.css">
	
</head>

<style type="text/css">
	body{
		font-family: sans-serif;
	}
	.blur{
	background-color: #0D1019;
	opacity: 0.85;
	}
	h1 { 
		color: #111; 
		font-family: 'Helvetica Neue', sans-serif; 
		font-size: 50px; 
		font-weight: bold; 
		letter-spacing: -1px; 
		line-height: 1; 
		text-align: center; 
	}
	header{
	background: url("images/home.jpg") no-repeat;
	color: #ffffff;
	}
	.navbar .active a{
		background: transparent !important;
	}
	.navbar-default{
		background-color: #0D1019;
		opacity: 0.85;
		border: none;
		border-bottom: 1px solid #4C505E;
	}
	.navbar-brand{
		color: #ffffff  !important;
	}
	.navbar-nav li a{
		color: #ffffff !important;
	}
	.open a{
		background-color: #0D1019;
		opacity: 0.85;
	}
	.nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
		background-color: #0D1019 !important;
		opacity: 0.85;
	}
	.dropdown-menu li a:hover{
		background: #fff;
		color: black !important;
		transition: .5s;
	}
	.loginButton {
		padding: 15px 0;
		background-color: transparent;
		border: none;
		font-size: 14px;
	}
	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
		position: relative;
	}

	img.avatar {
		width: 20%;
		border-radius: 50%;
	}

	span.psw {
		float: right;
		padding-top: 16px;
	}
	.modal {
	    display: none; 
	    position: fixed; 
	    z-index: 1; 
	    left: 0;
	    top: 0;
	    width: 100%; 
	    height: 100%; 
	    background-color: white;
	    background-color: rgb(0,0,0);
	    background-color: rgba(0,0,0,0.4); 
	    padding-top: 60px;
	}	

	.modal-content {
	    background-color: #fefefe;
	    margin: 5% auto 15% auto; 
	    border: 1px solid #888;
	    width: 80%; 
	}
	.loginModal{
		padding: 30px;
	}


	.close {
	    position: absolute;
	    right: 25px;
	    top: 0;
	    color: #000;
	    font-size: 35px;
	    font-weight: bold;
	}

	.close:hover,
	.close:focus {
	    color: red;
	    cursor: pointer;
	}
	.animate {
	    -webkit-animation: animatezoom 0.6s;
	    animation: animatezoom 0.6s
	}

	button:focus{
		outline: 0;
	}
	.banner{
		text-align: center;
		padding: 290px;
	}	
	.banner h1{
		color: #fff;
	}

	.aboutSection{
		text-align: center; 
		padding: 100px;
		font-weight: 700;
		background: #E7B91B;
	}
	.signSection{
		padding: 50px;
	}
	.contactSection{
		padding: 50px;
	}

	input[type=text], input[type=password], textarea {
	    width: 100%;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
	}

	.submitbtn {
		color: white;
	    padding: 14px 20px;
	    background-color: black;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 20%;
	    font-weight: 700;
	}
	footer{
		padding: 50px;
		background-color: black;
		color: #fff;
		text-align: center;
	}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<header id="section1">
        <nav class="navbar navbar-fixed-top navbar-default" >
          <div class="container">
            <div class="navbar-header">
              <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">BOOKISH</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">HOME</a></li>
					<li><a href="#section2">ABOUT</a></li>
					<li><a href="#section3">CONTACT</a></li>
					<li>
						<button class="loginButton" onclick="document.getElementById('id01').style.display='block'" >LOGIN</button>
					</li>

					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" onclick="document.getElementById('id02').style.display='block'" >SEARCH HERE<span class="caret"></span></a>
					</li>
				</ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="banner blur update">
          <div class="banner-content">
            <h1>BOOKISH</h1>
            <a href="#signup1"><button class="btn btn-lg btn-default" type="submit">GET AN ACCOUNT</button></a>
          </div>
        </div>
    </header>
	<div id="id01" class="modal">
		  
		  <form class="modal-content animate" action="index.php" method="post">
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
		    </div>

		    <div class="loginModal">
		      <label><b>Enter Your Email</b></label>
		      <input type="text" placeholder="Enter User email" name="uname" required>

		      <label><b>Password</b></label>
		      <input type="password" placeholder="Enter Password" name="lpass" required>
		        
		      <button class="submitbtn" type="submit" name="loggggin">Login</button>
		      <button class="submitbtn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		    </div>
		</form>
	</div>
	<div id="id02" class="modal">
		<form class="modal-content animate" action="/action_page.php">
			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		    <div class="loginModal">
		      <label><b>Search by username</b></label>
		      <input type="text" placeholder="Enter Username" name="uname" required>
		      <p><b>OR</b></p>
		      <label><b>Search by catagory</b></label>
		      		<div style="border: 1px solid #ddd7d7; padding: 10px;">
	      			<input type="checkbox" name="type1" value="book"> COMEDY
				    <input type="checkbox" name="type1" value="book"> DRAMA
				    <input type="checkbox" name="type1" value="book"> HORROR FICTION
				    <input type="checkbox" name="type1" value="book"> LITERARY REALISM
				    <input type="checkbox" name="type1" value="book"> ROMANCE
				    <input type="checkbox" name="type1" value="book"> SATIRE
				    <input type="checkbox" name="type1" value="book"> TRAGEDY
				    <input type="checkbox" name="type1" value="book"> TRAGICOMEDY
				    <input type="checkbox" name="type1" value="book"> FANTASY
				    <input type="checkbox" name="type1" value="book"> MYTHOLOGY
				    </div>
		        
		      <button class="submitbtn" type="submit">SEARCH</button>
		      <button class="submitbtn" type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
		    </div>			
		</form>
	</div>
	<div id="section2" class="aboutSection" >
		  <div class="container">
			<h1 >ABOUT US</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irurncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptatencididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			<br />
			<br />
			<br />
			consequat. Duis aute irure dolor in reprehenderit in voluptatencididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.
Duis aute irure dolor in reprehenderit in voluptatencididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoDuis aute irure dolor in reprehenderit in voluptatencididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			<br />
			<br />
			<br />
			<br />
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoDuis aute irure dolor in reprehenderit in voluptatencididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoDuis aute irure dolor in reprehenderit in voluptatencididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip
			ex ea commodo
			<br />
			<br />
			<br />
			consequat. Duis aute irure dolor in reprehenderit in voluptatee dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
    </div>
    <div class="signSection" id="signup1">
    	<h1>SIGN UP HERE</h1>
		<form action="index.php" method="post" enctype="multipart/form-data">
			<div class="container">
			<label><b>Full Name</b></label>
			<input type="text" placeholder="Enter full Name" name="name" required>
			
			<label><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="mail" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="pass1" required>

			<label><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="pass2" required>
			<label><b>User image</b></label>
			<input type="file" name="image" required />
			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

			<div class="clearfix">
			<button type="submit" class="submitbtn" name="signupinformation">Sign Up</button>
			</div>
			</div>
		</form>
    </div>

    <div id="section3" class="contactSection">
		<div class="container">
			<h1>CONTACT US</h1>
			<form action="/action_page.php">
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name..">

			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name..">

			<label for="subject">Your Message</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

			<button type="submit" class="submitbtn">Submit</button>
			</form>
		</div>
    </div>
    <footer>
    	<p>all rights reserved © 2017 </p>
    </footer>

</body>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>

		var modal = document.getElementById('id01');

		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}

		var modal = document.getElementById('id02');

		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>
</html>

<?php

	$connt=mysqli_connect("localhost","root","","atik");
	
	if(isset($_POST['signupinformation']))
	{
		$target="userimage/".basename($_FILES['image']['name']);
		$name=$_POST['name'];
		$email=$_POST['mail'];
		
		
		$_SESSION['mailtransfer']=$email;
		
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		$img=$_FILES['image']['name'];
		if($pass1!=$pass2)
		{
			echo"<script language='javascript'>
		
				swal(
					'sorry!!',
					'password is not matched',
					'error'
				)
				setTimeout(function(){
       window.location.href = '#signup1';
    }, 1000);
		
			</script>";
		}
		else
		{
			$sql="select *from userinfo";
			$res=mysqli_query($connt,$sql);
			$total=mysqli_num_rows($res);
			$sl=$total+1;
			
			$sql="insert into userinfo values('$sl','$name','$email','$pass1','$pass2','$img')";
			$result=mysqli_query($connt,$sql);
			if($result){
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
				{
					echo '';
				}
				
				echo"<script language='javascript'>
		
				swal(
					'wow!!',
					'You Have successfully registrated',
					'success'
				)
				setTimeout(function(){
       window.location.href = 'userinterface.php';
    }, 2000);
		
			</script>";
			
			}
			else
			{
				echo "<script language='javascript'>
				
				swal('Mail id is already taken')
				
				
				
				setTimeout(function(){
       window.location.href = '#signup1';
    }, 1000);
				
				</script>";
				
			}
		}
		
	}

?>
<?php

$connt=mysqli_connect("localhost","root","","atik");




	if(isset($_POST['loggggin']))
	{
		$user=$_POST['uname'];
		$pass=$_POST['lpass'];
		
		
		$_SESSION['mailtransfer']=$user;
		$sql="select *from userinfo";
		$res=mysqli_query($connt,$sql);
		$total=mysqli_num_rows($res);
		
		$flag=2;
		
		for($i=1;$i<=$total;$i++)
		{
			$sql="select *from userinfo where sl='$i'";
			$res=mysqli_query($connt,$sql);
			$row=mysqli_fetch_array($res);
			$nmail=$row['mail'];
			$npass=$row['pass1'];
			if($nmail==$user&&$pass==$npass)
			{
				$flag=5;
				break;
			}
		}
		if($flag==5)
		{
			echo"<script language='javascript'>
				setTimeout(function(){
       window.location.href = 'userinterface.php';
    }, 10);
		
			</script>";
		}
		else
		{
			echo"<script language='javascript'>
		
				swal(
					'sorry!!',
					'wrong user name and password',
					'error'
				)
				setTimeout(function(){
       window.location.href = '#id01';
    }, 8000);
		
			</script>";
		}
		
	}
		


?>