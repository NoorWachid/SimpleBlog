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
            <a class="mx-2" href="<?php echo site_url("logout") ?>">Logout</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
        
        <div class="mb-5">
            <form action="<?php echo site_url("Post/update_process/" . $post->id) ?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $post->title ?>">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control" rows="10" placeholder="Content"><?php echo $post->content ?></textarea>
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo base_url("assets/bootstrap.min.css") ?>"></script>
</body>
</html>