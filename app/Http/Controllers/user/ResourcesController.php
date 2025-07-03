<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\CmsBadge;
use App\Models\CmsBanner;
use App\Models\CmsHomePage;
use App\Models\Gallery;
use Illuminate\Http\Request;


class ResourcesController extends Controller
{
    //

    public function index()
    {
        $data = [
            'page_title' => 'Resources',
            'activePageName' => 'resources',
            'banner_data' => [],
            'page_data' => [],
            'gallery_data' => [],
        ];

       


        return view('user.resources', ['data' => $data]);
    }
}
