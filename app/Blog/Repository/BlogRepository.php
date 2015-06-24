<?php namespace App\Blog\Repository;

use App\Article as Article;
use App\Blog\Interfaces\BlogInterface;
use App\Blog\Validators\BlogValidation;

class BlogRepository implements BlogInterface {


	public function __construct(BlogValidation $validate){

		$this->validate = $validate;

	}
	
	public function blogAll() {

		return Article::all();

	}

	public function blogById($id) {

		return Article::findOrFail($id);

	}

	public function blogCreate() {}

	public function blogStore() {

		$check = $this->validate->validateStore();

		if(empty($check['errors']->all())){

			$article = Article::create($check['data']);

			\Event::fire(new \App\Events\BlogCreated($article));

			return $article;

		}
		else
		{		
		
			return $check['errors'];

		}

	}

	public function blogUpdate($id) {

		$check = $this->validate->validateUpdate();

		if(empty($check['errors']->all())){

			$article = Article::findOrFail($id);

			$article->title = $check['data']['title'];

			$article->content = $check['data']['content'];

			$article->save();

			return $article;

		}
		else
		{		
		
			return $check['errors'];

		}



	}

	public function blogDelete($id) {

		$article = Article::find($id);

		if(!empty($article)){

			\Event::fire(new \App\Events\blogDeleted($id));

			$article->delete();	
			
			return 'Deleted';	
		
		}
		else
		{
			return 'Not found';
		}	

	}

}