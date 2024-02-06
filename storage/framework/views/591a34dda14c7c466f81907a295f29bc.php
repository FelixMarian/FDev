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
            margin-left: 8.5rem;
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

        .problemsButton .dropbtn {
            background-color: transparent;
            color: white;
            padding: 1em;
            font-size: 1em;
            border: none;
        }

        .problemsButton .problemsButton-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .problemsButton .problemsButton-content a {
            color: black;
            padding: 1em;
            text-decoration: none;
            display: block;
            font-size: 1em;
        }

        .problemsButton .dropbtn-my-profile {
            font-size: 0.9em;
            padding: 0.9em;
        }

        .problemsButton-content a:hover {background-color: #ddd;}
        .problemsButton:hover .problemsButton-content {display: block;}
        .problemsButton:hover .dropbtn {background-color: #333;}

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
            min-width: 100px;
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
            <a class="headButton" href="<?php echo e(route('coursesMain')); ?>"><?php echo e(__('Courses')); ?></a>
            <div class="problemsButton">
                <button class="dropbtn dropbtn-my-profile" style="font-size: 1em;"><?php echo e(__('Problems')); ?></button>
                <div class="problemsButton-content">
                    <a href="#">9th grade</a>
                    <a href="#">10th grade</a>
                    <a href="#">11th grade</a>
                    <a href="#">12th grade</a>
                    <a href="#">College</a>
                </div>
            </div>
        </div>
        <div class="profileButton">
                <button class="dropbtn dropbtn-my-profile"><?php echo e(__('My profile')); ?></button>
                <div class="profileButton-content">
                    <a href="#">Profile</a>
                    <a>
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="inline">
                    <?php echo csrf_field(); ?>

                    <button type="submit">
                        <?php echo e(__('Log Out')); ?>

                    </button>
                </form></a>
                </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\FDev\resources\views/layouts/partialLayouts/header.blade.php ENDPATH**/ ?>