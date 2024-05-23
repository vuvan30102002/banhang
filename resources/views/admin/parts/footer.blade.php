
    <script src="{{asset('backend/asset/js/javascrip.js')}}"></script>
    <!-- <script src="{{asset('backend/asset/ckeditor5/ckeditor.js')}}"></script>
    <script src="{{asset('backend/asset/ckeditor5/script.js')}}"></script> -->
    <!-- <script src="{{asset('backend/asset/js/product_ajax.js')}}"></script> -->
<script>
    function remove(product_id,url) {
        if (confirm("Are you sure")) {
            $.ajax({
                url:url,
                data:{product_id},
                method:'get',
                dataType:'json',
                success:function(res){
                    if (res.success == true) {
                        location.reload();
                    }
                }
            })
        }
    }
</script>


    @yield('footer')

