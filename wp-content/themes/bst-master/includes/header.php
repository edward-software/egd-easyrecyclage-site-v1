<!DOCTYPE html>
<html class="no-js">
<head>
  <title><?php wp_title('•', true, 'right');
      bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Open Graph tags (FB sharing!) -->
    <?php if (is_single() && get_the_post_thumbnail()) {
        $dom = simplexml_load_string(get_the_post_thumbnail());
        $imgURl = $dom->attributes()->src;
        ?>
      <meta property="og:title" content="<?php echo $post->post_title; ?>"/>
      <meta property="og:description" content="<?php echo $post->post_excerpt; ?>"/>

      <meta property="og:image" content="<?php echo $imgURl; ?>"/>
    <?php } ?>

  <link rel="icon" type="image/png" href="<?php bloginfo("template_directory"); ?>/images/logo/picto_feuille.png">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
    <?php wp_head(); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <?php if (preg_match("/IE/i", getenv("HTTP_USER_AGENT")) || preg_match("/Trident/i", getenv("HTTP_USER_AGENT"))) { ?>
      <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/ie-style.css">
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <?php } ?>

  <script type="text/javascript">
      (function (a, e, c, f, g, h, b, d) {
          var k = {ak: "1066423098", cl: "36L-CO3a8XMQuqbB_AM"};
          a[c] = a[c] || function () {
              (a[c].q = a[c].q || []).push(arguments)
          };
          a[g] || (a[g] = k.ak);
          b = e.createElement(h);
          b.async = 1;
          b.src = "//www.gstatic.com/wcm/loader.js";
          d = e.getElementsByTagName(h)[0];
          d.parentNode.insertBefore(b, d);
          a[f] = function (b, d, e) {
              a[c](2, b, k, d, null, new Date, e)
          };
          a[f]()
      })(window, document, "_googWcmImpl", "_googWcmGet", "_googWcmAk", "script");
  </script>
  <script type="text/javascript">
      var callbackNumber = function (formatted_number, mobile_number) {
          var e = document.getElementById("number");
          e.innerHTML = "";
          e.appendChild(document.createTextNode(formatted_number));
      };
  </script>

</head>
<body <?php //body_class(); ?> onload="_googWcmGet(callbackNumber, '01 41 69 70 00')">
<!-- Google Tag Manager -->
<noscript>
  <iframe src="//www.googletagmanager.com/ns.html?id=GTM-KMPN3F"
          height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KMPN3F');
</script>
<!-- End Google Tag Manager -->

<!--[if lt IE 8]>
<div class="alert alert-warning">
  You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>
  to improve your experience.
</div>
<![endif]-->

<nav id="topMenu" class="navbar navbar-inverse navbar-fixed-top">
  <div class="egd-cookie-notification">
    <div class="container">
      <div class="text">En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous proposer des publicités ciblées adaptées à vos centres d'intérêts et/ou, réaliser des statistiques et mesurer l'audience de notre site.</div>
      <div class="buttons">
        <a href="javascript:void(0);" class="egd-cookie-accept">J'ai compris</a>
        <a href="https://www.easyrecyclage.com/mentions-legales/" target="_blank" class="egd-cookie-more-info">En savoir plus</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
        <img src="<?php bloginfo("template_directory"); ?>/images/logo/logo.png" class="logo-header">
      </a>
    </div>
    <div class="collapse navbar-collapse navbar-container" id="navbar">

        <?php

        /**
         * Génération manuelle du menu en allant chercher de le contenu du menu sur l'API Menu WP
         */

        $content = file_get_contents(EASY_RECYCLAGE_WWW_URL.'/wp-json/wp-api-menus/v2/menus/');
        $content = json_decode($content);

        $menus = array();
        if (is_array($content) && count($content)) {
            foreach ($content as $c) {

                $items = array();

                $content2 = file_get_contents($c->meta->links->self);
                $content2 = json_decode($content2);

                foreach ($content2->items as $item) {

                    $children = array();
                    if (isset($item->children) && is_array($item->children) && count($item->children)) {
                        foreach ($item->children as $child) {
                            $children[] = array(
                                'id' => $child->id,
                                'title' => $child->title,
                                'url' => $child->url
                            );
                        }
                    }

                    $tmp = array(
                        'id' => $item->id,
                        'title' => $item->title,
                        'url' => $item->url,
                        'children' => $children
                    );

                    $items[] = $tmp;
                }

                $menus[] = array(
                    'id' => $c->term_id,
                    'name' => $c->name,
                    'items' => $items
                );
            }
        }

        ?>


      <ul class="nav navbar-nav">

          <?php

          foreach ($menus as $menu) {
              if ($menu['name'] == 'nav_header') {

                  foreach ($menu['items'] as $item) {
                      if (count($item['children']) > 0) {
                          ?>
                        <li class="dropdown">
                          <a class="" href="#" data-toggle="dropdown" class="dropdown-toggle"
                             aria-haspopup="true" aria-expanded="true"
                             title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?>
                            <span
                                    class="caret"></span></a>
                          <ul role="menu" class=" dropdown-menu">
                              <?php
                              foreach ($item['children'] as $child) {
                                  ?>
                                <li class="submenu-item"><a
                                          title="<?php echo $child['title']; ?>"
                                          href="<?php echo $child['url']; ?>"><?php echo $child['title']; ?></a>
                                </li>
                                  <?php
                              }
                              ?>
                          </ul>
                        </li>

                          <?php
                      } else {
                          ?>
                        <li>
                          <a href="<?php echo $item['url']; ?>"
                             title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></a>
                        </li>
                          <?php
                      }

                  }

              }

          }

          ?>

        <li class="phone-number">
          <img src="<?php bloginfo("template_directory"); ?>/images/picto-phone.png" class="">
          <p><span id="number">01 41 69 70 00</span></p>
        </li>

        <li class="menu-item-type-link-paprec-web-site">
          <a href="https://www.paprec.com/fr" target="_blank">
            <img src="<?php bloginfo("template_directory"); ?>/images/logo/logo-paprec-group.png">
          </a>
        </li>
        <li class="menu-item-type-link-paprec-web-site">
          <a href="https://easyrecyclage.paprec.com/" target="_blank">
            <img src="<?php bloginfo("template_directory"); ?>/images/logo/logo-easyrecyclage.png">
          </a>
        </li>
        <li id="btn-collaborateur" class="btn-collaborateur">
          <a href="<?php echo EASY_RECYCLAGE_STORE_URL; ?>/souscription/connexion" type="button"
             class="modal-button-login btn-collaborateur">Accès Partenaire</a>
        </li>
      </ul>
        <?php
        /*
            wp_nav_menu( array(
                'theme_location'    => 'navbar-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
                )
            );*/
        ?>
    </div>
  </div>
  <!-- /.container -->
</nav>


<?php //bst_slider_template(); ?>

<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
