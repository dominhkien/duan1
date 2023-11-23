<<<<<<< HEAD
<?php
// thêm khách hàng 
function insert_khach_hang($email, $pass)
{
=======
<?php 
// thêm khách hàng 
function insert_khach_hang($email,$pass){
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
    $sql = "INSERT INTO  khach_hang(email,mat_khau) VALUES('$email','$pass')";
    pdo_execute($sql);
}
//check email nhập vào đã tồn tại hay chưa
<<<<<<< HEAD
function check_email($email)
{
    $sql = "SELECT * FROM khach_hang WHERE email = '" . $email . "' ";
    $kh = pdo_query_one($sql);
    return $kh;
}
//check email mật khẩu đã tồn tại hay chưa 
function check_khach_hang($email, $pass)
{
    $sql = "SELECT * FROM khach_hang WHERE email = '" . $email . "' AND mat_khau='" . $pass . "' ";
    $kh = pdo_query_one($sql);
    return $kh;
}

function dangxuat()
{
    if (isset($_SESSION['khach_hang'])) {
        unset($_SESSION['khach_hang']);
    } else {
        unset($_SESSION['admin']);
    }
}
=======
function check_email($email){
    $sql="SELECT * FROM khach_hang WHERE email = '".$email."' ";
    $kh=pdo_query_one($sql);
    return $kh ;
}
//check email mật khẩu đã tồn tại hay chưa 
function check_khach_hang($email,$pass){
    $sql="SELECT * FROM khach_hang WHERE email = '".$email."' AND mat_khau='".$pass."' ";
    $kh=pdo_query_one($sql);
    return $kh ;
}

?>
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
