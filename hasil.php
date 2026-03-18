<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ffd6e0, #e0c3fc);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            width: 360px;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #ff6f91;
        }

        .hasil {
            margin-top: 15px;
            line-height: 1.8;
        }

        .grade {
            font-size: 18px;
            font-weight: bold;
            color: #ff6f91;
        }

        a {
            display: block;
            margin-top: 15px;
            text-align: center;
            background: #ff6f91;
            color: white;
            padding: 10px;
            border-radius: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Hasil Data</h2>

    <div class="hasil">
        <b>Nama:</b> <?= $data->nama ?><br>
        <b>Kelas:</b> <?= $data->kelas ?><br>
        <b>Rata-rata:</b> <?= $data->rata() ?><br>
        <b>Grade:</b> <span class="grade"><?= $data->grade() ?></span>
    </div>

    <a href="index.php">⬅️ Kembali</a>
</div>

</body>
</html>
