
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
                        <h3><i class="fa fa-user grd1 global-radius"></i>Üye Profili
                        <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php if($_GET['durum']=="ok"){ ?>
                               <b style="color:green;">Giriş Başarılı.</b>
                                
                            <?php } elseif($_GET['durum']=="no"){ ?>
                                <b style="color:red;">Giriş Başarısız.</b>
                            <?php }  ?>

                        </li>
                        </ul>
                        </h3>
                        
                        <div class="module-body table">
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                        width="100%">
                        <tbody>
                               
                            <tr>
                                <td>ADI SOYADI:</td>
                                <td><?php echo $uyecek['uye_ad']; ?> <?php echo $uyecek['uye_soyad'];?></td>
                            </tr>

                            <tr>
                                <td>TC NO:</td>
                                <td><?php echo $uyecek['uye_tc']; ?></td>
                            </tr>    

                            <tr>
                                <td>TELEFON:</td>
                                <td><?php echo $uyecek['uye_gsm']; ?></td>
                            </tr>   
                                    
                            <tr>
                                <td>EMAİL:</td>
                                <td><?php echo $uyecek['uye_email']; ?></td>
                            </tr> 
                                
                            <tr>
                                <td>KAYIT TARİHİ:</td>
                                <td><?php echo $uyecek['uye_kayit']; ?></td>
                            </tr> 

                            <tr>
                                <td colspan="2" align="right"><button type="submit" value="SEND" class="btn btn-light btn-radius btn-brd grd1 btnyblock"><a href="uye-profil-duzenle.php" style="color: white;">Düzenle</a></button></td>
                            </tr>
                                
                        </tbody>
                        </table>
                        </div>   
                       
                        
                    </div>

                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
<?php include 'footer.php';?>   
    

   

   


<?php
	
	include 'header.php';

?>
	
	
    <script type="text/javascript"></script>
        <div id="message"></div>
			<div class="module-head">
       	    <h4>Profil Bilgilerim</h4>
            </div>
       <div class="module-body table">
        	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                        width="100%">
                <tbody>
                                                   
                           <tr>
                                <td>ADI SOYADI:</td>
                                <td><?php echo $uyecek['uye_ad']; ?> <?php echo $uyecek['uye_soyad'];?></td>
                            </tr>

                            <tr>
                                <td>TC NO:</td>
                                <td><?php echo $uyecek['uye_tc']; ?></td>
                            </tr>    

                            <tr>
                                <td>TELEFON:</td>
                                <td><?php echo $uyecek['uye_gsm']; ?></td>
                            </tr>   
                                    
                            <tr>
                                <td>EMAİL:</td>
                                <td><?php echo $uyecek['uye_email']; ?></td>
                            </tr> 
                                
                            <tr>
                                <td>KAYIT TARİHİ:</td>
                                <td><?php echo $uyecek['uye_kayit']; ?></td>
                            </tr> 
                                
      		</tbody>
    	</table>
    	</div>                      
	