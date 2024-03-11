@extends('layouts.client')

@section('title')
{{ $title }}
@endsection

@section('content')
<h1>Thêm sản phẩm</h1>

<form action="" method="POST">
    @if ($errors->any())
    <div class="alert alert-danger text-center">
        Vui lòng kiểm tra lại dữ liệu
    </div>
    @endif

    <div class="mb-3">
        <label for="product_name">Tên sản phẩm</label>
        <input type="text" class="form-control" name="product_name" placeholder="Tên sản phẩm..." />
        @error('product_name')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="product_price">Giá sản phẩm</label>
        <input type="text" class="form-control" name="product_price" placeholder="Giá sản phẩm..." />
        @error('product_name')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
</form>
@endsection
