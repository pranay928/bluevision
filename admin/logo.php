<?php 
session_start();
if(!isset($_SESSION['name'])) {
  header('location:login.php');
}
include 'connection.php'; 
include 'header.php'; 
?>
 
<div class="container">
  <div class="row">
    <!-- sidebar div-->
    <?php include 'sidebar.php'; ?>
    <!-- sidebar div-->

      <!-- main page next to sidebar -->
      <div class="col-lg-10 col-sm-12 col-md-12 main-page main-page-sticky">
         <!-- main page next to sidebar -->
              
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Admin Section</h2>
        <p><span>Logo Image</span> <span class="description-title">control</span></p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up">

    <div class="container section-title" >
       <p><span>upload</span> <span class="description-title">Logo</span></p> </div>
      <form action="" method="post" class="form form-control" enctype="multipart/form-data">
         <input type="file" name="logo" class="form-control" required><br />
         <input type="submit" name="submit" value="Upload" class="btn btn-primary">
         <button type="button" onclick="location.href='../index.php ';" class="btn btn-primary">Main site</button>
      </form>
      </div>
      <?php 
      
      if(isset($_POST['submit'])) {

         $logo = $_FILES['logo']['name'];
         $tempname = $_FILES['logo']['tmp_name'];
         $folder = "../assets/img/logo/" . $logo;
         if ( move_uploaded_file($tempname, $folder)) {
          $sql ="INSERT INTO logo(logo) VALUES ('$logo')"  ;
          $result = mysqli_query($conn, $sql);
      if ($result) {
          "Logo Uploaded Successfully";
         
             } else {

         echo "Database Error: " . mysqli_error($conn);
             
        }
             }
         } 
     

      ?>  
    </section>

      </div>
    </div>
  </div>







<?php include 'footer.php';
?>