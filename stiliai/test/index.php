
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Portfolio</title>
</head>
<body>


<!--Navbar-->
<nav class="side-menu">

    <!-- Navbar brand -->
    <a class="side-menu-brand" href="#">Start Bootstrap</a>

    <!-- Collapse button -->
    <button class="side-menu-hamburger">
        <div class="animated-icon3">
            <span></span><span></span><span></span><span></span>
        </div>
    </button>
    <!-- Links -->
    <ul class="side-menu-list">
            <?php

            $limit = 6; //Kiek nuorodų rodome

            $menuSql  = mysql_query1( "SELECT * FROM `" . LENTELES_PRIESAGA . "page` WHERE `parent` = 0 AND `show` = 'Y' AND `lang` = " . escape(lang()) . " ORDER BY `place` ASC LIMIT " . $limit );

            ?>

            <?php foreach ($menuSql as $menuRow) { ?>

            <?php if (teises( $menuRow['teises'], $_SESSION[SLAPTAS]['level'])){ ?>

        <li class="side-menu-item active">
            <a class="side-menu-link" href="<?php echo url('?id,' . (int)$menuRow['id']); ?>"><?php echo input($menuRow['pavadinimas']); ?></a>
        </li>
        
        
            <?php } ?>

            <?php } ?>
    </ul>
    <!-- Links -->
</nav>
<!--/.Navbar-->



<section  class='yellow'>
    <div class="container-fluid flex">
        <div class='title'>
            <h1 class='helo'><B>Stylish Portfolio</B></h1>
            <h2><I>A Free Bootstrap Theme be Start Bootstrap</I></h2>
            <button class='button btn-blue'>Find Out More</button>
        </div>
    </div>
</section>

<section class='white'>
    <div class="container-fluid">
        <div class='title'>           
            <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
            <p>This theme features a flexable, UX frendly sidebar menu and stock photos from our frinds at Unspalsh!</p>
            <button class='button btn-grey'>What We Offer</button>
        </div>
    </div>
</section>

<section class='blue'>
    <div class="container">
        <div class='title'>      
            <p class='yellow-text'>SERVICES</p>
            <h1 class='white-text'><B>What We Offer</B></h1>
            <div class='row'>                        
                <div class="col-6 col-md-3 one1 icon-item">
                <div class='round'><i class="fas fa-mobile-alt"></i></div>
                <h2 class='white-text'>Responsive</h2>
                <p class='white-text'>Looks great at any screen size!</p>
                </div>
                <div class="col-6 col-md-3 two2 icon-item">
                <div class='round'><i class="far fa-edit"></i></div>
                <h2 class='white-text'>Redesigned</h2>
                <p class='white-text'>Freshly redesignet for Bootstrap 4.</p>
                </div>                   
                <div class="col-6 col-md-3 three3 icon-item">
                <div class='round'><i class="far fa-thumbs-up"></i></div>
                <h2 class='white-text't>Favorited</h2>
                <p class='white-text'>Milion of users <i class="fas fa-heart"></i> Start Bootstrap!</p>
                </div>
                <div class="col-6 col-md-3 four4 icon-item">
                <div class='round'><i class="far fa-question-circle"></i></div>
                <h2 class='white-text'>Question</h2>
                <p class='white-text'>I mustache you are question...</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class='yellow2'>
    <div class="container-fluid flex">
        <div class='title'>
            <h1><B>Welcome to your next  website!</B></h1>           
            <button class='button btn-blue'>Download Now!</button>
        </div>
    </div>
</section>

<section class='white'>
    <div class="container">
        <div class='title'>      
            <p class='yellow-text'>PORTFOLIO</p>
            <h1><B>Recent Project</B></h1>
        </div>
        <div class='row'>                        
            
        <?php

            if ( isset( $strError ) && !empty( $strError ) ) {
                klaida( "Klaida", $strError );
            }
            // include ( "priedai/centro_blokai.php" );
            include ( $page . ".php" );

        ?>


        </div>
    </div>
</section>

<section class='blue'>
    <div class="container-fluid">
    <div class='title'>           
            <h2 class='white-text'>The buttons below are impossible to resist...</h2>
            <button class='button'>Click Me!</button>
            <button class='button btn-grey'>Look at Me!</button>
        </div>
    </div>
</section>

<section class='grey'>
    <div class="container-fluid">
    </div>
</section>

<section class='white'>
    <div class="container center">
        <div class='row'>                        
                <div class="col-12 col-md-4 icon-item2">
                <div class='round2'><i class="fab fa-facebook-f"></i></div>
                </div>

                <div class="col-12 col-md-4 icon-item2">
                <div class='round2'><i class="fab fa-twitter"></i></div>
                </div>   

                <div class="col-12 col-md-4 icon-item2">
                <div class='round2'><i class="fas fa-cat"></i></div>
                </div>

        </div>

            <div class='title'>           
                    </br><p2>Copyright (c) Your Website 2018</22></p2>
            </div>
    </div>
</section>
<script src="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/script.js"></script>
</body>
</html>