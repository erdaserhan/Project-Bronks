<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php 
        include 'inc/menu.php'; 
        ?>
    </header>   
    <div id="homepageView">
        <div><a href="?section=Come-On-Feet"><img src="../public/img/photos-home/01.jpg" alt=""></a></div>
        <div><a href="?section=studio-bronks"><img src="../public/img/photos-home/02.jpg" alt=""></a></div>
        <div><a href="?section=ecoles"><img src="../public/img/photos-home/03.jpg" alt=""></a></div>
        <div><a href="?section=open-huis"><img src="../public/img/photos-home/04.jpg" alt=""></a></div>
        <div><img src="../public/img/photos-home/05.jpg" alt=""></div>
        <div><img src="../public/img/photos-home/06.jpg" alt=""></div>
    </div>
        
        <?php 
        include 'inc/footer.php'; 
        ?>
</body>
</html>