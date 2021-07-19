<?php
require 'dbconfig.php';

if (empty($_SESSION['username'])) {
    header("Location: /");
    exit;
}
if (isset($_GET['success'])) {
    if (is_dir($dirname))
        $dir_handle = opendir($dirname);
    if (!$dir_handle)
        return false;
    while ($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname . "/" . $file))
                unlink($dirname . "/" . $file);
            else
                delete_directory($dirname . '/' . $file);
        }
    }
    closedir($dir_handle);
    rmdir($dirname);
}
?>
<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $fset['title']; ?></title>

    <link rel="shortcut icon" href="<?php echo $fset['favicon']; ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tag.css" />
    <link rel="stylesheet" type="text/css" href="assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/tables/datatable/datatables.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
    <!-- Subhankar Pal | @subho57 -->
    <script src="OneSignalSDK.js"></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?php echo $fset['admin_key']; ?>",
            });
        });
    </script>

</head>