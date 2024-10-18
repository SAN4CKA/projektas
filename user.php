<?php
include("block/header.php");
?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<div class="feedback">
    <div class="container">
        <h2 class="text-center my-4 ">VARTOTOJO KABINETAS</h2>
        <p class="text-center"> Sveiki sugrįžęs: <b><?php echo $_COOKIE['username']; ?></b>.</p>
        <form action="info/auth.php" method="post">
</div>
    </div>           