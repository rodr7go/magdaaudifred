<?php

namespace App\Http\Controllers;

use App\Mail\Interested;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function mail(Request $request)
    {
//        return new Interested($request);
        Mail::to('rodr7go.lg@gmail.com')
            ->send( new Interested($request) );

        return back();
    }
}
