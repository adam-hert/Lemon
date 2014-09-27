 <?php

 //services for calling data

 class LemonService
 {

       public static function updateProducts(){

       	$lemonconfig = array(
          'shop' => 'adamtest.lemonstand.com',
          'key' => LEMONSTANDKEY,
          'secret' => LEMONSTANDSECRET,
          'token' => LEMONSTANDTOKEN
        );

     	$lemonclient= new \LemonStand\sdk\Client($lemonconfig);

     	$products = $lemonclient->get('/products');

     	foreach($products['data'] as $product)
     	{
     		$results = DB::statement("INSERT INTO products ( id, name, base_price ) VALUES ( ?, ?, ?)
    			ON DUPLICATE KEY UPDATE base_price = ?", array($product['shop_product_type_id'],$product['name'],$product['base_price'],$product['base_price']));

     	}

     	return $products['headers'];
 }

      public static function listProducts()
      {
        $data = DB::table('products')->get();

        return $data;
      	
      }

      public static function max($array,$field)
      {
        $max =0;

        foreach($array as $iteration)
        {
          if($iteration->$field > $max)
          {
            $max = $iteration->$field;
          }



        }

        return $max;

      }



}


?>
