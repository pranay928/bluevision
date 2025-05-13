<?php 
session_start();
include 'connection.php';
include 'header.php';
?>
<?php 
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM signup WHERE name='$name' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if($count == 1) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['pass'] = $row['pass'];
        header('location:about.php');
    } else {
        echo "<script>alert('Invalid Username or Password')</script>";
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
                <p><span>Log In Page</span></p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up">
                <div class="container section-title">
                    <p><span>Login</span> <span class="description-title">Details</span></p>
                </div>
                <form action="" method="post" class="login-form form-control" enctype="multipart/form-data">
                   <label for="name" class="form-label form-label login-label">Username</label>
                    <input type="text" name="name" class="form-control login-input" placeholder="Enter Username Here..." required><br />                   
                    <label for="password" class="form-label form-label login-label">Password</label>
                    <input type="text" name="pass" class="form-control login-input" placeholder="Enter Password Here..." required><br />
                    <input type="submit" name="submit" value="Log in" class="btn btn-primary login-btn">
                    <button type="button" onclick="location.href='signup.php'" class="btn btn-primary login-btn">Don't have an account?</button>
                </form>               
            </div>
        </section>
    </div><!-- End main page next to sidebar -->
  </div>
</div>
<?php
include 'footer.php';
?>


                 