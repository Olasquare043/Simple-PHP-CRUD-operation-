<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<?php 
$query = 'SELECT * FROM student_bio
              WHERE
              student_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $studentid= $row['student_id'];
                $fname= $row['first_name'];
                $lname=$row['last_name'];
                $midname=$row['mid_name'];
                $address=$row['adress'];
                $contact=$row['contact'];
                $aboutme=$row['about_me'];
             
              }
              
              $id = $_GET['id'];
         
?>
 <center>
        <div class="col-lg-10 pb-5 pt-3">
            <form role="form" method="post" action="edit1.php">
               <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $studentid; ?>" />
                </div>
                <!--Section: Content-->
                <h4 class="pt-4 pb-4 text-center"><strong>Edit Records</strong></h4>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="firstname"  value="<?php echo $fname; ?>"/>
                                    <label class="form-label" for="form3Example1">First name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" name="lastname" value="<?php echo $lname; ?>"/>
                                    <label class="form-label" for="form3Example2">Last name</label>
                                </div>
                            </div>
                        </div>

                        <!-- Lastname and contact-->

                        <div class="row mb-4">

                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" name="middlename" value="<?php echo $midname; ?>"/>
                                    <label class="form-label" for="form3Example2">Middle name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="contact" value="<?php echo $contact; ?>"/>
                                    <label class="form-label" for="form3Example1">Contact</label>
                                </div>
                            </div>
                        </div> <!-- Address input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="form-control" name="address"value="<?php echo $address; ?>" />
                            <label class="form-label" for="form3Example3">Address</label>
                        </div>
                        <!-- About input -->
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="about_me" value="<?php echo $aboutme; ?>"></input>
                            <label class="form-label" for="form3Example4">About Me</label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                            Update Record
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </center> 
</div>

    <?php
   include  ('footer.php');
   ?>
