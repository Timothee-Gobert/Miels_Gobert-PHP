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
                  case 'DescCivilite':
                        $this->descriptionCivilite('civilite');
                        break;
            }
      }
      function descriptionCivilite($table){
            $am=new CiviliteManager();
            $descArt=$am->getDescribe($table);
            $lignes=[];
            foreach($descArt as $value){
                  $civilite=new CiviliteDesc($value);
                  $lignes[]=[
                        'Field'=>$civilite->getField(),
                        'Type'=>$civilite->getType(),
                        'Null'=>$civilite->getNull(),
                        'Key'=>$civilite->getKey(),
                        'Default'=>$civilite->getDefault(),
                        'Extra'=>$civilite->getExtra(),
                  ];
            }
            $variables=[
                  'lignes'=>$lignes,
            ]; 
            $file="View/civilite/listDescCivilite.html.php";
            $this->generatePage($file,$variables);
      }

      function listerCivilite(){
            $cm=new CiviliteManager();
            $civilites=$cm->findAll();
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
            $this->generatePage($file,$variables);
      }
      
      function insererCivilite(){
            $civilite=new Civilite();
            $disabled="";
            $this->generateFormCivilite($civilite,$disabled);
      }      
        
      function modifierCivilite($id){
            $cm=new CiviliteManager(); 
            $civilite=$cm->findById($id);
            $disabled="";
            $this->generateFormCivilite($civilite,$disabled);
      }  

      function afficherCivilite($id){
            $cm=new CiviliteManager();
            $civilite=$cm->findById($id);
            $disabled="disabled";
            $this->generateFormCivilite($civilite,$disabled);
      }

      function supprimerCivilite($id){
            $cm=new CiviliteManager();
            $cm->deleteById($id);
            header("location:civilite");
            exit();
      }

      function sauvegarderCivilite($data,$files=[]){
            $cm=new CiviliteManager();
            $connexion=$cm->connexion();
            extract($data);
            $id=(int) $id;
            if($id!=0){
                $cm->update($data,$id);
            }else{
                $cm->insert($data);
            }
            header("location:civilite");
      }

      function chercherCivilite($mot){
            $cm=new CiviliteManager();
            $columnLikes=['libelle'];
            $civilites=$cm->search($columnLikes,$mot);
            $variables=[
                'lignes'=>$civilites,
                'nbre'=>count($civilites),
            ];
            $file="View/civilite/listCivilite.html.php";
            $this->generatePage($file,$variables);        
      }      
        
      function generateFormCivilite($civilite,$disabled){
            $variables=[
                  'id'=>$civilite->getId(),
                  'libelle'=>$civilite->getLibelle(),
                  'disabled'=>$disabled,
            ];
            $file="View/civilite/formCivilite.html.php";
            $this->generatePage($file,$variables);

      }  
}