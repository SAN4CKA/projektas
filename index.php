<?php include("block/header.php"); ?>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }
        body {
            display: grid;
            grid-template-rows: 1fr auto;
            background-image: url('https://i.redd.it/2wh0u9kklv6a1.png');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }
        .container {
            max-width: 1000px;
            margin: auto;
        }
        h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }
        .lead {
            
            margin-bottom: 20%;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
            text-align:center;
        }
        .btn-primary:hover {
            box-shadow: 0 12px 12px 0 rgba(0, 0, 0, 0.24);
            background: linear-gradient(30deg, #ffd700 40%, #70d8ff);
        }
        .btn-primary{
           background:linear-gradient(40deg, #70d8ff 30%, #ffd700);
           margin-right: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center display-4 my-5">Welcome to Football Fan!</h1>
        <p class="lead">Your ultimate destination for everything football-related. Get the latest news and join a thriving community of fans.</p>
        <div class="text-center my-5">
            <a href="about.php" class="btn btn-primary btn-lg">APIE MUS</a>
        </div>
    </div>
    <?php include("block/footer.php"); ?>
</body>
</html>
<?php $conn->close(); ?>


