<?php 

namespace App\Repositories;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryRepository 
{
    protected $category;

    public function __construct()
    {
        $this->category = app(Category::class);
    }    

    public function createNewCategory(Request $newCategory)
    {
        $category = $this->category->create($newCategory->all());
        return $category;
    }

    public function getAllCategories() 
    {
        $categories = $this->category->all();
        if($categories->isEmpty()){
            return ['data' => [], 'message' => 'Nenhuma Categoria Encontrada!'];
        }

        return ['data' => $categories, 
                'message' => 'Categoria(s) Encontrada(s)!']; 
    }

    public function getOneCategory(string $id)
    {
        $category = $this->category->find($id);

        if(empty($category)){
            return ['data' => [], 'message' => 'Categoria Não Encontrada!'];
        }

        return ['data' => $category, 'message' => 'Categoria Encontrada!']; 
    }
}