<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\CtaBanner;
use App\Models\Statistic;
use App\Models\Gallery;
use App\Models\Feature;

class HomeController extends Controller
{
    public function index()
    {
        // Dynamic homepage data
        $banners = Banner::all(); // hero section
        $testimonials = Testimonial::all(); // quotes section
        $ctaBanners = CtaBanner::all(); // call-to-action section
        $statistics = Statistic::all(); // counters
        $features = Feature::all();
//        dd($ctaBanners->toArray());

        // Keep existing gallery and events logic
        $galleryImages = Gallery::inRandomOrder()->take(6)->get();

        return view('home', compact('banners', 'testimonials', 'ctaBanners', 'statistics', 'galleryImages','features'));
    }

    public function about()
    {
        return view('about');
}
}
