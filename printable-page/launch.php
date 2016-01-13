<?php

$print = Request::get('print', 0);
if($config->is->post && ($print === true || $print > 0)) {
    Filter::remove($config->page_type . ':content', 'do_toc'); // Remove `do_toc` filter
    Filter::remove($config->page_type . ':content', 'do_page_splitter'); // Remove `do_page_splitter` filter
    Filter::add('shield:path', function() {
        return __DIR__ . DS . 'workers' . DS . 'page.php';
    });
}