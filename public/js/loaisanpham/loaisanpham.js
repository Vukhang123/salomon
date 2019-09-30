// Yêu cầu JS đợi HTML vẽ (render) xong hết!
// => Thực thi những đoạn code JS nằm bên trong hàm ready();
$(document).ready(function () {
    // Tìm đối tượng đó, đăng ký sự kiện tương ứng
    $('.btn-delete').click(function (event) {
        var lsp_ma = $(this).data('lsp-ma');
        debugger;
        Swal.fire({
            title: 'Bạn co muốn xóa lsp_ma =' +lsp_ma,
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
             window.location.href = "/salomon/backends/loaisanpham/xoa.php?lsp_ma=" +lsp_ma; 
            }
          });
    });
});
// $(document).ready(function () {
//     // Tìm đối tượng đó, đăng ký sự kiện tương ứng
//     $('.btn-edit').click(function (event) {
//         var lsp_ma = $(this).data('lsp-ma');
//         debugger;
//         Swal.fire({
//             title: 'Bạn co muốn sửa lsp_ma =' +lsp_ma,
//             text: "You won't be able to revert this!",
//             type: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             confirmButtonText: 'Yes, delete it!'
//           }).then((result) => {
//             if (result.value) {
//               Swal.fire(
//                 'Deleted!',
//                 'Your file has been deleted.',
//                 'success'
//               )
//              window.location.href = "/salomon/backends/loaisanpham/sua.php?lsp_ma=" +lsp_ma; 
//             }
//           });
//     });
// });