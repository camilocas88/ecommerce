<?php
require('CardId.php');

echo '<h1>CRUD  CON MVC DE LA TABLA STATUS</h1>';

$card = new CardId();
$card_data = $card->read();
var_dump($card_data);