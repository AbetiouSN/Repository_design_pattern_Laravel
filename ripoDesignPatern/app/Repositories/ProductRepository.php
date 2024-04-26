<?php

namespace App\Repositories;

use App\Models\Product;
 class ProductRepository implements RepositoryInterface {
//class ProductRepository{

    public function all(){
        return Product::all();
    }

    public function create(array $data){

        return Product::create($data);
    }
        public function update(array $data,$id){
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
    }

    public function find($id) {
        return Product::findOrFail($id);
    }


}
