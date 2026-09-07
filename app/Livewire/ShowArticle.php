<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Categories;
use Livewire\Component;
use Livewire\Attributes\Url;

class ShowArticle extends Component
{
    #[Url]
    public $categorySlug = null;
    public function render()
    {   
        $categories = Categories::all();

        if(!empty($this->categorySlug))
            {
               $category = Categories::where('slug',$this->categorySlug)->first();
               
                if(empty($category))
                    {
                        abort(404);
                    }

               $articles = Article::orderBy('created_at','DESC')
                        ->where('category_id',$category->id)
                        ->where('status',1)
                        ->get();

            }else{
                $articles = Article::orderBy('created_at','DESC')
                        ->where('status',1)
                        ->get();
            }

             $latestarticles = Article::orderBy('created_at','DESC')
                        ->where('status',1)
                        ->get()
                        ->take(3);
                       
        
        return view('livewire.show-article',[
            'articles' =>  $articles,
             'categories' =>  $categories,
             'latestarticles' =>  $latestarticles
        ]);
    }
}
