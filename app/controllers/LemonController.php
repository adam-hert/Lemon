 <?php


 //controller for lemonstand store

 class LemonController extends BaseController {



 	//print import stats after updating local DB
 	public function updateProducts()
 	{

 		$data = LemonService::updateProducts();

 		return View::make('importstats')->with('data', $data);

 	}

 	//print out list of products from local DB
 	public function listProducts()
 	{
 		$data = LemonService::listProducts();

 		return View::make('displayProducts')->with('data',$data);



 	}

 	//print list of prices with bars relative to highest price
 	public function barGraph()
 	{
 		//All products
 		$data = LemonService::listProducts();

 		//highest price
 		$max = LemonService::max($data,'base_price');

 		return View::make('barGraph')->with('data',$data)->with('max',$max);

 	}





 }




?>