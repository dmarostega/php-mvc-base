<?php

require_once APP."Model.php";

class TypeuserModel extends Model{

    public function insert(){
        $strInsert = "INSERT INTO ".$this->table." (name, description, created_at) VALUES (:name, :description, :created_at); ";

        DB::insert($strInsert,array(
                                    $this->name,
                                    $this->description,
                                    date("Y-m-d")
                                ));        
    }
    
    public function update($id){
         $strUpdate = "UPDATE ".$this->table." SET name = :name, description = :description, updated_at = :updated_at WHERE id = :id; ";

        DB::update($strUpdate,array(
                        $this->name,
                        $this->description,                        
                        date("Y-m-d"),
                        $id
                    ));
    }
    
    public function delete($id){
        $strUpdate = "DELETE FROM ".$this->table." WHERE id = :id; ";        
        DB::execution($strUpdate,array($id));
    }
}