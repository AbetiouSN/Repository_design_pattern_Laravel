<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService){
        $this->productService = $productService;
    }
    public function all(){
//        dd($this->productService->all());
        return response()->json($this->productService->all());
    }
    public function create(Request $request){
       $product =  $this->productService->create($request);
       return response()->json($product ,202);
    }


    public  function update(Request $request , $id) {
        $produit = $this->productService->update($request,$id);
        return response()->json($produit);
    }
    public function delete($id){
        $this->productService->delete($id);
        return response()->json(['message'=>'Product deleted successfully']);
    }

    public function find($id){
        return response()->json($this->productService->find($id),200);
    }

}
