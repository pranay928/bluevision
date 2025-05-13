<?php 

$name = $_SESSION['name'];
?>
<!-- for better look and feel of sidebar, we use bootstrap -->
<div class="col-lg-2 col-sm-12 col-md-12 sidebar sidebar-sticky sidebar-sticky bg-light text-dark p-3 "> 
  <div class="sidebar-item  sidebar-menu bg-light text-dark p-3">
    <h5>Welcone <?php echo $name; ?></h5>
    <a href="logout.php">Logout</a>
  </div>
  <div class="sidebar-item  sidebar-menu bg-light text-dark p-3">
    <h5>Pages</h5>

    <ul>
      <li><a href="logo.php">Logo</a></li>
      <li><a href="hero.php">Hero</a></li>
      <li><a href="nav_bar.php">Nav-Bar</a></li> 
      <li><a href="about.php">About</a></li>  
      <li><a href="skills.php">Skills</a></li>   
    </ul>
  </div>
</div>
