<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('admin.product', compact('data'));
    }


    public function add_product(Request $request)
    {
           $product = new Product;
           $product->product_name = $request->product;
           $product->save();
           return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Product::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function add_produk()

    {
        $product = Product::all();
        return view('admin.add_produk',compact('product'));
    }

    public function upload_produk(Request $request)
    {
        $data = new Produk;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->category = $request->category;
        $data->quantity = $request->quantity;

        $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('produk',$imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();

    }

    public function view_produk()
    {
        $produk = Produk::all();
        return view('admin.view_produk', compact('produk'));
    }

    public function delete_produk($id)
    {
        $data = Produk::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function view_order()
    {
        $data = Order::all();
        return view('admin.order',compact('data'));
    }

    public function user()
    {
        return view('admin.user');
    }
    public function meja()
    {
        return view('admin.meja');
    }
    public function reservasi()
    {
        return view('admin.reservasi');
    }
}
