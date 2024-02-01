<?php
class CiviliteController extends MyFct{
      function __construct(){
            $action ='list';
            // echo $action ;die;
            extract($_GET);
            switch ($action){
                  case 'list': 
                        $this->listerCivilite();
                        break;
                  case 'insert':
                        $this->insererCivilite();
                        break;
                  case 'update':
                        $this->modifierCivilite($id);
                        break;
                  case 'show':
                        $this->afficherCivilite($id);
                        break;
                  case 'delete':
                        $this->supprimerCivilite($id);
                        break;
                  case 'save' :
                        $this->sauvegarderCivilite($_POST,$_FILES);
                        break;
                  case 'search':
                        $this->chercherCivilite($mot);
                        break;
            }
      }

      function listerCivilite(){
            $um=new CiviliteManager();
            $civilites=$um->findAll();
            $lignes=[];
            foreach($civilites as $value){
                $civilite=new Civilite($value);
                $lignes[]=[
                    'id'=>$civilite->getId(),
                    'libelle'=>$civilite->getlibelle(),
                ];
            }
            $variables=[
                'lignes'=>$lignes,
                'nbre'=>count($lignes),
            ];
            $file="View/civilite/listCivilite.html.php";
            $this->generatePage($file,$variables,"View/base-bs-admin.html.php");
      }
      
      function insererCivilite(){
            $civilite=new Civilite();
            $disabled="";
            $this->generateFormCivilite($civilite,$disabled);
      }      
        
      function modifierCivilite($id){
            $um=new CiviliteManager(); 
            $civilite=$um->findById($id);
            $disabled="";
            $this->generateFormCivilite($civilite,$disabled);
      }  

      function afficherCivilite($id){
            $um=new CiviliteManager();
            $civilite=$um->findById($id);
            $disabled="disabled";
            $this->generateFormCivilite($civilite,$disabled);
      }

      function supprimerCivilite($id){
            $um=new CiviliteManager();
            $um->deleteById($id);
            header("location:civilite");
            exit();
      }

      function sauvegarderCivilite($data,$files=[]){
            $um=new CiviliteManager();
            $connexion=$um->connexion();
            extract($data);
            $id=(int) $id;  // transformation de $id en entier
            if($id!=0){
                $um->update($data,$id);
            }else{
                $um->insert($data);
            }
            header("location:civilite");
      }

      function chercherCivilite($mot){
            $um=new CiviliteManager();
            $columnLikes=['libelle'];
            $civilites=$um->search($columnLikes,$mot);
            $variables=[
                'lignes'=>$civilites,
                'nbre'=>count($civilites),
            ];
            $file="View/civilite/listCivilite.html.php";
            $this->generatePage($file,$variables,"View/base-bs-admin.html.php");        
      }      
        
      function generateFormCivilite($civilite,$disabled){
            $variables=[
                  'id'=>$civilite->getId(),
                  'libelle'=>$civilite->getLibelle(),
                  'disabled'=>$disabled,
            ];
            $file="View/civilite/formCivilite.html.php";
            $this->generatePage($file,$variables,"View/base-bs-admin.html.php");

      }  
}