<div class="row">
            <div class="frmtitle">
                <h2>Thêm một loại hàng mới</h2>  
            </div>
            <div class="frmcontent">
                <form action="../admin/index.php?act=dm" method="POST">
                    <div class="row mb10" style="margin-left: 200px;">
                        Mã loại <br>
                        <input type="number" name="maloai" id="">
                    </div>
                    <div class="row mb10" style="margin-left: 200px;">
                        Tên loại <br>
                        <input type="text" name="tenloai" id="">
                    </div> 
                    <br>
                    <div class="row mb10" style="margin-left: 200px;">
                        <input type="submit" name="themmoi"  value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href=""> <input type="button" value="Danh sách"></a>
                    </div>   
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }else{
                        echo "không thành công";
                    }


                    //nếu tồn tại biến thông báo và khác rỗng thì in ra or thôi
                    ?>

                </form>

            </div>
        </div>
    </div>