<?php

namespace App\Http\Controllers\backend;

use App\Models\Breeze;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BreezeStoreRequest;
use App\Http\Requests\BreezeUpdateRequest;
use Illuminate\Support\Facades\Storage;

class BreezeController extends Controller
{
    public function index()
    {
        $produks = Breeze::get();
        return view('backend/breeze/index', compact('produks'));
    }

    public function create()
    {
        return view('backend/breeze/create');
    }


    public function store(BreezeStoreRequest $request)
    {
        // Cek validasi inputan dari user
        $data = $request->validated();

        // Cek inputan file gambar utama dari user
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            $data['image'] = $fileName;
        }

        // Cek inputan gambar1 - gambar4
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/images', $fileName);
                $data[$field] = $fileName;
            }
        }

        // Buat slug otomatis berdasarkan title
        $data['slug'] = Str::slug($data['title']);

        Breeze::create($data);
        return redirect()->route('admin.breeze.index')->with('message', 'Data berhasil ditambahkan');
    }


    public function show($slug)
    {

        $produk = Breeze::where('slug', $slug)->firstOrFail();
        return view('frontend/breezedetail/index', compact('produk'));
    }


    public function edit(string $id)
    {

        $produk = Breeze::findOrFail($id);
        return view('backend/breeze/edit', compact('produk'));
    }


    public function update(BreezeUpdateRequest $request, string $id)
    {

        // Cek untuk id yang akan diupdate
        $produk = Breeze::findOrFail($id);

        // Cek validasi inputan dari user
        $data = $request->validated();

        // Cek jika user upload file gambar baru
        if ($request->hasFile('image')) {

            // Hapus file lama
            if ($produk->image && Storage::exists('public/images/' . $produk->image)) {
                Storage::delete('public/images/' . $produk->image);
            }

            //Cek inputan file gambar baru
            $file = $request->file('image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            $data['image'] = $fileName;
        }

        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($request->hasFile($field)) {

                // Hapus file lama
                if ($produk->$field && Storage::exists('public/images/' . $produk->$field)) {
                    Storage::delete('piblic/images/' . $produk->$field);
                }

                // Cek inputan file gambar baru
                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/images', $fileName);
                $data[$field] = $fileName;
            }
        }

        // Update slug berdasrkan title
        $data['slug'] = Str::slug($data['title']);

        // Update database
        $produk->update($data);

        return redirect()->route('admin.breeze.index')->with('message', 'Data berhasil di update');
    }


    public function destroy(string $id)
    {

        // Cari data berdasarakan id
        $data = Breeze::findOrFail($id);

        // Cek jika ada file gambar utama maka hapus file tersebut
        if ($data->image && Storage::exists('public/images/' . $data->image)) {
            Storage::delete('public/images/' . $data->image);
        }

        // Cek jika ada file gambar1-gambar4 maka hapus file tersebut
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($data->$field && Storage::exists('public/images/' . $data->$field)) {
                Storage::delete('public/images/' . $data->$field);
            }
        }

        // Hapus data dari database
        $data->delete();

        return back()->with('message', 'Data berhasil dihapus');
    }
}
