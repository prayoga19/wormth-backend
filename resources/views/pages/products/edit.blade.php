@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Update produk</strong>
            <small>{{ $item->name }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.update', $item->id) }}" method="POST">
               @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Produk</label>
                    <input type="text"
                            name="name"
                            value="{{ old('name') ?  old('name') : $item->name }}"
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
                            value="{{ old('type') ?  old('type') : $item->type }}"
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
                            @enderror"/>{{ old('description') ?  old('description') : $item->description }}</textarea>
                              {{--  menampilkan pesan error  --}}
                            @error('description')
                                <div class="text-muted">{{ $message }}</div>
                            @enderror
                </div>

                  <div class="form-group">
                    <label for="price" class="form-control-label">price produk</label>
                    <input type="number"
                            name="price"
                            value="{{ old('price') ?  old('price') : $item->price }}"
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
                            value="{{ old('quantity') ?  old('quantity') : $item->quantity }}"
                            class="form-control @error('quantity') is-invalid
                            @enderror"/>
                              {{--  menampilkan pesan error  --}}
                            @error('quantity')
                                <div class="text-muted">{{ $message }}</div>
                            @enderror
                </div>
                 <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Update Produk
                </button>
            </div>
            </form>
           
        </div>
    </div>
@endsection