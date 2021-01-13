<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME ?></title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap.min.css") ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Bodoni+Moda:wght@900&display=swap" rel="stylesheet"> 
    <style>
        body {
            font-family: 'Abel', sans-serif;
            font-size: 1.2rem;
        }
        h1, h2 {
            font-family: 'Bodoni Moda', serif;
        }
    </style>
</head>
<body class="container">
    <div class="my-5 text-center">
        <h1><?php echo SITE_NAME ?></h1>
        <div class="border-top border-bottom my-4 py-2">
            <a class="mx-2" href="<?php echo site_url() ?>">Home</a>
            <a class="mx-2" href="<?php echo site_url("about") ?>">About</a>
            <a class="mx-2" href="<?php echo site_url("login") ?>">Login</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
        
        <div class="mb-5">
            <h2>Hi there!</h2>
            <p>This is my attempt to show my skills to use CodeIgniter frameworks.</p>
            <p>See about me more at <a href="https://noorwachid.github.io">HERE</a></p>
            
        </div>
    </div>

    <script src="<?php echo base_url("assets/bootstrap.min.css") ?>"></script>
</body>
</html>