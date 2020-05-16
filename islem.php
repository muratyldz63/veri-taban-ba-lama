<?php 
ob_start();
session_start();
include 'baglan.php';

if(isset($_POST['login'])){

 $k_ad=$_POST['KullaniciAdi'];
 $k_password=$_POST['sifre'] ;


if($k_ad && $k_password){

  $kullaniciSor=$db->prepare("SELECT * from kullanicilar where KullaniciAdi=:ad && sifre=:sifre");
  $kullaniciSor->execute(array(

    'ad'=>$k_ad,
    'sifre'=>$k_password

  ));

 $say=$kullaniciSor->rowCount();
 if($say>0){

    $_SESSION['KullaniciAdi']=$k_ad;

     header('Location:index.php');


   }
   else{

      header('Location:Login.php?durum=No');

   }





}


}

?>