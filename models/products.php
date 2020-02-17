<?php
    class Products{
        public $id;
        public $name;
        public $image;
        public $newprice;
        public $oldprice;
        public $brand;
        public $category;
        public $isshow;
        public $details;
        function __construct($id,$name,$image,$newprice,$oldprice,$brand,$category,$isshow,$details)
        {
            $this->id = $id;
            $this->name = $name;
            $this->image = $image;
            $this->newprice = $newprice;
            $this->oldprice = $oldprice;
            $this->brand = $brand;
            $this->category = $category;
            $this->isshow = $isshow;
            $this->details = $details;
        }
        static function all(){
            $list = [];
            $db = DB::getInstance();
            $rq = $db->query("SELECT * FROM products WHERE isshow = 1");
            foreach ($rq->fetchAll() as $item) {
                $list[] = new Products($item['id'],$item['name'],$item['image'],$item['newprice'],$item['oldprice'],$item['brand'],$item['category'],$item['isshow'],$item['details']);
            }
            return $list;
        }
        static function find($id){
            $db = DB::getInstance();
            $req = $db->prepare("SELECT * FROM products WHERE isshow = 1 AND id = :id");
            $req->execute(array("id" => $id));
            $item = $req->fetch();
            if (isset($item['id'])) {
                return new Products($item['id'],$item['name'],$item['image'],$item['newprice'],$item['oldprice'],$item['brand'],$item['category'],$item['isshow'],$item['details']);
            }
            return null;
        }
    }
?>
