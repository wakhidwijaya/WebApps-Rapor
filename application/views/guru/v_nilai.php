<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rapor - Online</title>
</head>
<body>
<h1>Guru</h1>
<div class="container">
    <div class="row">
        <table>
            <th>
            <td>No</td>
            <td>No</td>
            <td>No</td>
            <td>No</td>
            <td>No</td>
            </th>
        </table>
        <?php
        foreach ($nilai as $data_nilai) {
            echo $data_nilai['semester'];
        }
        ?>
    </div>
</div>
</body>
</html>
