<!DOCTYPE html>
<html>
<head>
	<title> Latihan tabel</title>
</head>
<body>
		 <h1>Ini latihan</h1>
		 <table border="1" cellspacing="2" style="border:solid ">

		 <tr>
		 	<td> id </td>
		 	<td> Nama Prodi</td>
		 	<td> Kuota </td>
		 	<td> Kaprodi </td>
		 </tr>
		 

		 <?php
		 for ($i=1; $i <= 100; $i++) :
		 ?>
		 
		 <tr>
		 	<td> <?php echo $i; ?></td>
		 	<td> Sisfo </td>
		 	<td> <?php echo $i*3; ?> </td>
		 	
		 	<td>

		 	<?php if ($i%2):?>
		 		Ilhamsyah
		 	<?php else: ?>
		 		Renny
		 	<?php endif ?>

		 	</td>
		 </tr>
		 
		 <?php endfor;
		 ?>

		 </table>

</body>
</html>


