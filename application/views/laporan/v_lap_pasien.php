<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        .header p {
            margin: 5px 0;
            font-size: 0.9rem;
        }

        .title {
            text-align: center;
            margin: 20px 0;
            font-size: 1.2rem;
            font-weight: bold;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 0 auto 20px auto;
            font-size: 0.9rem;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td:first-child {
            text-align: center;
            width: 40px;
        }

        .footer {
            margin-top: 40px;
            text-align: right;
            font-size: 0.9rem;
        }

        .footer .signature {
            margin-top: 40px;
            text-align: left;
            display: inline-block;
            border-top: 1px solid black;
            width: 200px;
        }

        @media print {
            .print-button {
                display: none;
            }
        }

        .print-button {
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .print-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <button class="print-button" onclick="window.print()">Print</button>

    <div class="header">
        <h1>Klinik</h1>
        <p>Jl. Mawar Desa Dompon Kec. Karanganyar Kab. Karanganyar</p>
        <hr>
    </div>

    <div class="title">LAPORAN DATA PASIEN</div>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pasien</th>
                <th>L/P</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil data pasien
            $query = $this->db->get('pasien'); // 'pasien' adalah nama tabel database
            $data_pasien = $query->result_array();

            if (!empty($data_pasien)) {
                $no = 1;
                foreach ($data_pasien as $pasien) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($pasien['nama_pasien']) . "</td>";
                    echo "<td>" . htmlspecialchars($pasien['jenis_kelamin']) . "</td>";
                    echo "<td>" . htmlspecialchars($pasien['umur']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align:center;'>Data tidak tersedia</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <div class="footer">
        Dompon Karanganyar, <?= date('d-m-Y'); ?><br>
        Administrator
        <div class="signature"></div>
    </div>
</body>
</html>
