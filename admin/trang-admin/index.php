
<?php
    include "../model/pdo.php";
    include "../model/loai.php";
    include "../model/hang-hoa.php";
    include "../model/taikhoan.php";
    include "header.php";
    
            if(isset($_GET['act'])){
                switch ($_GET['act']) {
                                case 'adddm':
                                    // người dùng có click vào nút add hay ko
                                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                                        $tenloai = $_POST['ten_dm'];
                                        insert_danhmuc($tenloai);
                                        $thongbao = "Thêm thành công";
                                    }
                                    include "../loai-hanh/add.php";
                                    break;
                                case 'listdm':
                                    $listdanhmuc = loadall_danhmuc();
                                    include "../loai-hanh/list.php";
                                    break;
                                // SỬA DANH MỤC 
                                case 'suadm':
                                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                                        $dm = loadone_danhmuc($_GET['id']);
                                    }
                                    include "../loai-hanh/update.php";
                                    break;
                                case 'updatedm':
                                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                        $ten_dm = $_POST['ten_dm'];
                                        $id = $_POST['id'];
                                        update_danhmuc($id, $ten_dm);
                                        $thongbao = "Cập nhật thành công";
                                    }
                                    $listdanhmuc = loadall_danhmuc();
                                    include "../loai-hanh/list.php";
                                    break;
                                case 'xoadm':
                                if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    delete_danhmuc($_GET['id']);
                                }
                                $listdanhmuc = loadall_danhmuc();
                                include "../loai-hanh/list.php";
                                break;
                                case 'addsp':
                                    // kiểm tra xem nd có nhấn vào nút add kh ? 
                                    
                                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                                        $tensp = $_POST['tensp'];
                                        $giasp=$_POST['giasp'];
                                        $ngaychieu=$_POST['ngaychieu'];
                                        $id_dm=$_POST['id_dm'];
                                        $hinh=$_FILES['hinh']['name'];
                                        $target_dir = "../upload/";
                                        $target_file = $target_dir . basename($_FILES['hinh']['name']);
                                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                          } else {
                                           // echo "Sorry, there was an error uploading your file.";
                                          }
                        
                                        insert_sanpham($tensp, $giasp, $hinh, $ngaychieu, $id_dm);
                                        $thongbao = "Thêm thành công";
                                    }
                        
                                    $listdanhmuc = loadall_danhmuc();
                                    include "../san-pham/add.php";
                                    break;
                    
                                case 'listsp':
                                    if(isset($_POST['listok'])&&($_POST['listok'])){
                                        $kyw=$_POST['kyw'];
                                        $id_dm=$_POST['id_dm'];
                
                                    }
                                    else {
                                        $kyw='';
                                        $id_dm=0;
                                    }
                                    $listdanhmuc=loadall_danhmuc(); 
                                    $listsanpham=loadall_sanpham($kyw,$id_dm);  
                                    include "../san-pham/list.php";
                                    break;
                                
                                case 'xoasp':
                                    if(isset($_GET['id'])&&($_GET['id']>0)){
                                        delete_sanpham($_GET['id']);
                                    }
                                    $listsanpham=loadall_sanpham("",0);
                                    include "../san-pham/list.php";
                                    break;
                                case 'suasp':
                                    if(isset($_GET['id'])&&($_GET['id']>0)){
                                    $sanpham=loadone_sanpham($_GET['id']);
                                    }
                                    $listdanhmuc=loadall_danhmuc(); 
                                    include "../san-pham/update.php";
                                    break;
                                case 'updatesp':
                                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                        $id=$_POST['id'];
                                        $id_dm=$_POST['id_dm'];
                                        $tensp = $_POST['tensp'];
                                        $giasp=$_POST['giasp'];
                                        $ngaychieu=$_POST['ngaychieu'];                       
                                        $hinh=$_FILES['hinh']['name'];
                                        $target_dir = "../upload/";
                                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                          } else {
                                           // echo "Sorry, there was an error uploading your file.";
                                          }
                                        update_sanpham($id,$id_dm,$tensp,$giasp,$ngaychieu,$hinh);
                                        $thongbao="cập nhật thành công";
                    
                                    }
                                    $listdanhmuc=loadall_danhmuc(); 
                                    $listsanpham=loadall_sanpham("",0);
                                    include "../san-pham/list.php";
                                    break;
                                case 'dskh':
                                        $listtaikhoan=loadall_taikhoan();
                                        include "../khachhang/list.php";
                                    break;
                                case 'dsdh':
                                        $listdonhang=loadall_donhang();
                                        include "../donhang/list.php";
                                    break;
                                    case 'dstt':
                                        $thongtin=loadall_thongtin();
                                        include "../donhang/list.php";
                                    break;
                    
                    
                    // DANH MỤC 
                    }
    

    }else {
        include "home.php";
    }
   
    include "footer.php";
?>