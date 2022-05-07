<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Models\Cart;
use App\Models\Models\Stock;

class ShopController extends Controller
{
    public function index() //追加
   {
        $stocks = Stock::Paginate(6); //Eloquantで検索
        return view('shop',compact('stocks')); 
   }
   
   public function myCart()
   {
       $my_carts = Cart::all();
       return view('mycart',compact('my_carts'));
       
   }
}
