<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PutanutuRequestStore;
use App\Http\Requests\PutanutuUpdateRequest;
use App\Models\Putanutu;
use Illuminate\Support\Facades\Storage;

class PutanutuController extends Controller
{

    public function index()
    {
        $produks = Putanutu::get();
        return view('backend/putanutu/index', compact('produks'));
    }


    public function create()
    {
        return view('backend/putanutu/create');
    }


    public function store(PutanutuRequestStore $request)
    {

        // Cek validasi inputan dari user
        $data = $request->validated();

        // Cek inputan file gambar utama dari user
        if ($request->hasFile('image')) { // jika ada request file gambar dari inputan user

            $file = $request->file('image'); // Ambil file gambar dari inputan user
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); // Ganti nama file gambar dan set menjadi unik
            $file->storeAs('public/images', $fileName); // Masukan file gambar ke polder images

            $data['image'] = $fileName;
        }

        // Cek iputan file gambar image1-imgae4

        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($request->hasFile($field)) {

                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/images', $fileName);

                $data[$field] = $fileName;
            }
        }

        // Buat Slug otomatis dari title
        $data['slug'] = Str::slug($data['title']);

        // Masukan data ke database
        Putanutu::create($data);

        return redirect()->route('admin.putanutu.index')->with('message', 'Data berhasil ditambahkan');
    }


    public function show($slug)
    {
        $produk = Putanutu::where('slug', $slug)->firstOrFail();

        return view('frontend/putanutuDetail/index', compact('produk'));
    }


    public function edit(string $id)
    {

        $produk = Putanutu::findOrFail($id);
        return view('backend/putanutu/edit', compact('produk'));
    }

    public function update(PutanutuUpdateRequest $request, string $id)
    {

        // Cek apakah ada id yang ditarget atau data yang mau di update jika tidak ada kembalikan error notfound
        $produk = Putanutu::findOrFail($id);

        // Cek inputan dari form user
        $data = $request->validated();

        // Cek ketika user upload file baru
        if ($request->hasFile('image')) {

            // Hapus file lama
            if ($produk->image && Storage::exists('public/images/' . $produk->image)) { // Jika ada file lama maka hapus file lama
                Storage::delete('public/images/' . $produk->image); // Hapus file gambar dalem folder images
            }

            // Upload file baru jika ada perubahan file
            $file = $request->file('image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);

            // Simpan file baru ke dalam array
            $data['image'] = $fileName;
        }

        // Upload file gambar1 - gambar4
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($request->hasFile($field)) {

                // Hapus file lama
                if ($produk->$field && Storage::exists('public/images/' . $produk->$field)) {
                    Storage::delete('public/images/' . $produk->$field);
                }

                // Upload file baru
                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/images', $fileName);

                // Simpan file baru ke dalem array
                $data[$field] = $fileName;
            }
        }

        // Update slug berdasarkan title
        $data['slug'] = Str::slug($data['title']);

        $produk->update($data);

        return redirect()->route('admin.putanutu.index')->with('message', 'Data berhasil diupdate');
    }


    public function destroy(string $id)
    {

        $data = Putanutu::findOrFail($id);

        // Hapus file gambar utama
        if ($data->image && Storage::exists('public/images/' . $data->image)) {
            Storage::delete('public/images/' . $data->image);
        }

        // Hapus data file gambar1 - gambar4

        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($data->$field && Storage::exists('public/images/' . $data->$field)) {
                Storage::delete('public/images/' . $data->$field);
            }
        }

        // Hapus data dari database
        $data->delete();

        return back()->with('message', ' Data berhsail dihapus');
    }
}
