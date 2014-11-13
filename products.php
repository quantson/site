<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=zappistore', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$response = $bdd->query('SELECT * FROM products');

while ($data = $response->fetch())
{
	echo '<div class="panel panel-default products item ' . $data['filters'] . '">';
	echo '<div class="panel-body"><image src="image/product/'. $data['logo_file'] . '.png"><div>' . $data['description_short'] .'</div></div>';
	echo '<div class="panel-footer">' . $data['title'] . '</div>';
	echo '</div>';  
}

$response->closeCursor();

?>