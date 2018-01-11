
<?php

include 'vendor/autoload.php';

// Create new Plates instance
$templates = new League\Plates\Engine('templates');
/*
$data['content'] = array(
    ['title' => 'Jonathan',
    'time' => 'test',
    'author' => 'test',
    'picture' => 'picture',
    'content' => 'content lorem lipsum'],
);*/

echo $templates->render('content');

?>


