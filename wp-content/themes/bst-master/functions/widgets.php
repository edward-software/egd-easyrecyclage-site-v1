<?php

function bst_widgets_init() {

  /*
  Sidebar (one widget area)
//   */
//  register_sidebar( array(
//    'name'            => __( 'Sidebar', 'bst' ),
//    'id'              => 'sidebar-widget-area',
//    'description'     => __( 'The sidebar widget area', 'bst' ),
//    'before_widget'   => '<section class="%1$s %2$s">',
//    'after_widget'    => '</section>',
//    'before_title'    => '<h4>',
//    'after_title'     => '</h4>',
//  ) );
  /*
  Footer (three widget areas)
   */
//  register_sidebar( array(
//    'name'            => __( 'Footer', 'bst' ),
//    'id'              => 'footer-widget-area',
//    'description'     => __( 'The footer widget area', 'bst' ),
//    'before_widget'   => '<div class="%1$s %2$s col-sm-4">',
//    'after_widget'    => '</div>',
//    'before_title'    => '<h4>',
//    'after_title'     => '</h4>',
//  ) );

  // add admin scripts

// add admin scripts
  add_action('admin_enqueue_scripts', 'upload_scripts');

  /**
   * Upload the Javascripts for the media uploader
   */
  function upload_scripts()
  {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('upload_media_widget', get_template_directory_uri() . '/js/upload-media.js', array('jquery'));

    wp_enqueue_style('thickbox');
  }
  /*******************
   * WIDGET ZONES
   *******************/
  /****** Base *******/
  /****** Home *******/
  /* section 2 */
  register_sidebar(array(
      'name' => 'home_widget_recycleAvecLaCorbeilleBleue',
      'before_widget' => '<div class="block-container">',
      'after_widget' => '</div>',
  ));
  /* section 3 */
  register_sidebar(array(
      'name' => 'home_widget_temoignage_titre',
      'before_widget' => '<div class="col-md-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'home_widget_temoignage_container',
      'before_widget' => '<div class="col-md-4 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 4 */
  /* title section */
  register_sidebar(array(
      'name' => 'home_widget_ilNousFontConfiance_titre',
      'before_widget' => '<div class="col-md-4 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section image customer */
  register_sidebar(array(
      'name' => 'home_widget_ilNousFontConfiance_img',
      'before_widget' => '',
      'after_widget' => '',
  ));
  /* section image customer */
  register_sidebar(array(
      'name' => 'home_widget_header',
      'before_widget' => '',
      'after_widget' => '',
  ));
    register_sidebar(array(
        'name' => 'home_widget_video',
        'before_widget' => '<div class="col-xs-12">',
        'after_widget' => '</div>',
    ));
  /****** OFFER *******/
  /* section Header */
  register_sidebar(array(
      'name' => 'offer_widget_header_titre',
      'before_widget' => '<div class="col-md-4 col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'offer_widget_header_textLeft',
      'before_widget' => '<div class="col-md-8 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 1 */
  register_sidebar(array(
      'name' => 'offer_widget_contenants_titre',
      'before_widget' => '<div class="col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 2 */
  register_sidebar(array(
      'name' => 'offer_widget_commentCaMarche_titre',
      'before_widget' => '<div class="col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'offer_widget_commentCaMarche_process',
      'before_widget' => '<div class="col-md-3">',
      'after_widget' => '</div>',
  ));
  /* section 3 */
  register_sidebar(array(
      'name' => 'offer_widget_recyclezAvecLaCorbeilleBleue_picto',
      'before_widget' => '<div class="col-md-4">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'offer_widget_recyclezAvecLaCorbeilleBleue_textLeft',
      'before_widget' => '<div class="col-md-8">',
      'after_widget' => '</div>',
  ));
  /****** TRANSITION *******/
  /* section Header */
  register_sidebar(array(
      'name' => 'transition_widget_header_titre',
      'before_widget' => '<div class="col-md-4 col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'transition_widget_header_textLeft',
      'before_widget' => '<div class="col-md-8 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 1 */
  register_sidebar(array(
      'name' => 'transition_widget_obligationReglementaire_blocHaut',
      'before_widget' => '<div class="block-header">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'transition_widget_obligationReglementaire_blocPrincipal',
      'before_widget' => '<div class="col-md-4 col-xs-6 block-content">',
      'after_widget' => '</div>',
  ));
  /* section 2 */
  register_sidebar(array(
      'name' => 'transition_widget_obligationReglementaire_blocBas_pictoCenter',
      'before_widget' => '<div class="col-md-4 col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'transition_widget_obligationReglementaire_blocBas_textLeft',
      'before_widget' => '<div class="col-md-8 col-xs-12 block-content">',
      'after_widget' => '</div>',
  ));
  /****** RSE *******/
  /* section Header */
  register_sidebar(array(
      'name' => 'politiqueRSE_widget_header_titre',
      'before_widget' => '<div class="col-md-4 col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'politiqueRSE_widget_header_textLeft',
      'before_widget' => '<div class="col-md-8 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 1 */
  register_sidebar(array(
      'name' => 'politiqueRSE_widget_programme_titre',
      'before_widget' => '<div class="col-md-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'politiqueRSE_widget_programme_blocContenu',
      'before_widget' => '<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">',
      'after_widget' => '</div>',
  ));
  /* section 2 */
  register_sidebar(array(
      'name' => 'politiqueRSE_widget_reverserWWF_imgCenter',
      'before_widget' => '<div class="col-md-4 col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'politiqueRSE_widget_reverserWWF_textLeft',
      'before_widget' => '<div class="col-md-8 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 3 */
  register_sidebar(array(
      'name' => 'politiqueRSE_widget_logoWWF_imgCenter',
      'before_widget' => '<div class="col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 4 */
  register_sidebar(array(
      'name' => 'politiqueRSE_widget_soutenirWWF_titre',
      'before_widget' => '<div class="col-md-8 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 5 */
  register_sidebar(array(
      'name' => 'politiqueRSE_widget_section_video',
      'before_widget' => '<div class="col-xs-12">',
      'after_widget' => '</div>',
  ));
  /****** RECYCLAGE *******/
  /* section Header */
  register_sidebar(array(
      'name' => 'recyclage_widget_header_titre',
      'before_widget' => '<div class="col-md-4 col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'recyclage_widget_header_textLeft',
      'before_widget' => '<div class="col-md-8 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 1 */
  register_sidebar(array(
      'name' => 'recyclage_widget_process_blocPrincipal',
      'before_widget' => '<div class="col-md-4  col-sm-6 clo-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 2 */
  register_sidebar(array(
      'name' => 'recyclage_widget_redirectionSiteGroup_titreLeft',
      'before_widget' => '<div class="col-md-8 clo-xs-12">',
      'after_widget' => '</div>',
  ));
  /****** ABOUT *******/
  /* section Header */
  register_sidebar(array(
      'name' => 'about_widget_header_titre',
      'before_widget' => '<div class="col-md-4 col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'about_widget_header_textLeft',
      'before_widget' => '<div class="col-md-8 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 1 */
  register_sidebar(array(
      'name' => 'about_widget_specialistDuRecyclage_titre',
      'before_widget' => '<div class="col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'about_widget_specialistDuRecyclage_blocPrincipal',
      'before_widget' => '<div class="col-md-6 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 2 */
  register_sidebar(array(
      'name' => 'about_widget_recyclerAvecLaCorbeilleBleue_titreLeft',
      'before_widget' => '<div class="col-md-8 col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 3 */
  register_sidebar(array(
      'name' => 'about_widget_decouvrerNosServices_titreCenter',
      'before_widget' => '<div class="col-xs-12">',
      'after_widget' => '</div>',
  ));
  /* section 4 */
  register_sidebar(array(
      'name' => 'about_widget_lesChiffres_titleCenter',
      'before_widget' => '<div class="col-xs-12">',
      'after_widget' => '</div>',
  ));
  register_sidebar(array(
      'name' => 'about_widget_lesChiffres_blocPrincipal',
      'before_widget' => '<div class="col-md-4">',
      'after_widget' => '</div>',
  ));
  /* section 5 */
  register_sidebar(array(
      'name' => 'about_widget_section_video',
      'before_widget' => '<div class="col-md-12">',
      'after_widget' => '</div>',
  ));

}
add_action( 'widgets_init', 'bst_widgets_init' );
