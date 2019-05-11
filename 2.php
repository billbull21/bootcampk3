<?php
//mengambil data dari form ber action POST
//$username = $_POST['username'];
//$email = $_POST['email'];
//static input
$username = "habib.ul";
$email = "habi@gmail.com";
//validasiusername
function checkUser($username){
    return preg_match('/^[a-z.]{8,8}$/', $username);
}
//validasiemail
function checkEmail($email)
{
    //karakter spesial (_-)
    //return preg_match( '/^[a-zA-Z0-9_-]{4}$/', $email);
    return preg_match("/^[0-9a-zA-Z.]{4,}+@[0-9a-zA-Z]+.[a-zA-Z]{2,4}$/", $email);
}
//validator
if(!checkUser($username) && !checkEmail($email)){
    echo "salah semua!";
}else{
    if(checkUser($username)){
        echo "username benar!";
    }else{
        echo "username tidak valid!";
    }
    if(checkEmail($email)){
        echo "email benar!";
    }else{
        echo "email tidak valid!";
    }
}
?>
