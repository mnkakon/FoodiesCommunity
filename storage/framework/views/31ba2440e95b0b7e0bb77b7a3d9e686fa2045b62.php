<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To-Do Manager</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=initial-scale" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("img/todo3.jpg");
                background-attachment: inherit;
                background-color: #fff;
                color: #636b6f;
                font-family: 'initial-scale', sans-serif;

                font-weight: 300;
                
                height: 100vh;
                margin: 0;
            }
            background-image {
                height: inherit; // crossed-out
                width: inherit; // crossed-out
}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: #008080;
                font-size: 120px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Blog</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    To - Do  Manager
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>"></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>
