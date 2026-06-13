<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informasi Bulan</title>
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
                max-width: 350px;
                padding: 32px;
                border-radius: 16px;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
                border: 1px solid #f3f4f6;
                text-align: center;
            }

            h2 {
                font-size: 1.25rem;
                font-weight: 600;
                margin-bottom: 24px;
                color: #4b5563;
            }

            .month-name {
                font-size: 2.5rem;
                font-weight: 700;
                color: #111827;
                margin-bottom: 8px;
            }

            .days-left {
                display: inline-block;
                margin-top: 16px;
                padding: 12px 20px;
                background-color: #111827;
                color: #ffffff;
                border-radius: 8px;
                font-size: 1.1rem;
                font-weight: 500;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h2>Bulan Sekarang</h2>
            <div class="month-name">
                <?php echo date('F')?>
            </div>
            <hr style="border-top: 1px solid #e5e7eb; margin: 20px 0;">
            <p style="color: #6b7280; font-size: 0.95rem;">
                <?php echo date('d') . " of " . cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'))?>
            </p>
            <div class="days-left">
                <?php echo "Tersisa ".(cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')) - date('d'))." hari lagi" ?>
            </div>
        </div>
    </body>
</html>