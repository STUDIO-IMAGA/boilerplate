<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<header id="navigation" class="bg-white navbar-container">

  <nav id="nav-top" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <?= Navigation\navigation( 'secondary_navigation', 'secondary_navigation', 0, 1, "ml-auto nav navbar-nav"); ?>
    </div>
  </nav>

  <nav id="nav-main" class="navbar navbar-expand-lg navbar-light">
    <div class="container">

      <?= Navigation\toggler( 'primary_navigation' ); ?>

      <?= Navigation\brand( Assets\asset_path("images/brand.png"), 160 ); ?>

      <?= Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 1, "mr-auto nav navbar-nav"); ?>

    </div>
  </nav>

</header>
