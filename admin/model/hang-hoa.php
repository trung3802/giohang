<?php

function insert_sanpham($tensp,$giasp,$hinh,$ngaychieu,$id_dm){
    $sql = "INSERT INTO sanpham(name,price,img,ngaychieu,id_dm) VALUES ('$tensp','$giasp','$hinh','$ngaychieu','$id_dm')";
    pdo_execute($sql);
}

function delete_sanpham($id){
    $sql = "DELETE FROM sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,6";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
    
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by id desc limit 0,4";
    $listsanpham = pdo_query($sql);
    return $listsanpham;  
} 
    function loadall_sanpham_top1(){
        $sql="select * from sanpham where 1 order by id desc limit 0,1";
        $listsanpham = pdo_query($sql);
        return $listsanpham; 
}

function loadall_sanpham($kyw,$id_dm){
    $sql="SELECT * FROM sanpham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($id_dm>0){
        $sql.=" and id_dm = '".$id_dm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function sp_cungloai($id,$id_dm){
        $sql = "select * from danhmuc where id_dm=".$id_dm." AND id<> ".$id;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $dm;
  
}
function load_ten_dm($id_dm){
 
        $sql = "select * from danhmuc where id=". $id_dm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_dm;
  
}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $id_dm){
    $sql = "select * from sanpham where id_dm= ".$id_dm." AND id <> ". $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;  
}

function update_sanpham($id,$id_dm,$tensp,$giasp,$ngaychieu,$hinh){
    if($hinh!="")
    $sql = "update sanpham set id_dm='".$id_dm."',name='".$tensp."', price='".$giasp."', ngaychieu='".$ngaychieu."', img='".$hinh."' where id=".$id;
    else 
    $sql = "update sanpham set id_dm='".$id_dm."',name='".$tensp."', price='".$giasp."', ngaychieu='".$ngaychieu."' where id=".$id;
    pdo_execute($sql);
}
?>