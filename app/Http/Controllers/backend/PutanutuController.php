<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\PutanutuRequestStore;
use App\Http\Requests\PutanutuUpdateRequest;
use App\Models\Putanutu;

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

        // Path berdasrkan ENV
        if (app()->environment('production')) {
            // HOSTINGER
            $uploadPath = base_path('../public_html/assets/images');
        } else {
            // LOCALHOST
            $uploadPath = public_path('assets/images');
        }

        // Cek inputan file gambar utama dari user
        if ($request->hasFile('image')) { // jika ada request   file gambar dari inputan user

            $file = $request->file('image'); // Ambil file gambar dari inputan user

            $slug = Str::slug($request->title ?? 'produk');

            $fileName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension(); // Ganti nama file gambar dan set menjadi unik
            $file->move($uploadPath, $fileName); // Masukan file gambar ke polder images

            $data['image'] = $fileName;
        }

        // Cek iputan file gambar image1-imgae4

        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($request->hasFile($field)) {

                $file = $request->file($field);

                $slug = Str::slug($request->title ?? 'produk');

                $fileName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadPath, $fileName);

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

        // Path berdasrkan ENV
        if (app()->environment('production')) {
            // HOSTINGER
            $uploadPath = base_path('../public_html/assets/images');
        } else {
            // LOCALHOST
            $uploadPath = public_path('assets/images');
        }

        // Cek ketika user upload file baru
        if ($request->hasFile('image')) {

            // Hapus file lama
            if (!empty($request->image)) {
                $oldFile = $uploadPath . '/' . $produk->image;
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            // Upload file baru jika ada perubahan file
            $file = $request->file('image');

            $slug = Str::slug($request->title ?? 'produk');

            $fileName = strtolower(
                $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension()
            );
            $file->move($uploadPath, $fileName);

            // Simpan file baru ke dalam array
            $data['image'] = $fileName;
        }

        // Upload file gambar1 - gambar4
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($request->hasFile($field)) {

                // Hapus file lama
                if (!empty($produk->$field)) {
                    $oldFile = $uploadPath . '/' . $produk->$field;
                    if (file_exists($oldFile)) {
                        unlink($oldFile);
                    }
                }

                // Upload file baru
                $file = $request->file($field);
                $slug = Str::slug($request->title ?? 'produk');
                $fileName = strtolower(
                    $slug . '-' .  uniqid() . '.' . $file->getClientOriginalExtension()
                );
                $file->move($uploadPath, $fileName);

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

        // Cari data berdasarkan id
        $data = Putanutu::findOrFail($id);

        // Path berdasrkan ENV
        if (app()->environment('production')) {
            // HOSTINGER
            $uploadPath = base_path('../public_html/assets/images');
        } else {
            // LOCALHOST
            $uploadPath = public_path('assets/images');
        }

        // Hapus file gambar utama
        if ($data->image && file_exists($uploadPath . '/' . $data->image)) {
            unlink($uploadPath . '/' . $data->image);
        }

        // Hapus data file gambar1 - gambar4
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($data->$field && file_exists($uploadPath . '/' . $data->$field)) {
                unlink($uploadPath . '/' . $data->$field);
            }
        }

        // Hapus data dari database
        $data->delete();

        return back()->with('message', ' Data berhsail dihapus');
    }
}
