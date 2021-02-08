<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Stories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function getAllCategories()
    {
        return Categories::all();
    }

    public function getCateId($cate_id)
    {
        # code...
        return Categories::where('cate_id', '=', $cate_id)->get();
    }

    public function getCateName($title)
    {
        # code...
        $temp = '%' . $title . '%';
        return Categories::where('cate_title', 'LIKE', $temp)->get();
    }

    public function getAllStoriesWithCateId($cate_id)
    {
        # code...
        return Stories::where('cate_id', '=', $cate_id)->paginate(16);
    }
}
