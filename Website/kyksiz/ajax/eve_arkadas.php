<?php
session_start();
$mail=$_SESSION['uye_email'];
include "../connect.php";
$kisi=$baglan->prepare("Select *From uyeler Where uye_email=:mail");
$kisi->execute(array("mail"=>$mail));
$kisi_son=$kisi->fetch();
$i=$kisi_son['uye_ad'];
$s=$kisi_son['uye_soyad'];
$isim=mb_strtoupper($i)." ".mb_strtoupper($s);
    
        $il_id=$_POST['il_id'];
        $ilce_id=$_POST['ilce_id'];
        if($il_id=="" || $ilce_id=="")
        {
            echo"Lütfen İl ve İlçe Seçiniz";
        }
        else
        {
            //il ilce bulalım
            $ilbul=$baglan->prepare("Select *From iller Where id=:id");
            $ilbul->execute(array("id"=>$il_id));
            $ilbul_son=$ilbul->fetch();
                $il_adi=$ilbul_son['name'];
            $ilcebul=$baglan->prepare("Select *From ilceler Where id=:id");
            $ilcebul->execute(array("id"=>$ilce_id));
            $ilcebul_son=$ilcebul->fetch();
                $ilce_adi=$ilcebul_son['name'];
                
                $meslek=$_POST['ilanmeslek'];
                $acik_adres=$_POST['acikadres'];
                $ilan_ev_bilgi=$_POST['ilanevbilgi'];
                $kriter=$_POST['ilankriter'];

               if($meslek!="" && $acik_adres!="" && $ilan_ev_bilgi!="" && $kriter!="" && $il_adi!="" && $ilce_adi!="" && $mail!="" && $isim!="")
               {
                    $sor=$baglan->prepare("Select *From evine_arkadas_ilan Where mail=:mail");
                    $sor->execute(array("mail"=>$mail));
                    $sor_sonuc=$sor->fetch();
                    if($sor_sonuc)
                    {
                        echo"Bu Alanda İlanınız Bulunmaktadır";
                    }
                    else
                    {
                        date_default_timezone_set('Europe/Istanbul');
                $tarih=date('d.m.Y H:i:s');
                $query = $baglan->prepare("INSERT INTO evine_arkadas_ilan SET
                ad_soyad = :a,
                mail = :b,
                il = :c,
                ilce = :d,
                adres = :e,
                meslek = :f,
                ev_bilgi = :g,
                kriter = :h,
                tariih= :i");
                $insert = $query->execute(array(
                      "a" => $isim,
                      "b" => $mail,
                      "c" => $il_adi,
                      "d" =>$ilce_adi,
                      "e"=>$acik_adres,
                      "f"=>$meslek,
                      "g"=>$ilan_ev_bilgi,
                      "h"=>$kriter,
                      "i"=>$tarih
                ));
                if($insert)
                {
                    echo"1";
                }
                else
                {
                    echo"İlan Eklenemiyor";
                }
                    }
               }
               else
               {
                   echo"Lütfen Boş Alan Bırakmayınız !";
               }
                
        }
?>
