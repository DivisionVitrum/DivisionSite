<?php
session_start();
//Check if the admin is logged in, otherwise send them to the login page
if(!isset($_SESSION['true'])) {
  header("location:../index.php");
}

$blogcontents = file_get_contents('../includes/blog.php');
$projectcontents = file_get_contents('../includes/project.php');

if (isset($_POST['submitblog'])) {

  $blogdata=$_POST['blogcontent'];

  file_put_contents("../includes/blog.php", $blogdata);
  header("Refresh:0");
}
if (isset($_POST['submitproject'])){

  $projectdata = $_POST['projectcontent'];

  file_put_contents("../includes/project.php", $projectdata);
  header("Refresh:0");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Editor</title>
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  <script src="jquery.min.js" type="text/javascript"></script>
  <script src="dashboard.js" type="text/javascript"></script>
</head>
<body>
<aside>
  <ul>
    <li id="logo"></li>
    <li id="dashbutton"><i class="fa fa-bar-chart"></i></li>
    <li id="blogbutton"><i class="fa fa-file-text-o"></i></li>
    <li id="projectbutton"><i class="fa fa-file-code-o"></i></li>
  </ul>
  <div id="logout"><a href="../includes/logout.php"><i class="fa fa-reply"></i></a></div>
</aside>

<main id="dashboard">
  <h1>Dashboard</h1>
</main>

<main id="blogpost">
  <h1>Edit <span>blogpost</span></h1>
  <form action="index.php" method="post">
    <ul id="bloglines"></ul>
    <textarea name="blogcontent" id="blogcontent">
      <?= htmlentities($blogcontents);?>
    </textarea>
    <input type="submit" name="submitblog" value="save"/>
  </form>
</main>

<main id="project">
  <h1>Edit <span>project</span></h1>
  <form action="index.php" method="post">
    <ul id="projectlines"></ul>
    <textarea name="projectcontent" id="projectcontent">
      <?= htmlentities($projectcontents);?>
    </textarea>
    <input type="submit" name="submitproject" value="save"/>
  </form>
</main>

</body>
</html>
