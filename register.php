<?php include("block/header.php"); ?>

<style>
    html, body {
        display: grid;
        grid-template-rows: 1fr auto;
        background-image: url('https://mrwallpaper.com/images/hd/letna-football-stadium-mngxrdaavkjdbiu3.jpg');
        height: 100%;
        color: white !important;
        font-family: 'Open Sans', sans-serif;
    }
    body {
        display: grid;
        grid-template-rows: 1fr auto;
        color: white;
    }
    form {
        margin-bottom: 200px;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

<div class="feedback">
    <div class="container">
        <h2 class="text-center my-4"><b>REGISTRACIJA</b></h2>
        <p class="text-left">Sveiki, futbolo fanai! Prisijunkite prie mūsų bendruomenės ir gaukite naujienas, bei specialius pasiūlymus. Registruokitės dabar ir būkite arčiau futbolo!</p>
        <form action="info/regis.php" method="post">
        <div class="form-row md-10">
                <div class="form-group col-md-5">
                    <label for="name"><b>Name:</b></label>
                    <input type="text" class="form-control" id="nameInput" name="name">
                    <span id="nameHelpInLine" class="form-text"><b> Max 10 letters.</b></span>
                    <?php if (isset($_GET['name_error'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars($_GET['name_error']); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group col-md-7">
                    <label for="username"><b>Username:</b></label>
                    <input type="text" class="form-control" id="usernameInput" name="username">
                    <span id="usernameHelpInLine" class="form-text"><b>Max 10 letters.</b></span>
                    <?php if (isset($_GET['username_error'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars($_GET['username_error']); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group col-md-12">
                    <label for="password"><b>Password:</b></label>
                    <input type="password" class="form-control" id="passwordInput" name="password">
                    <span id="passwordHelpInLine" class="form-text"><b>Slaptažodis turi būti nors iš 5 symbolių.</b></span>
                    <?php if (isset($_GET['password_error'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars($_GET['password_error']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row-md-5">
                <label for="email"><b>Email Address:</b></label>
                <input type="email" class="form-control" id="emailInput" name="email">
                <?php if (isset($_GET['email_error'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo htmlspecialchars($_GET['email_error']); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-primary"><b>Registruotis</b></button>
            </div>
        </form>
    </div>
</div>
<script>

