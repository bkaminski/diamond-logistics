<!DOCTYPE html>
<html>
<head>
  <?php get_template_part( 'parts/page', 'header-tracking' ); ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script>WebFont.load({  google: {    families: ["Poppins:regular,italic,600,600italic"]  }});</script>
  <script>
  !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
  </script>
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php get_template_part( 'parts/page', 'main-nav' ); ?>