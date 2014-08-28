<!DOCTYPE html>
<html dir="<?php echo $config->language_direction; ?>">
  <head>
    <meta charset="<?php echo $config->charset; ?>">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <link href="<?php echo $config->url; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <title><?php echo $speak->plugin_printable_page_title_printing . strip_tags($config->page_type == 'article' ? $article->title : $page->title); ?></title>
    <?php echo Asset::stylesheet(PLUGIN . DS . 'printable-page' . DS . 'shell' . DS . 'print.css'); ?>
  </head>
  <body>
    <div class="print-actions"><a href="javascript:window.print();"><?php echo $speak->plugin_printable_page_title_print; ?></a></div>
    <h1 class="page-title"><?php echo $config->page_type == 'article' ? $article->title : $page->title; ?></h1>
    <div class="page-content p"><?php echo $config->page_type == 'article' ? $article->content : $page->content; ?></div>
  </body>
</html>