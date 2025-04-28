<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tailwind Compiled CSS -->
    <link rel="stylesheet" href="tailwind/styles.css" />
    
    <!-- <base href="/" /> -->
    <title>Plumber Pont</title>
</head>
<body>
    <?php
        function is_active($check) {
            $requested_uri = basename($_SERVER['REQUEST_URI'], ".php");
            
            return ($requested_uri === $check) ? 'active' : '';
        }

        $menus = [
            'index' => 'Home',
            'about' => 'About Us',
            'services' => 'Services',
            'project' => 'Project',
            'blog' => 'Blogs',
            'contact' => 'Contact'
        ];
    ?>

    <!-- Header -->
    <header class="h-15 flex items-center shadow-[0px_4px_24px_0px_rgba(0,0,0,0.05)]">
        <div class="container">
            <div class="flex justify-between">
                 <!-- site logo -->
                <div class="w-1/3">
                    <a href="index.php">
                        <img src="img/site-logo.png" alt="site logo" >
                    </a>
                </div>

                <!-- menu main -->
                <div class="w-2/3 flex justify-end items-center">
                    <nav>
                        <ul class="flex">
                            <?php foreach($menus as $key => $value) : ?>
                                <li>
                                    <a class="<?php echo is_active($key); ?>" href="<?php echo htmlspecialchars($key); ?>.php">
                                        <?php echo htmlspecialchars($value); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>

                    <a href="" class="font-bold text-xs uppercase text-white p-[11px_7px_9px_8px] border border-[#DD3142] bg-[#DD3142] rounded-[5px] ml-[40px] hover:bg-white hover:text-[#DD3142] duration-500">Request a call Back</a>
                </div>
            </div>
        </div>
    </header>
