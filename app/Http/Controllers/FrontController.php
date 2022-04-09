<?php

namespace App\Http\Controllers;

use App\Seo;
use App\News;
use App\AboutUs;
use App\Banners;
use App\Products;
use App\Supplier;
use App\ContactUs;
use App\Application;
use App\ProductsType;
use App\ProductVideo;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ContactRequest;



class FrontController extends Controller
{
    public function __construct(){
        $company_info = config('company_info');
        View::share('company_info', $company_info);

        $seo = Seo::find(1);
        View::share('seo', $seo);
    }

    public function index() {

        $indexData = [];

        $indexData['banners'] = Banners::orderBy('sort','desc')->get();

        $indexData['all_news'] = News::orderBy('sort','desc')->take(4)->get();

        $indexData['productTypes'] = ProductsType::orderBy('sort','desc')->get();

        return view('front.index',compact('indexData'));
    }

    public function about_us()
    {
        $about = AboutUs::where('id', 1)->first();
        return view('front.about',compact('about'));
    }

    public function news() {
        $all_news = News::orderBy('sort','desc')->get();
        return view('front.news',compact('all_news'));
    }

    public function news_detail($id) {
        $news = News::find($id);
        return view('front.news_detail',compact('news'));
    }

    public function Types($id) {
        $type = ProductsType::find($id);
        $products = Products::where('type',$type->id)->orderBy('sort','desc')->get();
        return view('front.product',compact('type','products'));
    }

    public function Products($id) {
        $products = Products::where('type',$id)->get();
        $product_type = ProductsType::find($id);
        return view('front.productDetail',compact('products','product_type'));
    }

    public function contact_us(ContactRequest $request) {
        ContactUs::create($request->all());
        return redirect('/#ContactUs')->with('message','We will contact you in a few days, thank you for contacting us!');
    }
}
