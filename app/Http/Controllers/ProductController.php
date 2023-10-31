<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('products.index',['products' =>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
  
        $validate_data=$request->validate([
            'name'=>['required'],
            'qty'=>['required'],
            'price'=>['required'],
            'description'=>['required'],
             ]);
            //  dd($validate_data);  
        // $data = $request->validate([
        //     'name' => 'required',
        //     'qty' => 'required|numeric',
        //     'price' => 'required|decimal:2',
        //     'description' => 'nullable'
        // ]);

        $data=Product::create([
            //database original name ' 
        'name'=>$validate_data['name'],
        'qty'=>$validate_data['qty'],
        'price'=>$validate_data['price'],
        'description'=>$validate_data['description'],
         ]);
      
        // $newProduct = Product::create($data);
        //  return response()->json(['data'=>$data]);
        return redirect(route('products.index'));
    }


    public function edit(Product $products){
        // dd($products);
        return view('products.edit',['products' =>$products ]);
    }

    public function update(Product $products,Request $request){
        
        $validate_data = $request->validate([
            'name'=>['required'],
            'qty'=>['required'],
            'price'=>['required'],
            'description'=>['required'],
             ]); 

             $products->update($validate_data);

             return redirect(route('products.index'))->with('success','product updates successfully');
    }

    public function destroy(Product $products){
        $products->delete();
        return redirect(route('products.index'))->with('success','product delete successfully');
    }
}
