<?php get_header(); ?>

<div id="ip-container" class="ip-container">
  <header class="ip-header">
    <div class="ip-loader">
      <svg width="60px" height="60px" viewBox="0 0 80 80" class="ip-inner">
        <path d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" class="ip-loader-circlebg"></path>
        <path id="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" class="ip-loader-circle"></path>
      </svg>
    </div>
  </header>
  <div class="ip-main">
    <!-- Mobile nav -->
    <div id="cbp-spmenu" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
      <div class="mobile_nav_close_button"><a id="hideRight" href=""><span class="close_icon zmdi zmdi-arrow-right"></span></a></div>
      <nav id="mobile_menu_content" class="navbar-nav-mobile"><a href="#hero" >Início</a><a href="#features">Tecnologia</a><a href="#faq">Portifólio</a><a href="#contact">Orçamento</a></nav>
    </div>
    <header id="header" class="header navbar navbar-light animated">
      <div class="container"><a href="#" class="navbar-brand"> <span class="logo">N</span><span class="brand-txt" style="color:black;">Desenvolvedor Web</span></a>
        <div class="navbar">
          <ul class="nav navbar-nav pull-right">
            <li class="nav-item"><a href="#hero"  style="color:black;">Início</a></li>
            <li class="nav-item"><a href="#features"  style="color:black;">Tecnologias</a></li>
            <li class="nav-item"><a href="#faq"  style="color:black;">Portifólio</a></li>
            <li class="nav-item"><a href="#contact"  style="color:black;">Orçamento</a></li>
          </ul>
          <div class="pull-right togger-container"><span id="showRight" class="zmdi zmdi-menu navbar-toggler"></span></div>
        </div>
      </div>
    </header>
    <div class="main-content">
      <div id="hero" class="hero">
        <div class="hero-inner" style="background-color: black; opacity: 0.5;">
          <div>
            <div class="col-lg-6 col-lg-offset-3" style="color:white; display: block; ">

              <?php $loop = new WP_Query( array( 'post_type' => 'home') );
              while ( $loop->have_posts() ) : $loop->the_post(); ?>

              <h2> <?php echo get_field('titulo'); ?></h2>
              <p> <?php echo get_field('descricao'); ?></p>

            <?php endwhile; ?>

          </div>
        </div>
      </div>
    </div>
    <div id="features" class="features">
      <header>
        <h2 class="section-heading-underline">Tecnologias Exploradas</h2>
      </header>
      <div class="container">
        <div class="row">
          <div data-wow-delay="0.3s" class="feature-item col-md-4 text-center wow fadeInUp">

            <?php $loop = new WP_Query( array( 'post_type' => 'tecnologias') );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="icon-container"><span class="zmdi  <?php echo get_field('icone'); ?>"></span></div>
            <h3> <?php echo get_field('nome'); ?></h3>
            <div class="desc">
              <!--<p>multiple layouts to choose from</p>-->
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
  <div id="faq" class="faq">
    <div class="container">
      <header>
        <h2 class="section-heading-underline">PORTIFÓLIO</h2>
      </header>
      <ul class="faq-list">

        <?php $loop = new WP_Query( array( 'post_type' => 'portifolio') );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <li class="wow fadeInLeft">
          <h4 class="faq-q"><a href=" <?php echo get_field('link_site'); ?>" target="_blank"> <?php echo get_field('empresa'); ?></a></h4>
          <img class="img-responsive" src=" <?php echo get_field('imagem_principal'); ?>" />
          <?php echo get_field('descricao'); ?>
        </li>

      <?php endwhile; ?>
    </ul>
  </div>
</div>
<div id="contact" class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3 class="section-heading-underline">Contato</h3>
        <div class="contact-info-container wow fadeInLeft">
          <p class="lead"> Entre em contato e solicite o seu orçamento sem compromisso.</p>
          <ul class="list-unstyled contact-info">
            <!--<li> <span class="zmdi zmdi-pin"></span>San Mateo, CA, 94403</li>-->
            <li><span class="zmdi zmdi-phone"></span>(11) 98621 9995</li>
            <li><span class="zmdi zmdi-email"></span>nicolas.ale.carvalho@gmail.com</li>
            <!--<li><span class="zmdi zmdi-city-alt"></span>www.site.com</li>-->
          </ul>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-2">
        <h3 class="section-heading-underline">Enviar Orçamento</h3>
        <form novalidate class="form-horizontal wow fadeInRight" method="post" name="form_contato" action="<?php echo get_template_directory_uri(); ?>/enviarEmail.php">
          <fieldset>
            <div class="form-group">
              <div class="ui-input-group">
                <input type="text" name="nome" required class="form-control"><span class="input-bar"></span>
                <label>Nome</label>
              </div>
            </div>
            <div class="form-group">
              <div class="ui-input-group">
                <input type="text" name="email" required class="form-control"><span class="input-bar"></span>
                <label>E-mail</label>
              </div>
            </div>
            <div class="form-group">
              <div class="ui-input-group">
                <input type="text" name="tipo_site" required class="form-control"><span class="input-bar"></span>
                <label>Tipo de Site</label>
              </div>
            </div>
            <div class="form-group">
              <div class="ui-input-group">
                <textarea type="text" name="descricao" required rows="5" class="form-control"></textarea><span class="input-bar"></span>
                <label>Descrição</label>
              </div>
            </div>
            <div class="divider"></div>
            <div class="form-group">
              <button class="btn btn-raised btn-primary btn-w-sm ui-wave" type="submit">ENVIAR</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<!--<div class="action-call text-center"><span>Build with your favorite Bootstrap, get up and running in minutes</span><a href="http://themeforest.net/item/material-design-admin-with-angularjs/13582227?ref=arousing" target="_blank" class="btn btn-default btn-cta btn-lg btn-raised ui-wave">Download Material<span class="zmdi zmdi-chevron-right"></span></a></div>-->
</div>
<footer class="footer text-center"><span>© Copyright <span id="copyright"></span> Nicolas Desenvolvedor Web | Mobile</span></footer>
</div>
</div>

<?php get_footer(); ?>
