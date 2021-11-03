@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah produk</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Produk</label>
                    <input type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid
                            @enderror"/>
                            {{--  menampilkan pesan error  --}}
                            @error('name')
                                <div class="text-muted">{{ $message }}</div>
                            @enderror
                </div>
                 <div class="form-group">
                    <label for="type" class="form-control-label">Tipe produk</label>
                    <input type="text"
                            name="type"
                            value="{{ old('type') }}"
                            class="form-control @error('type') is-invalid
                            @enderror"/>
                              {{--  menampilkan pesan error  --}}
                            @error('type')
                                <div class="text-muted">{{ $message }}</div>
                            @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-control-label">Deskripsi produk</label>
                    <textarea name="description"  class="ckeditor form-control @error('description') is-invalid
                            @enderror"/>{{ old('description') }}</textarea>
                              {{--  menampilkan pesan error  --}}
                            @error('description')
                                <div class="text-muted">{{ $message }}</div>
                            @enderror
                </div>

                  <div class="form-group">
                    <label for="price" class="form-control-label">price produk</label>
                    <input type="number"
                            name="price"
                            value="{{ old('price') }}"
                            class="form-control @error('price') is-invalid
                            @enderror"/>
                              {{--  menampilkan pesan error  --}}
                            @error('price')
                                <div class="text-muted">{{ $message }}</div>
                            @enderror
                </div>

                  <div class="form-group">
                    <label for="quantity" class="form-control-label">Stock produk</label>
                    <input type="number"
                            name="quantity"
                            value="{{ old('quantity') }}"
                            class="form-control @error('quantity') is-invalid
                            @enderror"/>
                              {{--  menampilkan pesan error  --}}
                            @error('quantity')
                                <div class="text-muted">{{ $message }}</div>
                            @enderror
                </div>
                 <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Tambah Produk
                </button>
            </div>
            </form>
           
        </div>
    </div>
@endsection