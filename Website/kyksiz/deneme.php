<?php include'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form>
		
	<select class="form-control" name="member_country" onChange="ilceGetir(this.value);">
		<?php $listS = $db->query("SELECT * FROM iller ORDER BY il_id ASC"); ?>
		<option value="0" selected>Şehir Seçin 
		<?php foreach ($listS as $list) { ?>
		<option value="<?php echo $list['il_id']; ?>"><?php echo $list['il']; ?></option> 
		<?php } ?>
	</select>
	<select class="form-control" name="member_ilce" id="sehirler"> 
		<option value="">Lütfen önce şehir seçin!</option>
	</select>
	<script type="text/javascript"> 
		function ilceGetir(val) {
		$.ajax({
		type: "POST",
		url: "deneme1.php",
		data:'il_id='+val,
		success: function(data){
		$("#iller").html(data);
		}
		});
	}
	</script>

	</form>
</body>
</html>
