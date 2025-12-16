@extends('backend/layouts/app')

@section('title', 'Tambah Data')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="text-semibold">@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <a href="{{ Route('admin.aluna.index') }}" class="btn btn-sm btn-primary"><i
                            class="fas fa-angle-left mr-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ Route('admin.aluna.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title') }}">

                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" name="harga" id="harga"
                                        class="form-control @error('harga') is-invalid @enderror"
                                        value="{{ old('harga') }}">

                                    @error('harga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-2">
                                <div class="mb-3">
                                    <label for="luasBangunan" class="form-label">Luas Bangunan</label>
                                    <input type="text" name="luasBangunan" id="luasBangunan"
                                        class="form-control @error('luasBangunan') is-invalid @enderror"
                                        value="{{ old('luasBangunan') }}">

                                    @error('luasBangunan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mb-3">
                                    <label for="luasTanah" class="form-label">luas Tanah</label>
                                    <input type="text" name="luasTanah" id="luasTanah"
                                        class="form-control @error('luasTanah') is-invalid @enderror"
                                        value="{{ old('luasTanah') }}">

                                    @error('luasTanah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mb-3">
                                    <label for="kamarTidur" class="form-label">Kamar Tidur</label>
                                    <input type="text" name="kamarTidur" id="kamarTidur"
                                        class="form-control @error('kamarTidur') is-invalid @enderror"
                                        value="{{ old('kamarTidur') }}">

                                    @error('kamarTidur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="mb-3">
                                    <label for="kamarMandi" class="form-label">Kamar Mandi</label>
                                    <input type="text" name="kamarMandi" id="kamarMandi"
                                        class="form-control @error('kamarMandi') is-invalid @enderror"
                                        value="{{ old('kamarMandi') }}">

                                    @error('kamarMandi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">

                                    <img src="" width="300px" class="img-fluid tampil-image mb-3" alt="">

                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" id="image" onchange="tampilImage()" value="{{ old('image') }}">

                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <input type="file" class="form-control @error('image1') is-invalid @enderror"
                                        name="image1">

                                    @error('image1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">

                                    <input type="file" class="form-control @error('image2') is-invalid @enderror"
                                        name="image2">

                                    @error('image2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">

                                    <input type="file" class="form-control @error('image3') is-invalid @enderror"
                                        name="image3">

                                    @error('image3')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">

                                    <input type="file" class="form-control @error('image4') is-invalid @enderror"
                                        name="image4">

                                    @error('image4')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('script')
    <script>
        function tampilImage() {
            let image = document.getElementById('image');
            let tampilImage = document.querySelector('.tampil-image');

            tampilImage.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                tampilImage.src = oFREvent.target.result;
            }
        }

        // ClassicEditor
        //     .create(document.querySelector('#editor'))
        //     .catch(error => {
        //         console.error(error);
        //     });
    </script>
@endpush
