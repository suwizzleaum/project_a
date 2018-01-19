
<?php

include 'vendor/autoload.php';

// Create new Plates instance
$templates = new League\Plates\Engine('templates');

echo $templates->make('sections/app.content');

?>


