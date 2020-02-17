<?php
    require_once('controllers/base_controller.php');
    require_once('models/products.php');

    class ProductsController extends BaseController
    {

        function __construct()
        {
            $this->folder = 'products';
        }
        public function index(){
            $products = Products::all();
            $data = array('products'=>$products);
            $this->render('index',$data);
        }
    }
?>