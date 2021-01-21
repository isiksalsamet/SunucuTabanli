
<?php 

    include'header.php'; 

?>

	
    <ul class='slideshow'>
        <li>
            <span>Summer</span>
        </li>
        <li>        
            <span>Fall</span>
        </li>
        <li>        
            <span>Winter</span>
        </li>
        <li>
            <span>Spring</span>
        </li>
    </ul>
	
    <div class="parallax first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form">
                        <h3><i class="fa fa-home grd1 global-radius"></i>Apart & Özel Yurtlar</h3>
                        
                       

                                <form action="yurt-ara.php" method="post">
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
                                </div>
                         
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Arama Yap</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                </div>
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
<?php include 'footer.php';?>	
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
    </script>

   

   

