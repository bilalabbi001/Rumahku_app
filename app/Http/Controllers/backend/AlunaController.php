<?php

namespace App\Http\Controllers\backend;

use App\Models\Aluna;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AlunaStoreRequest;
use App\Http\Requests\AlunaUpdateRequest;

class AlunaController extends Controller
{

    public function index()
    {
        $produks = Aluna::get();
        return view('backend/aluna/index', compact('produks'));
    }


    public function create()
    {
        return view('backend/aluna/create');
    }


    public function store(AlunaStoreRequest $request)
    {
        // Validasi dara dari form
        $data = $request->validated();

        // Upload file gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            $data['image'] = $fileName;
        }


        // Upload image1 - image4
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/images', $fileName);

                $data[$field] = $fileName;
            }
        }

        // Buat slug otomatis dari title
        $data['slug'] = Str::slug($data['title']);

        Aluna::create($data);

        return redirect()->route('admin.aluna.index')->with('message', 'Data berhasil ditambahkan');
    }


    public function show($slug)
    {

        $produk = Aluna::where('slug', $slug)->firstOrFail();
        return view('frontend/alunadetail/index', compact('produk'));
    }

    public function edit(string $id)
    {

        $produk = Aluna::findOrFail($id);
        return view('backend/aluna/edit', compact('produk'));
    }

    public function update(AlunaUpdateRequest $request, string $id)
    {
        // Cek apakah ada id yang ditarget, jika tidak ada kembalikan pesan noutfound 404
        $produk = Aluna::findOrFail($id);

        // Validasi form input dari user
        $data = $request->validated();

        // Cek ketika user upload file baru
        if ($request->hasFile('image')) {

            // Hapus file lama
            if ($produk->image && Storage::exists('public/images/' . $produk->image)) { // jika ada file lama maka hapus file lama
                Storage::delete('public/images/' . $produk->image); // Hapus file yang lama
            }

            // Upload file baru
            $file = $request->file('image'); // simpan file baru ketika ada upload
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); // Beri nama unik pada file image
            $file->storeAs('public/images', $fileName); // masukan file ke polder public/images
            $data['image'] = $fileName; // Simpan file baru ke dalam array
        }


        //Update file images 1-4 jika ada file yang diupload
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            // Hapus file lama
            if ($request->hasFile($field)) {
                if ($produk->$field && Storage::exists('public/images/' . $produk->$field)) {
                    Storage::delete('public/images/' . $produk->$field);
                }

                // Upload file baru
                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/images', $fileName);
                $data[$field] = $fileName;
            }
        }

        // Update Slug berdasarkan title
        $data['slug'] = Str::slug($data['title']);

        $produk->update($data);

        return redirect()->route('admin.aluna.index')->with('message', 'Data berhasil diupdate');
    }


    public function destroy(string $id)
    {
        // Cari data berdasarkan id
        $data = Aluna::findOrFail($id);

        // Hapus file utama (image)
        if ($data->image && Storage::exists('public/images/' . $data->image)) {
            Storage::delete('public/images/' . $data->image);
        }

        // Hapus file image 1-4 jika ada

        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($data->$field && Storage::exists('public/images/' . $data->$field)) {
                Storage::delete('public/images/' . $data->$field);
            }
        }

        // Hapus data dari database
        $data->delete();

        return redirect()->Route('admin.aluna.index')->with('message', 'Data berhasil dihapus');
    }
}
