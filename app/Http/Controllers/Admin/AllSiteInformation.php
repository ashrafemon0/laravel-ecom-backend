<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInformation;
use Illuminate\Http\Request;

class AllSiteInformation extends Controller
{
    public function AllSiteInfo(){
        $result = SiteInformation::get();

        return $result;
    }


}
