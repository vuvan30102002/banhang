@extends('admin.main')

@section('title')
Danh Sách Đơn Hàng
@endsection

@section('content')
<div class="admin-content-main-content-order-list">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Địa Chỉ</th>
                                <th>Ghi Chú</th>
                                <th>Chi Tiết</th>
                                <th>Ngày</th>
                                <th>Trạng Thái</th>
                                <th>Tuỳ Biến</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Chịu Cách Mình Nói Thua</td>
                                <td>123456</td>
                                <td>gg@gmail.com</td>
                                <td>Thái Bình</td>
                                <td>Giao Siêu Chậm</td>
                                <td><a href="/admin/order_detail">Xem</a></td>
                                <td>30/10/2002</td>
                                <td>Đã Xác Nhận</td>
                                <td><a style="color: black;" href="">Sửa</a>|<a style="color: black;" href="">Xoá</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Chịu Cách Mình Nói Thua</td>
                                <td>123456</td>
                                <td>gg@gmail.com</td>
                                <td>Thái Bình</td>
                                <td>Giao Siêu Chậm</td>
                                <td><a href="/admin/order_detail">Xem</a></td>
                                <td>30/10/2002</td>
                                <td>Đã Xác Nhận</td>
                                <td><a style="color: black;" href="">Sửa</a>|<a style="color: black;" href="">Xoá</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
@endsection