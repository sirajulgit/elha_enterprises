<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\CmsBanner;
use App\Models\CmsContact;
use App\Models\ContactQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;
use Exception;
use Illuminate\Support\Facades\Log;

class PrivacyPolicyController extends Controller
{
    //

    public function index()
    {
        $data = [
            'page_title' => 'Terms & Conditions',
            'activePageName' => '',
            'contact_data' => [],
            'banner_data' => [],
        ];

      
        return view('user.privacy_policy', ['data' => $data]);
    }


  
}
