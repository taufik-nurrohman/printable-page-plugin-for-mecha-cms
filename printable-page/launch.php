<?php

$print = Request::get('print', false);
if($print === true || $print > 0) {
    if(Mecha::walk(glob(POST . DS . '*', GLOB_NOSORT | GLOB_ONLYDIR))->has(POST . DS . $config->page_type)) {
        Filter::remove($config->page_type . ':content', 'do_toc'); // Remove TOC filter ...
        Filter::remove($config->page_type . ':content', 'do_page_splitter'); // Remove page splitter filter ...
        Filter::add('shield:path', function() {
            return __DIR__ . DS . 'workers' . DS . 'page.php';
        });
    }
}