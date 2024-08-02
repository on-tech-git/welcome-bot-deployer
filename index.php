<?php

define('LOGIN_PASSWORD', "admin@123");

if(!file_exists("source.php")){
    file_put_contents("source.php", (base64_decode("PD9waHAKCmZ1bmN0aW9uIHJlYWRDb25maWcoJGZvbGRlck5hbWUpIHsKICAgICRjb25maWdGaWxlID0gIiRmb2xkZXJOYW1lL2NvbmZpZy5qc29uIjsKICAgIGlmIChmaWxlX2V4aXN0cygkY29uZmlnRmlsZSkpIHsKICAgICAgICAkY29uZmlnSnNvbiA9IGZpbGVfZ2V0X2NvbnRlbnRzKCRjb25maWdGaWxlKTsKICAgICAgICByZXR1cm4ganNvbl9kZWNvZGUoJGNvbmZpZ0pzb24sIHRydWUpOwogICAgfSBlbHNlIHsKICAgICAgICByZXR1cm4gZmFsc2U7CiAgICB9Cn0KCmZ1bmN0aW9uIHNlbmRNZXNzYWdlKCR0b2tlbiwgJGNoYXRJZCwgJG1lc3NhZ2UpIHsKICAgICR1cmwgPSAiaHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdCR0b2tlbi9zZW5kTWVzc2FnZSI7CiAgICAkZGF0YSA9IGFycmF5KAogICAgICAgICdjaGF0X2lkJyA9PiAkY2hhdElkLAogICAgICAgICd0ZXh0JyA9PiAkbWVzc2FnZSwKICAgICAgICAncGFyc2VfbW9kZScgPT4gJ0hUTUwnCiAgICApOwoKICAgICRvcHRpb25zID0gYXJyYXkoCiAgICAgICAgJ2h0dHAnID0+IGFycmF5KAogICAgICAgICAgICAnbWV0aG9kJyAgPT4gJ1BPU1QnLAogICAgICAgICAgICAnaGVhZGVyJyAgPT4gJ0NvbnRlbnQtVHlwZTogYXBwbGljYXRpb24veC13d3ctZm9ybS11cmxlbmNvZGVkJywKICAgICAgICAgICAgJ2NvbnRlbnQnID0+IGh0dHBfYnVpbGRfcXVlcnkoJGRhdGEpCiAgICAgICAgKQogICAgKTsKCiAgICAkY29udGV4dCAgPSBzdHJlYW1fY29udGV4dF9jcmVhdGUoJG9wdGlvbnMpOwogICAgJHJlc3VsdCA9IGZpbGVfZ2V0X2NvbnRlbnRzKCR1cmwsIGZhbHNlLCAkY29udGV4dCk7CgogICAgcmV0dXJuICRyZXN1bHQ7Cn0KCmZ1bmN0aW9uIHNldFdlYmhvb2soJHRva2VuLCAkd2ViaG9va1VybCkgewogICAgJHVybCA9ICJodHRwczovL2FwaS50ZWxlZ3JhbS5vcmcvYm90JHRva2VuL3NldFdlYmhvb2s/dXJsPSR3ZWJob29rVXJsIjsKICAgICRyZXN1bHQgPSBmaWxlX2dldF9jb250ZW50cygkdXJsKTsKICAgIHJldHVybiAkcmVzdWx0Owp9CgppZiAoaXNzZXQoJF9HRVRbJ2NvbmZpZyddKSkgewoKICAgICRmb2xkZXJOYW1lID0gZGlybmFtZSgkX1NFUlZFUlsnU0NSSVBUX0ZJTEVOQU1FJ10pOyAKICAgICRjb25maWcgPSByZWFkQ29uZmlnKCRmb2xkZXJOYW1lKTsKICAgIGlmICgkY29uZmlnKSB7CiAgICAgICAgJHRva2VuID0gJGNvbmZpZ1sndG9rZW4nXTsKICAgICAgICAkd2ViaG9va1VybCA9ICdodHRwczovLycgLiAkX1NFUlZFUlsnSFRUUF9IT1NUJ10gLiAkX1NFUlZFUlsnUkVRVUVTVF9VUkknXTsgCiAgICAgICAgJHJlc3BvbnNlID0gc2V0V2ViaG9vaygkdG9rZW4sICR3ZWJob29rVXJsKTsKICAgICAgICBlY2hvICLQkdC+0YIg0YPRgdC/0LXRiNC90L4g0LDQutGC0LjQstC40YDQvtCy0LDQvSEgPGEgaHJlZj0nLi4vJz4mbGFycjsg0J3QsNC30LDQtDwvYT4gPGhyPiAkcmVzcG9uc2VcbiI7CiAgICB9IGVsc2UgewogICAgICAgIGVjaG8gItCa0L7QvdGE0LjQsyDQvdC1INC90LDQudC00LXQvS5cbiI7CiAgICB9Cn0gCmlmIChpc3NldCgkX0dFVFsnYm90J10pKSB7CgogICAgJGZvbGRlck5hbWUgPSBkaXJuYW1lKCRfU0VSVkVSWydTQ1JJUFRfRklMRU5BTUUnXSk7IAogICAgJGNvbmZpZyA9IHJlYWRDb25maWcoJGZvbGRlck5hbWUpOwogICAgaWYgKCRjb25maWcpIHsKICAgICAgICAkdG9rZW4gPSAkY29uZmlnWyd0b2tlbiddOwogICAgICAgICRtZXNzYWdlID0gJGNvbmZpZ1snbWVzc2FnZSddOwogICAgICAgICR1cGRhdGUgPSBqc29uX2RlY29kZShmaWxlX2dldF9jb250ZW50cygncGhwOi8vaW5wdXQnKSwgdHJ1ZSk7CiAgICAgICAgJGNoYXRJZCA9ICR1cGRhdGVbJ21lc3NhZ2UnXVsnY2hhdCddWydpZCddOwogICAgICAgIHNlbmRNZXNzYWdlKCR0b2tlbiwgJGNoYXRJZCwgJG1lc3NhZ2UpOwogICAgfSBlbHNlIHsKICAgICAgICBlY2hvICJDb25maWcgZmlsZSBub3QgZm91bmQuXG4iOwogICAgfQp9Cj8+")));
}

function createFolder() {
    $timestamp = time();
    $md5 = substr(md5($timestamp), 0, 6);
    $folderName = "./$md5";

    if (!file_exists($folderName)) {
        mkdir($folderName);
        return $folderName;
    } else {
        return false;
    }
}

function createConfig($folderName, $message, $token) {
    $configData = array(
        'message' => $message,
        'token' => $token
    );

    $configJson = json_encode($configData, JSON_PRETTY_PRINT);

    file_put_contents("$folderName/config.json", $configJson);
}

function copySourceFile($folderName) {
    copy('source.php', "$folderName/index.php");
}

function scanFolders($directory) {
    $folders = array();
    $files = scandir($directory);
    foreach ($files as $file) {
        $filePath = $directory . '/' . $file;
        if (is_dir($filePath) && $file != '.' && $file != '..') {
            $folders[] = $file;
        }
    }
    return $folders;
}

function parseJson($folderName) {
    $configFile = "$folderName/config.json";
    if (file_exists($configFile)) {
        $configJson = file_get_contents($configFile);
        return json_decode($configJson, true);
    } else {
        return false;
    }
}

function deleteBot($folderName) {
    $configFile = "$folderName/config.json";
    if (file_exists($configFile)) {
        unlink($configFile);
    }

    $files = glob("$folderName/*");
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }

    rmdir($folderName);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'] ?? '';

    if ($action === 'deploy') {
        
        if($_POST['pw'] != LOGIN_PASSWORD){
            die('Неверный пароль!');
        }

        $message = str_ireplace(PHP_EOL, "<br>", $_POST['message']) ?? '';
        $token = $_POST['token'] ?? '';

        $folderName = createFolder();
        if ($folderName) {
            createConfig($folderName, $message, $token);
            copySourceFile($folderName);
            $message = "Бот успешно развёрнут. Нажми ОК чтобы активировать.";
            echo "<script>window.location.href = './$folderName/?config=1';</script>";
        } else {
            $message = "Ошибка: Folder with the same name already exists.";
        }
    } elseif ($action === 'delete') {

        $botToDelete = $_POST['botToDelete'] ?? '';
        if ($botToDelete) {
            deleteBot($botToDelete);
            $message = "Бот '$botToDelete' удалён.";
        } else {
            $message = "Бот не найден.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Bot Management</title>
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA////ANnPxQAA6x8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIiIiIiIiIiIiAAAAAAAAIiARERERERECIBEREREREQIgERERERERAiAAAAAAAAACIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIgAAIiIiAAAiARAiIiIBECIDMCIiIgMwIgMwIiIiAzAiAAAiIiIAACIiIiIiIiIiIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon">
    <style>
        .bots{
            display: flex;
            max-width: 100%;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
        }
        .bot {
            background: aliceblue;
            width: 440px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border: 1px solid;
            padding: 5px;
            margin: 3px;
        }
    </style>
</head>
<body>
    <h1>Дашборд ботов</h1>
    <hr>
    <h2>Развернуть нового бота</h2>
    <form method="POST">
        <input type="hidden" name="action" value="deploy">
        <label for="token">Токен бота:</label><br>
        <input type="text" id="token" style="width:400px" placeholder="1234567890:ABCdef123XXXXXXX" name="token"><br><br>
        <label for="message">Сообщение в HTML (<a href="https://t.me/HTMLconverter_bot" target="_blank">сконвертировать сообщение в Telegram на HTML можно тут</a>):</label><br>
        <textarea type="text" id="message" name="message" style="width:80%; height:300px"></textarea><br><br>
        <input type="password" id="pw" style="width:400px" placeholder="Пароль" name="pw"><br>
        <input type="submit" value="Развернуть!">
    </form>

    <hr>
    <h2>Развернутые боты</h2>
    <?php
    $botsDirectory = './'; 
    $deployedBots = scanFolders($botsDirectory);

    if (!empty($deployedBots)) {
        echo "<div class='bots'>";
        foreach ($deployedBots as $bot) {
            $tmp = json_decode(file_get_contents($bot . "/config.json"),1);
            echo "<div class='bot'><h3>$bot</h3><p><b>Токен:</b> ${tmp['token']}</p><p><b>Сообщение:</b><br><div style='background: white'>${tmp['message']}</div></p><form method='POST'><input type='hidden' name='action' value='delete'><input type='hidden' name='botToDelete' value='$bot'><input type='submit' value='Удалить'></form></div>";
        }
        echo "</div>";
    } else {
        echo "<p>Ботов нет.</p>";
    }
    ?>

    <?php if (isset($message)): ?>
        <script>alert(`<?php echo $message; ?>`);</script>
    <?php endif; ?>
</body>
</html>