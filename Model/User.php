<?php

      class User extends UserManager{
            private $id;
            private $username;
            private $administrateur;
            private $civilite_id;
            private $nom;
            private $prenom;
            private $adresse;
            private $ville;
            private $codePostal;
            private $mail;
            private $telephone;
            private $password;

            public function __construct($data=[]){
                  if($data){
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
             * Get the value of username
             */ 
            public function getUsername()
            {
                        return $this->username;
            }

            /**
             * Set the value of username
             *
             * @return  self
             */ 
            public function setUsername($username)
            {
                        $this->username = $username;

                        return $this;
            }

            /**
             * Get the value of administrateur
             */ 
            public function getAdministrateur()
            {
                        return $this->administrateur;
            }

            /**
             * Set the value of administrateur
             *
             * @return  self
             */ 
            public function setAdministrateur($administrateur)
            {
                        $this->administrateur = $administrateur;

                        return $this;
            }

            /**
             * Get the value of civilite_id
             */ 
            public function getCivilite_id()
            {
                        return $this->civilite_id;
            }

            /**
             * Set the value of civilite_id
             *
             * @return  self
             */ 
            public function setCivilite_id($civilite_id)
            {
                        $this->civilite_id = $civilite_id;

                        return $this;
            }

            /**
             * Get the value of nom
             */ 
            public function getNom()
            {
                        return $this->nom;
            }

            /**
             * Set the value of nom
             *
             * @return  self
             */ 
            public function setNom($nom)
            {
                        $this->nom = $nom;

                        return $this;
            }

            /**
             * Get the value of prenom
             */ 
            public function getPrenom()
            {
                        return $this->prenom;
            }

            /**
             * Set the value of prenom
             *
             * @return  self
             */ 
            public function setPrenom($prenom)
            {
                        $this->prenom = $prenom;

                        return $this;
            }

            /**
             * Get the value of adresse
             */ 
            public function getAdresse()
            {
                        return $this->adresse;
            }

            /**
             * Set the value of adresse
             *
             * @return  self
             */ 
            public function setAdresse($adresse)
            {
                        $this->adresse = $adresse;

                        return $this;
            }

            /**
             * Get the value of ville
             */ 
            public function getVille()
            {
                        return $this->ville;
            }

            /**
             * Set the value of ville
             *
             * @return  self
             */ 
            public function setVille($ville)
            {
                        $this->ville = $ville;

                        return $this;
            }

            /**
             * Get the value of codePostal
             */ 
            public function getCodePostal()
            {
                        return $this->codePostal;
            }

            /**
             * Set the value of codePostal
             *
             * @return  self
             */ 
            public function setCodePostal($codePostal)
            {
                        $this->codePostal = $codePostal;

                        return $this;
            }

            /**
             * Get the value of mail
             */ 
            public function getMail()
            {
                        return $this->mail;
            }

            /**
             * Set the value of mail
             *
             * @return  self
             */ 
            public function setMail($mail)
            {
                        $this->mail = $mail;

                        return $this;
            }

            /**
             * Get the value of telephone
             */ 
            public function getTelephone()
            {
                        return $this->telephone;
            }

            /**
             * Set the value of telephone
             *
             * @return  self
             */ 
            public function setTelephone($telephone)
            {
                        $this->telephone = $telephone;

                        return $this;
            }

            /**
             * Get the value of password
             */ 
            public function getPassword()
            {
                        return $this->password;
            }

            /**
             * Set the value of password
             *
             * @return  self
             */ 
            public function setPassword($password)
            {
                        $this->password = $password;

                        return $this;
            }
      }