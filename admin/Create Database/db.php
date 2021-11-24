<?php

include 'config.php';
//error message variable
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['create'])) {
        create_conn_db_tables();
    }
    if (isset($_POST['delete'])) {
        drop_db();
    }
    if (isset($_POST['download'])) {
        backup_db();
    }
    
}
?>

<head>
    <link href="../css/main.css" rel="stylesheet"> 
    <title>login</title> 
</head>

<body>
    <div>
        <p><?php echo $message ?></p>
    </div>
            
    <div>
        <form method="post">
            <input class="button" type="submit" name="create" value="Create DB & tables" />
            <input class="button" type="submit" name="download" value="Backup" />
            <input class="button" type="submit" name="delete" value="Delete DB" />
        </form>
    </div>
</body>