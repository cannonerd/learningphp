<?php
//this is the front controller file
require_once dirname(__DIR__) . '/vendor/autoload.php';
$app = new Silex\Application();
$app['debug'] = true;

$pages = array(
    array(
        'title' => 'The first page',
        'body' => '<p>Foo bar is here!</p>'
    ),
    array(
        'title' => 'The second page',
        'body' => '<p>Foo bar was here!</p>'
    )
);
$app->get('/test', function () use ($pages) {
    $outputs = "";
    foreach($pages as $page){
        $outputs .= $page['title'];
        $outputs .= $page['body'];

    }

    return $outputs;
});

$app->run();