<html>
<head>
    <title>BPR Weleri Makmur | Secretary Activity Report</title>
</head>

<body>
    <h3>Daftar Pengurus</h3>

    <table border="2">
    <thead>
            <tr>
                <td>No</td>
                <td>Nama Pengurus</td>
                <td>NIP Pengurus</td>
                <td>Jabatan Pengurus</td>
                <td>Nominal Saham BPR Weleri Makmur</td>
                <td>Presentasi Saham</td>
                <td>Nama Perusahaan</td>
                <td>Jenis Usaha</td>
                <td>Presentasi Saham</td>
                <td>Hubungan Keuangan Pengurus</td>
                <td>Hubungan Keluarga Pengurus</td>
                <td>Tanggal Mulai Menjabat</td>
                <td>Tanggal Akhir Menjabat</td>
                <td>Tanggal RUPS</td>
                <td>Akta RUPS</td>
                <td>Keterangan Surat OJK</td>
                <td>Tanggal Surat OJK</td>
                <td>Jenis Sertifikat</td>
                <td>Jatuh Tempo Seritifikat</td>
                <td>Edit</td>
            </tr>
        </thead>

        <?php
           include "koneksi.php";
           
           $perintahSql = "SELECT * FROM user_pen";

           $hasil = mysqli_query($konek, $perintahSql);

           $no = 0;

           while($data = mysqli_fetch_array($hasil)){
                $no++;
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_pen']?></td>
                    <td><?php echo $data['nip_pen']?></td>
                    <td><?php echo $data['jabatan_pen']?></td>
                    <td><?php echo $data['nom_wm_pen']?></td>
                    <td><?php echo $data['saham_wm_pen']?></td>
                    <td><?php echo $data['nama_pers_pen']?></td>
                    <td><?php echo $data['jenis_ush_pen']?></td>
                    <td><?php echo $data['saham_lain_pen']?></td>
                    <td><?php echo $data['hub_keu']?></td>
                    <td><?php echo $data['hub_kel']?></td>
                    <td><?php echo $data['mul_jab']?></td>
                    <td><?php echo $data['akh_jab']?></td>
                    <td><?php echo $data['date_akta']?></td>
                    <td><?php echo $data['akta_rups']?></td>
                    <td><?php echo $data['ket_ojk']?></td>
                    <td><?php echo $data['date_ojk']?></td>
                    <td><?php echo $data['jenis_sertif']?></td>
                    <td><?php echo $data['tempo_ser']?></td>
                
                    <td>
                        <a href="update_peng.php?id=<?php echo $data['id']; ?>">Update</a>
                        <a href="delete_peng.php?id=<?php echo $data['id']; ?>">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
            }
            ?>
    </table>
</body>
</html>

