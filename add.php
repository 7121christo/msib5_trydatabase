<?php
 $db_connection = mysqli_connect("127.0.0.1", "root", "", "profil_teman") or die("Koneksi Gagal");
?>

<html>

<head>
    <title>MSIB5_Latihan05_6453950</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <style type="text/css">
    body {
        background-image: url("https://media.istockphoto.com/id/518979130/video/morning-light-rays-purple-loopable-background.jpg?b=1&s=640x640&k=20&c=CovzB-JnuCEsuM_J9MzRCg830FznitvtzYSHK9K-6WQ=");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    td {
        padding: 12px;
    }

    /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>
</head>

<body>
    <a href="index.php">
        << Home</a>
            <br /><br />

            <h1 class="row justify-content-center m-3 text-white">Tambah Teman Baru</h1>
            <form action="add.php" method="post" name="formTambahData" class="row justify-content-center m-3">
                <table width="40%" border="0" class="text-white bg-dark">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td><input type="text" name="instagram"></td>

                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td><input type="number" name="umur"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit" value="Tambah" class="btn btn-success btn-sm m-2"></td>
                    </tr>
                </table>
            </form>

            <?php
				if($_POST){
					$nama = $_POST["nama"];
					$alamat = $_POST["alamat"];
					$instagram = $_POST["instagram"];
					$umur = $_POST["umur"];
		
					$sql = "INSERT INTO profil (nama,alamat,instagram,umur) VALUES ('".$nama."','".$alamat."','".$instagram."','".$umur."')";
		
					if(mysqli_query($db_connection,$sql)){
						echo '"<h3 style="color:white;text-align:center;">Berhasil Mengisi Data</h3>"';
					}else{
						echo '"<h3 style="color:white;text-align:center;">Gagal Mengisi data</h3>"';
					}
				}
		
				mysqli_close($db_connection);
			?>
</body>

</html>