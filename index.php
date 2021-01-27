<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol LED</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex">
        <div class="flex-initial ...">
            <button class="bg-green-300 hover:bg-green-500 p-1 border-2 border-purple-500 border-opacity-75 rounded-lg" onclick="window.location.href='control.php?id=1&value=1'">ON</button>
        </div>
        <div class="flex-initial ...">
            <button class="bg-red-300 hover:bg-red-500 p-1 border-2 border-purple-500 border-opacity-75 rounded-lg" onclick="window.location.href='control.php?id=1&value=0'">OFF</button>
        </div>
        <div class="flex-initial mx-6">
            <?php
            $data = mysqli_query($mysqli, 'SELECT value FROM controls WHERE id="1"');
            while ($result = mysqli_fetch_assoc($data)) {
                $val = $result['value'];

                echo "led 1 ";
                echo ($val == 1) ? $status = 'ON' : $status = 'OFF';
            }
            ?>
        </div>
    </div>

</body>

</html>