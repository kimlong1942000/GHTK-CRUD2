<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use Illuminate\Support\Facades\Hash;

class foodController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        
        $data = $request->all();

        food::create($data);
        echo"success create food";
    }
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $food = food::findOrFail($id);

        // điều hướng đến view edit food và truyền sang dữ liệu về food muốn sửa đổi
        return view('edit', compact('food'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $food = food::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        $data = request()->except(['_token']);


        // Update food
        food::whereId($id)->update($data);
        echo"success update food";
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $food = food::findOrFail($id);

        $food->delete();
        echo"success delete food";
    }

    public function index(){
        // lấy ra toàn bộ food
        $foods = food::all();
        //dd($foods);

        // trả về view hiển thị danh sách food
        return view('index', compact('foods'));
    }



}