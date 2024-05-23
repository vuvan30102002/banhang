@extends('admin.main')
@section('title')
    Danh Sách Sản Phẩm
@endsection
@section('content')
<div class="admin-content-main-content-product-list">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Ảnh</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá Bán</th>
                                <th>Giảm Giá</th>
                                <th>Ngày Đăng</th>
                                <th>Tuỳ Chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><img style="width: 70px;" src="{{asset($item -> image)}}" alt=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{number_format($item->price_nomal)}}</td>
                                <td>{{number_format($item->price_sale)}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><a style="color: black;" href="/admin/product/edit/{{$item->id}}">Sửa</a>|
                                    <a onclick="remove(product_id = {{$item->id}}, url='/admin/product/delete')" style="color: black;" href="">Xoá</a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
@endsection
