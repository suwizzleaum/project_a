
<?php

include '../vendor/autoload.php';
$templates = new League\Plates\Engine('../templates');
echo $templates->make('sections/app.content');
?>
