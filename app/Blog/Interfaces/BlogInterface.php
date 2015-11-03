<?php

namespace app\Blog\Interfaces;

interface BlogInterface
{
    public function blogAll();

    public function blogById($id);

    public function blogStore();

    public function blogUpdate($id);

    public function blogDelete($id);
}
