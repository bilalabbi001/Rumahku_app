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

        // Upload langsung ke public_html
        $uploadPath = public_path('assets/images');


        // Upload file gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $fileName);
            $data['image'] = $fileName;
        }


        // Upload image1 - image4
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadPath, $fileName);

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

        // Upload langsung ke public_html
        $uploadPath = public_path('assets/images');

        // Cek ketika user upload file baru
        if ($request->hasFile('image')) {

            // Hapus file lama
            if (!empty($produk->image)) {
                $oldFile = $uploadPath . '/' . $produk->image;
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            // Upload file baru
            $file = $request->file('image'); // simpan file baru ketika ada upload
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); // Beri nama unik pada file image
            $file->move($uploadPath, $fileName); // masukan file ke polder public/images

            $data['image'] = $fileName; // Simpan file baru ke dalam array
        }


        //Update file images 1-4 jika ada file yang diupload
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            // Hapus file lama
            if ($request->hasFile($field)) {

                if (!empty($request->$field)) {
                    $oldFile = $uploadPath . '/' . $produk->$field;
                    if (file_exists($oldFile)) {
                        unlink($oldFile);
                    }
                }


                // Upload file baru
                $file = $request->file($field);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadPath, $fileName);

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

        // Path polder gambar langsung
        $uploadPath = public_path('assets/images');


        // Hapus file utama (image)
        if ($data->image && file_exists($uploadPath . '/' . $data->image)) {
            unlink($uploadPath . '/' . $data->image);
        }


        // Hapus file image 1-4 jika ada
        for ($i = 1; $i <= 4; $i++) {
            $field = 'image' . $i;

            if ($data->$field && file_exists($uploadPath . '/' . $data->$field)) {
                unlink($uploadPath . '/' . $data->$field);
            }
        }

        // Hapus data dari database
        $data->delete();

        return redirect()->Route('admin.aluna.index')->with('message', 'Data berhasil dihapus');
    }
}
