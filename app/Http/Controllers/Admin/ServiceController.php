<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services()
    {
        $services = Service::latest()->get();
        return view('admin.services.view', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required|string',

        ]);

        $services = new Service();
        $services->product = $request->product;

        $services->save();

        return redirect()->route('admin.services')->with('success', 'Product name added successfully');
    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('admin.services.edit', compact('services'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'product' => 'required|string',

        ]);

        $services = Service::find($id);
        $services->product = $request->product;

        $services->save();

        return redirect()->route('admin.services')->with('success', 'Product name updated successfully');
    }

    public function delete($id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect()->back()->with('success', 'Product name deleted successfully');
    }
}
