
<html>
<head>
<title>Mon premier site PHP </title>
<link rel="stylesheet" type="text/css" href="../View/styles.css" />
</head>
<body>
<?php
include 'header.php';
?>
<div style="color:blue; align-content:center; margin:2rem;">
<form style="color:blue;text-align:center; width:50%;" action ="index.php?url=page" method="post">
<input type="hidden" name="id" value="<?php echo  $id=uniqid();?>" />
  <div class="mb-3" class="form">
    <label for="exampleInputEmail1" class="form-label">Titre</label>
    <input type="text" class="form-control" name="Titre" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Texte</label>
    <input type="text" class="form-control" name="Texte">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Auteur</label>
    <input type="text" class="form-control" name="Auteur">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Date de publication</label>
    <input type="date" class="form-control" name="Date_publication">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Publier</button>
</form>
</div>
        <?php foreach($articles as $article):?>
        <div class="article"> 
            <h2><?php echo $article['Titre'] ?></h2>
            <h3><?php echo $article['Auteur'] ?></h3>
            <h6>Publié le <?php echo $article['Date_publication'] ?></h6>
            <p><?php echo $article['Texte'] ?></p>
        </div>
        <?php endforeach ?>
<?php include 'footer.php';?>
</body>
</html>
<?php
// include 'utile.php';
?>