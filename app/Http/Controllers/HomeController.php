<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Setting;
use App\Models\VisionMision;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index():View
    {
        $data = [
            'title'     => 'Global Survindo Inspactama',
            'setting'   => Setting::select('favicon', 'logo', 'background', 'link_video',
                            'title', 'slogan', 'text')->first(),
            'services'  => Service::orderBy('id', 'ASC')->limit('4')->get(),
            'galleries' => Gallery::select('photo')->get(),
            'vision'    => VisionMision::where('segment', 'Visi')->select('value')->get(),
            'mision'    => VisionMision::where('segment', 'Misi')->select('value')->get(),
            'about'     => About::first(),
        ];
        return view('index', $data);
    }
}
