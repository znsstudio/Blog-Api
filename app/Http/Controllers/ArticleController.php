<?php

namespace app\Http\Controllers;

use App\Blog\Repository\BlogRepository;

class ArticleController extends Controller
{
    public function __construct(BlogRepository $blog)
    {
        $this->blog = $blog;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->blog->blogAll();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return $this->blog->blogStore();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        return $this->blog->blogById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id)
    {
        return $this->blog->blogUpdate($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        return $this->blog->blogDelete($id);
    }
}
