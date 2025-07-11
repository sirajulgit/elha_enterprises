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

        $data['Service_data'] = $blogData;

         $cmsHome = CmsHomePage::where('page_type', 'home_page')->orderBy("id", "asc")->get()->toArray();

        $items = [];

        foreach ($cmsHome as $item) {

            if (!is_null($item['image_1'])) {
                $default_image = '/uploads/images/' . $item['image_1'];
                $item['image_1'] = $default_image;
            }

            if (!is_null($item['image_2'])) {
                $default_image = '/uploads/images/' . $item['image_2'];
                $item['image_2'] = $default_image;
            }

            if (!is_null($item['image_3'])) {
                $default_image = '/uploads/images/' . $item['image_3'];
                $item['image_3'] = $default_image;
            }

            if (!is_null($item['image_4'])) {
                $default_image = '/uploads/images/' . $item['image_4'];
                $item['image_4'] = $default_image;
            }

            if (!is_null($item['about_badge_icon1'])) {
                $default_image = '/uploads/images/' . $item['about_badge_icon1'];
                $item['about_badge_icon1'] = $default_image;
            }

            if (!is_null($item['about_badge_icon2'])) {
                $default_image = '/uploads/images/' . $item['about_badge_icon2'];
                $item['about_badge_icon2'] = $default_image;
            }

            if (!is_null($item['about_badge_icon3'])) {
                $default_image = '/uploads/images/' . $item['about_badge_icon3'];
                $item['about_badge_icon3'] = $default_image;
            }

            if (!is_null($item['about_badge_icon4'])) {
                $default_image = '/uploads/images/' . $item['about_badge_icon4'];
                $item['about_badge_icon4'] = $default_image;
            }

            if (!is_null($item['about_profile_image'])) {
                $default_image = '/uploads/images/' . $item['about_profile_image'];
                $item['about_profile_image'] = $default_image;
            }

            if (!is_null($item['about_signature_image'])) {
                $default_image = '/uploads/images/' . $item['about_signature_image'];
                $item['about_signature_image'] = $default_image;
            }

            if (!is_null($item['file_1'])) {
                $default_file = '/uploads/files/' . $item['file_1'];
                $item['file_1'] = $default_file;
            }



            if ($item['type'] == "services") {
                $items["services"] = $item;
            } elseif ($item['type'] == "work") {
                $items["work"] = $item;
            } elseif ($item['type'] == "about") {
                $items["about"] = $item;
            } elseif ($item['type'] == "industry") {
                $items["industry"] = $item;
            } elseif ($item['type'] == "market") {
                $items["market"] = $item;
            } elseif ($item['type'] == "testimonials") {
                $items["testimonials"] = $item;

                $cmsBadge = CmsBadge::where('type', 'testimonials')->orderBy("id", "asc")->get()->toArray();

                $items['testimonials']["badge_data"] = [];

                foreach ($cmsBadge as $item2) {

                    if (!is_null($item2['badge_file_1'])) {
                        $default_file = '/uploads/files/' . $item2['badge_file_1'];
                        $item2['badge_file_1'] = $default_file;
                    }

                    if (!is_null($item2['badge_file_2'])) {
                        $default_file = '/uploads/files/' . $item2['badge_file_2'];
                        $item2['badge_file_2'] = $default_file;
                    }


                    if (!is_null($item2['badge_icon_1'])) {
                        $default_file = '/uploads/images/' . $item2['badge_icon_1'];
                        $item2['badge_icon_1'] = $default_file;
                    }


                    if (!is_null($item2['badge_image_1'])) {
                        $default_file = '/uploads/images/' . $item2['badge_image_1'];
                        $item2['badge_image_1'] = $default_file;
                    }

                    $items['testimonials']["badge_data"][] = $item2;
                }
                //dd($items['testimonials']);
            } elseif ($item['type'] == "faq") {
                $items["faq"] = $item;

                $cmsBadge = CmsBadge::where('type', 'faq')->orderBy("id", "asc")->get()->toArray();

                $items['faq']["badge_data"] = [];

                foreach ($cmsBadge as $item2) {





                    $items['faq']["badge_data"][] = $item2;
                }
             } elseif ($item['type'] == "client") {
                $items["client"] = $item;
            } 
        }

        return view('user.service_detail', ['data' => $data]);
    }
}
