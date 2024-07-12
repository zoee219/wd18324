<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('products.updatePostProduct') }}" method="post">
            @csrf
            <input type="hidden" name="productID" value="{{ $product->id }}">
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="category">Loại:</label>
                <select class="form-control" id="category" name="category">
                    @foreach($category as $value)
                    <option value="{{ $value->id }}"
                    @if($product->category_id == $value->id)
                        selected
                    @endif
                    >
                        {{ $value->name_ct }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Giá:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
            </div>
            <div class="form-group">
                <label for="view">Lượt xem:</label>
                <input type="text" class="form-control" id="view" name="view" value="{{ $product->view }}">
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
