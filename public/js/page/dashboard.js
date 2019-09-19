// Vẽ biểu đổ Thống kê Loại sản phẩm sử dụng ChartJS
var $objChartThongKeLoaiSanPham;
var $chartOfobjChartThongKeLoaiSanPham = document.getElementById("chartOfobjChartThongKeLoaiSanPham").getContext("2d");

$(document).ready(function() {
    // Vẽ biểu đồ Loại sản phẩm
    $.ajax({
        url: '/salomon/backendsss/ajax/baocao-thongkeloaisanpham-ajax.php',
        type: "GET",
        success: function (response) {
            var data = JSON.parse(response);
            var myLabels = [];
            var myData = [];
            $(data).each(function () {
                myLabels.push((this.TenLoaiSanPham));
                myData.push(this.SoLuong);
            });
            myData.push(0); // tạo dòng số liệu 0
            if (typeof $objChartThongKeLoaiSanPham !== "undefined") {
                $objChartThongKeLoaiSanPham.destroy();
            }
            $objChartThongKeLoaiSanPham = new Chart($chartOfobjChartThongKeLoaiSanPham, {
                // Kiểu biểu đồ muốn vẽ. Các bạn xem thêm trên trang ChartJS
                type: "horizontalBar",
                data: {
                    labels: myLabels,
                    datasets: [{
                        data: myData,
                        borderColor: "#6610f2;",
                        backgroundColor: "#6610f2;",
                        borderWidth: 1
                    }]
                },
                // Cấu hình dành cho biểu đồ của ChartJS
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "Thống kê Loại sản phẩm"
                    },
                    responsive: true
                }
            });
        },
        error:function(res) {
            alert('Lỗi khi vẽ biểu đồ')
        }
    });
});