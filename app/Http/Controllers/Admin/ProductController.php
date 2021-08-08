<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\category;
class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view('admin.product.index',['product' => $products]);
    }
    public function remove($id){
        Product::destroy($id);
        return redirect()->back();
    }

    public function addFrom(){
        $category = category::all();
        return view('admin.product.add-form');
    }

    public function edit($id){
        $product = Product::find($id);
        if (!$product){
            return redirect()->back();
        }
        $cates = Category::all();
        return view('admin.product.edit',compact('product', 'cates'));
    }
}
?>
