<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('template.home', compact('categories'));
    }

    public function description(Category $category)
    {
        $categories = Category::all();
        $products = Product::where('category_id',$category->id)->get();
        return view('template.categories.description', compact('category','categories','products'));
    }

    public function aboutus()
    {
        $categories = Category::all();
        return view('template.aboutus', compact('categories'));
    }

  public function contactus()
    {
        $categories = Category::all();
        return view('template.contactus', compact('categories'));
    }

    public function products()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }


    public function categories()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
}
