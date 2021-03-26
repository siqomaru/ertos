<?php
include('config/database.php');
$conn = new database();
$read = $conn ->readbooking();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin Konsultasi DOkter</title>
	<link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body>
<div class="container" style="margin-top:3em;">
		<div class="row">
			<div class="col-12">
				<div class="card">
				<div class="card-header">
					<h3 class="card-title">Daftar List Booking</h3>
					<!-- <a href="?page=addpengajuan"><button type="button" class="btn bg-gradient-success btn-sm" style="float:right"><i class="fa fa-plus"> Add Data</i></button></a> -->
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Lengkap</th>
								<th>No. Whatsapp</th>
								<th>Pesan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							foreach($read as $data){
							?>
							<tr>
								<td width="5px"><?php echo $no++; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><a href="https://api.whatsapp.com/send?phone=<?php echo $data['telp'];?>">LINK WHATSAPP</a> - <?php echo $data['telp'];?></td>
								<td><?php echo $data['pesan']; ?></td>

								<td>
									<a href="views/act.php?action=del&id=<?php echo $data['idbook']; ?>" onclick="return confirm('Delete this data?')"><button class="btn bg-gradient-danger btn-sm"><i class="fa fa-trash"></i> Delete</button></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
		<A href="index.php"><button class="btn btn-primary">Kembali Ke Form Booking</button></A>
	</div>

	<script src="assets/plugins/jquery/jquery1.min.js"></script>
	
	<script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).on("click", "#edit_pengajuan", function() {
		var idpengajuan = $(this).data('id');
		$("#modal-edit #idpengajuan").val(idpengajuan);
	})
</script>
<script type="text/javascript">
	var uploadField = document.getElementById("addphoto");

		uploadField.onchange = function() {
		var inputthree = document.getElementById('addphoto');
	    var paththree = inputthree.value;
	    var ekstensiOkthree = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		    if(this.files[0].size > 1000000 || !ekstensiOkthree.exec(paththree)){
		       alert("File Max 1Mb or Image Extention"),
		       this.value = "";
		       
		    };
		    };
</script>
</section>
	

</body>
</html>

	

