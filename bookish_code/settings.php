<!DOCTYPE html>

<?php
session_start();
?>
<?php
$connt=mysqli_connect("localhost","root","","atik");
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
	$res=mysqli_query($connt, $sql);
	$rowdetails=mysqli_fetch_array($res);
	

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
			background: url(images/settingsbg.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		.container{
			padding: 50px;
			padding-top: 20px;
		}
		.wrap{
			padding: 20px;
			margin: 20px;
			border: 5px solid green;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			background-color: white;
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
		input[type=text], input[type=password], textarea {
	    width: 100%;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
	}
		.modal-content{
			border: none;
			box-shadow: none;
		}
		i{
		color: green;
		padding-left: 20px;
		}
</style>
<body>


	<div class="container">
		<nav>
			<a href="index.php"><i class="fa fa-3x fa-home" aria-hidden="true"></i></a>
			<a href=""><i class="fa fa-3x fa-cog" aria-hidden="true"></i></a>
			<a href=""><i class="fa fa-3x fa-envelope" aria-hidden="true"></i></a>
			<a href=""><i class="fa fa-3x fa-bell-o" aria-hidden="true"></i></a>
		</nav>

		<div class="settingEdit">
			<div class="wrap" style="margin: 0 auto; width: 18%;">
			<?php 
				echo '<h4 style="font-weight: 700">'.$rowdetails['name'].'</h4>';
				
					
					echo '<img class="userImg" src="userimage/'.$rowdetails["image"].'" style="height: 150px; width: 150px; box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);">';
				?>
				
			</div>
			<div class="wrap">
				<form class="modal-content animate" action="settings.php" method="post" enctype="multipart/form-data">
						<label><b>Change Name</b></label>
						<input type="text" placeholder="Enter new name" name="name" value="<?php echo $rowdetails['name']; ?>" >

						<label><b>Change Image</b></label>
					    <input type="file" name="image" id="pic" value="<?php echo $rowdetails["image"];?>" /><br>

					    
					    <label><b>Change Address</b></label>
						<input type="text" placeholder="Enter address"  name="address" value="<?php echo $rowdetails['address'];?>" >

						<label><b>Change Work</b></label>
						<input type="text" placeholder="Enter work" name="workplace" value="<?php echo $rowdetails['workplace'];?>" />

						
			
						
						<label><b>Change password</b></label>
						<input type="password" placeholder="Enter new password" name="pword" value="<?php echo $rowdetails['pass1'];?>" />

						

						<button class="submitbtn">Deactivate account</button>

						<input class="submitbtn" type="submit" name="UpdataNow" style="float: right; background-color: green" value="Save Change"/>

				</form>
			</div>	
		</div>


	</div>
<script type="text/javascript">
			var modal = document.getElementById('pword');

		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
</script>
</body>
</html>

<?php
	$connt=mysqli_connect("localhost","root","","atik");
	$dynamicmail=$_SESSION['mailtransfer'];
	if(isset($_POST['UpdataNow']))
	{
		$target="userimage/".basename($_FILES['image']['name']);
		$name=$_POST['name'];
		$changepass=$_POST['pword'];
		$address=$_POST['address'];
		$workplace=$_POST['workplace'];
		if($_FILES['image']['name'])
			$img=$_FILES['image']['name'];
		else
			$img=$rowdetails["image"];
			
		
		$sql="update userinfo set name='$name' , workplace='$workplace' , address='$address' , image='$img' , pass1='$changepass' , pass2='$changepass' where mail='$dynamicmail'";
		
		$result=mysqli_query($connt, $sql);
		if($result){
			echo '<script type="text/javascript">
		
			alert("Ok UPdated Your Profile");
		
		</script>';
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
				{
					echo '';
				}
	
		}
		else{
			
			echo '<script type="text/javascript">
				
				alert("Sorry Your Profile is not uupdated");
			
			</script>';
			
		}
	}




?>














