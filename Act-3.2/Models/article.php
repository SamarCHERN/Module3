<?php
class Article {
  private $article;
  private $db;

  public function __construct(){
      $this->db = $this->getDb();

      $articlesStatement = $this->db->prepare('SELECT * FROM articles');
      $articlesStatement->execute();
      $articles = $articlesStatement->fetchAll();
      $this->article = $articles;
  }

  public function getArticles(){
      return $this->article;
  }

  public function deleteArticle($id){
      $sqlQuery = 'DELETE FROM articles WHERE id=:id';
      $deleteArticle = $this->db->prepare($sqlQuery);
      $deleteArticle->execute([
         'id' => $id
      ]);
  }

  public function addArticle($titre,$text,$auteur,$date_publication){
      $sqlQuery = 'INSERT INTO articles(Titre, Texte, Auteur, Date_publication) VALUES (:Titre, :Texte, :Auteur, :Date_publication)';
      $insertArticle = $this->db->prepare($sqlQuery);
      $insertArticle->execute([
          'Titre' => $titre,
          'Texte' => $text,
          'Auteur' => $auteur,
          'Date_publication' => $date_publication, 
      ]);
  }

  public function getDb(){
      try
      {
          $db = new PDO('mysql:host=localhost;dbname=databasesamar;charset=utf8', 'root', '');
      }
      catch (Exception $e)
      { 
          die('Erreur : ' . $e->getMessage());
      }   
      return $db;
  }



}
?>