<?php

class CiviliteDesc extends CiviliteManager{
      private $Field;
      private $Type;
      private $Null;
      private $Key;
      private $Default;
      private $Extra;

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
       * Get the value of Field
       */ 
      public function getField()
      {
            return $this->Field;
      }

      /**
       * Set the value of Field
       *
       * @return  self
       */ 
      public function setField($Field)
      {
            $this->Field = $Field;

            return $this;
      }

      /**
       * Get the value of Type
       */ 
      public function getType()
      {
            return $this->Type;
      }

      /**
       * Set the value of Type
       *
       * @return  self
       */ 
      public function setType($Type)
      {
            $this->Type = $Type;

            return $this;
      }

      /**
       * Get the value of Null
       */ 
      public function getNull()
      {
            return $this->Null;
      }

      /**
       * Set the value of Null
       *
       * @return  self
       */ 
      public function setNull($Null)
      {
            $this->Null = $Null;

            return $this;
      }

      /**
       * Get the value of Key
       */ 
      public function getKey()
      {
            return $this->Key;
      }

      /**
       * Set the value of Key
       *
       * @return  self
       */ 
      public function setKey($Key)
      {
            $this->Key = $Key;

            return $this;
      }

      /**
       * Get the value of Default
       */ 
      public function getDefault()
      {
            return $this->Default;
      }

      /**
       * Set the value of Default
       *
       * @return  self
       */ 
      public function setDefault($Default)
      {
            $this->Default = $Default;

            return $this;
      }

      /**
       * Get the value of Extra
       */ 
      public function getExtra()
      {
            return $this->Extra;
      }

      /**
       * Set the value of Extra
       *
       * @return  self
       */ 
      public function setExtra($Extra)
      {
            $this->Extra = $Extra;

            return $this;
      }
}