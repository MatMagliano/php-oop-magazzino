<?php

require_once 'classes/Graphic.php';
require_once 'classes/Comics.php';
require_once 'classes/Manga.php';

$thor = new Comics('Thor', 'comics', 250, '5.00€', 'Marvel');

var_dump($thor);
 $gundam = new Manga('Gundam 0079', 'manga', 250, '5.50€', 'Manga Planet');

var_dump($gundam);