<?php 
include 'header.php';
$kode = $_GET['kode'];

$result = mysqli_query($conn, "SELECT * FROM inventory WHERE kode_bk = '$kode'");
$row= mysqli_fetch_assoc($result);
?>


<div class="container">
	<h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Edit Inventory</b></h2>

	<form action="proses/edit_inv.php" method="POST">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Kode Material</label>
					<input type="text" class="form-control" id="exampleInputEmail1" disabled value="<?= $row['kode_bk']; ?>">
					<input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Contoh : Kg atau gram" name="kd_material" value="<?= $row['kode_bk']; ?>">
				</div>
	</form>
</div>

<br>

</div>
</form>

</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
include 'footer.php';
?>