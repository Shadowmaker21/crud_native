<html>

<head>
    <title>BPR Weleri Makmur | Secretary Activity Report</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

</head>

<body>
    <h3>SEKAR | Secretary Activity Report</h3>

    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Jenis Surat</td>
                <td>
                    <select name="nama_surat" required>
                        <option>-- Pilih Jenis Surat --</option>
                        <option value="OJK">OJK</option>
                        <option value="BI">BI</option>
                        <option value="LPS">LPS</option>
                        <option value="PAJAK">PAJAK</option>
                        <option value="PPATK">PPATK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nomor Surat</td>
                <td><input type="text" name="nomor_surat" required></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="ket" required></td>
            </tr>
            <tr>
                <td>Upload File</td>
                <td><input type="file" name="foto" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" name="submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>

    <?php
         include 'koneksi.php';

         if(isset($_POST['submit'])) {
            $nama_surat = $_POST['nama_surat'];
            $nomor_surat = $_POST['nomor_surat'];
            $ket = $_POST['ket'];
            
            $foto = $_FILES['foto']['name'];

            $tmpFoto = $_FILES['foto']['tmp_name'];

            $namaFoto = $nama_surat . '-' . $foto;

            $lokasiFoto = 'galeri/surat/';

            $prosesUpload = move_uploaded_file($tmpFoto, $lokasiFoto.$namaFoto);

            if($prosesUpload) {
                $perintahSql = "INSERT INTO galeri_surat (nama_surat, nomor_surat, ket, foto) VALUES('$nama_surat','$nomor_surat','$ket','$namaFoto')";

                $proses = mysqli_query($konek, $perintahSql);

                if($proses) {
                    header('Location:surat.php');
                } else {
                    echo "<script>alert('Gagal Disimpan')</script>";
                }
            }


         }
    ?>
</body>
</html>