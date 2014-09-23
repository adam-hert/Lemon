 <?php

 //services for calling data

 class LemonService
 {



 public static function getProducts(){

 	$lemonconfig = array(
    'shop' => 'adamtest.lemonstand.com',
    'key' => LEMONSTANDKEY,
    'secret' => LEMONSTANDSECRET,
    'token' => LEMONSTANDTOKEN
);



 	$lemonclient= new \lemonstand\sdk\Client($lemonconfig);

 	$products = $lemonclient->get('/products');

 	foreach($products['data'] as $product)
 	{
 		$results = DB::statement("INSERT INTO products ( id, name, base_price ) VALUES ( ?, ?, ?)
			ON DUPLICATE KEY UPDATE base_price = ?", array($product['shop_product_type_id'],$product['name'],$product['base_price'],$product['base_price']));

 	}


 	return $products['headers'];

 }


}


?>
