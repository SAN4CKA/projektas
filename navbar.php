<?php
$baseURL = "http://localhost/paskaitos/projektas";
?>
<style>
  .navbar{
    height:100px;
    font-weight: bold;
    font-family: roboto, sans-serif;
    border-bottom: 2px solid #ffd700;
    }
  .home-icon{
    font-size:50px;
    color:black;
  }
  .home-icon:hover{
    color:black;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
<nav class="navbar navbar-expand-lg navbar navbar-light bg-light">
  <div class="container-fluid">
  <a href="index.php" class="home-icon"><i class="fa-regular fa-futbol"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#"></a>
        <a class="nav-link" href="forum.php"><b>FORUM</b></a>
        <a class="nav-link" href="about.php"><b>APIE MUS</b></a>
        <?php 
          if(isset($_COOKIE['username'])) {
            echo '<a class="nav-link" href="user.php"><b>KABINETAS</b></a>';
            echo '<a class="nav-link" href="logout.php"><b>LOGOUT</b></a>';
          } else {
            echo '<a class="nav-link" href="login.php"><b>LOGIN</b></a>';
            echo '<a class="nav-link" href="register.php"><b>REGISTRACIJA</b></a>';
            
          }
        ?>
      </div>
    </div>
  </div>
</nav>



