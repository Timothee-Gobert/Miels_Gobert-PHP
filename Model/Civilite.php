<?php

class Civilite extends CiviliteManager{
      private $id;
      private $libelle;

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
       * Get the value of libelle
       */ 
      public function getLibelle()
      {
            return $this->libelle;
      }

      /**
       * Set the value of libelle
       *
       * @return  self
       */ 
      public function setLibelle($libelle)
      {
            $this->libelle = $libelle;

            return $this;
      }
}    