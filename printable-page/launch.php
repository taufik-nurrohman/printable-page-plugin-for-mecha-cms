<?php

Weapon::add('shield_before', function() {
    $config = Config::get();
    $request = Request::get();
    if(isset($request['print']) && ($request['print'] > 0 || $request['print'] === true)) {
        if($config->page_type === 'article' || $config->page_type === 'page') {
            Filter::add('shield:path', function() {
                return PLUGIN . DS . basename(__DIR__) . DS . 'workers' . DS . 'page.php';
            });
        }
    }
});