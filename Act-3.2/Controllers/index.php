<?php
include_once('../Models/article.php');

$myArticles = new Article();
$articles = $myArticles->getArticles();
$addarticle=$myArticles->addArticle();

if (isset($_GET['url'])) {
    if($_GET['url'] == 'PosterUnArticle'){
        include_once('../View/PosterUnArticle.php');
    }
    elseif ($_GET['url'] == 'page') {
        include_once('../View/page.php');
    }
}else{
    include_once('../View/page.php');
}

// if (isset($_GET['id'])) {
//     $id = intval($_GET['id']);
//     $myArticles->deleteArticle($id);
// }

// if ( isset($_POST['addArticle'])) {
//     $myArticles->addArticle($_POST['titre'],$_POST['text'],$_POST['auteur'],$_POST['date']);
// }