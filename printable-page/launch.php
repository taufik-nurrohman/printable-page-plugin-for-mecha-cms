<?php

Weapon::add('shield_before', function() use($config) {
    $print = Request::get('print', false);
    if($print === true || $print > 0) {
        if($config->page_type === 'article' || $config->page_type === 'page') {
            Filter::add('shield:path', function() {
                return PLUGIN . DS . File::B(__DIR__) . DS . 'workers' . DS . 'page.php';
            });
        }
    }
});