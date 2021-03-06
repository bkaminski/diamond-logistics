<!DOCTYPE html>
<?php if ( is_front_page() ): ?>
  <html <?php language_attributes(); ?> data-wf-page="60ca25273308b083f7e4b13a" data-wf-site="60ca248e577cfad837d1b229">
<?php elseif ( is_page ('services') ): ?>
  <html <?php language_attributes(); ?> data-wf-page="60cb7d50b5130d70f147b445" data-wf-site="60ca248e577cfad837d1b229">
<?php elseif ( is_page ('about') ): ?>
  <html <?php language_attributes(); ?> data-wf-page="60cb79f38be728b86cfc986b" data-wf-site="60ca248e577cfad837d1b229">
<?php else: ?>
  <html <?php language_attributes(); ?>>
<?php endif; ?>
<head>
  <?php get_template_part( 'parts/page', 'header-tracking' ); ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <?php get_template_part( 'parts/page', 'favicons' ); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
  <script>WebFont.load({  google: {    families: ["Poppins:regular,italic,600,600italic"]  }});</script>
  <script>
      !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( 'parts/page', 'main-nav' ); ?>
