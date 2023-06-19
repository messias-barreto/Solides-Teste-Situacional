<?php 

namespace App\Repositories;
use App\Models\User;

class UserRepository 
{
    protected $user;

    public function __construct()
    {
        $this->user = app(User::class);
    }    

    public function getAllUsers() 
    {
        $users = $this->user->all();
        if($users->isEmpty()){
            return ['message' => 'Nenhum Usuário Cadastrado!', 
                    'status' => 404];
        }

        return ['data' => $users, 'message' => 'Usuário Encontrado!'];
    }

    public function getOneUser(string $id)
    {
        $user = $this->user->find($id);
        if(empty($user)) {
            return ['message' => 'Usuário Não Encontrado!', 
                    'status' => 404];
        }

        return ['data' => $user, 'message' => 'Usuário Encontrado!'];
    }
}