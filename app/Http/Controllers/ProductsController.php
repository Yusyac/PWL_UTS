<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $products = Products::all();
        $products = Products::orderBy('id', 'desc')->paginate(5);
        return view('product', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'ID' => 'required',
            'KodeBarang' => 'required',
            'NamaBarang' => 'required',
            'Kategori' => 'required',
            'Harga' => 'required',
            'Qty' => 'required',
        ]);

        Products::create($request->all());

        return redirect()->route('index')
            ->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $products = Products::find($id);
        return view('detail', compact('Products'));
    }
    public function edit($id)
    {
        $products = Products::find($id);
        return view('edit', compact('Products'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'ID' => 'required',
            'KodeBarang' => 'required',
            'NamaBarang' => 'required',
            'Kategori' => 'required',
            'Harga' => 'required',
            'Qty' => 'required',
        ]);

        Products::find($id)->update($request->all());

        return redirect()->route('index')
            ->with('Success', 'Data Berhasil Diupdate');
        }
        public function destroy( $id)
        {
            Products::find($id)->delete();
            return redirect()->route('index')
                -> with('Success', 'Data Berhasil Dihapus');
        }
        public function search(Request $request)
        {
            $products = Products::where('KodeBarang', 'like', "%" . $request->keywords . "%")->paginate(5);
            return view('search', compact('products'));
        }

}
