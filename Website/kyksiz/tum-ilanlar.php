<?php

    include "header.php";

?>
<div class="row" style="margin-top:100px;">
    <div class="col-md-4">

    </div>
    <div class="col-md-4" style="margin-top:30px;">
    <h2><center>Bu Sayfadan Tüm İlanlara Erişebilirsiniz</center></h2>
    </div>
    <div class="col-md-4">

    </div>
</div>
<hr>
<h3><center>Ev Arayanlar <i class="fa fa-user" aria-hidden="true"></i></center></h3>
<section  id="evarkadasi">

    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
                <table class="table thead-dark" id="ilan1">
                  <thead class="thead-dark">
                    <tr>
                     <th scope="col">ID</th>
                      <th scope="col">İL</th>
                      <th scope="col">İLÇE</th>
                      <th scope="col">ADI & SOYADI</th>
                      <th scope="col">TELEFON</th>
                      <th scope="col">BİLGİ</th>
                      <th scope="col">İLAN TARİHİ</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                            if($db)
                            {
                                $sorgu=$db->prepare("Select *From ilanlar");
                                $sorgu->execute(array());
                                $sorgu_result=$sorgu->fetchAll();
                                    if($sorgu_result)
                                    {
                                        foreach($sorgu_result as $getilan)
                                        {
                                            //il bul
                                            $ilan_id=$getilan['ilan_id'];
                                            $il_id=$getilan['ilan_il_id'];
                                            $ilce_id=$getilan['ilan_ilce_id'];
                                            $sorgu2=$db->prepare("Select *From iller where id=:id");
                                            $sorgu2->execute(array("id"=>$il_id));
                                            $sorgu2_result=$sorgu2->fetch();
                                            $iladi=$sorgu2_result['name'];

                                            $sorgu3=$db->prepare("Select *From ilceler where id=:id");
                                            $sorgu3->execute(array("id"=>$il_id));
                                            $sorgu3_result=$sorgu3->fetch();
                                            $ilceadi=$sorgu3_result['name'];

                                            echo"

                                            <tr>
                                            <th scope='row'>".strtoupper($ilan_id)."</th>
                                            <th scope='row'>".strtoupper($iladi)."</th>
                                            <td>".strtoupper($ilceadi)."</td>
                                            <td>".strtoupper($getilan['ilan_veren_adi'])."</td>
                                            <td>".strtoupper($getilan['ilan_veren_tel'])."</td>
                                            <td>".strtoupper($getilan['bilgi'])."</td>
                                            <td>".strtoupper($getilan['ilan_tarihi'])."</td>
                                          </tr>

                                            
                                            ";
                                        }
                                    }
                                    else
                                    {
                                        echo"<h2><center>Bu Alanda İlan Bulunamadı<center></h2>";
                                    }
                            }
                   ?>
                  </tbody>
                </table>

        </div>
        <div class="col-md-4">

        </div>
    </div>

    

</section>
<h3 style="margin-top:100px; margin-bottom:50px;"><center>Evine Arkadaş Arayanlar <i class="fa fa-user" aria-hidden="true"></i></center></h3>
<section>

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
    <table class="table" id="ilan2">
  <thead>
    <tr>
      <th scope="col">İsim</th>
      <th scope="col">Şehir</th>
      <th scope="col">Adres</th>
      <th scope="col">Kriter</th>
      <th scope="col">Mail</th>
      <th scope="col">Meslek</th>
      <th scope="col">Ev Hakkında</th>
      <th scope="col">Tarih</th>
    </tr>
  </thead>
  <tbody>
      <?php
            include "connect.php";
            $query=$baglan->prepare("Select *From evine_arkadas_ilan");
            $query->execute(array());
            $query_result=$query->fetchAll();
            if($query_result)
            {   
                foreach($query_result as $ilan)
                {
                    echo"
                    <tr>
                    <th scope='row'>".$ilan['ad_soyad']."</th>
                    <td>".$ilan['ilce']."/".$ilan['il']."</td>
                    <td>".$ilan['adres']."</td>
                    <td>".$ilan['kriter']."</td>
                    <td>".$ilan['mail']."</td>
                    <td>".$ilan['meslek']."</td>
                    <td>".$ilan['ev_bilgi']."</td>
                    <td>".$ilan['tariih']."</td>
                  </tr>
                 
                    
                    ";
                }
            }
            else
            {
                echo"<center><h3>İlan Bulunamadı </h3></center>";
            }
      ?>
 
   
  </tbody>
</table>                     
    </div>
    <div class="col-md-2">

    </div>
</div>

</section>

<h3 style="margin-top:100px; margin-bottom:50px;"><center>Ev İlanları <i class="fa fa-user" aria-hidden="true"></i></center></h3>
<section>

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
    <table class="table" id="ilan2">
  <thead>
    <tr>
      <th scope="col">İsim</th>
      <th scope="col">Şehir</th>
      <th scope="col">Adres</th>
      <th scope="col">Kriter</th>
      <th scope="col">Telefon</th>
      <th scope="col">Ev Ücreti</th>
      <th scope="col">Ev Hakkında</th>
      <th scope="col">Tarih</th>
    </tr>
  </thead>
  <tbody>
      <?php
            include "connect.php";
            $query=$baglan->prepare("Select *From ev_ilan_ver");
            $query->execute(array());
            $query_result=$query->fetchAll();
            if($query_result)
            {   
                foreach($query_result as $ilan)
                {
                    echo"
                    <tr>
                    <th scope='row'>".$ilan['ad_soyad']."</th>
                    <td>".$ilan['ilce']."/".$ilan['il']."</td>
                    <td>".$ilan['ev_acik_adres']."</td>
                    <td>".$ilan['ev_kriterler']."</td>
                    <td>".$ilan['ev_telefon_numarasi']."</td>
                    <td>".$ilan['ev_ucreti']."</td>
                    <td>".$ilan['ev_bilgisi']."</td>
                    <td>".$ilan['ev_ilan_tarih']."</td>
                  </tr>
                 
                    
                    ";
                }
            }
            else
            {
                echo"<center><h3>İlan Bulunamadı </h3></center>";
            }
      ?>
 
   
  </tbody>
</table>                     
    </div>
    <div class="col-md-2">

    </div>
</div>



</section>
<?php

include "footer.php";

?>