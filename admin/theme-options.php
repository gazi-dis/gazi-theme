<?php 
/**
 *
 * .
 * ├── wp-content
 * |   ├── themes
 * |   |   ├── theme-name
 * |   |   |   ├── style.css
 * |   |   |   ├── screenshot.png
 * |   |   |   ├── functions.php <--------- Open via Text Editor
 * |   |   |   ├── ..
 * |   |   |   ├── ...
 *
 */

/**
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */
require_once get_theme_file_path() .'/admin/codestar-framework.php';

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Tema Ayarları',
    'menu_slug'  => 'tema-ayarlari',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
	'id' => 'tab1',
    'title'  => 'Genel Ayarlar',
  ) );

  
  // Header Ayarlari
  CSF::createSection( $prefix, array(
    'parent' => 'tab1', // The slug id of the parent section
    'title'  => 'Header Ayarları',
    'fields' => array(

      // Logo
      array(
        'id'    => 'logo',
        'type'  => 'upload',
		'library'   => 'image',
        'title' => 'Logo',
      ),
	  
	  // Sag Kisim
      array(
        'id'    => 'sag-kisim',
        'type'  => 'text',
        'title' => 'Sağ Kısım',
      ),

    )
  ) );
  
  // Slider
  CSF::createSection( $prefix, array(
    'parent' => 'tab1', // The slug id of the parent section
    'title'  => 'Anasayfa Ayarları',
    'fields' => array(

      // Ana Yazi
      array(
        'id'    => 'ana-yazi',
        'type'  => 'textarea',
        'title' => 'Anasayfa Yazısı',
      ),
	  // Calismalari Ziyaret Et
      array(
        'id'    => 'calisma-ziyaret',
        'type'  => 'textarea',
        'title' => 'Daha Fazla Butonu',
      ),
      // hizmet-aciklama
      array(
        'id'    => 'hizmetler-aciklama',
        'type'  => 'textarea',
        'title' => 'Hizmetler Açıklaması',
      ),
      // Hizmet 1
      array(
        'id'    => 'hzm-1',
        'type'  => 'textarea',
        'title' => 'Hizmet 1 Başlık',
      ),
      // Hizmet 2
      array(
        'id'    => 'hzm-2',
        'type'  => 'textarea',
        'title' => 'Hizmet 2 Başlık',
      ),
      // Hizmet 3
      array(
        'id'    => 'hzm-3',
        'type'  => 'textarea',
        'title' => 'Hizmet 3 Başlık',
      ),
      // Hizmet 1 Aciklama
      array(
        'id'    => 'hzm-1-ac',
        'type'  => 'textarea',
        'title' => 'Hizmet 1 Açıklama',
      ),
      // Hizmet 2 Aciklama
      array(
        'id'    => 'hzm-2-ac',
        'type'  => 'textarea',
        'title' => 'Hizmet 2 Açıklama',
      ),
      // Hizmet 3 Aciklama
      array(
        'id'    => 'hzm-3-ac',
        'type'  => 'textarea',
        'title' => 'Hizmet 3 Açıklama',
      ),
      // Hakkimizda Baslik
      array(
        'id'    => 'hakkimizda-baslik',
        'type'  => 'textarea',
        'title' => 'Hakkımızda Başlık',
      ),
      // hakkimizda icerik
      array(
        'id'    => 'hakkimizda-icerik',
        'type'  => 'textarea',
        'title' => 'Hakkımızda İçerik',
      ),
      // yaptigimiz isler
      array(
        'id'    => 'yaptigimiz-isler',
        'type'  => 'textarea',
        'title' => 'Yaptığımız İşler',
      ),
      // yaptigimiz isler aciklama
      array(
        'id'    => 'isler-aciklama',
        'type'  => 'textarea',
        'title' => 'Yaptığımız İşler Açıklama',
      ),
      // nasil calisiyoruz
      array(
        'id'    => 'nasil-calisiyoruz',
        'type'  => 'textarea',
        'title' => 'Nasıl Çalışıyoruz',
      ),
      // ekibimiz aciklama
      array(
        'id'    => 'ekibimiz-aciklama',
        'type'  => 'textarea',
        'title' => 'Ekibimiz Açıklama',
      ),
      // iletisime gec aciklama
      array(
        'id'    => 'iletisime-gec-aciklama',
        'type'  => 'textarea',
        'title' => 'İletişime Geç Açıklama',
      ),


    )
  ) );
  
  
  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}




// A Custom function for get an option
if ( ! function_exists( 'gazi_get_option' ) ) {
  function gazi_get_option( $option = '', $default = null ) {
    $options = get_option( 'my_framework' ); // Attention: Set your unique id of the framework
    return ( isset( $options[$option] ) ) ? $options[$option] : $default;
  }
}
?>