<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private CategoryRepository $repository;

    public function __construct()
    {
        $this->repository = new CategoryRepository();
    }

    public function store(Request $request)
    {
        $category = $this->repository->createNewCategory($request);
        return response()->json($category, 201);
    }

    //Buscar todos os Produtos
    public function index()
    {
        $category = $this->repository->getAllCategories();
        return response()->json($category, 200);
    }

    // Buscar Produtos pelo ID
    public function show(string $id)
    {
        $category = $this->repository->getOneCategory($id);
        return response()->json($category, 200);
    }
}
