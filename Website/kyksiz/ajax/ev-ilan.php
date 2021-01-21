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
                
                $adres=$_POST['ev_acik_adres'];
                $telefon=$_POST['ev_telefon_numarasi'];
                $ilan_ev_bilgi=$_POST['ev_bilgisi'];
                $kriter=$_POST['ev_kriterler'];
                $ucret=$_POST['ev_ucreti'];
                $iletisim=$_POST['ev_iletisim'];

               if($adres!="" && $telefon!="" && $ilan_ev_bilgi!="" && $kriter!="" && $ucret!="" && $iletisim!="" && $il_adi!="" && $ilce_adi!="" && $mail!="" && $isim!="")
               {
                    $sor=$baglan->prepare("Select *From ev_ilan_ver Where mail=:mail");
                    $sor->execute(array("mail"=>$mail));
                    $sor_sonuc=$sor->fetch();
                    if($sor_sonuc)
                    {
                        echo"Bu Alanda İlanınız Bulunmaktadır";
                    }
                    else
                    {

                $query = $baglan->prepare("INSERT INTO ev_ilan_ver SET
                ad_soyad = :a,
                mail = :b,
                il = :c,
                ilce = :d,
                ev_telefon_numarasi = :e,
                ev_acik_adres = :f,
                ev_bilgisi = :g,
                ev_kriterler = :h,
                ev_ucreti =:j,
                ev_iletisim =:k
                ");
                $insert = $query->execute(array(
                      "a" => $isim,
                      "b" => $mail,
                      "c" => $il_adi,
                      "d" =>$ilce_adi,
                      "e"=>$telefon,
                      "f"=>$adres,
                      "g"=>$ilan_ev_bilgi,
                      "h"=>$kriter,
                      "j"=>$ucret,
                      "k"=>$iletisim
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
