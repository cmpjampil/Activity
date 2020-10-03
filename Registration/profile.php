

<!DOCTYPE html>
<html>
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pro.css">
</head>
<body>
	<h1>Profile Page</h1>
 
<div class="card-container">
    
    <img src="user.png" alt="user"/>
    <p>
    <?php


	$first = $_POST['firstname'];
	$last = $_POST['lastname'];
	$email= $_POST['email'];
	$day = $_POST['day'];
	$mon = $_POST['Birthday'];
	$year = $_POST['year'];
	$sex= $_POST['gender'];
	$password= $_POST['password'];
	$repassword = $_POST['repassword'];
	

	if ( isset($_POST['submit'])){
		if ($password == $repassword){
		echo "First Name: ";
		echo $first;
		echo "<br>";
		echo "Last Name: ";
		echo $last;
		echo "<br>";
		echo "Email: ";
		echo $email;
		echo "<br>";
		echo "Birthday: ";
		echo $mon;
		echo " ";
		echo $day;
		echo ", ";
		echo $year;
		echo "<br>";
		echo "Sex: ";
		echo $sex;
		}
		else {
        	echo '<script>
   			 alert("Password Mismatch");
   			 </script>';
        
       		 echo '<script>
          	  window.history.go(-1);
            	</script>';
           }
	
		
	}		

?>
</p>
    
</div>


</body>
</html>