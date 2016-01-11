<?php $page = isset($article) ? $article : $page; ?>
<!DOCTYPE html>
<html dir="<?php echo $config->language_direction; ?>">
  <head>
    <meta charset="<?php echo $config->charset; ?>">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <link href="<?php echo $config->url; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <title><?php echo sprintf($speak->plugin_printable_page_title_printing, Text::parse($page->title, '->text')); ?></title>
    <?php echo Asset::stylesheet(File::D(__DIR__) . DS . 'assets' . DS . 'shell' . DS . 'print.css'); ?>
  </head>
  <body>
    <div class="print-action-group">
      <a href="javascript:window.print();"><?php echo $speak->plugin_printable_page_title_print; ?></a>
    </div>
    <h1 class="page-title"><?php echo $page->title; ?></h1>
    <div class="page-content"><?php echo $page->content; ?></div>
  </body>
</html>