<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function home()
    {
        $produk = Produk::all();

        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        } else {
            $count = '';
        }
        return view('home.index', compact('produk', 'count'));
    }

    public function login_home()
    {
        $produk = Produk::all();
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
        return view('home.index', compact('produk', 'count'));
    }

    public function produk_details($id)
    {
        $data = Produk::find($id);
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        } else {
            $count = '';
        }
        return view('home.produk_details', compact('data', 'count'));
    }

    public function add_cart($id)
    {
        $produk_id = $id;
        $user = Auth::user();
        $user_id = $user->id;
        $data = new Cart();
        $data->user_id = $user_id;
        $data->produk_id = $produk_id;
        $data->save();
        return redirect()->back();
    }

    public function mycart()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
            $cart = Cart::where('user_id', $userid)->get();
        }
        return view('home.mycart', compact('count', 'cart'));
    }

    public function delete_cart($id)
    {
        $data = Cart::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function confirm_order(Request $request)
    {
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $userid = Auth::user()->id;

        // Validasi file bukti transfer
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan data dari keranjang
        $cart = Cart::where('user_id', $userid)->get();

        // Proses setiap item keranjang sebagai order baru
        foreach ($cart as $carts) {
            $order = new Order();
            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->user_id = $userid;
            $order->produk_id = $carts->produk_id;

            // Simpan file gambar bukti transfer
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('order'), $imagename); // Simpan ke folder public/order
                $order->image = $imagename; // Simpan nama file ke kolom bukti_transfer
            }

            // dd($request->all());
            $order->save();
        }

        // Hapus keranjang setelah order selesai
        Cart::where('user_id', $userid)->delete();

        // Redirect dengan pesan sukses
        return redirect('/invoice')->with('success', 'Pesanan Anda berhasil dikonfirmasi!');
    }

    public function myorder()
    {
        $user = Auth::user()->id;
        $count = Cart::where('user_id', $user)->get()->count();
        $order = Order::where('user_id', $user)->get();
        return view('home.order', compact('count', 'order'));
    }

    public function reservasii()
    {
        return view('home.reservasi');
    }

    public function invoice()
    {
        return view('home.invoice');
    }
}
