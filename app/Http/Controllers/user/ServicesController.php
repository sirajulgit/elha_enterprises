<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Service;

use Illuminate\Http\Request;


class ServicesController extends Controller
{
    //

    public function index()
    {
        $data = [
            'page_title' => 'Services',
            'activePageName' => 'services',
            'banner_data' => [],
            'page_data' => [],
            'gallery_data' => [],
        ];
        $items = Service::orderBy("id", "desc")->get();

        $temp_arr = [];
        foreach ($items as $item) {

            $default_image = '/uploads/images/' . $item['image'];

            $item->image = $default_image;

            array_push($temp_arr, $item);
        }


        $data['services'] = $temp_arr;

      

        return view('user.services', ['data' => $data]);
    }
    public function service_details($slug)
    {

        $data = [
            'page_title' => 'Service Details',
            'activePageName' => 'service',
        ];


        $blogData = Service::where('slug', $slug)->first();

        if(!$blogData){
            return redirect()->back()->with('error', 'Service not found');
        }

        if($blogData->image){
            $default_image = '/uploads/images/' . $blogData->image;
            $blogData->image = $default_image;
        }

        $data['service_data'] = $blogData;

        return view('user.service_detail', ['data' => $data]);
    }
}
