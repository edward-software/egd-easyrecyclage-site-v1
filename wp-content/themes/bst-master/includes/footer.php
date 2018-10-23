
<!-- Footer -->
<footer>
  <div class="container">
    <div class="row footer-block-container footer-block-container-top block-pages">

<?php

$menus = file_get_contents(EASY_RECYCLAGE_WWW_URL.'/wp-json/wp-api-menus/v2/menus/');
$menus = json_decode($menus);
if(is_array($menus) && count($menus)) {
  foreach($menus as $menu) {
    if($menu->name == 'nav_footer') {

      $myMenu = file_get_contents($menu->meta->links->self);
      $myMenu = json_decode($myMenu);
      if(isset($myMenu->items) && is_array($myMenu->items) && count($myMenu->items)) {
        foreach($myMenu->items as $item) {
          ?>

      <div class="col-md-2 footer-block-title">
        <a href="<?php echo $item->url; ?>">
          <h5>
            <?php echo $item->title; ?>
          </h5>
        </a>
        <hr>
        <?php
        if(isset($item->children) && is_array($item->children) && count($item->children)) {
        ?>
            <ul class="">
        <?php
          foreach($item->children as $child) {
           ?>
              <li class="">
                <a href="<?php echo $child->url; ?>" class="footer-submenu-link"><?php echo $child->title; ?></a>
              </li>
           <?php
          }
          ?>
            </ul>
          <?php
        }
        ?>
      </div>
          <?php
        }
      }

    }
  }
}

?>
    </div>
    <hr class="separator-footer-block">
    <!-- /.row -->
    <div class="row footer-block-container footer-block-container-bottom">
      <div class="col-md-2 col-md-offset-2 col-xs-12 footer-block-logo">
        <img src="<?php bloginfo("template_directory"); ?>/images/footer/logo-group-footer.png" class="footer-logo">
      </div>
      <div class="col-md-2 col-xs-12 footer-block-social">
        <a href="<?php bloginfo("home"); ?>/blog/"><h5 class="footer-blog-title">blog</h5></a>
        <h5>Suivez-nous</h5>
        <ul>
          <li><a href="https://www.paprec.com/fr" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/images/footer/picto-social/paprec-site.png"></a></li>
          <li><a href="https://fr.linkedin.com/company/paprec" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/images/footer/picto-social/paprec-linkedIn.png"></a></li>
          <li><a href="https://plus.google.com/+paprec/posts" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/images/footer/picto-social/paprec-google-plus.png"></a></li>
          <li><a href="https://www.youtube.com/user/paprecgroup" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/images/footer/picto-social/paprec-youtube.png"></a></li>
          <li><a href="https://fr.pinterest.com/paprecgroup/" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/images/footer/picto-social/paprec-pinterest.png"></a></li>
          <li><a href="https://twitter.com/Paprec_Group" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/images/footer/picto-social/paprec-twitter.png"></a></li>
        </ul>
      </div>
      <div class="col-md-2 col-xs-12 footer-block-partner">
        <ul>
          <li><a href="<?php echo EASY_RECYCLAGE_STORE_URL; ?>/souscription/connexion">Accès Partenaire</a></li>
          <!-- <li><a href="#">Accès clients</a></li> -->
        </ul>
      </div>
      <div class="col-md-2 col-xs-12 footer-block-contact">
        <p>&copy; 2016 - Paprec Group</p>
        <a href="<?php bloginfo("home"); ?>/mentions-legales/">Mentions légales</a><br>
        <a href="mailto:easyrecyclage@paprec.com">Contactez-nous</a>
      </div>
    </div><!-- /.row -->
    <br>
  </div><!-- /.container -->
</footer><!-- /.footer -->
<?php wp_footer(); ?>
<script>
  (function ($){

    //fancybox
    $(".modal-call-button").fancybox({
      maxWidth: 800,
      maxHeight: 700,
      tpl: {
//        closeBtn: '<div class="modal-close-button"><img src="<?php //echo EASY_RECYCLAGE_STORE_URL; ?>///assets/img/btn-close.png"></div>'
        closeBtn: '<div class="modal-close-button"><img src="<?php bloginfo("template_directory"); ?>/images/btn-close.png"></div>'
      }
    });

    $(".modal-button").fancybox({
      maxWidth: 710,
      closeBtn: false
    });

    $('.modal-service-action').fancybox({
      maxWidth: 670,
      maxHeight: 400,
      tpl: {
        closeBtn: '<div class="modal-close-button"><img src="<?php bloginfo("template_directory"); ?>/images/btn-close.png"></div>'
      },
      helpers: {
        overlay: {
          locked: false
        }
      }
    });

      $(".modal-other-services-button").fancybox({
          maxWidth: 800,
          maxHeight: 700,
          tpl: {
              closeBtn: '<div class="modal-close-button"><img src="<?php bloginfo("template_directory"); ?>/images/btn-close.png"></div>'
          }
      });


<?php
/*

    $('#menu-nav_header').append('<li class="menu-item menu-item-type-link-paprec-web-site"><a href="https://www.paprec.com/fr" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/images/logo/logo-paprec-group.png"></a></li><li class="menu-item menu-item-type-post_type menu-item-object-page btn-collaborateur"><a href="<?php echo EASY_RECYCLAGE_STORE_URL; ?>/souscription/connexion" type="button" class="modal-button-login btn-collaborateur">Accès Partenaire</a></li>');
*/
?>

<?php if(is_front_page() || is_page('offre')) { ?>


      $('.egd-cookie-accept').on('click', function(){
          $('.egd-cookie-notification').hide();
          Cookies.set('egd-cookie-notification', true);
      });
      if(! Cookies.get('egd-cookie-notification')) {
          $('.egd-cookie-notification').show();
      }

    $('#formSubscription').on('submit', function() {
      if($('#form_postalCode').val() != '' && $('#selectSizeRange').val() != '' && $('#selectSizeRange').val() != 'max') {
        return true
      }
      return false;
    });

    $.ajax({
      url: "<?php echo EASY_RECYCLAGE_STORE_URL; ?>/subscription/sizeRangeList",
      dataType: 'json'
    }).done(function (data) {
      var maxEnd = 0;
      $.each(data.sizeRanges, function(){
        if(parseInt(this.end) > maxEnd)
          maxEnd = parseInt(this.end);
        $('#selectSizeRange').append('<option value="' + this.id + '">' + this.name + '</option>');
      });
      maxEnd++;
      $('#selectSizeRange').append('<option value="max">Plus de ' + maxEnd + ' employés</option>');
    });


      $("#selectPostalCode").select2({
        placeholder: "Votre code postal",
        language: "fr",
        theme: "bootstrap",
        width: 231,
        ajax: {
          url: "<?php echo EASY_RECYCLAGE_STORE_URL; ?>/souscription/codePostal",
          dataType: 'json',
          delay: 250,
          data: function (params) {
            return {
              q: params.term, // search term
              page: params.page
            };
          },
          processResults: function (data, params) {
            params.page = params.page || 1;

            return {
              results: data.items,
              pagination: {
                more: (params.page * 30) < data.total_count
              }
            };
          },
          cache: true
        },
        escapeMarkup: function (markup) {
          return markup;
        }, // let our custom formatter work
        minimumInputLength: 2,
        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
      });

      $("#selectPostalCode").on('select2:select', function () {

        $('#form_postalCode').val($(this).val());

      });

      $('#selectSizeRange').on('change', function(){
        if($(this).val() == 'max') {
          $('.modal-call-button:first').attr('href', $('.modal-call-button:first').attr('href') + '?sizeRange=max');
          $('.modal-call-button:first').click();
        }
      });

      function formatRepo(repo) {
        if (repo.loading) return repo.text;

        var markup = "<div class='select2-result-repository clearfix'>" +
                "<div class='select2-result-repository__meta'>" +
                "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";

        return markup;
      }

      function formatRepoSelection(repo) {
        return repo.full_name || repo.text;
      }
      <?php } ?>

      <?php 
      if(is_page('offre')) {
?>

            /**
            * Pour Notre Offre
            */
          var $frame = $('#offerProductTab');
          var $slidee = $frame.children('ul').eq(0);
          var $wrap = $frame.parent();

          // Call Sly on frame
          $frame.sly({
            horizontal: 1,
            itemNav: 'basic',
            smart: 1,
            activateOn: 'click',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,
      //      startAt: 0,
            scrollBy: 1,
            activatePageOn: 'click',
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,
            prev: $wrap.find('.prev'),
            next: $wrap.find('.next')
          }, {
            active: function(e, item){
                var scrollPos = $(document).scrollTop();
                window.location.hash = $frame.find('li.active a').data('target');
                $(document).scrollTop(scrollPos);
              $('.tab-content').removeClass('active');
              $($frame.find('li.active a').data('target')).addClass('active');

              removeClassPrevAndNext(window.location.hash);

            },
            load: function(e, item) {    
                if(window.location.hash != '') {


                  $('.tab-title').removeClass('active');
                  $('.tab-content').removeClass('active');
                  $(window.location.hash).addClass('active');
                  $('#productTabTitle_' + window.location.hash.replace('#', '')).addClass('active');

                  $frame.sly('toStart', $(window.location.hash).data('tab-id'));
                  moveCursor(0, $(window.location.hash).data('tab-id'));

                }
            }
          });


            var firstItem = $('.tab-title-button').first().data('target');
            var lastItem = $('.tab-title-button').last().data('target');

          /* funciton remove class flech */
          function removeClassPrevAndNext(idBox) {
            
            $('button.prev').removeClass('disable-background-image')
            $('button.next').removeClass('disable-background-image');

            if ((idBox == firstItem && $(idBox).hasClass("active")) || idBox == '') {

                return $('button.prev').addClass('disable-background-image');

              } else if (idBox == lastItem && $(idBox).hasClass("active")) {

                return $('button.next').addClass('disable-background-image');

              }
          

          }

          function moveCursor(start, end) {
            if(start == 0) {
              $frame.sly('next');
            }
            if( start < end) {
              j = end - start;
              for(i=0; i < j; i++) {
                $frame.sly('next');
              }
            } 
            else if(start > end) {
              j = start - end;
              for(i=0; i < j; i++) {
                $frame.sly('prev');
              }
            }
            removeClassPrevAndNext(window.location.hash);
          }

          /* masquer la fleche de navigation des type de box lors du chargement de la page offre */
          removeClassPrevAndNext(window.location.hash);


<?php
      }
      ?>

          /* lien de redirection vers le type de box */
          $('.footer-submenu-link').on('click', function(e){

            var h = $(this).prop('hash').replace('#', '');

            $('#offerProductTabContent div.tab-content').each(function(){
              if(h == $(this).attr('id')) {
                    $('.tab-title').removeClass('active');
                    $('.tab-content').removeClass('active');
                    $('#' + h).addClass('active');
                    $('#productTabTitle_' + h).addClass('active');
                    
              }
            });
<?php 
      if(is_page('offre')) {
?>
            $frame.sly('toStart', $('#' + h).data('tab-id'));
            moveCursor($(window.location.hash).data('tab-id'), $('#' + h).data('tab-id'));
<?php
      }
?>
          });
<?php if(is_single()) {
  ?>
  var imgPost = $("#blockImagPostID").find('img');
  if (imgPost) {
    var imgPostHeight = imgPost.height()/2;
    $("#blockImagPostID").find('img').css( "margin-top", "-"+imgPostHeight+"px" );
  }

  <?php
}
?>

      $('.like-button').on('click', function(e){

          e.preventDefault();
          var myButton = $(this);


          var url = myButton.data('target');
          var name = null;
          if(url != null) {
              name = url.substring(url.lastIndexOf("/")+1, url.length);
          }

          var likeCookie = Cookies.get('like_counter_' + name);

          if (typeof likeCookie == 'undefined' && name != null) {

              if(!likeCookie) {
                  $.getJSON($(this).data('target'), function(data) {

                      Cookies.set('like_counter_' + name, true, {expires: 365});

                      myButton.addClass('disabled');
                      myButton.data('target', null);
                      myButton.parent().find('.like-value').text('+' + data.likeCounter);
                  });
              }

          }

      })

  })(jQuery);
</script>
</body>
</html>
