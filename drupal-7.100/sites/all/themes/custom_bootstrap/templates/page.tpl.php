<!DOCTYPE html>
<html>
<head>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php print $head_title; ?></title>

 
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<?php print $styles; ?>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
  <div class="container bg-light">
    <header class="header">
      <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
          
          <!-- Logo -->
          <a class="navbar-brand" href="#">
            <img src="<?php print path_to_theme(); ?>/images/logo.png" alt="Logo" class="img-fluid">
          </a>

          <!-- Toggler Button -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" 
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-between" id="mainNavbar">
            
            <!-- Header Buttons -->
            <div class="header-buttons">
              <a href="/resources" class="resources-btn d-flex align-items-center">
                <i class="bi bi-book"></i> Resources & Manuals
              </a>
              <a href="/user/login" class="login-btn d-flex align-items-center">
                <i class="bi bi-person"></i> Log In
              </a>
            </div>
            <!-- Main Navigation -->
            <?php
              $main_menu = menu_navigation_links('main-menu');

              if (!empty($main_menu)) {
                  print '<ul class="navbar-nav mx-auto">'; 

                  foreach ($main_menu as $key => $item) {
                      $has_children = !empty($item['below']);
                      $dropdown_class = $has_children ? ' dropdown' : '';
                      $dropdown_toggle = $has_children ? ' dropdown-toggle' : '';

                      print '<li class="nav-item' . $dropdown_class . '">';
                      print l($item['title'], $item['href'], [
                          'attributes' => [
                              'class' => ['nav-link' . $dropdown_toggle],
                              'data-bs-toggle' => $has_children ? 'dropdown' : '',
                              'aria-expanded' => $has_children ? 'false' : '',
                          ],
                      ]);

                      if ($has_children) {
                          print '<ul class="dropdown-menu">';
                          foreach ($item['below'] as $sub_item) {
                              print '<li>';
                              print l($sub_item['title'], $sub_item['href'], ['attributes' => ['class' => ['dropdown-item']]]);
                              print '</li>';
                          }
                          print '</ul>';
                      }

                      print '</li>';
                  }

                  print '</ul>';
              }
              ?>

          </div>
        </div>
      </nav>
    </header>
      <section class="hero-banner">
        <img src="<?php print path_to_theme(); ?>/images/banner.png" class="img-fluid" alt="Toy Fair 2024">
        <div class="overlay">
          <p>Look back at the 2023 show</p>
          <h1>Toy Fair 2024</h1>
        </div>
      </section>
        <div class="row">
          <main class="col-md-12"><?php print print views_embed_view('latest_information', 'block_1')?></main>
        </div>
  </div> 
  <footer class="footer bg-dark text-white py-4">
  <div class="container text-center">
    <p>© 2024 Toy Fair | Organized by Toy & Hobby Association</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">About Us</a></li>
      <li class="list-inline-item"><a href="#">Contact</a></li>
    </ul>
  </div>
</footer>

</body>
</html>
