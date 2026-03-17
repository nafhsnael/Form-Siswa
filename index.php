<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>

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

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #ff6f91;
            color: white;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Form Data</h2>

    <form method="POST" action="proses.php">
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="kelas" placeholder="Kelas (TI-2A)" required>
        <input type="number" name="tugas" placeholder="Nilai Tugas" required>
        <input type="number" name="uts" placeholder="Nilai UTS" required>
        <input type="number" name="uas" placeholder="Nilai UAS" required>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
