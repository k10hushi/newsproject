<?php

namespace App\Controllers;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\CategoryModel;
use App\Models\BreakingnewsModel;

class Home extends BaseController
{
    public function index()
    {
        $name = new PostModel;
        $data = $name->findAll();
        $name1 = new CommentModel;
        $data1 = $name1->findAll();
        $name2 = new CategoryModel;
        $data2 = $name2->findAll();
        $name3 = new BreakingnewsModel;
        $data3 = $name3->findAll();
        
        return view('web/pages/'."index");
    }
    public function about()
    {
        return view('web/pages/'."about");
    }

    public function category()
    {
        return view('web/pages/'."category");
    }
    public function contact()
    {
        return view('web/pages/'."contact");
    }

    public function search_result()
    {
        return view('web/pages/'."search_result");
    }
    public function single_post()
    {
        return view('web/pages/'."single_post");
    }

}
