<?php namespace App\Blog\Interfaces;

interface BlogInterface {
	
	public function blogAll();

	public function blogById($id);

	public function blogCreate();

	public function blogStore();

	public function blogUpdate($id);

	public function blogDelete($id);

}