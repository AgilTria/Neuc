<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h3>Tambah Data Instansi</h3>


	<br/>
 
	<form action="{{ route('acara.tambah') }}" method="post">
		{{ csrf_field() }}
		nama acara <input type="text" name="nama" required="required"> <br/>
		<!-- tanggal acara <input type="text" required="required"> <br/> -->
			<!-- hasil akan tercetak di dalam div ini -->
			<!-- <div id='cetak'>tanggal acara</div> -->
			tanggal acara<input type='date' id='tanggal' name='tanggal' onchange='cetakTanggal()'/><br/>
	
		template_sertifikat<input type="file" name="" required="required"> <br/>
		<!-- <p>Upload <input type='file' name='foto' /></p> -->

				<tr>
		<td colspan="2">
		<input type="submit" name="simpan" value="Simpan">
		<input type="reset" name="batal" value="Batal">
		</td>
		</tr>
	</form>
		<script>
		// set default tanggal saat ini
		document.querySelector('#tanggal').value = new Date().toISOString().substring(0, 10);

		// fungsi onchange cetak nilai
		function cetakTanggal() {
		var tanggal = document.querySelector('#tanggal').value;
		document.querySelector('#cetak').innerHTML = tanggal.split('-')[2]+'-'+tanggal.split('-')[1]+'-'+tanggal.split('-')[0];
		}
		</script>
</body>
</html>