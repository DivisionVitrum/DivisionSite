<?php

$title = "Werken met GitHub";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="../../img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../img/favicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--links-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/singlepost.css">
    <title><?php echo $title ?> - Division Vitrum</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav class="clearfix">
    <ul class="clearfix">
        <li><a href="../../" id="main"><img id="navlogo" src="../../img/V_Logo_Small.png"></a></li>
        <li><a href="../" id="main" class="active">Blog</a></li>
        <li><a href="../../" id="main"><img id="back" src="../../img/ui/blog_back.png" alt=""></a></li>

        <!-- Responsive menu, wordt getoond op tablet/mobiel -->
        <li><a href="../../" id="responsiveMenu"><img id="navlogo" src="../../img/V_Logo_Small.png"></a></li>
        <li><a href="#blog" id="responsiveMenu" class="active">Blog</a></li>
        <li><a href="../../" id="responsiveMenu"><img id="back" src="../../img/ui/blog_back.png" alt=""></a></li>
    </ul>
    <a href="#" id="pull">
        <p>Division <span>Vitrum</span></p>
        <div id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a>
</nav>
<header>
    <div id="coverpic">
        <section>
        </section>
    </div>
</header>
<section>
    <div id="container">
        <h2><?php echo $title ?></h2>

        <h3>Wat is GitHub precies?</h3>
        <p>GitHub is een platform voor open source-software.
        Ontwikkelaars plaatsen hier hun code, projecten en oplossingen voor diverse problemen. Wanneer deze ontwikkelaars samen werken is GitHub ideaal
        voor versiebeheer. </p>

        <h3>Waarom zou je GitHub gebruiken?</h3>
        <p>GitHub is ideaal als je aan een project werkt met meerdere personen. Je kan zo gemakkelijk versies beheren zodat iedereen kan zien wat er precies aangepast is. Je kan zo ook oudere versies terughalen, mocht er iets fout gaan. Je kan ook aparte branches aanmaken om zo aparte functionaliteiten in te bouwen zonder andere developers te</p>

        <h3>Probeer het zelf!</h3>
        <p>Git is gemakkelijk te gebruiken, via <a href="https://desktop.github.com/" target="_blank">GitHub Desktop</a>, <a href="https://www.sourcetreeapp.com/" target="_blank">SourceTree</a> en andere programma's wordt het voor de gebruiker makkelijk gemaakt.
            Je kan er ook voor kiezen om het handmatig te doen via de Terminal. Hiervoor moet je wel enige kennis van Git hebben, gelukkig kan je via
            websites zoals <a href="https://www.codecademy.com/learn/learn-git" target="_blank">Codecademy</a> gemakkelijk meer leren over het gebruik van Git.
        </p>
<!--         <div class="row">
            <div class="box padding"> 
                <div class="card">
                    <div>
                    <a href="#"><div class="pic one"></div></a>
                        <h2>Post 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
                    </div>
                </div>
            </div>
            <div class="box padding">
                <div class="card">
                    <div>
                    <a href="#"><div class="pic two"></div></a>
                        <h2>Post 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
                    </div>
                </div>
            </div>
            <div class="box padding">
                <div class="card">
                    <div>
                    <a href="#"><div class="pic three"></div></a>
                        <h2>Post 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>
<script src="../../js/jquery.min.js"></script>
<script src="../js/blog.js"></script>
</body>
</html>
