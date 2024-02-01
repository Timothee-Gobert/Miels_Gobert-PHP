<?php

class Article extends ArticleManager{
      private $id;
      private $referenceArticle;
      private $typeArticle;
      private $preposition;
      private $designation;

      public function __construct($data=[]){
            if($data){ // if($data!=[])
                  foreach($data as $key=>$valeur){
                        $set="set".ucfirst($key);
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
       * Get the value of referenceArticle
       */ 
      public function getReferenceArticle()
      {
            return $this->referenceArticle;
      }

      /**
       * Set the value of referenceArticle
       *
       * @return  self
       */ 
      public function setReferenceArticle($referenceArticle)
      {
            $this->referenceArticle = $referenceArticle;

            return $this;
      }

      /**
       * Get the value of typeArticle
       */ 
      public function getTypeArticle()
      {
            return $this->typeArticle;
      }

      /**
       * Set the value of typeArticle
       *
       * @return  self
       */ 
      public function setTypeArticle($typeArticle)
      {
            $this->typeArticle = $typeArticle;

            return $this;
      }

      /**
       * Get the value of preposition
       */ 
      public function getPreposition()
      {
            return $this->preposition;
      }

      /**
       * Set the value of preposition
       *
       * @return  self
       */ 
      public function setPreposition($preposition)
      {
            $this->preposition = $preposition;

            return $this;
      }

      /**
       * Get the value of designation
       */ 
      public function getDesignation()
      {
            return $this->designation;
      }

      /**
       * Set the value of designation
       *
       * @return  self
       */ 
      public function setDesignation($designation)
      {
            $this->designation = $designation;

            return $this;
      }
}