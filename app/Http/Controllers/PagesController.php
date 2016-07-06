<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home()
    {
        $customer = ['Belemy','Clerck','Kane'];
        $contact = ['0771380881','0776960881','0712612866'];

        return view('welcome',compact('customer','contact'));
    }

    public function about()
    {
        return view('pages.about');
    }
}