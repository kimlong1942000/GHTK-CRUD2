<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\food;
class orderController extends Controller
{
    public function create($id){
        $food = food::findOrFail($id);
        return view('order', compact('food'));
    }
    public function store(Request $request, $id){
        
        $food = food::findOrFail($id);
        $data = $request->all();
        order::create($data);
        echo"success create food";
    }


    public function choice(){
        $foods = food::all();
        return view('choice', compact('foods'));
    }
    public function index(){
        $orders = order::all();
        return view('total', compact('orders'));
    }


    public function delete($id){
        $order = order::findOrFail($id);

        $order->delete();
        echo"success delete food";
    }
}
