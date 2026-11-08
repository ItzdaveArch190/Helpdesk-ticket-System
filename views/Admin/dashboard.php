<?php
    
    require_once __DIR__  . '/../../app/config/database.php';
    require_once __DIR__  . '/../../app/models/user.php';

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard Panel</title>
</head>
<body>
    <div class="d-flex">
        <?php  require_once __DIR__  .  '/../layouts/Sidebar.php'; ?>

        <div class="p-4">
            <h1>Welcome Back <?php  ?></h1>
        </div>
    </div>
</body>
</html>