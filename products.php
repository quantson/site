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
?>	
    <div class="panel item panel-default products <?php echo $data['filters'] ?>">
      <div class='main'>
        <div class="panel-body">
            <image src="image/product/<?php echo $data['logo_file'] ?>.png">
            <div class="description_short"><?php echo $data['description_short'] ?></div>
          </div>
          <div class="panel-footer">
            <?php echo $data['title'] ?>
          </div>
        </div>
        <div class='slide'> 
          <div class="panel-body">
            <div class='row'>
              <div class='col-sm-8 title'><?php echo $data['title'] ?></div>
              <div class='col-sm-4 logo_small'>
                <image class='small' src="image/product/<?php echo $data['logo_file'] ?>.png">
              </div>
            </div>      
            <div class="description_long row"><?php echo $data['description_long'] ?></div>
            <div class="row buy"><div class='btn btn-sm'>From £1000</div></div>
          </div>
    	</div>
    </div>	
 <?php       
}

$response->closeCursor();

?>