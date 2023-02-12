<?php
require_once './index.php';

class Product
{
    private string $title;
    private float $price;
    private array $components;

    function __construct (string $title, string $price, ?array $components = []) {
        $this->title = $title;
        $this->price = $price;
        $this->components = $components;
    }

    function getTitle ()  : string
    {
        return  $this -> title;
    }

    function getPrice ()  : int
    {
        return  $this -> price;
    }

    function getComponets () : array
    {
        return $this -> components;
    }

    function setPrice ($price)  : void
    {
        $this -> price = $price;
    }

}

class Cart
{
    private User $user;
    private  $products;
    private ?int $price;

    function __construct (User $user)
    {
        $this -> user = $user;
        $this -> products=[];
    }

    function showProducts ()  : array
    {
        return  $this -> products;
    }

    function addProduct (Product $item) : void
    {
        array_push($this -> products , $item);
    }


    function countSumBasket ()
    {
        $basketSum = 0;
        foreach($this -> products as $key => $item){
            if($item -> getComponets ()) {
                $components = array_sum($item ->  getComponets ());

                $item-> setPrice($item -> getPrice() + $components);
            }
            $basketSum += $item -> getPrice ();
        }
        return $basketSum;
    }

}

$user = new User ('admin','admin@admail.ru');

$components = [
    'mouse' => 5000,
    'keyboard' => 10000,
];

$computer = new Product('computer', 70000);
$computerMax = new Product('Game computer' , 150000 , $components);
$mouse = new Product('8 mouses',5000,[$components['mouse']]);

$cart = new Cart($user);

$cart-> addProduct($computer);
$cart-> addProduct($computerMax);
$cart-> addProduct($mouse);

echo $cart-> countSumBasket();
