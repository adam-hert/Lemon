 <?php


 //controller for lemonstand store

 class LemonController extends BaseController {




 	public function showProducts()
 	{


 		$data = LemonService::getProducts();

 		

 		return View::make('store')->with('data', $data);


 	}



 }




?>