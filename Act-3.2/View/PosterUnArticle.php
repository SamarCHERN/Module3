<?php 
include 'header.php';
?>
<html>
<head>
<title>Mon premier site PHP </title>
<link rel="stylesheet" type="text/css" href="../view/styles.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
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
</body>
</html>




