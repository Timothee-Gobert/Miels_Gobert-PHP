<?php

class PrixStock extends PrixStockManager{
      private $id;
      private $article_id;
      private $poids_id;
      private $prix;
      private $stock;

      public function __construct($data=[]){
            if($data){ // if($data!=[])
                  foreach($data as $key=>$valeur){
                        $set="set".ucfirst($key); // creation de fonction set (cas où $key='numArticle' alors $set="setNumArticle")
                        if(method_exists($this,$set)){
                              $this->$set($valeur);
                        }
                  }
            }
      }    

      /**
       * Get the value of id
       */ 
      public function getId()
      {
            return $this->id;
      }

      /**
       * Set the value of id
       *
       * @return  self
       */ 
      public function setId($id)
      {
            $this->id = $id;

            return $this;
      }

      /**
       * Get the value of article_id
       */ 
      public function getArticle_id()
      {
            return $this->article_id;
      }

      /**
       * Set the value of article_id
       *
       * @return  self
       */ 
      public function setArticle_id($article_id)
      {
            $this->article_id = $article_id;

            return $this;
      }

      /**
       * Get the value of poids_id
       */ 
      public function getPoids_id()
      {
            return $this->poids_id;
      }

      /**
       * Set the value of poids_id
       *
       * @return  self
       */ 
      public function setPoids_id($poids_id)
      {
            $this->poids_id = $poids_id;

            return $this;
      }

      /**
       * Get the value of prix
       */ 
      public function getPrix()
      {
            return $this->prix;
      }

      /**
       * Set the value of prix
       *
       * @return  self
       */ 
      public function setPrix($prix)
      {
            $this->prix = $prix;

            return $this;
      }

      /**
       * Get the value of stock
       */ 
      public function getStock()
      {
            return $this->stock;
      }

      /**
       * Set the value of stock
       *
       * @return  self
       */ 
      public function setStock($stock)
      {
            $this->stock = $stock;

            return $this;
      }
}