<?php
       include('connection.php');
       include('header.php');
        ?>
<div class="container-fluid">
    <center>
        <div class=" col-lg-10">
            <form role="form" method="post" action="transac.php?action=add">
                <!--Section: Content-->
                <h4 class="pt-5 text-center"><strong>Add new Records</strong></h4>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="firstname" />
                                    <label class="form-label" for="form3Example1">First name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" name="lastname" />
                                    <label class="form-label" for="form3Example2">Last name</label>
                                </div>
                            </div>
                        </div>

                        <!-- Lastname and contact-->

                        <div class="row mb-4">

                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" name="middlename" />
                                    <label class="form-label" for="form3Example2">Middle name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="contact" />
                                    <label class="form-label" for="form3Example1">Contact</label>
                                </div>
                            </div>
                        </div> <!-- Address input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="form-control" name="address" />
                            <label class="form-label" for="form3Example3">Address</label>
                        </div>
                        <!-- About input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" rows="3" name="about_me"></textarea>
                            <label class="form-label" for="form3Example4">About Me</label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                            Save Record
                        </button>
                        <button type="reset" class="btn btn-warning btn-block mb-4">Clear Entry</button>
                    </div>
                </div>
            </form>
        </div>
    </center> 
</div>

<?php
    include  ('footer.php');
   ?>