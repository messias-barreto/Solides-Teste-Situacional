<?php 

namespace App\Repositories;
use App\Models\Product;

class ProductRepository 
{
    protected $product;

    public function __construct()
    {
        $this->product = app(Product::class);
    }    

    public function getAllProducts() 
    {
        $products = $this->product->all();
        if($products->isEmpty()){
            return ['data' => [], 
                    'message' => 'Nenhum Produto Encontrado!', 
                    'status' => 404];
        }

        return ['data' => $products, 
                'message' => 'Produto(s) Encontrado(s)!', 
                'status' => 200]; 
    }


    public function getOneProduct(string $id)
    {
        $product = $this->product->find($id);
        
        if(empty($product)){
            return ['data' => [], 
                    'message' => 'Produto Não Encontrado!', 
                    'status' => 404];
        }

        return ['data' => $product, 
                'message' => 'Produto Encontrado!', 
                'status' => 200]; 
    }


    public function getProductsByCategory(string $category)
    {
        $category = $this->product
                        ->where('category_id', $category)            
                        ->get();

        if($category->isEmpty()){
            return ['data' => [], 
                    'message' => 'Nenhum Produto Encontrado!', 
                    'status' => 404];
        }

        return ['data' => $category, 
                'message' => 'Categoria Encontrada!', 
                'status' => 200]; 
    }
}