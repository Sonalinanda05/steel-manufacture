<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function welcome()
    {
        $services = Service::all();
        return view('welcome', compact('services'));
    }
    public function blog()
    {
        $blogs = Blog::latest()->get();
        $services = Service::all();
        return view('blog', compact('blogs', 'services'));
    }

    public function contact()
    {
        $services = Service::all();
        return view('contact', compact('services'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',

        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        // Save the user to the database
        $contact->save();

        return redirect()->back();

    }

    public function about()
    {
        $services = Service::all();
        return view('about', compact('services'));
    }

    public function steel()
    {
        $products = Product::whereRaw('LOWER(product) = ?', ['special steel'])->get();
        return view('steel', compact('products'));
    }
    public function iron()
    {
        $products = Product::whereRaw('LOWER(product) = ?', ['iron making'])->get();
        return view('iron', compact('products'));
    }

    public function ferro()
    {
        $products = Product::whereRaw('LOWER(product) = ?', ['ferro alloy'])->get();
        return view('ferro', compact('products'));
    }

    public function bars()
    {
        $products = Product::whereRaw('LOWER(product) = ?', ['round bars'])->get();
        return view('bars', compact('products'));
    }

    public function wire()
    {
        $products = Product::whereRaw('LOWER(product) = ?', ['wire rods'])->get();
        return view('wires', compact('products'));
    }

    public function oxygen()
    {
        $products = Product::whereRaw('LOWER(product) = ?', ['oxygen'])->get();
        return view('oxygen', compact('products'));
    }
}
