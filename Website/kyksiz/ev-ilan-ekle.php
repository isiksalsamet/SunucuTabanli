<?php


    include "header.php";
    if(isset($_SESSION['uye_email']))
{

}
else
{
    header("Location:girisyap.php");
}
?>
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Evine Kiracı Bul</h2>
                    <!-- Breadcrumbs -->
                    
                </div>
            </div>
        </div>
    </div>
<div class="row" style="margin-top:120px;"></div>


<div class="row" style="margin-bottom:30px;">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
    <div class="contact_form">
                        <h3><i class="fa fa-home grd1 global-radius"></i>Ev İlanı Ver</h3>
                        
                       

                                <form action="" id="ev_ilan" method="post" onsubmit="return false">
                                <select id="illerana" name="il_id" class="selectpicker form-control" style="font-weight:bold !important; color:black !important;" >

                                       
                                        <?php 
                                                include "connect.php";
                                                $sorgu=$baglan->prepare("Select *From iller");
                                                $sorgu->execute(array());
                                                $sorgu_sonuc=$sorgu->fetchAll();
                                                foreach($sorgu_sonuc as $il)
                                                {
                                                    $il_adi=$il['name'];
                                                    $il_id=$il['id'];

                                                    echo "<option value='".$il_id."' style='font-weight:bold !important; color:black !important;'>".$il_adi."</option>";
                                                }
                                        ?>

                                    </select>
                                    <select id="ilcelerana" name="ilce_id" class="form-control" >
                                                <option value="">İlçe Seçiniz</option>
                                    </select>
                                <div class="form-group">
                                    <label for="">Evin Açık Adresini Yazınız</label>
                                    <textarea name="ev_acik_adres" id="ev_acik_adres" class="form-control" cols="30" style="height:60px !important;" rows="2"></textarea>
                                    <input type="hidden" name="" id="ilan_mail" value="<?php echo $_SESSION['uye_email']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Telefon Numarası</label>
                                    <textarea name="ev_telefon_numarasi" id="ev_telefon_numarasi" class="form-control" cols="30" style="height:60px !important;" rows="2"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Ev Hakkında Bilgi Veriniz</label>
                                    <textarea name="ev_bilgisi" id="ev_bilgisi" class="form-control" cols="30" style="height:60px !important;" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Kriterleriniz</label>
                                    <textarea name="ev_kriterler" id="ev_kriterler" class="form-control" cols="30" style="height:60px !important;" rows="2"></textarea>
                                </div>
                         
                                <div class="form-group">
                                    <label for="">Evin Ücreti</label>
                                    <textarea name="ev_ucreti" id="ev_ucreti" class="form-control" cols="30" style="height:60px !important;" rows="2"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Diğer İletişim Bilgileri</label>
                                    <textarea name="ev_iletisim" id="ev_iletisim" class="form-control" cols="30" style="height:60px !important;" rows="2"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <input type="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" value="İlan Ver">                                </div>
                            </fieldset>
                        </form>
                    </div>

    </div>
    <div class="col-md-2">
        
    </div>
</div>


<?php
    
?>

<?php
    include "footer.php";
?>
	<script>
       $("#illerana").change(function(){
    var il_id=this.value;

        //Tıklanan ilin ıd sini aldıktan sonra ajax işlemlerine başlayabiliriz
        $.ajax({
            url:"ajax/getilce.php",
            data:{il_id},
            type:"post",
            success:function(results)
            {
                if(results=="İlçe Bulunamadı !")
                {
                    alert("İlçe Bulunamadı !");
                }
                else
                {
                    $("#ilcelerana").html(results);
                }
               
            }
        })
})
$("#ev_ilan").submit(function(){
                
                var form=$(this);
	   $.ajax({
           type: "POST",
           url: "ajax/ev-ilan.php",
           data: new FormData(this), // Form ile gelen verilerimiz
			contentType: false,
			processData: false,
           success: function(data)
           {
               if(data==1)
               {
                swal({
                    title: "ONAY",
                    text: "İlanınız Yayınlanmıştır ",
                    icon: "success",
                    button:"Kapat"
                   }).then(function() {
                       window.location.reload()
                   });
               }
               else
               {
                swal({
                    title: "Hata",
                    text: data,
                    icon: "error",
                    button:"Kapat"
                   })
               }
			  
           }
         });
                
              
         /*swal({
                    title: "ONAY",
                    text: "Başvurunuz Alınmıştır.En Kısa Sürede İletişime Geçilecektir",
                    icon: "success",
                    button:"Kapat"
                   }).then(function() {
                       window.location.reload()
                   });*/
                
                

            })
    </script>