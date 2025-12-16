<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AceStoreRequest;
use App\Http\Requests\AceUpdateRequest;
use App\Models\Ace;
use Illuminate\Support\Facades\Storage;

class AceController extends Controller
{

    public function index()
    {

        $produks = Ace::get();
        return view('backend/ace/index', compact('produks'));
    }


    public function create()
    {
        return view('backend/ace/create');
    }


    public function store(AceStoreRequest $request)
    {

        // Cek validsai inputan dari user
        $data = $request->validated();

        // Upload file utama
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('public/images', $fileName);
            $data['image'] = $fileName;
        }

        // Upload file image1 - image4
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

                $file->storeAs('public/images', $fileName);
                $data[$field] = $fileName;
            }
        }

        // Buat slug berdasarkan title
        $data['slug'] = Str::slug($data['title']);

        //Save data ke database
        Ace::create($data);
        return redirect()->route('admin.ace.index')->with('message', 'Data berhasil ditambahkan');
    }


    public function show($slug)
    {

        $produk = Ace::where('slug', $slug)->firstOrFail();
        return view('frontend/aceDetail/index', compact('produk'));
    }


    public function edit(string $id)
    {

        $produk = Ace::findOrFail($id);
        return view('backend/ace/edit', compact('produk'));
    }


    public function update(AceUpdateRequest $request, string $id)
    {

        // Cek apakah ada id yang ditarget jika tidak ada maka kembalikan pesan error 404
        $produk = Ace::findOrFail($id);

        // Cek validasi inputan dari user
        $data = $request->validated();

        if ($request->hasFile('image')) {

            // Hapus file lama
            if ($produk->image && Storage::exists('public/images/' . $produk->image)) {
                Storage::delete('public/images/' . $produk->image);
            }

            // Masuka file baru jika ada
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
                    Storage::delete('public/images/' . $produk->$field);
                }

                // Masukan file baru jika ada
                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

                $file->storeAs('public/images', $fileName);
                $data[$field] = $fileName;
            }
        }

        // Update slug berdasrkan title
        $data['slug'] = Str::slug($data['title']);

        $produk->update($data);
        return redirect()->route('admin.ace.index')->with('message', 'Data berhasil diupdate');
    }

    public function destroy(string $id)
    {

        // Cari database berdasrakan id dimodel Ace
        $data = Ace::findOrFail($id);

        // Hapus file utama image
        if ($data->image && Storage::exists('public/images/' . $data->image)) {
            Storage::delete('public/images/' . $data->image);
        }

        // Hapus file image1 - image4

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
