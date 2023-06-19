<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    private ProductRepository $repository;

    public function __construct()
    {
        $this->repository = new ProductRepository();
    }

    //Buscar todos os Produtos
    public function index()
    {
        $product = $this->repository->getAllProducts();
        return response($product, $product['status']);
    }

    // Buscar Produtos pelo ID
    public function show(string $id)
    {
        $product = $this->repository->getOneProduct($id);
        return response($product, $product['status']);
    }

    public function getByCategory($category)
    {
        $product = $this->repository->getProductsByCategory($category);
        return response($product, $product['status']);
    }
}
