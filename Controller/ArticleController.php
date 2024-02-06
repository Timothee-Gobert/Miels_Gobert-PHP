<?php
class ArticleController extends MyFct{
      function __construct(){
            $action ='list';
            extract($_GET);
            switch ($action){
                  case 'list': 
                        $this->listerArticle();
                        break;
                  case 'insert':
                        $this->insererArticle();
                        break;
                  case 'update':
                        $this->modifierArticle($id);
                        break;
                  case 'show':
                        $this->afficherArticle($id);
                        break;
                  case 'delete':
                        $this->supprimerArticle($id);
                        break;
                  case 'save' :
                        $this->sauvegarderArticle($_POST);
                        break;
                  case 'search':
                        $this->chercherArticle($mot);
                        break;
                  case 'DescArticle':
                        $this->descriptionArticle('article');
                        break;
            }
      }
      function descriptionArticle($table){
            $am=new ArticleManager();
            $descArt=$am->getDescribe($table);
            $lignes=[];
            foreach($descArt as $value){
                  $article=new ArticleDesc($value);
                  $lignes[]=[
                        'Field'=>$article->getField(),
                        'Type'=>$article->getType(),
                        'Null'=>$article->getNull(),
                        'Key'=>$article->getKey(),
                        'Default'=>$article->getDefault(),
                        'Extra'=>$article->getExtra(),
                  ];
            }
            $variables=[
                  'lignes'=>$lignes,
            ]; 
            $file="View/article/listDescArticle.html.php";
            $this->generatePage($file,$variables);
      }

      function listerArticle(){
            $am=new ArticleManager();
            $articles=$am->findAll();
            $lignes=[];
            foreach($articles as $value){
                //$dateCreation=$value['dateCreation']
                $article=new Article($value);
                $lignes[]=[
                    'id'=>$article->getId(),
                    'referenceArticle'=>$article->getReferenceArticle(),
                    'typeArticle'=>$article->getTypeArticle(),
                    'preposition'=>$article->getPreposition(),
                    'designation'=>$article->getDesignation(),                   
                ];
            }
            $variables=[
                'lignes'=>$lignes,
                'nbre'=>count($lignes),
            ];
            //------------Evoi page-------------*/
            $file="View/article/listArticle.html.php";
            // printr($variables);die("die ac 62");
            $this->generatePage($file,$variables);
      }
      
      function insererArticle(){
            //-----Article---
            $article=new Article();  // Créer un article à vide
            $disabled="";
            /*------Creation de la page FormArticle-----*/
            $this->generateFormArticle($article,$disabled);
      }      
        
      function modifierArticle($id){
            $um=new ArticleManager(); 
            $article=$um->findById($id);
            $disabled="";
            $this->generateFormArticle($article,$disabled);
      }  

      function afficherArticle($id){
            $am=new ArticleManager();
            $article=$am->findById($id);
            $disabled="disabled";
            $this->generateFormArticle($article,$disabled);
      }

      function supprimerArticle($id){
            $um=new ArticleManager();
            $um->deleteById($id);
            header("location:article");
            exit();
      }

      function sauvegarderArticle($data){
            $am=new ArticleManager();
            $connexion=$am->connexion();
            extract($data);
            $id=(int) $id;
            if($id!=0){
                $am->update($data,$id);
            }else{
                $am->insert($data);
            }
            header("location:article");
      }

      function chercherArticle($mot){
            $um=new ArticleManager();
            $columnLikes=['designation'];
            $articles=$um->search($columnLikes,$mot);
            $variables=[
                'lignes'=>$articles,
                'nbre'=>count($articles),
            ];
            $file="View/article/listArticle.html.php";
            $this->generatePage($file,$variables);        
      }      

      function generateFormArticle($article,$disabled){
            $am=new ArticleManager;
            $variables=[
                  'id'=>$article->getId(),
                  'referenceArticle'=>$article->getReferenceArticle(),
                  'typeArticle'=>$article->getTypeArticle(),
                  'preposition'=>$article->getPreposition(),     
                  'designation'=>$article->getDesignation(),     
                  'disabled'=>$disabled,
            ];
            //----Ouverture de la page
            $file="View/article/formArticle.html.php";
            $this->generatePage($file,$variables);

      }  
}