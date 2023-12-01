<?php 
ob_start();
session_start();
include "header.php";
include "../admin/model/hang-hoa.php";
include "../admin/model/loai.php";
include "global.php";
include "../admin/model/pdo.php";
include "../admin/model/taikhoan.php";
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
$spaw=loadall_sanpham_home();
$top10=loadall_sanpham_top10();
$dsdm=loadall_danhmuc();
$top1=loadall_sanpham_top1();

    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $act = $_GET['act'];
        switch ($act) {  
            case 'sanphamm':
                include "chitetsp.php";
                break;

            case 'sanpham':
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $id_dm=$_GET['iddm'];
                    $dssp = loadall_sanpham ( "" ,$id_dm);
                    $tendm= load_ten_dm($id_dm);
                 
                    
                include "sanphamcungl.php";
                }else{
                    include "home.php";
                }
            
                break;
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $sp_cungloai=load_sanpham_cungloai($id,$id_dm);
                    
                include "sanphamct.php";
                }else{
                    include "home.php";
                }
            
                break;
               
            case 'dangky':
                    if(isset($_POST['dangky'])&&($_POST['dangky'])){
                        $user=$_POST['user'];
                        $email=$_POST['email'];
                        $pass=$_POST['pass'];
                        insert_user($user,$email,$pass);
                        $thongbao="Đã Đăng ký thành công";
                    }
                    include "../trang-chu/taikhoan/dangky.php";
                break;
                case 'dangnhap':
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser=checkuser($user,$pass);
                        if(is_array($checkuser)){
                            $_SESSION['user']=$checkuser;
                            $thongbao="Bạn đã đăng nhập thành công!";
                            header('Location: index.php');
                    }else{
                        $thongbao="Tài khoản không tồn tại. Vui lòng đăng nhập/đăng ký";
                    }
                }
                   include "../trang-chu/taikhoan/dangnhap.php";
                    break;
                    case 'thoat':
                        session_unset();
                        header('Location: index.php');
                        break;
                        case 'edit_taikhoan':
                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                $user=$_POST['user'];
                                $email=$_POST['email'];
                                $pass=$_POST['pass'];
                                $id=$_POST['id'];
                                update_taikhoan($id,$user,$email,$pass,);
                                $_SESSION['user']=checkuser($user,$pass);
                               
                        }
                            include "../trang-chu/taikhoan/edit_taikhoan.php";
                            break;

                        case 'addcart' :
                            if(isset($_POST['addcart'])&&($_POST['addcart'])){
                                $hinh=$_POST['hinh'];
                                $name=$_POST['name'];
                                $price=$_POST['price'];
                                $soluong=$_POST['soluong'];
                                $fl=0;
                                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
                                    if($_SESSION['giohang'][$i][1]==$name){
                                        $fl=1;
                                        $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                                        $_SESSION['giohang'][$i][3]=$soluongnew;
                                        break;
                        
                                    }
                                    
                                }
                                //neu khong trung sp trong gio hang thi them moi
                                if($fl==0){
                                    //them moi sp vao gio hang
                                    $sp=[$hinh,$name,$price,$soluong];
                                    $_SESSION['giohang'][]=$sp;
                                }
                        
                               
                                    
                                
                                //neu khong trung sp trong gio hang thi them moi
                               
                                    //them moi sp vao gio hang
                                    
                                
                            }
                            include "../trang-chu/cart.php";
                            break;
                            case 'delcart':
                                if(isset($_GET['idcart'])){
                                    $idcart = $_GET['idcart'];
                                    unset($_SESSION['giohang'][$idcart]);
                                    $_SESSION['giohang'] = array_values($_SESSION['giohang']); // Đặt lại chỉ số mảng
                                } else {
                                    $_SESSION['giohang'] = [];
                                }
                                header('location: index.php?act=addcart');
                                break;
            default:
            include "home.php";
                break;
        }
    }else {
        include "home.php";
    }
    include "footer.php";
ob_end_flush();
?>

