<?php
class UserController extends MyFct{
      function __construct(){
            $action ='list';
            extract($_GET);
            switch ($action){
                  case 'list': 
                        $this->listerUser();
                        break;
                  case 'insert':
                        $this->insererUser();
                        break;
                  case 'update':
                        $this->modifierUser($id);
                        break;
                  case 'show':
                        $this->afficherUser($id);
                        break;
                  case 'delete':
                        $this->supprimerUser($id);
                        break;
                  case 'save' :
                        $this->sauvegarderUser($_POST);
                        break;
                  case 'search':
                        $this->chercherUser($mot);
                        break;
                  case 'login' :
                        if($_POST){ // if($_POST!=[]) ou if(!empty($_POST))
                            $this->valider($_POST);
                        }
                        $this->seConnecter();
                        break;
                  case 'logout' :
                        $this->seDeconnecter();
                        break;
            }
      }

      function listerUser(){
            $um=new UserManager();
            $users=$um->findAll();
            $lignes=[];
            foreach($users as $value){
                //$dateCreation=$value['dateCreation']
                $user=new User($value);
                $lignes[]=[
                    'id'=>$user->getId(),
                    'username'=>$user->getUsername(),
                    'administrateur'=>$user->getAdministrateur(),
                    'nom'=>$user->getNom(),
                    'prenom'=>$user->getPrenom(),
                    'adresse'=>$user->getAdresse(),
                    'ville'=>$user->getVille(),
                    'codePostal'=>$user->getCodePostal(),
                    'email'=>$user->getEmail(),
                    'telephone'=>$user->getTelephone(),
                    'password'=>$user->getPassword(),
                    
                ];
            }
            $variables=[
                'lignes'=>$lignes,
                'nbre'=>count($lignes),
            ];
            //------------Evoi page-------------*/
            $file="View/user/listUser.html.php";
            $this->generatePage($file,$variables);
      }
      
      function insererUser(){
            $user=new User();  // Créer un user à vide
            $disabled="";
            $this->generateFormUser($user,$disabled);
      }      
        
      function modifierUser($id){
            $um=new UserManager(); 
            $user=$um->findById($id);
            $disabled="";
            $this->generateFormUser($user,$disabled);
      }  

      function afficherUser($id){
            $um=new UserManager();
            $user=$um->findById($id);
            $disabled="disabled";
            $this->generateFormUser($user,$disabled);
      }

      function supprimerUser($id){
            $um=new UserManager();
            $um->deleteById($id);
            header("location:user");
            exit();
      }

      function sauvegarderUser($data){
            $um=new UserManager();
            $connexion=$um->connexion();
            $password=$data['password'];
            if($password){ 
                $password=$this->crypter($password);
                $data['password']=$password;
            }else{
                unset($data['password']);
            }
            extract($data);
            $id=(int) $id;
            if($id!=0){ 
                $um->update($data,$id);
            }else{
                $um->insert($data);
            }
            header("location:user");
      }

      function chercherUser($mot){
            $um=new UserManager();
            $columnLikes=['username'];
            $users=$um->search($columnLikes,$mot);
            $variables=[
                'lignes'=>$users,
                'nbre'=>count($users),
            ];
            $file="View/user/listUser.html.php";
            $this->generatePage($file,$variables);        
      }      

      function valider($data){
            $um=new UserManager();
            extract($data);
            $dataCondition=[
                'username'=>$username,
                'password'=>$this->crypter($password)
            ];
            $user=$um->findOneByCondition($dataCondition);
            if(!$user->getUsername()){ 
                $dataCondition=[
                    'email'=>$username,
                    'password'=>$this->crypter($password),
                ];
                $user=$um->findOneByCondition($dataCondition);
            }
            if($user->getUsername()){
                $_SESSION['username']=$user->getUsername();
                $_SESSION['admin']=$user->getAdministrateur();
                header('location:home');
                exit();
            }else{
                $message="<div class='center'>";
                $message.="<p>Identifiant et ou mot de passe incorrect<p>";
                $message.="<img src='Public/img/giphy.gif' class='img-fluid' width=50%>";
                $message.="</div>";

                $variables=[
                    'message'=>$message,
                ];

                $file="View/erreur/erreur.html.php";
                $this->generatePage($file,$variables);
            }
      }
        
      function seConnecter(){
            $file="View/user/formLogin.html.php";
            $this->generatePage($file);
      }

      function seDeconnecter(){
            $_SESSION['admin']=0;
            session_destroy();
            header('location:home');
            exit;
      }

      function generateFormUser($user,$disabled){
            $um=new UserManager;
            $variables=[
                  'id'=>$user->getId(),
                  'username'=>$user->getUsername(),
                  'civilite_id'=>$user->getCiv(['libelle']),
                  'nom'=>$user->getNom(),     
                  'prenom'=>$user->getPrenom(),     
                  'adresse'=>$user->getAdresse(),     
                  'ville'=>$user->getVille(),     
                  'codePostal'=>$user->getCodePostal(),     
                  'email'=>$user->getEmail(),     
                  'telephone'=>$user->getTelephone(),     
                  'password'=>'',
                  'disabled'=>$disabled
            ];
            //----Ouverture de la page
            $file="View/user/formUser.html.php";
            $this->generatePage($file,$variables);

      }  
}