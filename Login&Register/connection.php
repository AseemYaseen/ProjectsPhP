<?php
class crud{
    public static function conect(){
       try {
        $con= new PDO('mysql:localhost=host; dbname=crud1','root','');
        return $con;
       } catch (PDOException $error1){
        echo 'Something went wrong , it was not possible to connect you to database'.$error1->getMessage();
       }catch (Exception $error2){
        echo 'Generic error'.$error2->getMessage();

       }
    }
    public static function Selectdata(){
        $data=[];
        $p=crud::conect()->prepare('SELECT * FROM regtable1');
        $p->execute();
        $p->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }



}






?>