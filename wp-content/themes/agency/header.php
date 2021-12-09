<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
  
    <?php wp_head();?>
</head>
<body <?php body_class() ?>>
    
<header class="  site_header">
    <!-- <h1><a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a></h1>
    <h5><?php bloginfo('description') ?></h5> -->

    <section id="nav-bar" >
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
              <a class="navbar-brand img" href="#"><img src="http://localhost/agency/wp-content/themes/agency/assets/img/i1.PNG" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon " style="color:white"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#top">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#services">SERVICES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about-us">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#testimonials">TESTIMONIAL</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link "   href="#footer">CONTACT</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
</header>
