<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<?php
			$studentid = $_POST['id'];
			$fname = $_POST['firstname'];
		    $lname = $_POST['lastname'];
			$mname = $_POST['middlename'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];
			$aboutme = $_POST['about_me'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE student_bio set first_name ="'.$fname.'",
					last_name ="'.$lname.'", mid_name="'.$mname.'",
					adress="'.$address.'",contact='.$contact.', 
					about_me="'.$aboutme.'" WHERE
					student_id ="'.$studentid.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));		
?>	
<script type="text/javascript">
            swal({
  title: "Good job!",
  text: "Record Updated Successfully!",
  icon: "success",
  button: "Ok!",
});
window.location = "list.php";
		</script>
<?php
   include  ('footer.php');
   ?>
