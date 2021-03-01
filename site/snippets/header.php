<!doctype html><html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">


  <title>institut für dermatologische aesthetik</title>
  <meta name="description" content="p2">
  <meta name="author" content="SitePoint">
  

<!-- custom css -->

<?= css([
        'assets/css/home-min.css', 
        'assets/css/header-min.css',
        'assets/css/intro-min.css',
        'assets/css/mediascreen-min.css',
 ])  ?> 


<link rel="stylesheet" href="https://use.typekit.net/wum6flf.css">




</head>
<body>

<header id="header_bereich"> 

<nav class="menu">
    <a class="logo" href="<?= $site->url() ?>"><image class="logo_image" src="<?= $site->image()->url() ?>"></a>
    <input type="checkbox" id="hamburger-menu">
            <label for="hamburger-menu" class="hamburger-menu">
                <div class="bar top"></div>
                <div class="bar middle"></div>
                <div class="bar bottom"></div>
            </label> 
    <ul id="nav_eben1">
    <?php foreach ($site->children()->listed() as $item ): ?>
        <li class="nav-min"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
                <?php endforeach ?>
    </ul>
</nav>
<img id="logo_green" src="content/logo-green.svg" alt="logo">
 <div id="background_picture" ></div>  

</header>

<main class="main">