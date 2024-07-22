<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <a href="{{ route('products.addProduct') }}" class="btn btn-primary mb-3">Thêm mới</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Loại</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listProduct as $pr)
                <tr>
                    <td>{{ $pr->id }}</td>
                    <td>{{ $pr->name }}</td>
                    <td>{{ $pr->name_ct }}</td>
                    <td>{{ $pr->price }}</td>
                    <td>{{ $pr->view }}</td>
                    <td>
                        <a href="{{ route('products.updateProduct', $pr->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="{{ route('products.deleteProduct', $pr->id) }}" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js
