@extends('admin.main')
@section('title')
    Thêm Sản Phẩm
@endsection
@section('content')
<form action="/admin/product/add"  method="post">
@csrf
<div class="admin-content-main-content-product-add">
                <div class="admin-content-main-content-left">
                  <div class="admin-content-main-content-two-input">
                    <input type="text" value="{{ old('name') }}" name="name" placeholder="Ten San Pham" />
                    <input type="text" value="{{ old('material') }}" name="material" placeholder="Chat Lieu" />
                  </div>
                  <div class="admin-content-main-content-two-input">
                    <input type="text" value="{{ old('price_nomal') }}" name="price_nomal" placeholder="Gia Ban" />
                    <input type="text" value="{{ old('price_sale') }}" name="price_sale" placeholder="Giam Gia" />
                  </div>
                  <textarea class="editor_des" value="{{ old('description') }}" name="description" id="" cols="30" rows="10" placeholder="Đặc điểm nổi bật">{{ old('description') }}</textarea>
                  <textarea class="editor_content" value="{{ old('content') }}" name="content" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm">{{ old('content') }}</textarea>
                  <button type="submit">Them San Pham</button>
                </div>
                <div class="admin-content-main-content-right">
                  <div class="admin-content-main-content-right-image">
                    <label for="file">Ảnh Đại Diện</label>
                    <input type="file" id="file" multiple/>
                    <input type="hidden" name="image" id=input-file-img-hiden>
                    <div class="image-show" id="input-file-img">

                    </div>
                  </div>
                  <div class="admin-content-main-content-right-images">
                    <label for="files">Ảnh Sản Phẩm</label>
                    <input type="file" id="files" multiple/>
                    <input type="hidden" name="images" id=input-file-img-hiden>
                    <div class="images-show" id="input-file-imgs">

                    </div>
                  </div>
                </div>
              </div>

</form>

@endsection

@section('footer')
<script src="{{asset('backend/asset/ckeditor5/ckeditor.js')}}"></script>
<script src="{{asset('backend/asset/ckeditor5/script.js')}}"></script>
<script>
  // code ban dau

//   createDialog().then((config) => {
//   return ClassicEditor.create(document.querySelector(".editor"), {
//     ckbox: {
//       tokenUrl: config.ckboxTokenUrl,
//     },
//   })
//     .then((editor) => {
//       window.editor = editor;
//     })
//     .catch(handleSampleError);
// });

//
ClassicEditor.create(document.querySelector('.editor_des'),{
}).then(editor => {
  window.editor = editor;
}).catch(handleSampleError);
ClassicEditor.create(document.querySelector('.editor_content'),{

}).then(editor => {
  window.editor = editor;
}).catch(handleSampleError);

</script>
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>
@endsection
