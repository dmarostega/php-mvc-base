<?php

require_once APP."Model.php";

class SysuserModel extends Model{

    public function insert(){

        $strInsert = "INSERT INTO ".$this->table." (name,username,password, idtypeuser) VALUES (:name, :username, :password, :idtypeuser); ";

        DB::insert($strInsert,array(
            $this->name,
            $this->username,
            $this->password,
            $this->idtypeuser
        ));        
    }
    
    public function update($id){
         $strUpdate = "UPDATE ".$this->table." SET name = :name, username = :username, password = :password, idtypeuser = :idtypeuser, updated_at = :updated WHERE id = :id; ";

        DB::update($strUpdate,array(
                        $this->name,
                        $this->username,
                        $this->password,
                        $this->idtypeuser,
                        date("Y-m-d"),
                        $id
                    ));
    }
    
    public function delete($id){
        $strUpdate = "DELETE FROM ".$this->table." WHERE id = :id; ";        
        DB::execution($strUpdate,array($id));
    }
}