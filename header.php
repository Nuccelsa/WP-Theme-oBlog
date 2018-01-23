<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i" rel="stylesheet">

  <?php
    // do_action('wp_head');
    wp_head();
  ?>

</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__content">
                <div class="logo">
                    <a href="#" class="logo__text">oBlog</a>
                    <p class="logo__baseline">Un simple blog</p>
                </div>
                <nav class="main-nav">
                    <a href="#">Catégories</a>
                    <a href="#">A propos</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
            <div class="header__tools">
                <div class="search">
                    <form action="" class="search__form">
                        <label for="search"><i class="fa fa-search" aria-hidden="true"></i></label>
                        <input type="text" name="search" id="search" class="search__field" placeholder="Rechercher">
                    </form>
                </div>
                <a href="#" class="action-button">S'abonner</a>
            </div>
        </header>
        <main class="main">
