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
            <div>
                <h2><?php echo $post->title ?></h2>
                <div class="text-secondary mb-4">
                    <?php echo date_format(new DateTime($post->created_at), "l, j F o") ?> 
                    &sdot; <?php echo $post->username ?>
                </div>
                <div>
                    <?php 
                    
                    require_once APPPATH . "third_party/Parsedown.php";
                    $converter = new Parsedown();
    
                    echo $converter->text($post->content);
                    
                    ?>
                </div>
            </div>

            <hr class="my-4">

            <div class="mb-5">
                <div class="mb-3">
                    <?php if (count($comments) > 0): ?>
                        <?php foreach ($comments as $comment): ?>
                            <div>
                                <b><?php echo $comment->username ?></b>:
                                <?php echo $comment->content ?>
                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                        <div class="text-muted">No comment yet</div>
                    <?php endif ?>
                </div>
                <form action="<?php echo site_url("Comment/create_process") ?>" method="post">
                    <div class="input-group">
                        <input type="hidden" name="post_id" value="<?php echo $post->id ?>">
                        <input class="form-control" type="text" name="content" placeholder="Type here...">
                        <div class="input-group-append">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url("assets/bootstrap.min.css") ?>"></script>
</body>
</html>