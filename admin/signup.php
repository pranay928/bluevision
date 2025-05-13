<?php
include 'connection.php';
include 'header.php';
?>
 <?php
                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $name = $_POST['name'];
                    $number = $_POST['number'];

                    $sql = "INSERT INTO `signup`(`email`, `name`, `number`, `password`) VALUES ('$email', '$name', '$number', '$pass')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                      echo "signup successfully";
                        
                    } else {
                        echo "<script>alert('Data Not Inserted')</script>";
                    }
                }
               

                ?>
<div class="container">
  <div class="row">
    <!-- sidebar div-->
   

    <!-- main page next to sidebar -->
    <div class="col-lg-10 col-sm-12 col-md-12 main-page main-page-sticky">
        <section id="starter-section" class="starter-section section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Admin Section</h2>
                <p><span>Sign Up Page</span></p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up">
                <div class="container section-title">
                    <p><span>Upload</span> <span class="description-title">Details</span></p>
                </div>
                <form action="" method="post" class="login-form form-control" enctype="multipart/form-data">
                    <label for="heading" class="form-label form-label login-label">Email</label>
                    <input type="text" name="email" class="form-control login-input" required><br />
                    <label for="name" class="form-label form-label login-label">Name</label>
                    <input type="text" name="name" class="form-control login-input" required><br />
                    <label for="number" class="form-label form-label login-label">Number</label>
                    <input type="text" name="number" class="form-control login-input" required><br />
                    <label for="password" class="form-label form-label login-label">Password</label>
                    <input type="text" name="pass" class="form-control login-input" required><br />
                    <input type="submit" name="submit" value="Sign Up" class="btn btn-primary login-btn">
                    <button type="button" name="already" onclick="location.href='login.php'" class="btn btn-primary login-btn">Already have an account?</button>
                </form>               
            </div>
        </section>
    </div><!-- End main page next to sidebar -->
  </div>
</div>
<?php
include 'footer.php';
?>


                 