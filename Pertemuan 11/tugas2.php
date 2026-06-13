<?php
    function bmi(float $tinggi, float $beratBadan){
        $bmi = $beratBadan / ($tinggi * 0.01)**2;
        if ($bmi < 18.5) {
            return "Kurus";
        } else if ($bmi >= 18.5 and $bmi <= 24.9) {
            return "Normal";
        } else if ($bmi >= 25 and $bmi <= 29.9) {
            return "Gemuk";
        } else {
            return "Obesitas";
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator IMT</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9fafb;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #1f2937;
        }

        .card {
            background-color: #ffffff;
            width: 100%;
            max-width: 400px;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.025);
            border: 1px solid #f3f4f6;
        }

        h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 24px;
            text-align: center;
            letter-spacing: -0.025em;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 8px;
            color: #4b5563;
        }

        input {
            width: 100%;
            padding: 12px 16px;
            font-size: 1rem;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            background-color: #f9fafb;
            transition: all 0.2s ease;
            outline: none;
        }

        input:focus {
            border-color: #111827;
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(17, 24, 39, 0.1);
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #111827;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease;
            margin-top: 8px;
        }

        button:hover {
            background-color: #374151;
        }

        .result-area {
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
            display: none;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Kalkulator IMT</h2>
        <form action="" method="POST">
            <div class="input-group">
                <label for="berat">Berat Badan (kg)</label>
                <input type="number" step="0.1" name="berat" id="berat" placeholder="Contoh: 65.5" required>
            </div>
            <div class="input-group">
                <label for="tinggi">Tinggi Badan (cm)</label>
                <input type="number" step="1" name="tinggi" id="tinggi" placeholder="Contoh: 170" required>
            </div>
            <button type="submit" name="hitung">Hitung IMT</button>
        </form>
        <?php if (isset($_POST['hitung'])): ?>
            <div class="result-area" style="display: block; text-align: center;">
                <?php echo bmi($_POST['tinggi'], $_POST['berat'])?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>