
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'people':
					$query = 'DELETE FROM student_bio
							WHERE
							student_id = ' . $_GET['id'];
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
			//break;
				}
			}
			?>

<?php
   include  ('footer.php');
   ?>
