<?php
    session_start();
    if(isset($_POST['il_id']) && isset($_POST['ilce_id']) && $_POST['bilgi'])
    {
        $il_id=$_POST['il_id'];
        $ilce_id=$_POST['ilce_id'];
        $bilgi=$_POST['bilgi'];

            if($ilce_id!="" && $il_id!="" && $bilgi!="")
            {
                //İL id ve ilce id yi aldık şimid bu id lere gore isimlerini getirelim
                include "../nedmin/netting/baglan.php";
                if($db)
                {
                   
                    //İllerden Gelen İd ye ait İli Bulduran sorgu
                    $sorgu=$db->prepare("Select *From iller where id=:id");
                    $sorgu->execute(array("id"=>$il_id));
                    $sorgu_sonuc=$sorgu->fetch();
                    $il_adi=$sorgu_sonuc['name'];

                    //İlçelerden gelen id ye ait ilçeyi bulduran sorgu
                    $sorgu2=$db->prepare("Select *From ilceler where id=:id");
                    $sorgu2->execute(array("id"=>$ilce_id));
                    $sorgu_sonuc2=$sorgu2->fetch();
                    $ilce_adi=$sorgu_sonuc2['name'];

                    //Bağlı Olan Kullanıcı Bilgilerini Getiriyoruz
                    $uye_mail=$_SESSION['uye_email'];
                    $get_user=$db->prepare("Select *From uyeler Where uye_email=:mail");
                    $get_user->execute(array("mail"=>$uye_mail));
                    $get_user_result=$get_user->fetchAll();

                        foreach($get_user_result as $c)
                        {
                            $user_name=$c['uye_ad'];
                            $user_lastname=$c['uye_soyad'];
                            $user_phone=$c['uye_gsm'];
                        }
                    
                    //Bu kişinin bu ilçede başka ilanı var mı diye kontrol ettiriyoruız
                        $control=$db->prepare("Select *From ilanlar Where ilan_ilce_id=:id");
                        $control->execute(array("id"=>$ilce_id));
                        $control_result=$control->fetchAll();
                        if($control_result)
                        {
                            echo"Şahsınıza Ait ".$ilce_adi." Adlı İlçede İlan Var !";
                        }
                        else
                        {
                                           $userfullname=$user_name." ".$user_lastname;
                                   //Üye bilgilerini aldıktan sonra tabloya eklettiren sorgumuzu başlatıyoruz
                                   date_default_timezone_set('Europe/Istanbul');
                                   $tarih=date('d.m.Y H:i:s');
                                   $query = $db->prepare("INSERT INTO ilanlar SET
                                   ilan_il_id= :ilid,
                                   ilan_ilce_id = :ilceid,
                                   bilgi = :bilgi,
                                   ilan_veren_adi= :adi,
                                   ilan_veren_tel = :tel,
                                   ilan_tarihi= :tarih");
                                   $insert = $query->execute(array(
                                       "ilid" => $il_id,
                                       "ilceid" => $ilce_id,
                                       "bilgi" => $bilgi,
                                       "adi" =>$userfullname,
                                       "tel" =>$user_phone,
                                       "tarih"=>$tarih
                                 ));
                                 if($insert)
                                 {
                                     echo"1";
                                 }
                                 else
                                 {
                                     echo"İlanınız Verilemiyor";
                                 }
                        }

                }
                else
                {
                    echo"Veri Tabanına Erişilmiyor !";
                }
            }
    }
?>
