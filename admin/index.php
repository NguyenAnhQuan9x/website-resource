<?php
require 'model/PDO.php';
require "./header.php";
//controller
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case'dm':
            //kiểm tra xem người dùng có click vào add hay ko
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){//kiểm tra xem tồn tại nút thêm mới hay ko và ngta có click vào hay ko(trong ngoặc là đúng(ngta có nhấn))
                $tenloai=$_POST['tenloai'];// nếu ngta có click thì lấy tên loại về và nhập vào database
                $sql="INSERT INTO  danhmuc(ten) VALUES ('$tenloai')";
                pdo_execute($sql);
                $thongbao="thêm thành công";
            }
            include 'danhmuc/add.php';
            break;
        case'sp':
            include 'sanpham/list.php';
            break;
        default:
        include "home.php";
        break;
    }
}else{
    include "home.php";
}

require "./footer.php";
?>