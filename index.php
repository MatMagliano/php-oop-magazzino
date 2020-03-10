<?php

require_once 'classes/Store.php';
require_once 'classes/Comics.php';
require_once 'classes/Manga.php';

$store = new Store('Thor', 'Comics', 250, '5.00€', 'Marvel');

var_dump($store);