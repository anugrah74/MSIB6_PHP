<?php 
$nama = "Anugrah Dwi Saputra";
$email = "anugrahdwisaputra8@gmail.com";
$noHp = "082135201035";
$gender ="Laki-laki";

?>



<!DOCTYPE HTML>
<html>

<head>
	<title>Personal Homepage Anugrah</title>
	<style>
		body{
    background-color: #ECF8F9;
    font-family: 'Times New Roman', Times, serif;
    text-align: justify;

	}
	fieldset{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	}
	legend{
    padding: 10px;
    font-size: 30px;
    font-weight: bold;
    color: rgb(0, 250, 12);
	}
	h1{
    text-align: center;
    font-weight: bold;
	}
	marquee{
    width: 100%;
    direction: right;
    color: blue;
    background-color: aqua;
}
	</style>


</head>

<body>
	<h1 id="atas" id="atas">
		<marquee>
			Welcome to My Homepage
		</marquee>
	</h1>
	<hr />
	<a href="#bawah">Bottom &dArr;</a>
	<p>
		<img src="https://cdn0-production-images-kly.akamaized.net/8X2DrKuYWxaoy_3gyaXlz1PTLVY=/1280x720/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3348002/original/023107400_1610523303-onepiece-5090120_1920.jpg"
			align="left" width="11%" hspace="10" />
	</p>
	Perkernalkan Nama saya <?php echo $nama ?> biasa dipanggil Anugrah. Kuliah di Universitas Muria Kudus, Fakultas
	Teknik Informatika Semester 6. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet officiis quod nulla
	ipsum, maiores distinctio consectetur omnis totam quisquam dolore. At, delectus quam aut quidem autem tempora
	molestiae explicabo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut similique sint ratione eligendi
	nostrum dolor veritatis natus minus, quasi eveniet repellat, asperiores, exercitationem unde nesciunt magni numquam
	vitae repudiandae dignissimos.
	</body>
	<fieldset>
		<legend>
			ABOUT ME
		</legend>

		<ol type="A">
			<li id="Data">Data Diri</li>
			<ul type="square">
				<li>Nama : <?= $nama ?> </li>
				<li>Email : <?= $email?></li>
				<li>Kuliah di Universitas Muria Kudus</li>
				<li>Saat Ini Menuju Ke semester 6</li>
				<li>Gender : <?= $gender ?></li>
				<li>No Hp : <?= $noHp ?></li>

			</ul><br>
			<li id="Data1">Pendidikan </li>
			<ul type="square">
				<li>SDN kutoharjo 1 Pati </li>
				<li>SMP Negeri 6 Pati</li>
				<li>SMK Muhammadiyah 1 Pati</li>
			</ul><br>
			<li id="Data2">Hobby</li>
			<ul type="disc">
				<li>Menonton Film/Anime</li>
				<li>Main Game </li>
				<li>Membaca novel</li>
			</ul><br>
			<li id="Data3">Genre Film/Anime Favorit</li>
			<ul type="disc">
				<li>Action</li>
				<li>Comedy</li>
				<li>Advanture</li>
				<li>Over Power</li>
				<li>Sports</li>
			</ul><br>
			<li id="Data4">Menu Faforit</li>
			<ul type="square">
				<li>Makanan</li>
				<ol>
					<li>Mie Goreng </li>
					<li>Tempe</li>
					<li>dan banya lagi.</li>
				</ol>
			</ul><br>

			<ul type="square" id="bawah">
				<li>Minuman</li>
				<ol>
					<li> Air Putih</li>
					<li> Es Teh</li>
					<li> Es Kelapa Muda</li>
					<li> dan yang enak rasanya saya suka.</li>
				</ol>

			</ul>
		</ol>
	</fieldset>
		</p>
		<a href="#atas">Top;</a>





</html>