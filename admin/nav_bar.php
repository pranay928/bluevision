  <?php 
  session_start();
  if(!isset($_SESSION['name'])) {
    header('location:login.php');
  }
include 'connection.php'; 
include 'header.php';

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $link = $_POST['link'];
    $status = 0;

    $sql = "INSERT INTO `navbar` (`title`, `link`,`status`) VALUES ('$title', '$link', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if(isset($_POST['update'])) {
    $title = $_POST['title'];
    $link = $_POST['link'];
    $id = $_GET['id'];

    $sql = "UPDATE `navbar` SET `title`='$title',`link`='$link' WHERE `id`=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<div class="container">
  <div class="row">
    <?php include 'sidebar.php'; ?>

    <div class="col-lg-10 col-sm-12 col-md-12 main-page main-page-sticky">
      <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Admin Section</h2>
        <p><span>Navbar </span> <span class="description-title">control</span></p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up">
    <?php if(isset($_GET['update'])) { 
      $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM navbar WHERE id = $id");
    $row = $result->fetch_assoc();
?>
      <form action="" method="post" class="form form-control">
        <input class="form-control mb-2" type="text" name="title" value="<?php echo $row['title']?>" >
        <input class="form-control mb-2" type="text" name="link" value="<?php echo $row['link']?>" >
        <button class="btn btn-primary mb-2" type="submit" name="update">Update</button>
      </form>
      </div> 
      <?php } else { ?>
      <div class="container" data-aos="fade-up">
  
      <form action="" method="post" class="form form-control">
        <input class="form-control mb-2" type="text" name="title" placeholder="Title" >
        <input class="form-control mb-2" type="text" name="link" placeholder="Link" >
        <button class="btn btn-primary mb-2" type="submit" name="submit">Submit</button>
        <button type="button" onclick="location.href='../index.php ';" class="btn btn-primary">Main site</button>
      </form>
      </div> 
      <?php } ?>
      

    </section>
    <section id="starter-section" class="starter-section section">
       <?php
       $sql = "SELECT * FROM `navbar`";
       $result = $conn->query($sql);
       ?><table class=" table table-bordered table-striped table-hover">
        <tr class="table-primary">
          <th>Title</th>
          <th>Link</th>
          <th>Status</th>
          <th>Delete</th>
          <th>Update</th>
          <th>Date</th>
        </tr>
        <?php  
       while($row = $result->fetch_assoc()) {
        ?>
        <tr class="table-light">
          <td ><?php echo $row['title']?></td>
          <td><?php echo $row['link']?></td>
          <td><?php echo $row['status']?></td>
          <td><a href="?delete&id=<?php echo $row['id']?>">Delete</a></td>
          <td><a href="?update&id=<?php echo $row['id']?>">Update</a></td>
          <td><?php echo $row['date']?></td>
        </tr>
        <?php } ?>
      </table>
      <?php
       if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `navbar` WHERE `navbar`.`id` = $id";
        $result = $conn->query($sql);
        if($result){
          echo "Deleted Successfully";
        }else{
          echo "Something went wrong";
        }
       }
       ?>
       </section>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>


   