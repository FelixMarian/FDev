<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <style>
        body {
            font-size: 16px;
            overflow-x: hidden;
            margin: 0;
        }

        .fullHeader {
            background-color: #333;
            height: 3.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .centeredHeader {
            color: #fff;
            display: flex;
            align-items: center;
            height: 3.5rem; 
            margin-left: 7.4rem;
        }

        .headButton {
            padding: 1em; 
            margin-right: 1em; 
            font-size: 1em;
        }

        .profileButton {
            position: relative;
            margin-left: 3rem;
            display: inline-block;
        }

        .profileButton .dropbtn {
            background-color: transparent;
            color: white;
            padding: 1em;
            font-size: 1em;
            border: none;
        }

        .profileButton .profileButton-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .profileButton .profileButton-content a {
            color: black;
            padding: 1em;
            text-decoration: none;
            display: block;
            font-size: 1em;
        }

        .profileButton .dropbtn-my-profile {
            font-size: 0.9em;
            padding: 0.9em;
        }

        .profileButton-content a:hover {background-color: #ddd;}
        .profileButton:hover .profileButton-content {display: block;}
        .profileButton:hover .dropbtn {background-color: #333;}
        @media (max-width: 768px) {
           
        }
    </style>
</head>
<body>
    <div class="fullHeader">
        <div class="centeredHeader">
            <a class="headButton" href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a>
            <a class="headButton" href="<?php echo e(route('home')); ?>"><?php echo e(__('Courses')); ?></a>
            <a class="headButton" href="<?php echo e(route('home')); ?>"><?php echo e(__('Problems')); ?></a>
        </div>
        <div class="profileButton">
                <button class="dropbtn dropbtn-my-profile"><?php echo e(__('My profile')); ?></button>
                <div class="profileButton-content">
                    <a href="#">Profile</a>
                    <a href="#">Log out</a>
                </div>
            </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\fdev\resources\views/layouts/partialLayouts/header.blade.php ENDPATH**/ ?>