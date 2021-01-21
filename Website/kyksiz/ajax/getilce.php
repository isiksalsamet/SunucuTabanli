<?php
    if(isset($_POST['il_id']))
    {
        include "../nedmin/netting/baglan.php";
        if($db)
        {
            $sorgu=$db->prepare("Select *From ilceler Where ilid=:id");//Buradaki :id bir etiket buraya ahmette ama o zaman yazabilirdik execute kısmında ahmet yazardık
            $sorgu->execute(array("id"=>$_POST['il_id']));
            $sorgu_sonuc=$sorgu->fetchAll();
                foreach($sorgu_sonuc as $ilceler)//Buradaki ilceler degiskenine de takılma oraya a da yazardık b de buraya ne yazsaydık asagıda oyle yazacaktık
                {
                    $ilce_adi=$ilceler['name'];
                    $ilce_id=$ilceler['id'];
                    echo"<option value='".$ilce_id."'>".$ilce_adi."</option>";
                }
        }
        else
        {
            echo"yok";
        }
    }
    else
    {
        echo"İlçe Bulunamadı !";
    }
?>
