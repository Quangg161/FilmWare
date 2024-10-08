<?php

require 'vendor/autoload.php';

use VfacTmdb\Factory;
use VfacTmdb\Search;
use VfacTmdb\Item;

// Initialize Wrapper
$tmdb = Factory::create()->getTmdb('d656138a1882e87bd35d3834f6035e72');

// Search a movie
$search    = new Search($tmdb);
$responses = $search->movie('star wars');

// Get all results
foreach ($responses as $response)
{
    echo $response->getTitle();
    echo "\n";
}
echo "\n";
echo "\n";
// Get movie information
$item  = new Item($tmdb);
$infos = $item->getMovie(11, array('language' => 'fr-FR'));
echo $infos->getTitle();
echo "\n";
echo "\n";
print_r($infos);