$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
// $("#files").on("change", () => {
//     var formData = new FormData();
//     var files = $("#files")[0].files;
//     for (let index = 0; index < files.length; index++) {
//         formData.append("files[]", files[index]);
//     }
//     $.ajax({
//         url: "/uploads",
//         method: "POST",
//         dataType: "JSON",
//         data: formData,
//         contentType: false,
//         processData: false,
//         success: function (result) {
//             if ((result.success = true)) {
//                 let url = window.location.hostname;
//                 if (url.includes("minacode.net")) {
//                     for (let index = 0; index < result.url.length; index++) {
//                         let truePath = "/public" + result.url[index];
//                         html = "";
//                         html +=
//                             '<img src="' +
//                             truePath +
//                             '" alt=""><input type="hidden" value="' +
//                             truePath +
//                             '" class="product-images" name="product_images[]">';
//                         $("#input-file-imgs").html(html);
//                     }
//                 } else {
//                     html = "";
//                     for (let index = 0; index < result.url.length; index++) {
//                         html +=
//                             '<img src="' +
//                             result.url[index] +
//                             '" alt=""><input type="hidden" value="' +
//                             result.url[index] +
//                             '" class="product-images" name="product_images[]">';
//                         $("#input-file-imgs").html(html);
//                     }
//                 }
//             }
//         },
//     });
// });

$("#file").on("change", () => {
    var formData = new FormData();
    var file = $("#file")[0].files[0];
    formData.append("file", file);
    $.ajax({
        url: "/upload",
        method: "post",
        dataType: "json",
        data: formData,
        contentType: false,
        processData: false,
        success: function (result) {
            if (result.success == true) {
                html = "";
                html += '<img src="' + result.path + '" alt="">';
                $("#input-file-img").html(html);
                $("#input-file-img-hiden").val(result.path);
            }
        },
    });
});
///////
$("#files").on("change", () => {
    var formData = new FormData();
    var files = $("#files")[0].files;
    for (let index = 0; index < files.length; index++) {
        formData.append("files[]", files[index]);
    }
    $.ajax({
        url: "/uploads",
        method: "POST",
        dataType: "JSON",
        data: formData,
        contentType: false,
        processData: false,
        success: function (result) {
            if ((result.success = true)) {
                html = "";
                for (let index = 0; index < result.paths.length; index++) {
                    html +=
                        '<img src="' +
                        result.paths[index] +
                        '" alt=""><input type="hidden" value="' +
                        result.paths[index] +
                        '" class="product-images" name="images[]">';
                    $("#input-file-imgs").html(html);
                }
            }
        },
    });
});
