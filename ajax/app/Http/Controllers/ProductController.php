<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $file = $request->file('image');
        $filename = time().''.$file->getClientOriginalName();
        $filepath = $file->storeAs('products',$filename,'public');


        $product = new Product;
        $product->name = $request->name;
        $product->email = $request->email;
        $product->image = $filepath;
        $product->save();

        // return response()->json(['res=>Student Created Successfully']);
        return redirect('add-product')->with('updateproduct',"Product Added successfully");
    }

    public function getProducts()
    {
        $products = Product::all();
        return response()->json(['products'=>$products]);
    }

    public function getProductsdata($id)
    {
        $product = Product::where('id',$id)->get();
        return view('Product/edit-product',['product'=>$product]);
    }

    public function updateproduct(request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->email = $request->email;


        if($request->file('image'))
        {

            $file = $request->file('image');
            $filename = time().''.$file->getClientOriginalName();
            $filepath = $file->storeAs('products',$filename,'public');

            $product->image = $filepath;
        }



        $product->save();

        return response()->json(['result'=>'Product Updated']);
    }

    public function deletedata($id)
    {
        Product::where('id',$id)->delete();

        return response()->json(['result'=>'Product Deleted']);

    }
}
