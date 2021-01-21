$(document).ready(function(){
    $("#iller").change(function(){
        var il_id=this.value;

            //Tıklanan ilin ıd sini aldıktan sonra ajax işlemlerine başlayabiliriz
            $.ajax({
                url:"ajax/getilce.php",
                data:{il_id},
                type:"post",
                success:function(result)
                {
                    if(result=="İlçe Bulunamadı !")
                    {
                        alert("İlçe Bulunamadı !");
                    }
                    else
                    {
                        $("#ilceler").html(result);
                    }
                   
                }
            })
    })

 
})   
$("#ilanekleara").submit(function(){
    var il_id=document.getElementById("iller").value;
    var ilce_id=document.getElementById("ilceler").value;
    var bilgi=document.getElementById("bilgi").value;
    if(ilce_id=="0" || il_id=="0" || bilgi=="")
    {
        alert("Lütfen Tüm Alanları Doldurunuz");
    }
    else
    {
        $.ajax({
            url:"ajax/ilanekle.php",
            data:{il_id,ilce_id,bilgi},
            type:"POST",
            success:function(sonuc)
            {
                if(sonuc=="1")
                {
                    swal({
                        title: "Tebrikler",
                        text: "İlanınız Başarıyla Verildi",
                        icon: "success",
                        button: "Kapat",
                      });
                }
                else
                {
                    swal({
                        title: "Hata",
                        text: sonuc,
                        icon: "error",
                        button: "Anladım",
                      });
                }
            }
        })
    }
})

