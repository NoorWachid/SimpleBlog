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
        <div class="border-top border-bottom my-4 py-2 px-1 d-flex justify-content-between align-items-center">
            <h3 class="mb-0 mx-2"><?php echo SITE_NAME ?></h3>
            <div>
            <a class="mx-2" href="<?php echo site_url() ?>">Home</a>
            <a class="mx-2" href="<?php echo site_url("login") ?>">Logout</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
        
        <div class="mb-5">
            <div class="mb-3 text-right">
                <a class="btn btn-primary" href="<?php echo site_url("Post/create") ?>">Add New Post</a>
            </div>
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Options</th>
                </tr>
                <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?php echo $post->title ?></td>
                    <td>Update | Delete</td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>

    <script src="<?php echo base_url("assets/bootstrap.min.css") ?>"></script>
</body>
</html>