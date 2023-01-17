
<?php  
       include('connection.php');
       include('header.php');  
        ?>   
<body>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Miracle Assignment | PHP CRUD <small>Create, Read, Update and Delete</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
             <div class="col-lg-12">
                <?php
						$fname = $_POST['firstname'];
					    $lname = $_POST['lastname'];
						$mname = $_POST['middlename'];
						$address = $_POST['address'];
						$contct = $_POST['contact'];
						$aboutme = $_POST['about_me'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO student_bio
								(student_id,first_name, last_name, mid_name, adress,contact, about_me)
								VALUES ('Null','".$fname."','".$lname."','".$mname."','".$address."','$contct','".$aboutme."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
						break;		
						}
				?>
                
    	<script type="text/javascript">
            swal({
  title: "Good job!",
  text: "Successfully added!!",
  icon: "success",
  button: "Ok!",
});
			window.location = "list.php";
		</script>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->
    <?php
   include  ('footer.php');
   ?>


