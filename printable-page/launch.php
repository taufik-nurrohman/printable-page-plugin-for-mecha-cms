<?php

Weapon::add('shield_before', function() {
    $config = Config::get();
    $request = Request::get();
    if(isset($request['print']) && ((string) $request['print'] == '1' || (string) $request['print'] == 'true')) {
        if($config->page_type == 'article' || $config->page_type == 'page') {
            Filter::add('shield:path', function() {
                return PLUGIN . DS . basename(__DIR__) . DS . 'workers' . DS . 'page.php';
            });
        }
    }
});

Route::accept($config->manager->slug . '/plugin/' . basename(__DIR__) . '/update', function() use($config, $speak) {
    if( ! Guardian::happy()) {
        Shield::abort();
    }
    if($request = Request::post()) {
        Guardian::checkToken($request['token']);
        File::write($request['css'])->saveTo(PLUGIN . DS . basename(__DIR__) . DS . 'shell' . DS . 'print.css');
        Notify::success(Config::speak('notify_success_updated', array($speak->plugin)));
        Guardian::kick(dirname($config->url_current));
    }
});