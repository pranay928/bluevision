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

    <!-- main page next to sidebar -->
    <div class="col-lg-10 col-sm-12 col-md-12 main-page main-page-sticky">
      <section id="starter-section" class="starter-section section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Admin Section</h2>
          <p><span>Hero Page</span> <span class="description-title">control</span></p>
        </div>

        <div class="container" data-aos="fade-up">
          <div class="container section-title">
            <p><span>upload</span> <span class="description-title">hero heading</span></p>
          </div>

          <form action="" method="post" class="form form-control" enctype="multipart/form-data">
            <label for="heading" class="form-label form-label subheading">Main Heading</label>
            <input type="text" name="heading" class="form-control" required><br />
            <label for="subheading" class="form-label form-label subheading">Sub Heading</label>
            <input type="text" name="subheading" class="form-control" required><br />
                      
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <button type="button" onclick="location.href='../index.php ';" class="btn btn-primary">Main site</button>
          </form>
        </div>

        <?php 
        if(isset($_POST['submit'])) {
          $heading = $_POST['heading'];
          $subheading = $_POST['subheading'];         
          $sql ="INSERT INTO `hero`(`heading`, `subheading`) VALUES ('$heading', '$subheading')";
          $result = mysqli_query($conn,$sql);
          if ($result) {
              echo "Hero Heading Uploaded Successfully";
          } else {
              echo "Database Error: " . mysqli_error($conn);
          }
        }   
        ?>  
      </section>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
