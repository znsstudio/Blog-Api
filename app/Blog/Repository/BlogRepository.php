<?php

namespace app\Blog\Repository;

use App\Article as Article;
use App\Blog\Interfaces\BlogInterface;
use App\Blog\Validators\BlogValidation;

class BlogRepository implements BlogInterface
{
    public function __construct(BlogValidation $validate)
    {
        $this->validate = $validate;
    }

    /**
     * Return all articles.
     *
     * @return articles
     */
    public function blogAll()
    {
        return Article::all();
    }

    /**
     * Get article by id.
     *
     * @param int id
     *
     * @return result
     */
    public function blogById($id)
    {
        $article = Article::find($id);

        if (empty($article)) {
            return response('Not Found', 404);
        }

        return $article;
    }

    /**
     * Save article.
     *
     * @return article
     */
    public function blogStore()
    {
        $check = $this->validate->validateStore();

        if (empty($check['errors']->all())) {
            $article = Article::create($check['data']);

            \Event::fire(new \App\Events\BlogCreated($article));

            return $article;
        } else {
            return $check['errors'];
        }
    }

    /**
     * Update article by id.
     *
     * @param int id
     *
     * @return article
     */
    public function blogUpdate($id)
    {
        $check = $this->validate->validateUpdate();

        if (empty($check['errors']->all())) {
            $article = Article::findOrFail($id);

            $article->title = $check['data']['title'];

            $article->content = $check['data']['content'];

            $article->save();

            return $article;
        } else {
            return $check['errors'];
        }
    }

    /**
     * Delete article by id.
     *
     * @param int id
     *
     * @return status
     */
    public function blogDelete($id)
    {
        $article = Article::find($id);

        if (!empty($article)) {
            \Event::fire(new \App\Events\blogDeleted($id));

            $article->delete();

            return response('Deleted');
        } else {
            return response('Not Found', 404);
        }
    }
}
