<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::latest()->get();
        return view('admin.products.view', compact('products'));
    }

    public function create()
    {
        $products = Service::pluck('product', 'id')->toArray();
        return view('admin.products.create', compact('products'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'product' => 'required|string', // Validate the product name
            'images.*' => 'required|image', // Validation for each image file
        ]);

        // Retrieve the service by name
        $serviceName = $request->input('product');
        $service = Service::where('product', $serviceName)->firstOrFail();

        // Create a new product instance
        $product = new Product();
        $product->service_id = $service->id; // Assign the service ID
        $product->product = $request->product;
        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $galleryFilename = uniqid() . '_' . $image->getClientOriginalName();
                $image->storeAs('product_images/', $galleryFilename, 'public');
                $imagePaths[] = 'product_images/' . $galleryFilename;
            }
        }

        // Save the gallery images as JSON in the 'images' field
        $product->images = json_encode($imagePaths);
        $product->save();

        return redirect()->route('admin.products')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $products = Product::find($id);
        $singleProducts = Service::pluck('product', 'id')->toArray();
        return view('admin.products.edit', compact('products', 'singleProducts'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'product' => 'required|string', // Validate the product name
            'images.*' => 'required|image', // Validation for each image file
        ]);

        // Retrieve the service by name
        $serviceName = $request->input('product');
        $service = Service::where('product', $serviceName)->firstOrFail();

        // Create a new product instance
        $product = Product::find($id);
        $product->service_id = $service->id; // Assign the service ID
        $product->product = $request->product;
        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $galleryFilename = uniqid() . '_' . $image->getClientOriginalName();
                $image->storeAs('product_images/', $galleryFilename, 'public');
                $imagePaths[] = 'product_images/' . $galleryFilename;
            }
        }

        // Save the gallery images as JSON in the 'images' field
        $product->images = json_encode($imagePaths);
        $product->save();

        return redirect()->route('admin.products')->with('success', 'Product updated successfully');
    }

    public function delete($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back()->with('success', 'product images deleted successfully');
    }

}
