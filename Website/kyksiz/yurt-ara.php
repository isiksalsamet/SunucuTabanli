<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  -webkit-box-shadow: 10px 10px 13px -6px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 13px -6px rgba(0,0,0,0.75);
box-shadow: 10px 10px 13px -6px rgba(0,0,0,0.75);
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
<?php
include "header.php";
?>




<section >

    <?php
        if(isset($_POST['il_id']) && isset($_POST['ilce_id']))
        {
                $il_id=$_POST['il_id'];
                $ilce_id=$_POST['ilce_id'];
                if($il_id!="" && $ilce_id!="")
                {
                    include "connect.php";
                    $sorgu=$baglan->prepare("Select *From iller where id=:id");
                    $sorgu->execute(array("id"=>$il_id));
                    $sorgu_son=$sorgu->fetch();
                    $il_adi=$sorgu_son['name'];
                   
                    $sorgu=$baglan->prepare("Select *From ilceler where id=:id");
                    $sorgu->execute(array("id"=>$ilce_id));
                    $sorgu_son=$sorgu->fetch();
                    $ilce_adi=$sorgu_son['name'];
                    

                    $get_yurt=$baglan->prepare("Select *From apartyurt Where apartyurt_il=:il and apartyurt_ilce=:ilce and apartyurt_durum=:durum");
                    $get_yurt->execute(array("il"=>$il_adi,"ilce"=>$ilce_adi,"durum"=>'1'));
                    $get_yurt_result=$get_yurt->fetchAll();
                        if($get_yurt_result)
                        {
                            
                                ?>
                                <h4 style="margin-top:100px;"><center><?php echo $il_adi." İli ".$ilce_adi." İlçesi İçin".$get_yurt->rowCount()." Sonuç Listelendi"; ?></center></h4>
                                                 <div class="row" style="margin-top:100px;">
                                                     <?php
                                                     foreach($get_yurt_result as $yurt)
                                                     {
                                                         $resim="images/yurtlar/".$yurt['apartyurt_foto1'];
                                                         $yurtadi=$yurt['apartyurt_isim'];
                                                         $yurttur=$yurt['apartyurt_tur'];
                                                         $ililce=mb_strtoupper($yurt['apartyurt_ilce'])."/".mb_strtoupper($yurt['apartyurt_il']);
                                                         $adres=mb_strtoupper($yurt['apartyurt_adres']);
                                                         $telefon=$yurt['apartyurt_gsm'];
                                                         $mail=$yurt['apartyurt_email'];
                                                         $bilgi=$yurt['apartyurt_bilgi'];

                                                         
                                                         ?>
                                                 <div class="col-md-4">
                                                      <div class="card">
                                                          <img style="height:200px; width:100%; border-radius:4px;" src="<?php echo $resim; ?>" alt="<?php echo mb_strtoupper($yurtadi); ?>"  style="width:100%; border-radius:10px;">
                                                          <h3><?php echo mb_strtoupper($yurttur); ?></h3>
                                                          <p class="title"><?php echo mb_strtoupper($yurtadi); ?><br><a style="font-size:10px !important;"><?php echo $bilgi; ?></a></p>
                                                          
                                                          <p><?php echo $ililce; ?></p>
                                                          <a href="tel:<?php echo $telefon; ?>" title="<?php echo $telefon; ?>"><i class="fa fa-phone"></i></a>
                                                          <a href="javascript:void(0)" title="<?php echo $adres; ?>"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                                                          <a href="mailto:<?php echo $mail; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                                          
                                                          <p><button style="font-weight:bold; font-size:12px; color:wheat; border-radius:10px;"><?php echo $adres; ?></button></p>
                                                      </div>
                                                  </div>
                                                         <?php
                                                     }
                                              ?>
                                                 </div>
                                <?php
                        }
                        else
                        {
                            ?>

                                    <div class="row" style="margin-top:120px;">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-6">
                                            <h4 ><center>Aradığınız Kritlerde Yurt veya Apart Bulunamadı</center></h4>
                                        </div>
                                        <div class="col-md-3">
                                            
                                        </div>
                                    </div>

                            <?php
                        }
                    
                }
                else
                {
                    ?>
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            <h4><center>Lütfen İl ve İli Seçtiğinize Emin Olun</center></h4>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>
                    <?php
                }
        }
        else
        {
            header("Location:index.php");
        }
    ?>

</section>
<section style="height:200px;"></section>
<?php
include "footer.php";
?>
