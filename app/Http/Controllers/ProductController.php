<?php

namespace App\Http\Controllers;

//import Model "Product"
use App\Models\Product;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * index
     * 
     * @return View
     */
    public function index(): View
    {
        //get products
        $products = Product::latest()->paginate(5);

        //render view with products
        return view('products.index', compact('products'));
    }
    public function create(): View
    {
        return view('products.create');
    }
    public function tampil(): View
    {
        $products = product::latest()->paginate(5);
        return view('tampil', compact('products'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        //create  product
        Product::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function search (Request $request)
    {
        $search = $request->search;
        $products = DB::table('products')
        ->where('title','like',"%".$search."%")
        ->paginate();
        return view('tampil', compact('products'));
    }
}
