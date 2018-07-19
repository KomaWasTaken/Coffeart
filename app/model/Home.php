<?php

class Home extends Model {

    public function __construct($i_idMod){
        parent::__construct($i_idMod);
    }

    public function Load(){
        $sql = "select * from transfer_table
                where tra_id = " .$this->getID();
        if($row = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC)){
            $this->setFields($row);
        } else {
            $this->_id = -1;
            $this->setFields(array());
        }
    }

    public function Delete(){
        if(!$this->IsDeletable()){
            return false;
        }

        $sql = "delete from transfer_table
                where tra_id = " .$this->getID();
        $this->db->exec($sql);

        return true;
    }

    public function IsDeletable(){
        return true;
    }

    public static function getBySweetness(){
        $db = Database::getInstance();

            $sql = "SELECT * FROM coffeart
                    ORDER BY cof_sweetness
                    DESC 
                    LIMIT 5
                    ";
        
            $stmt = $db->prepare($sql); 
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();  
            
    }

    public static function getByAcid(){
        $db = Database::getInstance();

            $sql = "SELECT * FROM coffeart
                    ORDER BY cof_acidity
                    DESC 
                    LIMIT 5
                    ";
        
            $stmt = $db->prepare($sql); 
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();  
            
    }
    public static function getByBalance(){
        $db = Database::getInstance();

            $sql = "SELECT * FROM coffeart
                    ORDER BY cof_balance
                    DESC 
                    LIMIT 5
                    ";
        
            $stmt = $db->prepare($sql); 
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();  
            
    }

    public static function getProduit($id){
        $db = Database::getInstance();

            $sql = "SELECT * FROM coffeart
                    WHERE id = :id ";
        
            $stmt = $db->prepare($sql); 
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();  
            
    }

    public static function getResult($research){
        $message ='';
        if (isset($_GET['submitform'])){
            if(!empty($_GET['research']) && $_GET['research'] != ' ') {
                $research = htmlentities($_GET['research']);
                $db = Database::getInstance();

                $sql = "SELECT * FROM coffeart
                        WHERE cof_country_origin
                        LIKE CONCAT('%', :research, '%') 
                        OR cof_color
                        LIKE CONCAT('%', :research, '%')
                        OR cof_variety
                        LIKE CONCAT('%', :research, '%')
                        OR cof_owner
                        LIKE CONCAT('%', :research, '%')
                        
                        
                        ORDER BY RAND()
                        LIMIT 8";
            
                $stmt = $db->prepare($sql); 
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->bindValue(':research', $research, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll();  
            }
            else{
                echo('');
            }
        }           
    }
}