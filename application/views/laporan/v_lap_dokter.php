<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Dokter</title>
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
            width: 70%;
            border-collapse: collapse;
            margin: 0 auto 20px auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 6px;
            text-align: left;
            font-size: 0.9rem;
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

    <div class="title">LAPORAN DATA DOKTER</div>

        <table>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Dokter</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                        // Ambil data dokter dari database menggunakan CodeIgniter Query Builder
                        $query = $this->db->get('dokter'); // 'dokter' adalah nama tabel di database
                        $data_dokter = $query->result_array();

                        if (!empty($data_dokter)) {
                            $no = 1;
                            foreach ($data_dokter as $dokter) {
                                echo "<tr>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>" . htmlspecialchars($dokter['nama_dokter']) . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>Data tidak tersedia</td></tr>";
                        }
                        ?>
                    </tbody>
        </table>
            </table>

    <div class="footer">
        Dompon Karanganyar, <?php echo date('d-m-Y'); ?><br>
        Administrator
        <div class="signature"></div>
    </div>
</body>
</html>
