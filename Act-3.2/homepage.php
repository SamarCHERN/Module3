<html>
<head>
<title>Mon premier site PHP </title>
<link rel="stylesheet" type="text/css" href="../View/styles.css" />
</head>
<body>
<?php
include 'header.php';
// include 'content.php';
// include 'utile.php';

$artic=getArticles(3);
?>
    <h5>Les 3 derniers articles:</h5>

        <?php foreach($artic as $article):?>
            <div class="article"> 
            <h2><?php echo $article['Titre'] ?></h2>
            <h5><?php echo $article['Auteur'] ?></h5>
            <h6><?php echo $article['Date_publication'] ?></h6>
            <p><?php echo $article['Texte'] ?></p>
        <?php endforeach ?>
        </div>
      
        <?php include 'footer.php';?>
</body>
</html>