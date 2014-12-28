<form class="form-plugin" action="<?php echo $config->url_current; ?>/update" method="post">
  <input name="token" type="hidden" value="<?php echo $token; ?>">
  <p><?php $the_css = File::open(PLUGIN . DS . basename(__DIR__) . DS . 'shell' . DS . 'print.css')->read(); echo $speak->plugin_printable_page_description_print_css; ?></p>
  <p><textarea name="css" class="textarea-block code"><?php echo Text::parse(Guardian::wayback('css', $the_css))->to_encoded_html; ?></textarea></p>
  <p><button class="btn btn-action" type="submit"><i class="fa fa-check-circle"></i> <?php echo $speak->update; ?></button></p>
</form>