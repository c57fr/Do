<?php

// $q pour Question
// $q = 'select nom from transports limit 99';
// $q = 'select title, slug from categories';
$q = 'select nom, email from clients';

echo '<mark>';
echo $q;
echo '</mark>';

// $r pur Réponse
$r = $cnx->query( $q )
         ->fetchAll( PDO::FETCH_OBJ );

// Affichage Réel
affR( $r );


