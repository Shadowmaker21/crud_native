<html>
<head>
    <title>BPR Weleri Makmur | Secretary Activity Report</title>
</head>

<body>
    <h3>Daftar Pemegang Saham</h3>

    <table border="2">
    <thead>
            <tr>
                <td>No</td>
                <td>Nama Pemegang Saham</td>
                <td>Nominal Saham BPR Weleri Makmur</td>
                <td>Presentasi Saham</td>
                <td>Nama Perusahaan</td>
                <td>Jenis Usaha</td>
                <td>Presentasi Saham</td>
                <td>Edit</td>
            </tr>
        </thead>

        <?php
           include "koneksi.php";
           
           $perintahSql = "SELECT * FROM user_ps";

           $hasil = mysqli_query($konek, $perintahSql);

           $no = 0;

           while($data = mysqli_fetch_array($hasil)){
                $no++;
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_ps']?></td>
                    <td><?php echo $data['nom_wm']?></td>
                    <td><?php echo $data['saham_wm']?></td>
                    <td><?php echo $data['nama_pers']?></td>
                    <td><?php echo $data['jenis_ush']?></td>
                    <td><?php echo $data['saham_lain']?></td>
                
                    <td>
                        <a href="update_ps.php?id=<?php echo $data['id']; ?>">Update</a>
                        <a href="delete_ps.php?id=<?php echo $data['id']; ?>">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
            }
            ?>
    </table>
</body>
</html>

