<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Core\Number;


class homeController extends Controller
{
    public $categories = ['phones', 'watches', 'sports_wear', 'others'];
    public $products = [
        [ 'id' => 1 , 'name' => 'ice-watch1', 'price' => 200 , 'category' => 'watches' ],
        [ 'id' => 2 , 'name' => 'ice-watch2', 'price' => 200 , 'category' => 'watches' ],
        [ 'id' => 3 , 'name' => 'ice-watch3', 'price' => 200 , 'category' => 'watches' ],
        [ 'id' => 4 , 'name' => 'ice-watch4', 'price' => 200 , 'category' => 'watches' ],
        [ 'id' => 5 , 'name' => 'iPhone 5'  , 'price' => 2000, 'category' => 'phones' ],
        [ 'id' => 6 , 'name' => 'iPhone 6'  , 'price' => 2000, 'category' => 'phones' ],
        [ 'id' => 7 , 'name' => 'iPhone 7'  , 'price' => 2000, 'category' => 'phones' ],
        [ 'id' => 8 , 'name' => 'iPhone 8'  , 'price' => 2000, 'category' => 'phones' ],
        [ 'id' => 9 , 'name' => 'joggers 9' , 'price' => 300 , 'category' => 'sports_wear' ],
        [ 'id' => 10, 'name' => 'joggers 10', 'price' => 300 , 'category' => 'sports_wear' ],
        [ 'id' => 11, 'name' => 'joggers 11', 'price' => 300 , 'category' => 'sports_wear' ],
        [ 'id' => 12, 'name' => 'joggers 12', 'price' => 300 , 'category' => 'sports_wear' ]
    ];
    
    //
    public function getHomePage()
    {
        # code...
        return view('welcome',['categories'=>$this->categories,'products'=>$this->products]);
    }

    public function getProductById($id)
    {
        # code...
        // echo $id;
        return view('product-details',['categories'=>$this->categories,'product'=>$this->products[$id-1]]);

    }

}
