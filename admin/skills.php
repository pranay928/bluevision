<?php 
session_start();
if(!isset($_SESSION['name'])) {
  header('location:login.php');
}
include 'connection.php' ;
include 'header.php';
?>
<div class="container">
  <div class="row">
    <!-- sidebar div-->
   <?php include 'sidebar.php'; ?>

    <!-- main page next to sidebar -->
    <div class="col-lg-10 col-sm-12 col-md-12 main-page main-page-sticky">
        <section id="starter-section" class="starter-section section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Admin Section</h2>
                <p><span>Skills Page</span> <span class="description-title">control</span></p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up">
                <div class="container section-title">
                    <p><span>upload</span> <span class="description-title">Skills</span></p>
                </div>
                <form action="" method="post" class="form form-control" enctype="multipart/form-data">
                   <label for="html" class="form-label form-label subheading">HTML (0-100)</label>
                   <input type="number" name="html" min="0" max="100" class="form-control" required><br />
                   <label for="css" class="form-label form-label subheading">CSS (0-100)</label>
                   <input type="number" name="css" min="0" max="100" class="form-control" required><br />
                   <label for="javascript" class="form-label form-label subheading">JavaScript (0-100)</label>
                   <input type="number" name="javascript" min="0" max="100" class="form-control" required><br />
                   <label for="php" class="form-label form-label subheading">PHP (0-100)</label>
                   <input type="number" name="php" min="0" max="100" class="form-control" required><br />
                   <label for="mysql" class="form-label form-label subheading">MySQL (0-100)</label>
                   <input type="number" name="mysql" min="0" max="100" class="form-control" required><br />
                   <label for="wordpress" class="form-label form-label subheading">wordpress (0-100)</label>   
                   <input type="number" name="wordpress" min="0" max="100" class="form-control" required><br />
                   <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                   <button type="button" onclick="location.href='../index.php ';" class="btn btn-primary">Main site</button>
                </form>

            <?php
            if(isset($_POST['submit'])) {
                $html = $_POST['html'];
                $css = $_POST['css'];
                $javascript = $_POST['javascript'];
                $php = $_POST['php'];
                $mysql = $_POST['mysql'];
                $wordpress = $_POST['wordpress'];

                $sql ="INSERT INTO `skill`(`html`, `css`, `javascript`, `php`, `mysqli`, `wordpress`) VALUES ('$html', '$css', '$javascript', '$php', '$mysql', '$wordpress')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    
                } else {
                    echo "Database Error: " . mysqli_error($conn);
                }
            }
            ?>
            </div>
        </section> 
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>