<?php
// importo
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/Bed.php';
require_once __DIR__ . '/../models/Food.php';
require_once __DIR__ . '/../models/Game.php';

// creo istanze categoria
$dog = new Category('Dog');
$cat = new Category('Cat');


//prodotti
$frisbee = new Game('Frisbee Flyer Extreme', 'KONG', '28,90 €', 'Il frisbee KONG Extreme Flyer è un divertente gioco per cani progettato con la gomma Extreme ultra resistente per sopportare le esigenze dei cani a cui piace molto mordere.', 'https://arcaplanet.vtexassets.com/arquivos/ids/223724/kong-cane-flyer-extreme.jpg?v=1763255506', 'nero', 'plastica', $dog, 'gioco');


$food_umido = new Food('V-Diet Gastrointestinal Low', 'ROYAL CANIN', '4,99 €', 'cibo umido per il tuo cane.', 'https://arcaplanet.vtexassets.com/arquivos/ids/250349/royal-canin-veterinary-diet-cane-gastrointestinal-low-fat.jpg?v=1763308746', 'umido', '2024', $dog, 'cibo');

$cuccia = new Bed('Cuccia Ciambella Pelosa', 'LUNA E TEO', '29,90 €', 'Soffice cuccia pelosa in grado di offrire a cani e gatti un posticino morbido e accogliente in cui riposarsi, per recuperare tutte le energie. Prodotto dotato di bordo rialzato ed imbottito.', 'https://arcaplanet.vtexassets.com/arquivos/ids/277241/luna-e-teo-cuccia-pelosa-color-blu.jpg?v=1763255813', 'azzurro', '40cmx60cm', 'morbido', $cat, 'cuccia');

// array prodotti
$products = [$frisbee, $food_umido, $cuccia];
