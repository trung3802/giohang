<?php


function insert_danhmuc($ten_dm){
    $sql = "insert into danhmuc(ten_dm) values('$ten_dm')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql = "delete from danhmuc where id=". $id;
    pdo_query($sql);
}
function loadall_danhmuc(){
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;    
}
function loadone_danhmuc($id){
    $sql = "select * from danhmuc where id=".$id ;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $ten_dm){
    $sql = "update danhmuc set ten_dm='".$ten_dm."' where id=".$id;
    pdo_execute($sql);
}

?>