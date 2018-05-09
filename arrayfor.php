<!DOCTYPE html>
<html>
<head>
	<title> Latihan tabel</title>
</head>
<body>
<?php


$prodi =[
		[
		"id"=>0,
		"nama"=>"kimia",
		"kuota"=>12,
		"kaprodi"=>"Andi"
		],
		[
		"id"=>1,
		"nama"=>"fisika",
		"kuota"=>14,
		"kaprodi"=>"nurhasanah"
		],
		[
		"id"=>2,
		"nama"=>"biologi",
		"kuota"=>12,
		"kaprodi"=>"rizalinda"
		],
		[
		"id"=>3,
		"nama"=>"sisfo",
		"kuota"=>32,
		"kaprodi"=>"ilham"
		],
		[
		"id"=>4,
		"nama"=>"kelautan"
		"kuota"=>11,
		"kaprodi"=>"nora",
		],
		[
		"id"=>5,
		"nama"=>"statistik",
		"kuota"=>15,
		"kaprodi"=>"naomi"
		],
		[
		"id"=>6,
		"nama"=>"matematika",
		"kuota"=>12,
		"kaprodi"=>"mariatul"
		]
		];

?>
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


