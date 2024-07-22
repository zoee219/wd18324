@extends('admin.layouts.default')

@section('title')
 @parent
    Thêm sản phẩm
@endsection
    

@section('content')
<div class="p-4" style="min-height: 800px;">
    <form action="{{ route('admin.products.addPostProduct') }}" method="post">
        @csrf
        Name:
        <input type="text" class="form-control" name="nameProduct">
        Price:
        <input type="text" class="form-control" name="nameProduct">
        <button class="btn btn success" type="submit">Thêm mới</button>
    </form>
</div>
@endsection