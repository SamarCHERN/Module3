<?php
include_once('../Models/article.php');

$myArticles = new Article();
$articles = $myArticles->getArticles();
if ( isset($_POST['submit'])) {
    $myArticles->addArticle($_POST['Titre'],$_POST['Texte'],$_POST['Auteur'],$_POST['Date_publication']);
    header('Location:index.php');
}
// if (isset($_GET['url'])) {
//     if($_GET['url'] == 'page'){
//         include_once('../View/page.php');
//     }
// }else{
//     include_once('../View/page.php');
// }
include_once('../View/page.php');