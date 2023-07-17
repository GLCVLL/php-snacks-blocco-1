<?php

// Creazione dell'array delle partite
$games = [
    ['squadra_casa' => 'Olimpia Milano',
     'squadra_ospite' => 'Cantù',
     'punti_casa' => 55,
     'punti_ospite' => 60],

    ['squadra_casa' => 'Roma',
     'squadra_ospite' => 'Napoli',
     'punti_casa' => 70,
     'punti_ospite' => 68],

    ['squadra_casa' => 'Bologna',
     'squadra_ospite' => 'Venezia',
     'punti_casa' => 82,
     'punti_ospite' => 78]
];

// Stampo le partite
foreach ($games as $game){
    echo $game ['squadra_casa']. '-' .$game ['squadra_ospite']. ' | ' .$game ['punti_casa']. '-' .$game ['punti_ospite']. '<br>';

};

?>