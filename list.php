<?php   
       include('connection.php');
       include('header.php');
        ?> 
            <div class="container">
             <div class="col-lg-12">
                        <h2 class="pb-4 pt-4">List of Records</h2> 
                        <div class="table-responsive">
                            <table class="table table-bordered table-primary table-hover table-striped shadow">
                                <thead class="bg-light">
                                    <tr class="table-success">
                                        <th scope="col">SN</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">About Me</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM student_bio';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  $c=0;
                        while ($row = mysqli_fetch_assoc($result)) {
                              $c+=1;               
                            echo '<tr>';
                            echo '<th scope="row">'.$c.'</th>';
                            echo '<td>'. $row['first_name']. " ".$row['mid_name']. " ". $row['last_name'].'</td>';
                            echo '<td>'. $row['adress'].'</td>';
                            echo '<td>'. $row['contact'].'</td>';
                            echo '<td>'. $row['about_me'].'</td>';
                            echo '<td class="d-flex">  ';
                            echo ' <a type="button" class="btn btn-warning" href="edit.php?action=edit & id='.$row['student_id'] . '"> EDIT </a>'; 
                            echo '&nbsp <a type="button" class="btn btn-danger " href="del.php?type=people&delete & id=' . $row['student_id'] . '">DELETE </a> 
                            </td>';
                            echo '</tr> ';
                }
            ?>                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

   <?php
   include  ('footer.php');
   ?>
