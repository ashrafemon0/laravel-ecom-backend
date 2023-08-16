<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function AllCategory(){
    $categoryDetailsArray = [];
        $category = Category::all();

        foreach ($category as $value){
            $subcategory = SubCategory::where('category_name',$value['category_name'])->get();

            $item = [
              'category_name'  => $value['category_name'],
                'category_image'  => $value['category_image'],
                'subcategory_name'  => $subcategory
            ];
            array_push($categoryDetailsArray, $item);

        }


        return $categoryDetailsArray;

    }
}
