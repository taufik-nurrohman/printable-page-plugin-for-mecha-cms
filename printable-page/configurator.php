<form class="form-plugin" action="<?php echo $config->url_current; ?>/update" method="post">
  <?php echo Form::hidden('token', $token); ?>
  <p><?php $the_css = File::open(PLUGIN . DS . File::B(__DIR__) . DS . 'assets' . DS . 'shell' . DS . 'print.css')->read(); echo $speak->plugin_printable_page_description_print_css; ?></p>
  <p><?php echo Form::textarea('css', $the_css, null, array('class' => array('textarea-block', 'textarea-expand', 'code'))); ?></p>
  <p><?php echo Jot::button('action', $speak->update); ?></p>
</form>