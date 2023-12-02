<?php
function insert_user($user,$email,$pass){
    $sql="insert into user(user,email,pass) values('$user','$email','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from user where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$email,$pass){
    $sql="update user set user='".$user."', email='".$email."', pass='".$pass."' where id=".$id;
    pdo_execute($sql);
}
function checkemail($email){
    $sql="select * from user where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function loadall_taikhoan(){
    $sql="SELECT * FROM user order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function loadall_donhang(){
    $sql="SELECT * FROM cart order by id desc";
    $listdonhang=pdo_query($sql);
    return $listdonhang;
}
function loadall_thongtin(){
    $sql="SELECT * FROM user order by id desc";
    $thongtin=pdo_query($sql);
    return $thongtin;
}
?>