<!DOCTYPE html>

<?php
session_start();
?>

<?php

	$connt=mysqli_connect("localhost","root","","atik");
	$dynamicmail=$_SESSION['mailtransfer'];
	if(!empty($_SESSION['mailtransfer']))
		$dynamicmail=$_SESSION['mailtransfer'];
	else{
		echo "jaskdfhkjsdfssshhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhsddkddskdskdksdfskfksfsfkhskdjfsjdkfskdf";
			echo"<script language='javascript'>
				setTimeout(function(){
				window.location.href = 'index.php#signup1';
			}, 10);
		
			</script>";
		}
	
	
	$sql="select *from userinfo where mail='$dynamicmail'";
	$res=mysqli_query($connt,$sql);
	$row5=mysqli_fetch_array($res)
?>


<html>
	<head>
	    <title>Bookish</title>
	    <meta charset="utf-8">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
	</head>
	<style type="text/css">
		body{
			background: url("images/home.jpg") no-repeat;
			background-attachment: fixed;
		}
		.container{
			padding: 50px;
		}
		.userInfo{
			width: 30%;
		}
		.wrap{
			padding: 20px;
			border-radius: 5%;
			margin: 20px;
			border: 5px solid green;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			background-color: white;
		}
		
		.otherPost .wrap
		{
			padding: 15px;
			border-radius: 5%;
			margin: 10px;
			border: 5px solid green;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			background-color: white;
			width:600px;
			float:right;
		}
		
		.userImg{
			display: block;
			height: 200px;
			width: 200px;
			border-radius: 50%;
			margin: 0 auto;
		}

		h3{
			text-align: center;
			text-transform: uppercase; 
			font-weight: 700;
		}

		p{
			display: inline-block;
		}
		i{
			color: green;
			padding-left: 20px;
		}
		.work{
			margin-top: 20px;
		}
		.interestTag{
			border: 2px solid green;
			padding: 5px;
		}

		button{
			display: block;
			margin:0 auto;
			background-color: white; 
	    	color: black; 
	    	border: 2px solid #4CAF50;
			font-size: 16px;
		    padding: 16px 32px;
		    text-align: center;
		    text-decoration: none;
			transition-duration: 0.4s;
			cursor: pointer;
			font-weight: 700;

		}
		button:hover {
	    background-color: #4CAF50;
	    color: white;
	    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
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
			padding-top: 10px;
			overflow: auto;
		}	

		.modal-content {
			background-color: #fefefe;
			margin: 5% auto 15% auto; 
			border: 1px solid #888;
			width: 80%; 
			padding: 30px;
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
		input[type=text], input[type=file], input[type=number] , textarea {
	    width: 100%;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
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
	.wow{
		overflow:scroll;
		width:600px;
	}
	
	.userInfo  .wrap img{
		
		height:200px;
		width:180px;
	}

	.contentat
	{
		background:#888888;
		height:90px;
		width:100%;
	}
	.contentat2
	{
		background:#666666;
		height:300px;
		width:100%;
	}
	.subcontentat2
	{
		width:90%;
	}
	.lastin
	{
		height:100px;
		width:100%;
	}
	
	#ooot
	{
		border:none;
		padding:10px 15px;
		background:#f0f0f0;
		border-radius:5px 0px 0px 5px;
	}
	.srrrrrt:hover
	{
		background:powderblue;
		border-radius:0px 5px 5px 0px;
	}
	
	</style>
	<body>
		
		
		<div class="container">
		<?php
		
		echo '<div class="lastin">
		
				<a id="log" style="float:right; border:none;border-radius:5px;displayblock:padding:5px;" href="index.php"><input type="button" value="logout" /></a>
				<a id="log" style="float:right; border:none;border-radius:5px;" href="userinterface.php"><input type="button" value="All Books" /></a>
				<form action="userinterface.php" method="post">
					<select name="optiont" id="ooot">
						<option value="">Search By Book Type</option>
						<option value="COMEDY">COMEDY</option>
						<option value="DRAMA">DRAMA</option>
						<option value="TEXT BOOK">TEXT BOOK</option>
						<option value="ROMANCE">ROMANCE</option>
						<option value="TRAGEDY">TRAGEDY</option>
						<option value="TRAGICOMEDY">TRAGICOMEDY</option>
						<option value="MYTHOLOGY">MYTHOLOGY</option>
						<option value="LITERARY REALISM">LITERARY REALISM</option>
						<option value="FANTASY">FANTASY</option>
						<option value="HORROR FICTION">HORROR FICTION</option>
				
					</select>
					<input class="srrrrrt" type="submit" value="Search" name="srch" style="border-radius:0px 5px 5px 0px;padding:9.3px; background:#f0f0f0f;border:none;margin-left:-20px;"/>
				</form>
		</div>';
			echo '<nav>
				<a href="settings.php"><i class="fa fa-3x fa-cog" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-3x fa-envelope" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-3x fa-bell-o" aria-hidden="true"></i></a>
			</nav>
			<div class="userInfo" style="float: left;">
				<div class="wrap">
					<h3 style="">'.$row5["name"].'</h3>
					<img class="userImg" src="userimage/'.$row5["image"].'">
					<div class="work">
						<i class="fa fa-suitcase" aria-hidden="true"></i>
						<p>'.$row5["workplace"].'</p>
					</div>
					<div class="birthday">
						<p style="color:green; font-size:12px;">User '.$row5['address'].'</p>
					</div>
					
				</div>
				<div class="wrap">
					<h3>INTERESTS</h3>
					<p class="interestTag">Dummy </p>				
					<p class="interestTag">Dummy</p>				
					<p class="interestTag">Dummy</p>				
					<p class="interestTag">Dummy</p>
				</div>
			</div>
		
			<div class="postSection" style="float: right; width: 65%;">
				<div class="statusPost">
					<h3 style="color: white;">Post a status ...</h3>';?>
			
		<button class="postButton" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil" aria-hidden="true"></i> POST</button>
		
<?php

$connt=mysqli_connect("localhost","root","","atik");
$sql="select *from userpost order by sln desc";
$res=mysqli_query($connt,$sql);
$flag1=0;
$flag2=2;
$flagatik=99;

if(isset($_POST['srch']))
{
	$flagatik=99099;
	$flag1=0;	
}
else
{
	$flagatik=3;
}
if($flag1==0){
while($row=mysqli_fetch_array($res))
{
	$mssg=$row['message'];
	$img=$row['image'];
	$price=$row['price'];
	$type=$row['booktype'];
	
	$xchange=$row['exchange'];
	
	$sell=$row['sell'];
	
	$mail=$row['usermail'];
	
	$sql23="select *from userinfo where mail='$mail'";
	$res23=mysqli_query($connt,$sql23);
	$row6=mysqli_fetch_array($res23);
	
	
?>
			
<?php
	
	$jim=99;
	if(isset($_POST['optiont']))
	{
		$jim=9999;
	}
			if($flagatik==99099 && $type==$_POST['optiont'] || $jim==99){
			echo '</div>
				<div class="otherPost">
					<div class="wrap">
						<div class="contentat">
							<img class="userIm" style="height:90px;width:90px;border-radius:50%;align:left;float:left;" src="userimage/'.$row6["image"].'"><br />\
							<span style="color:aqua;font-style:italic;font-size:18px;" >'.$row6["name"].'</span><br />
							<span style="color:aqua;font-style:italic;font-size:18px;" >'.$row6["mail"].'</span>
						</div>
						<div class="contentat2">
							<div class="subcontentat2"><span  style="color:white;width:10%;overflow:hidden;">'.$mssg.'</span></div><br />
							<img style="height:120px;width:120px;border-radius:10%; margin-bottom:3px;display:block;" src="bookimage/'.$img.'">
							<p style="color:white;font-size:10px;">Book type: </p><p style="color:aqua; margin-right:10px;">'.$type.'</p>
							<p style="color:white;font-size:10px;">Price: </p><p style="color:aqua; margin-right:10px;"> '.$price.'</p><br />';
								if($xchange!=''){
							echo'<p style="color:white;font-size:15px;">Exchange with: </p><p style="color:aqua; margin-right:10px;"> '. $xchange.'</p><br />';
								}
								if($sell!=''){
							echo'<p style="color:white;font-size:10px;"> --  </p><p style="color:aqua; margin-right:10px;"> FOR SELL --</p><br />';
								}
						echo'</div>
					</div>
				</div>
			</div>';
?>
			
<?php } }}?>
			
			<div id="id01" class="modal">

				<form class="modal-content animate" action="userinterface.php" method="post" enctype="multipart/form-data">
					  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					<div class="postModal">
						<label><b>Book Name</b></label>
						<input type="text" placeholder="Enter book name" name="bname" required>

						<label><b>Book photos</b></label>
					    <input type="file" name="image" id="pic"><br>

					    <label><b>Book type</b></label>
					    <input type="radio" name="type1" value="COMEDY"> COMEDY
					    <input type="radio" name="type1" value="DRAMA"> DRAMA
					    <input type="radio" name="type1" value="HORROR FICTION"> HORROR FICTION
					    <input type="radio" name="type1" value="LITERARY REALISM"> LITERARY REALISM
					    <input type="radio" name="type1" value="TEXT BOOK"> TEXT BOOK
						
					   <input type="radio" name="type1" value="SATIRE"> SATIRE
					    <input type="radio" name="type1" value="TRAGEDY"> TRAGEDY
					    <input type="radio" name="type1" value="TRAGICOMEDY"> TRAGICOMEDY
					    <input type="radio" name="type1" value="FANTASY"> FANTASY
					    <input type="radio" name="type1" value="MYTHOLOGY"> MYTHOLOGY
						
					    <br><br>

					    <label><b>Price</b></label>
					    <input type="number" placeholder="Enter book price" name="bprice" required>

					    <label><b>For</b></label>
					    <input type="checkbox" name="type3" value="exchange" onclick="myFunction()"> Exchange
					    <input type="checkbox" name="type45" value="booksell"> Sell
					    <div id="exchangeOpt" style="display: none;">
						    <input type="radio" name="type2" value="COMEDY"> COMEDY
						    <input type="radio" name="type2" value="DRAMA"> DRAMA
						    <input type="radio" name="type2" value="HORROR FICTION"> HORROR FICTION
						    <input type="radio" name="type2" value="LITERARY REALISM"> LITERARY REALISM
						    <input type="radio" name="type2" value="ROMANCE"> ROMANCE
						    <!-- <input type="checkbox" name="type6" value="book"> SATIRE -->
						    <!-- <input type="checkbox" name="type7" value="book"> TRAGEDY -->
						    <!-- <input type="checkbox" name="type8" value="book"> TRAGICOMEDY -->
						    <!-- <input type="checkbox" name="type9" value="book"> FANTASY -->
						    <!-- <input type="checkbox" name="type10" value="book"> MYTHOLOGY -->
						    </div>

					    <br><br>

					    <label for="subject">Your Message</label>
						<textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>				    


						<button class="submitbtn" type="submit" name="posthere">POST</button>
						<button class="submitbtn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</div>


		</div>
	</body>
    <script>
		var modal = document.getElementById('id01');
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
		function myFunction() {
		    var x = document.getElementById("exchangeOpt");
		    if (x.style.display === "none") {
		        x.style.display = "block";
		    } else {
		        x.style.display = "none";
		    }
		}
	</script>
</html>

<?php
	
	$connt=mysqli_connect("localhost","root","","atik");

	if(isset($_POST['posthere']))
	{
		$target="bookimage/".basename($_FILES['image']['name']);
		$bname=$_POST['bname'];
		$btype=$_POST['type1'];
		$bex=$_POST['type3'];
		$ex=$_POST['type2'];
		$sell=$_POST['type45'];
		$message=$_POST['message'];
		$price=$_POST['bprice'];
		$img=$_FILES['image']['name'];
		
		$sql="select *from userpost";
		$res=mysqli_query($connt,$sql);
		$total=mysqli_num_rows($res);
		$sl=$total+1;
		
		
		if(isset($_SESSION['mailtransfer'])&&!empty($_SESSION['mailtransfer']))
		{
		$dynamicmail=$_SESSION['mailtransfer'];
		
		$sql="insert into userpost values('$sl','$bname','$btype','$bex','$img','$sell','$message','$price','$dynamicmail','$ex')";
		$result=mysqli_query($connt,$sql);
		
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
			{
				echo '';
				echo"<script language='javascript'>
				setTimeout(function(){
       window.location.href = 'userinterface.php';
    }, 10);
		
			</script>";
			}
	}
	
	else{
		echo "jaskdfhkjsdfssshhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhsddkddskdskdksdfskfksfsfkhskdjfsjdkfskdf";
			echo"<script language='javascript'>
				setTimeout(function(){
				window.location.href = 'index.php';
			}, 10);
		
			</script>";
		}
	
	

	}




?>



