<?php

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();
echo $slug->slugify("Teste de acentuação slugify, será que funciona?");