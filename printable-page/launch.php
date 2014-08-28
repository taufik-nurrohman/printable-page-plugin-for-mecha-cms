<?php

Weapon::add('shield_before', function() {
    $config = Config::get();
    $request = Request::get();
    if(isset($request['print']) && ($request['print'] == '1' || $request['print'] == 'true')) {
        if($config->page_type == 'article' || $config->page_type == 'page') {
            Filter::add('shield:path', function() {
                return PLUGIN . DS . 'printable-page' . DS . 'workers' . DS . 'page.php';
            });
        }
    }
});

Route::accept($config->manager->slug . '/plugin/printable-page/update', function() use($config, $speak) {
    if( ! Guardian::happy()) {
        Shield::abort();
    }
    if($request = Request::post()) {
        Guardian::checkToken($request['token']);
        File::write($request['css'])->saveTo(PLUGIN . DS . 'printable-page' . DS . 'shell' . DS . 'print.css');
        Notify::success(Config::speak('notify_success_updated', array($speak->plugin)));
        Guardian::kick(dirname($config->url_current));
    }
});