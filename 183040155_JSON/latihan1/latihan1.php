<?php 

$mahasiswa = [
	[
		"nama" => "Kasyfi Adhadini",
		"nrp" => "183040155",
		"email" => "kasyfiadhadini@mail.unpas.ac.id"
    ],
	
	[
		"nama" => "sarimin",
		"nrp" => "183040100",
		"email" => "sarimin@mail.unpas.ac.id"
	]	
];

	$data = json_encode($mahasiswa);
	echo $data;

 ?>

