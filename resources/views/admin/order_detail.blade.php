@extends('admin.main')

@section('title')
Chi Tiết Đơn Hàng
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
                            <tr>
                                <td>1</td>
                                <td><img style="width: 70px;" src="{{asset('backend/asset/image/logo.png')}}" alt=""></td>
                                <td>Áo w</td>
                                <td>50k</td>
                                <td>10%</td>
                                <td>30/10/2002</td>
                                <td><a style="color: black;" href="">Xoá</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img style="width: 70px;" src="{{asset('backend/asset/image/logo.png')}}" alt=""></td>
                                <td>Áo w</td>
                                <td>50k</td>
                                <td>10%</td>
                                <td>30/10/2002</td>
                                <td><a style="color: black;" href="">Xoá</a></td>
                            </tr>
                            <tr>
                                <td style="font-weight: 700;" colspan="5">Tổng Cộng</td>
                                <td style="font-weight: 700;">355.000</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
@endsection