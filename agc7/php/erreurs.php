<?php namespace app;

//echo '<h3>Appel à une variable non définie</h3>';
//echo $x;

//echo '<hr><h3>Include d\'un fichier inexistant</h3>';
//include 'rrrr.php';

$fichierInexistant = ' inexistant.txt';
if ( ! file_exists( $fichierInexistant ) ) {
	echo 'Le fichier <b>' . $fichierInexistant . '</b> n\'existe pas !';
}
else {
	$fichier = fopen( $fichierInexistant, 'r' );
}
echo '<hr>';


function gestErr( $errNo, $errMsg )
{
	echo 'Valeurs incorrectes... Voici le code d\'erreur:<br>
<ul><li>Niveau d\'erreur: ' . $errNo . '</li>
<li>Description de l\'erreur: ' . $errMsg . '</li>
</ul>';
	//return true;
}

set_error_handler( __NAMESPACE__.'\gestErr');

$z = 0;
echo 5 / $z;


