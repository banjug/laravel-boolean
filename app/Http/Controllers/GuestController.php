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
                // 'image'=>'required|image',
            ]
        );

        // prendo il file immagine
        $imageFile = $request->file('image'); //$data['image'];

        // imposto il nome del file come salvarlo
        $imageName = rand(100000, 999999).'_'.time().'.'.$imageFile->getClientOriginalExtension();

        // salvo il file nella cartella /postcards/, utilizzando il nome $name, partendo dalla cartella public
        $imageFile ->storeAs('/postcards/',$imageName ,'public');

        $data['image']=$imageName;
        $postcard = Postcard::create($data);
        return redirect()-> route('home');
    }
}
