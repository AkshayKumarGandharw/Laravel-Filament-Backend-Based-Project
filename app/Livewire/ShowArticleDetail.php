<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowArticleDetail extends Component
{
      public $blogId = null;

     public function mount($id){
        
         $this->blogId = $id;

     }
    public function render()
    {
        $article = Article::select('articles.*','categories.name as category_name')
        ->leftJoin('categories','categories.id','articles.category_id')
        ->findOrFail($this->blogId);
      

       // $article = Article::findOrFail( $this->articleId);
        return view('livewire.show-article-detail',[
            'article' =>  $article
            
        ]);
    }
}
