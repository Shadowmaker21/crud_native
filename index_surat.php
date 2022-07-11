<html>
<head>
    <title>BPR Weleri Makmur | Secretary Activity Report</title>
</head>

<body>
    <h3>Galeri Surat</h3>

    <table border="2">
    <thead>
            <tr>
                <td>No</td>
                <td>Nama Surat</td>
                <td>Nomor Surat</td>
                <td>Keterangan Surat</td>
                <td>Foto</td>
                <td>Edit</td>
            </tr>
        </thead>

        <?php
           include "koneksi.php";
           
           $perintahSql = "SELECT * FROM galeri_surat";

           $hasil = mysqli_query($konek, $perintahSql);

           $no = 0;

           while($data = mysqli_fetch_array($hasil)){
                $no++;
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_surat']?></td>
                    <td><?php echo $data['nomor_surat']?></td>
                    <td><?php echo $data['ket']?></td>
                    <td><img height='80px' src="<?php echo 'galeri/surat/'. $data['foto']?>"></td>
                    <td>
                        <a href="update.php?id=<?php echo $data['id']; ?>">Update</a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
            }
            ?>
    </table>
</body>
</html>