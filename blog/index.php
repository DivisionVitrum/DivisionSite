<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../img/favicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--links-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <title>Division Vitrum</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include_once("../includes/analytics.php") ?>
<nav class="clearfix">
    <ul class="clearfix">
        <li><a href="../" id="main" class="navlogo"></a></li>
        <li><a href="#blog" id="main">Blog</a></li>
        <li><a href="../" id="main" class="blogback"></a></li>

        <!-- Responsive menu, wordt getoond op tablet/mobiel -->
        <li><a href="../" id="responsiveMenu" class="navlogo"></a></li>
        <li><a href="#blog" id="responsiveMenu" class="active">Blog</a></li>
        <li><a href="../" id="responsiveMenu" class="blogback"></a></li>
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
            <img src="../img/V_Logo_Small.png" alt="">
            <h1>Division <span>Vitrum</span></h1>
            <h4>Blog</h4>
        </section>
    </div>
</header>
<section>
    <div id="masonry">
        <article>
            <img src="../img/githubpost2.jpg">
            <div>
                <h3>Werken met GitHub</h3>
                <p>Wij werken áltijd met GitHub. Maar wat is GitHub nu precies?</p>
                <a href="http://localhost/DivisionSite/blog/posts/werken-met-github.php"><button type="button" name="button">Bekijk post</button></a>
            </div>
        </article>
<!--         <article>
            <img src="../img/blogpic.jpg">
            <div>
                <h3>Post 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
            </div>
        </article>
        <article>
            <img src="../img/blogpic.jpg">
            <div>
                <h3>Post 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
            </div>
        </article>
        <article>
            <img src="../img/blogpic.jpg">
            <div>
                <h3>Post 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
            </div>
        </article>
        <article>
            <img src="../img/blogpic.jpg">
            <div>
                <h3>Post 5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
            </div>
        </article>
        <article>
            <img src="../img/blogpic.jpg">
            <div>
                <h3>Post 6</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
            </div>
        </article>
        <article>
            <img src="../img/blogpic.jpg">
            <div>
                <h3>Post 7</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
            </div>
        </article>
        <article>
            <img src="../img/blogpic.jpg">
            <div>
                <h3>Post 8</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non dui a nisi pharetra posuere nec at velit. Proin sit amet nisi at turpis lobortis auctor. Suspendisse vitae gravida est. Donec vestibulum bibendum neque quis lobortis. Fusce rhoncus non ligula sed volutpat. Nunc nunc magna, cursus sed venenatis eu, luctus nec nibh.</p>
            </div>
        </article> -->
    </div>
</section>
<script src="../js/jquery.min.js"></script>
<script src="js/blog.js"></script>
</body>
</html>
