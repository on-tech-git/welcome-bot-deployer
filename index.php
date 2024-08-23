<?php

define('LOGIN_PASSWORD', "admin@123");

if(!file_exists("source.php")){
    file_put_contents("source.php", (base64_decode("PD9waHAKCmZ1bmN0aW9uIHJlYWRDb25maWcoKSB7CiAgICAkY29uZmlnRmlsZSA9ICJjb25maWcuanNvbiI7CiAgICBpZiAoZmlsZV9leGlzdHMoJGNvbmZpZ0ZpbGUpKSB7CiAgICAgICAgJGNvbmZpZ0pzb24gPSBmaWxlX2dldF9jb250ZW50cygkY29uZmlnRmlsZSk7CiAgICAgICAgcmV0dXJuIGpzb25fZGVjb2RlKCRjb25maWdKc29uLCB0cnVlKTsKICAgIH0gZWxzZSB7CiAgICAgICAgcmV0dXJuIGZhbHNlOwogICAgfQp9CgpmdW5jdGlvbiBzZW5kTWVzc2FnZSgkdG9rZW4sICRjaGF0SWQsICRtZXNzYWdlKSB7CiAgICAkbWVzc2FnZSA9IHN0cl9yZXBsYWNlKCc8YnI+JywgIlxuIiwgJG1lc3NhZ2UpOwogICAgJHVybCA9ICJodHRwczovL2FwaS50ZWxlZ3JhbS5vcmcvYm90JHRva2VuL3NlbmRNZXNzYWdlIjsKICAgICRkYXRhID0gYXJyYXkoCiAgICAgICAgJ2NoYXRfaWQnID0+ICRjaGF0SWQsCiAgICAgICAgJ3RleHQnID0+ICRtZXNzYWdlLAogICAgICAgICdwYXJzZV9tb2RlJyA9PiAnSFRNTCcKICAgICk7CgogICAgJGNoID0gY3VybF9pbml0KCR1cmwpOwoKICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NULCAxKTsKICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NURklFTERTLCBodHRwX2J1aWxkX3F1ZXJ5KCRkYXRhKSk7CiAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIHRydWUpOwogICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0hUVFBIRUFERVIsIGFycmF5KCdDb250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtd3d3LWZvcm0tdXJsZW5jb2RlZCcpKTsKCiAgICAkcmVzdWx0ID0gY3VybF9leGVjKCRjaCk7CiAgICBjdXJsX2Nsb3NlKCRjaCk7CgogICAgcmV0dXJuICRyZXN1bHQ7Cn0KCgpmdW5jdGlvbiBzZXRXZWJob29rKCR0b2tlbiwgJHdlYmhvb2tVcmwpIHsKICAgICR1cmwgPSAiaHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdCR0b2tlbi9zZXRXZWJob29rP3VybD0kd2ViaG9va1VybCI7CiAgICAkcmVzdWx0ID0gZmlsZV9nZXRfY29udGVudHMoJHVybCk7CiAgICByZXR1cm4gJHJlc3VsdDsKfQoKaWYgKGlzc2V0KCRfR0VUWydjb25maWcnXSkpIHsKCiAgICAkZm9sZGVyTmFtZSA9IGRpcm5hbWUoJF9TRVJWRVJbJ1NDUklQVF9GSUxFTkFNRSddKTsgCiAgICAkY29uZmlnID0gcmVhZENvbmZpZygpOwogICAgaWYgKCRjb25maWcpIHsKICAgICAgICAkdG9rZW4gPSAkY29uZmlnWyd0b2tlbiddOwogICAgICAgICR3ZWJob29rVXJsID0gJ2h0dHBzOi8vJyAuICRfU0VSVkVSWydIVFRQX0hPU1QnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOyAKCSR3ZWJob29rVXJsID0gc3RyX3JlcGxhY2UoIj9jb25maWciLCI/Ym90Iiwkd2ViaG9va1VybCk7CiAgICAgICAgJHJlc3BvbnNlID0gc2V0V2ViaG9vaygkdG9rZW4sICR3ZWJob29rVXJsKTsKICAgICAgICBlY2hvICLQkdC+0YIg0YPRgdC/0LXRiNC90L4g0LDQutGC0LjQstC40YDQvtCy0LDQvSEgPGEgaHJlZj0nLi4vJz4mbGFycjsg0J3QsNC30LDQtDwvYT4gPGhyPiAkcmVzcG9uc2VcbiI7CiAgICB9IGVsc2UgewogICAgICAgIGVjaG8gItCa0L7QvdGE0LjQsyDQvdC1INC90LDQudC00LXQvS5cbiI7CiAgICB9Cn0gCmlmIChpc3NldCgkX0dFVFsnYm90J10pKSB7CiAgICAkY29uZmlnID0gcmVhZENvbmZpZygpOwogICAgZmlsZV9wdXRfY29udGVudHMoImEudHh0Iixqc29uX2VuY29kZSgkY29uZmlnKSk7CiAgICBpZiAoIWVtcHR5KCRjb25maWcpKSB7CiAgICAgICAgJHRva2VuID0gJGNvbmZpZ1sndG9rZW4nXTsKICAgICAgICAkbWVzc2FnZSA9ICRjb25maWdbJ21lc3NhZ2UnXTsKICAgICAgICAkdXBkYXRlID0ganNvbl9kZWNvZGUoZmlsZV9nZXRfY29udGVudHMoJ3BocDovL2lucHV0JyksIHRydWUpOwogICAgICAgICRjaGF0SWQgPSAkdXBkYXRlWydtZXNzYWdlJ11bJ2NoYXQnXVsnaWQnXTsKICAgICAgICBmaWxlX3B1dF9jb250ZW50cygiYS50eHQiLHNlbmRNZXNzYWdlKCR0b2tlbiwgJGNoYXRJZCwgJG1lc3NhZ2UpKTsKCWZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwOi8vMTI3LjAuMC4xLzFkN2QxNmMvcG9zdGJhY2s/Ii5odHRwX2J1aWxkX3F1ZXJ5KFsic3ViaWQiID0+IGV4cGxvZGUoIiAiLCR1cGRhdGVbJ21lc3NhZ2UnXVsndGV4dCddKVsxXSwic3RhdHVzIj0+ImxlYWQiXSkpOwogICAgfSBlbHNlIHsKICAgICAgICBlY2hvICJDb25maWcgZmlsZSBub3QgZm91bmQuXG4iOwogICAgfQp9Cj8+Cltyb290QGt0IDc3MzA5NF0jIGNhdCAuLi9zb3VyY2UucGhwIAo8P3BocAoKZnVuY3Rpb24gcmVhZENvbmZpZygpIHsKICAgICRjb25maWdGaWxlID0gImNvbmZpZy5qc29uIjsKICAgIGlmIChmaWxlX2V4aXN0cygkY29uZmlnRmlsZSkpIHsKICAgICAgICAkY29uZmlnSnNvbiA9IGZpbGVfZ2V0X2NvbnRlbnRzKCRjb25maWdGaWxlKTsKICAgICAgICByZXR1cm4ganNvbl9kZWNvZGUoJGNvbmZpZ0pzb24sIHRydWUpOwogICAgfSBlbHNlIHsKICAgICAgICByZXR1cm4gZmFsc2U7CiAgICB9Cn0KCmZ1bmN0aW9uIHNlbmRNZXNzYWdlKCR0b2tlbiwgJGNoYXRJZCwgJG1lc3NhZ2UpIHsKICAgICRtZXNzYWdlID0gc3RyX3JlcGxhY2UoJzxicj4nLCAiXG4iLCAkbWVzc2FnZSk7CiAgICAkdXJsID0gImh0dHBzOi8vYXBpLnRlbGVncmFtLm9yZy9ib3QkdG9rZW4vc2VuZE1lc3NhZ2UiOwogICAgJGRhdGEgPSBhcnJheSgKICAgICAgICAnY2hhdF9pZCcgPT4gJGNoYXRJZCwKICAgICAgICAndGV4dCcgPT4gJG1lc3NhZ2UsCiAgICAgICAgJ3BhcnNlX21vZGUnID0+ICdIVE1MJwogICAgKTsKCiAgICAkY2ggPSBjdXJsX2luaXQoJHVybCk7CgogICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1QsIDEpOwogICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1RGSUVMRFMsIGh0dHBfYnVpbGRfcXVlcnkoJGRhdGEpKTsKICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgdHJ1ZSk7CiAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSFRUUEhFQURFUiwgYXJyYXkoJ0NvbnRlbnQtVHlwZTogYXBwbGljYXRpb24veC13d3ctZm9ybS11cmxlbmNvZGVkJykpOwoKICAgICRyZXN1bHQgPSBjdXJsX2V4ZWMoJGNoKTsKICAgIGN1cmxfY2xvc2UoJGNoKTsKCiAgICByZXR1cm4gJHJlc3VsdDsKfQoKCmZ1bmN0aW9uIHNldFdlYmhvb2soJHRva2VuLCAkd2ViaG9va1VybCkgewogICAgJHVybCA9ICJodHRwczovL2FwaS50ZWxlZ3JhbS5vcmcvYm90JHRva2VuL3NldFdlYmhvb2s/dXJsPSR3ZWJob29rVXJsIjsKICAgICRyZXN1bHQgPSBmaWxlX2dldF9jb250ZW50cygkdXJsKTsKICAgIHJldHVybiAkcmVzdWx0Owp9CgppZiAoaXNzZXQoJF9HRVRbJ2NvbmZpZyddKSkgewoKICAgICRmb2xkZXJOYW1lID0gZGlybmFtZSgkX1NFUlZFUlsnU0NSSVBUX0ZJTEVOQU1FJ10pOyAKICAgICRjb25maWcgPSByZWFkQ29uZmlnKCk7CiAgICBpZiAoJGNvbmZpZykgewogICAgICAgICR0b2tlbiA9ICRjb25maWdbJ3Rva2VuJ107CiAgICAgICAgJHdlYmhvb2tVcmwgPSAnaHR0cHM6Ly8nIC4gJF9TRVJWRVJbJ0hUVFBfSE9TVCddIC4gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107IAoJJHdlYmhvb2tVcmwgPSBzdHJfcmVwbGFjZSgiP2NvbmZpZyIsIj9ib3QiLCR3ZWJob29rVXJsKTsKICAgICAgICAkcmVzcG9uc2UgPSBzZXRXZWJob29rKCR0b2tlbiwgJHdlYmhvb2tVcmwpOwogICAgICAgIGVjaG8gItCR0L7RgiDRg9GB0L/QtdGI0L3QviDQsNC60YLQuNCy0LjRgNC+0LLQsNC9ISA8YSBocmVmPScuLi8nPiZsYXJyOyDQndCw0LfQsNC0PC9hPiA8aHI+ICRyZXNwb25zZVxuIjsKICAgIH0gZWxzZSB7CiAgICAgICAgZWNobyAi0JrQvtC90YTQuNCzINC90LUg0L3QsNC50LTQtdC9LlxuIjsKICAgIH0KfSAKaWYgKGlzc2V0KCRfR0VUWydib3QnXSkpIHsKICAgICRjb25maWcgPSByZWFkQ29uZmlnKCk7CiAgICBmaWxlX3B1dF9jb250ZW50cygiYS50eHQiLGpzb25fZW5jb2RlKCRjb25maWcpKTsKICAgIGlmICghZW1wdHkoJGNvbmZpZykpIHsKICAgICAgICAkdG9rZW4gPSAkY29uZmlnWyd0b2tlbiddOwogICAgICAgICRtZXNzYWdlID0gJGNvbmZpZ1snbWVzc2FnZSddOwogICAgICAgICR1cGRhdGUgPSBqc29uX2RlY29kZShmaWxlX2dldF9jb250ZW50cygncGhwOi8vaW5wdXQnKSwgdHJ1ZSk7CiAgICAgICAgJGNoYXRJZCA9ICR1cGRhdGVbJ21lc3NhZ2UnXVsnY2hhdCddWydpZCddOwogICAgICAgIGZpbGVfcHV0X2NvbnRlbnRzKCJhLnR4dCIsc2VuZE1lc3NhZ2UoJHRva2VuLCAkY2hhdElkLCAkbWVzc2FnZSkpOwogICAgfSBlbHNlIHsKICAgICAgICBlY2hvICJDb25maWcgZmlsZSBub3QgZm91bmQuXG4iOwogICAgfQp9Cj8+")));
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
