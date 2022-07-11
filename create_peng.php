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

    <h3>SEKAR | Input Data Pengurus</h3>

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
                <td>Nama Pengurus</td>
                <td><input type="text" name="nama_pen" required></td>
            </tr>
            <tr>
                <td>NIP Pengurus</td>
                <td><input type="text" name="nip_pen" required></td>
            </tr>
            <tr>
                <td>Jabatan Pengurus</td>
                <td><input type="text" name="jabatan_pen" required></td>
            </tr>
            <tr>
                <td>Nominal Saham BPR Weleri Makmur</td>
                <td><input type="text" name="nom_wm_pen" required></td>
            </tr>
            <tr>
                <td>Presentasi Saham</td>
                <td><input type="text" name="saham_wm_pen"></td>
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
                <td><input type="text" name="nama_pers_pen"></td>
            </tr>
            <tr>
                <td>Jenis Usaha</td>
                <td>
                    <select name="jenis_ush_pen" required>
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
                        <option value="-">-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Presentasi Saham</td>
                <td><input type="text" name="saham_lain_pen"></td>
            </tr>
            <tr>
                <td>Hubungan Keuangan Pengurus</td>
                <td><input type="text" name="hub_keu" required></td>
            </tr>
            <tr>
                <td>Hubungan Keluarga Pengurus</td>
                <td><input type="text" name="hub_kel" required></td>
            </tr>
            <1<tr>
                <td>Tanggal Mulai Menjabat</td>
                <td><input type="text" name="mul_jab" required></td>
            </tr>
            <tr>
                <td>Tanggal Akhir Menjabat</td>
                <td><input type="date" name="akh_jab" required></td>
            </tr>
            <tr>
                <td>Tanggal RUPS</td>
                <td><input type="date" name="date_akta" required></td>
            </tr>
            <tr>
                <td>Akta RUPS</td>
                <td><input type="text" name="akta_rups" required></td>
            </tr>
            <tr>
                <td>Keterangan Surat OJK</td>
                <td><input type="text" name="ket_ojk" required></td>
            </tr>
            <tr>
                <td>Tanggal Surat OJK</td>
                <td><input type="date" name="date_ojk" required></td>
            </tr>
            
            <tr>
                <td>Jenis Sertifikat</td>
                <td><input type="text" name="jenis_sertif" required></td>
            </tr>
            <tr>
                <td>Jatuh Tempo Seritifikat</td>
                <td><input type="date" name="tempo_ser" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" name="submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>

    <?php
    ob_start();
         include 'koneksi.php';

         if(isset($_POST['submit'])) {
            $nama_pen = $_POST['nama_pen'];
            $nip_pen = $_POST['nip_pen'];
            $jabatan_pen = $_POST['jabatan_pen'];
            $nom_wm_pen = $_POST['nom_wm_pen'];
            $saham_wm_pen = $_POST['saham_wm_pen'];
            $nama_pers_pen = $_POST['nama_pers_pen'];
            $jenis_ush_pen = $_POST['jenis_ush_pen'];
            $saham_lain_pen = $_POST['saham_lain_pen'];
            $hub_keu = $_POST['hub_keu'];
            $hub_kel = $_POST['hub_kel'];
            $mul_jab = $_POST['mul_jab'];
            $akh_jab = $_POST['akh_jab'];
            $date_akta = $_POST['date_akta'];
            $akta_rups = $_POST['akta_rups'];
            $ket_ojk = $_POST['ket_ojk'];
            $date_ojk = $_POST['date_ojk'];
            $jenis_sertif = $_POST['jenis_sertif'];
            $tempo_ser = $_POST['tempo_ser'];


            $perintahSql = "INSERT INTO user_pen (nama_pen, nip_pen, jabatan_pen, nom_wm_pen, saham_wm_pen, nama_pers_pen, jenis_ush_pen, saham_lain_pen, hub_keu, hub_kel, mul_jab, akh_jab, date_akta, akta_rups, ket_ojk, date_ojk, jenis_sertif,tempo_ser) 
            VALUES('$nama_pen','$nip_pen','$jabatan_pen','$nom_wm_pen','$saham_wm_pen','$nama_pers_pen','$jenis_ush_pen','$saham_lain_pen','$hub_keu','$hub_kel','$mul_jab','$akh_jab','$date_akta','$akta_rups','$ket_ojk','$date_ojk','$jenis_sertif','$tempo_ser')";

            $proses = mysqli_query($konek, $perintahSql);

            if($proses) {
                header('Location:index_peng.php');
                ob_end_flush();
            } else {
                echo "<script>alert('Gagal Disimpan')</script>";
            }
        }
    ?>

</body>
</html>