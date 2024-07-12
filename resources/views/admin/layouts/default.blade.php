<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      @section('title')
    Shoppe
@show</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{('assets/css/custom.css')}}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('admin.layouts.sidebar')
            <div class="col-3 bg-info position-fixed top-0 start-0 sidebar">
                <h3 class="mt-3 text-light">Shoppe</h3>
                <div class="list-group mt-4">
                    <a href="#" class="list-group-item ">
                        Quản lý người dùng
                    </a>
                    <a href="#" class="list-group-item">
                        Quản lý sản phẩm
                    </a>
                    <a href="#" class="list-group-item ">
                        Báo cáo
                    </a>
                    <a href="#" class="list-group-item ">
                        Thống kê
                    </a>
                </div>
            </div>

            <div class="col-9 offset-3 p-0 position-relative">
                <!-- Header -->
                @include('admin.layouts.header')
                <div class="bg-primary header">
                    <h3 class="text-light layer">
                        <span>Shoppe</span>
                        <span>Quản lý sản phẩm</span>
                    </h3>

                    <div class="dropdown">
                        <img class="dropdown-toggle" src="assets/image/avatar.jpg" alt="" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Language</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Main -->
                @@yield('content')
                <div class="p-4" style="min-height: 800px;">
                    <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
                    <button class="btn btn-info">Thêm mới</button>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá sản phẩm</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Nokia 520</td>
                                <td>15000000 vnđ</td>
                                <td>
                                    Điện thoại mới giá ổn
                                </td>
                                <td>
                                    <button class="btn btn-warning">Sửa</button>
                                    <button class="btn btn-danger">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Nokia 520</td>
                                <td>15000000 vnđ</td>
                                <td>
                                    Điện thoại mới giá ổn
                                </td>
                                <td>
                                    <button class="btn btn-warning">Sửa</button>
                                    <button class="btn btn-danger">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Nokia 520</td>
                                <td>15000000 vnđ</td>
                                <td>
                                    Điện thoại mới giá ổn
                                </td>
                                <td>
                                    <button class="btn btn-warning">Sửa</button>
                                    <button class="btn btn-danger">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Nokia 520</td>
                                <td>15000000 vnđ</td>
                                <td>
                                    Điện thoại mới giá ổn
                                </td>
                                <td>
                                    <button class="btn btn-warning">Sửa</button>
                                    <button class="btn btn-danger">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Footer -->
                @include('admin.layouts.footer')
                <div class="bg-warning ps-4 pt-3 position-absolute end-0" style="height: 60px; width: 100%;">
                    <h5 class="text-light">
                        @Copyright bootstrap
                    </h5>
                </div>

            </div>
        </div>
    </div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>