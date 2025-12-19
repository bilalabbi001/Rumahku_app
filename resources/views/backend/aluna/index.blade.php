@extends('backend/layouts/app')

@section('title', 'Cluster Aluna')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 align-items-center">
                    <div class="col-12 col-md-6">
                        <h1 class="text-semibold fs-5 fs-md-4">@yield('title')</h1>
                    </div>
                    <div class="col-12 col-md-6 mt-2 mt-md-0">
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
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
                    <a href="{{ route('admin.aluna.create') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-plus mr-2"></i>Tambah data</a>
                </div>
                <div class="card-body">

                    @if (session('message'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm mt-4 align-middle">

                            <thead>
                                <tr class="small">
                                    <th>No</th>
                                    <th>Tittle</th>
                                    <th>Slug</th>
                                    <th class="d-none d-md-table-cell">Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produks as $produk)
                                    <tr>
                                        <td class="small">{{ $loop->iteration }}</td>
                                        <td class="text-xs">{{ $produk->title }}</td>
                                        <td class="text-xs">{{ $produk->slug }}</td>
                                        <td class="d-none d-md-table-cell text-xs">
                                            {{ Str::limit($produk->description, 100) }}
                                        </td>
                                        <td class="text-center">
                                            <img src="{{ asset('assets/images/' . $produk->image) }}"
                                                alt="{{ $produk->title }}" class="img-fluid rounded"
                                                style="max-width:100px;">
                                        </td>

                                        <td>
                                            <div class="d-flex flex-wrap justify-content-center justify-content-md-start">
                                                <a href="{{ route('admin.aluna.edit', $produk->id) }}"
                                                    class="btn btn-sm btn-warning mr-2 mt-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <button type="button" onclick="confirmDelete('{{ $produk->id }}')"
                                                    class="btn btn-sm btn-danger mr-2 mt-2">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                                <form id="delete-form-{{ $produk->id }}"
                                                    action="{{ route('admin.aluna.destroy', $produk->id) }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('scriptSweet')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: "Yakin ingin menghapus?",
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
@endpush
