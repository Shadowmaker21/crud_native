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

    <h3>SEKAR | Input Data Pemegang Saham</h3>

    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <td>Kepemilikan Saham BPR Weleri Makmur : </td>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>Nama Pemegang Saham</td>
                <td><input type="text" name="nama_ps" required></td>
            </tr>
            <tr>
                <td>Nominal Saham BPR Weleri Makmur</td>
                <td><input type="text" name="nom_wm" required></td>
            </tr>
            <tr>
                <td>Presentasi Saham</td>
                <td><input type="text" name="saham_wm" required></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <td>Kepemilikan Usaha Lain : </td>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>Nama Perusahaan</td>
                <td><input type="text" name="nama_pers" required></td>
            </tr>
            <tr>
                <td>Jenis Usaha</td>
                <td>
                    <select name="jenis_ush" required>
                        <option>-- Pilih Jenis Surat --</option>
                        <option value="KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA">KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA</option>
                        <option value="JASA TRANSPORTASI">JASA TRANSPORTASI</option>
                        <option value="PERBANKAN">PERBANKAN</option>
                        <option value="RENTAL/PENYEWAAN">RENTAL/PENYEWAAN</option>
                        <option value="PERDAGANGAN BESAR MOBIL BEKAS">PERDAGANGAN BESAR MOBIL BEKAS</option>
                        <option value="PENUKARAN MATA UANG ASING">PENUKARAN MATA UANG ASING</option>
                        <option value="PENYALUR, EKSPOR, IMPOR">PENYALUR, EKSPOR, IMPOR</option>
                        <option value="PROPERTY AGENT">PROPERTY AGENT</option>
                        <option value="KONTRAKTOR & DEVELOPER">KONTRAKTOR & DEVELOPER</option>
                        <option value="BAHAN BANGUNAN">BAHAN BANGUNAN</option>
                        <option value="RETAIL">RETAIL</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Presentasi Saham</td>
                <td><input type="text" name="saham_lain" required></td>
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
            $nama_ps = $_POST['nama_ps'];
            $nom_wm = $_POST['nom_wm'];
            $saham_wm = $_POST['saham_wm'];
            $nama_pers = $_POST['nama_pers'];
            $jenis_ush = $_POST['jenis_ush'];
            $saham_lain = $_POST['saham_lain'];

            $perintahSql = "INSERT INTO user_ps (nama_ps, nom_wm, saham_wm, nama_pers, jenis_ush, saham_lain) VALUES('$nama_ps','$nom_wm','$saham_wm','$nama_pers','$jenis_ush','$saham_lain')";

            $proses = mysqli_query($konek, $perintahSql);

            if($proses) {
                header('Location:index_ps.php');
            } else {
                echo "<script>alert('Gagal Disimpan')</script>";
            }
         }
    ?>
</body>
</html>