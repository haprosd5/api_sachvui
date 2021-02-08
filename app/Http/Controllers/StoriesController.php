<?php

namespace App\Http\Controllers;

use App\Stories;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    //
    public function getAllStories()
    {
        # code...
        return Stories::paginate(16); // to 01 from 101
    }


    public function getStoriesWithCateName($cate_id, $title)
    {
        # code...
        # code...
        $temp = '%' . $title . '%';
        return Stories::where('cate_id', '=', $cate_id, 'AND ', 'story_title' , 'LIKE', $temp)->paginate(16);
    }

    public function getStoriesWithName($title)
    {
        # code...
        $temp = '%' . $title . '%';
        return Stories::where('story_title', 'LIKE', $temp)->paginate(16);
    }
}
