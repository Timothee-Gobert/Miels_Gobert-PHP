<?php
class CiviliteManager extends Manager{
    public function findAllByCondition($dataCondition = [],$order='',$type = 'obj'){
        return $this->findAllByConditionTable('civilite',$dataCondition,$order,$type);
    }
    public function findOneByCondition($dataCondition = [], $type = 'obj'){
        return $this->findOneByConditionTable('civilite',$dataCondition,$type);
    }
    
    public function search($columnLikes,$mot){
        return $this->searchTable('civilite',$columnLikes,$mot);
    }
    public function update($data,$id){
        $this->updateTable('civilite',$data,$id);
    }
    public function insert($data){
        $this->insertTable('civilite',$data);
    }
    public function getDescribe(){
        $resultat=$this->getDescribeTable('civilite');
        return $resultat;
    }
    // TODO : JE NE COPREND PAS 
    public function findById($id,$type="obj"){
        $resultat=$this->findByIdTable('civilite',$id);
        if($type=="obj"){
            $objet=new Civilite($resultat);
            return $objet;
        }else{
            return $resultat;
        }
    }
    public function deleteById($id){
        $this->deleteByIdTable('civilite',$id);
    }
    public function findAll(){
        $resultat=$this->listTable('civilite');
        return $resultat;
    }
}