<?php

namespace App\Http\Controllers;

use App\Postcard;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        return view('pages.home');
    }
    public function createPostcard() {
        return view('pages.create-postcard');
    }
    public function storePostcard(Request $request) {
        $data = $request -> validate(
            [
                'sender'=>'required|string',
                'address'=>'required|string',
                'text'=>'required|string',
                'image'=>'required|string',
            ]
        );

        $postcard = Postcard::create($data);
        return redirect()-> view('pages.home');
    }
}
