<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Wilder';
$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('home.html.twig', ['name' => $name]);
echo $twig->render('products.html.twig', ['products' => $products]);
