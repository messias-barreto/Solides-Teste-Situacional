<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    private UserRepository $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    //Buscar todos os Usuários
    public function index()
    {
        $product = $this->repository->getAllUsers();
        return response($product, 200);
    }

    // Buscar Usuários pelo ID
    public function show(string $id)
    {
        $product = $this->repository->getOneUser($id);
        return response($product, 200);
    }
}
