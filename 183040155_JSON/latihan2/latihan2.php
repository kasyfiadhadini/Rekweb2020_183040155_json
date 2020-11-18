<?php 

	$data = file_get_contents('coba.json'); //mendapatkan konten dari file : coba.json

	$mahasiswa = json_decode($data, true); 
	//mahasiswa mendapat nilai dari $data yang ditranformasikan menjadi array asosiatif

	var_dump($mahasiswa);

    echo "<h1> Ini di var-dump </h1>";

 ?>