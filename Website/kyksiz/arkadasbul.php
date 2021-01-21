<?php include 'header.php'; ?>
	
	<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ev Arkadaşını Bul</h2>
                    <!-- Breadcrumbs -->
                    
                </div>
            </div>
        </div>
    </div>
	
	
	<div id="support" class="section wb" >
        <div class="container" >
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                            <h4><center>Bu Sayfada Verdiğiniz İlan <a href="tum-ilanlar.php" style="font-weight:bold;">Evine Arkadaş Arayanların</a> Sizi İnceleyip Sizinle İrtibata Geçmesi İçindir</center></h4>
                            <h4><center>Hemen İlanını Ver ve Ev Arkadaşın Seni Bulsun ! <i class="fa fa-smile-o" aria-hidden="true"></i></center></h4>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
            <div class="row" >
                <div class="col-md-12" >
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="ilanekleara" class="row" action="" onsubmit="return false" method="post">
                            
                                
                                <div class="col-lg-3 ">
                                    
                                

                                    <select name="select_service1" id="iller" class=" form-control" >
                                        <option value="0">Şehir Seçiniz</option>
                                       
                                           <?php 
                                            $sorgum=$db->prepare("Select *From iller");//PDO SORGUSUNU BAŞLATTIK
                                            $sorgum->execute(array());//PDO SORGUSUNU CALISTIRDIK VE DİZİ HALİNDE İŞLEDİK
                                            $sorgum_sonuc=$sorgum->fetchAll();//VE SONUC OLARAK ALDIK DİZİ HALİNDE
                                            foreach($sorgum_sonuc as $il)
                                            {
                                                echo"<option value='".$il['id']."'>".$il['name']."</option>";
                                            }
                                            ?>
                                    </select>
                                    
                                </div>
                               
                                <div class="col-lg-3 ">

                                    <select name="ilceler" id="ilceler" class=" form-control" data-style="btn-white">
                                         <option value="0">İlçe</option>
                                    </select>
                                    <!-- ililce.js ile ajax işlemini yapıyorum ordan bakabilirsin js klasorunde-->
                                </div>
                               

                                <div class="col-lg-3">
                                    <textarea name="" class="form-control" id="bilgi" style="height:55px !important;" placeholder="Kendinizden Kısaca Bahsedin"></textarea>
                                        </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <?php 
                                        if(isset($_SESSION['uye_email']))
                                        {
                                            ?>
                                                    <input type="submit" value="İlan Ekle" class="btn btn-light btn-radius btn-brd grd1 btnyblock">
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                                <a href="girisyap.php"  class="btn btn-light btn-radius btn-brd grd1 btnyblock">Giriş Yap</a>
                                            <?php
                                        }
                                    ?>
                                </div>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


   <?php include 'footer.php'; ?>