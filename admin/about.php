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
           <p><span>About Page</span> <span class="description-title">control</span></p>  
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">About Page</h3>
                </div>
                <div class="card-body">
                  <form action="" method="post" class="form form-control" enctype="multipart/form-data">
                    <label for="heading" class="form-label form-label subheading">Main Heading</label>
                    <input type="text" name="heading" class="form-control" required><br />
                    <label for="hedingdescription" class="form-label form-label subheading">Heading Description</label>
                    <input type="text" name="hedingdes" class="form-control" required><br /> 
                    <label for="point" class="form-label form-label subheading">1st Point</label>
                    <input type="text" name="point1" class="form-control" required><br /> 
                    <label for="pointdescription" class="form-label form-label subheading">Point Description</label>
                    <input type="text" name="pointdescription1" class="form-control" required><br />
                    <label for="point" class="form-label form-label subheading">2nd Point</label>
                    <input type="text" name="point2" class="form-control" required><br />  
                    <label for="pointdescription" class="form-label form-label subheading">Point Description</label>
                    <input type="text" name="pointdescription2" class="form-control" required><br />                   
                    <label for="description" class="form-label form-label subheading">Description</label>
                    <textarea name="description" class="form-control" required></textarea><br />
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    <button type="button" onclick="location.href='../index.php ';" class="btn btn-primary">Main site</button>
                  </form>
                  <?php 
                  if(isset($_POST['submit'])) {
                   $heading =$_POST['heading'];    
                   $headingdes =$_POST['hedingdes'];    
                   $point1 =$_POST['point1'];  
                   $pointdescription1 =$_POST['pointdescription1'];  
                   $point2 =$_POST['point2'];  
                   $pointdescription2 =$_POST['pointdescription2'];  
                   $description =$_POST['description']; 
                  $sql="INSERT INTO `about`(`heading`, `headingdes`, `point1`, `pointdescription1`, `point2`, `pointdescription2`, `description`) VALUES ('$heading', '$headingdes', '$point1', '$pointdescription1', '$point2', '$pointdescription2', '$description')";
                  $result = mysqli_query($conn, $sql);
                  if($result) {                    
                  }
                  else {
                    echo "<script>alert('Data Not Inserted')</script>";
                  }
                  }
                  
                 
                  ?>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

