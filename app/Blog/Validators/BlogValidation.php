<?php

namespace app\Blog\Validators;

use Request;
use Validator;

class BlogValidation
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function validateStore()
    {
        $validator = Validator::make(Request::all(), [
                'title' => 'required|unique:articles|max:255',
                'content' => 'required',
            ]);

        $result['errors'] = $validator->errors();

        $result['data'] = Request::all();

        return $result;
    }

    public function validateUpdate()
    {
        $validator = Validator::make(Request::all(), [
                    'title' => 'required|unique:articles|max:255',
                    'content' => 'required',
                ]);

        $result['errors'] = $validator->errors();

        $result['data'] = Request::all();

        return $result;
    }
}
