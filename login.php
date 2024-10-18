
<?php
include("block/header.php");
?>
 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<style>
        html, body {
            height: 100%;
            font-family: 'Open Sans', sans-serif;
        }
        body {
            display: grid;
            grid-template-rows: 1fr auto;
            background-image: url('https://lelisia.com/cdn/shop/products/night-soccer-stadium-render.webp?v=1699408348');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            height: 100%;
        }
        .container {
            max-width: 1000px;
            margin: auto;
        }
        h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }
        form {
            margin-bottom: 30%;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
        }
    </style>
<div class="feedback">
    <div class="container">
        <h2 class="text-center my-4"><b>LOGIN</b></h2>
        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-danger" role="alert" id="errorAlert">
                <?php echo htmlspecialchars($_GET['error']);?> 
                <script>
                setTimeout(function() {
                    document.getElementById('errorAlert').style.display = 'none';
                }, 3000);
            </script>
            </div>
            <?php endif; ?>
        <div class="d-flex justify-content-center">
        <form action="info/auth.php" method="post" class="w-50">
            <div class="form-row md-10 ">
                    <div class="form-group col-md-12">
                    <label for="username"><b>Username:</b></label>
                    <input type="text" class="form-control" id="usernameInput" name="username">
                </div>
                <div class="form-group col-md-12">
                    <label for="password"><b>Password:</b></label>
                    <input type="password" class="form-control" id="passwordInput" name="password">
                </div>
            </div>
        
            
                <button type="submit" name='submit' class="btn btn-primary w-30"><b>Login</b></button>
            </div>
        </form>
    </div>
</div>

<?php include("block/footer.php");