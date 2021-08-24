<?php
 include ('../config.php');


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="registration.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	
   
<title>Registration</title>
</head>
<body>
    <!--Navbar-->
    <nav class="shadow p-3 mb-5 bg-body rounded navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="../1.LogIn\logIn.html"><img class="UnivLogo " src="Image/univLogo.png" alt="univLogo">
             University of Calcutta</a>
        </div>
      </nav>

    <!--Registration_-->
    <section class="vh-100" >
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-9">
      
              
      
              <div class="card shadow-lg p-3 mb-5 bg-body " >
                <div class="card-title " >
                    <h1 class=" headReg  text-back mb-5 "style="color:white;">Registration</h1>
                   
                </div>
                <form action="../registrationBackend.php" id="signup" method="POST">
                <div class="card-body">
      
                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Full name</h6>
                      
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input type="text" id="name" name="name"  class="form-control form-control-lg" required/><br>
                      <small id="nameMassage"></small>
      
                    </div>
                  </div>
                
                  <hr class="mx-n3">
                  <!---->
                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Date of birth</h6>
      
                    </div>
                    <div class="col-md-4 pe-5  ">
      
                      <input type="date" name="dob" class="form-control form-control-lg" required/>
                      
      
                    </div>
                    <div class="col-md-2 ps-5 ">
      
                        <h6 class="mb-0">Gender</h6>
        
                      </div>
                      <div class="col-md-3 pe-5">
                        <select class="select form-control-md" name="gender"  required>
                            <option value="" >Choose option</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                          </select>
      
                        
        
                      </div> 
                  </div>
                  <hr class="mx-n3">
                  <!---->
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Email address</h6>
      
                    </div>
                    <div class="col-md-5 pe-5">
      
                      <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="example@example.com" required/>
                      <br>
                      <small id="emailMassage"></small>
                    </div>
                    <div class="col-md-4 pe-5">
                      <label for="">Faculty</label>
                      <select name="type" id="" required>
                        <option value="">Type</option>
                        <option value="Faculty">Regular Faculty</option>
                        <option value="Guest">Guest Faculty</option>
                      </select>
                      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
                  <div class="row align-items-center py-3">
                      <h5 class="m-3 mb-5">Select Courses</h5>
                    <div class="col-md-4 ps-5 pb-5">
      
                      <h6 class="mb-0">Course 1</h6>
      
                    </div>
                    <div class="col-md-6 pe-5 pb-5">
                        <select class="select form-control-sm" id="c1" name="course1" required>
                          <option value="">--Select--</option>
                            <?php
                              $sql="SELECT CID,CourseName FROM Course";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                <option value="<?php
                                   echo $row['CID'];
                                ?>"><?php echo $row['CourseName'];?></option>
                              <?php

                            }?>
                            
                            
                        </select>
                      
                    </div>
                    
                    <div class="col-md-4 ps-5 pb-5">
      
                        <h6 class="mb-0">Course 2</h6>
        
                      </div>
                      <div class="col-md-6 pe-5 pb-5">
                          <select class="select form-control-sm" id="c2" name="course2" required>
                          <option value="">--Select--</option>
                          <?php
                              $sql="SELECT CID,CourseName FROM Course";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                <option value="<?php
                                   echo $row['CID'];
                                ?>"><?php echo $row['CourseName'];?></option>
                              <?php

                            }?>
                          </select>
                        
                      </div>

                      <div class="col-md-4 ps-5 pb-5">
      
                        <h6 class="mb-0">Course 3</h6>
        
                      </div>
                      <div class="col-md-6 pe-5 pb-5">
                          <select class="select form-control-sm" id="c3" name="course3"required>
                          <option value="">--Select--</option>
                          <?php
                              $sql="SELECT CID,CourseName FROM Course";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                <option value="<?php
                                   echo $row['CID'];
                                ?>"><?php echo $row['CourseName'];?></option>
                              <?php

                            }?>
                          </select>
                        
                      </div>
                      
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Full address</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <textarea id="address" name="address" class="form-control" rows="3" placeholder="Write your address here"></textarea>
                      <br>
                      <small id="addressMassage"></small>
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Upload CV</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input class="form-control form-control-lg" id="ffile" name="cv" type="file" />
                      <small id="ffileMassage"></small>
                      <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file.</div>
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="d-grid gap-2  justify-content-md-end ">
                    <button type="submit" class="btn btn-primary btn-lg ">Submit</button>
                  </div>
      
                </div>
                </form>
              </div>
      
            </div>
          </div>
        </div>
      </section>
  
    
    <script src="registration.js" charset="UTF-8"></script>
</body>
</html>