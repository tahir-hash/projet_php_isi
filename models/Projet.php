<?php

namespace App\Model;

use App\Core\Model;
use DateTime;

class Projet extends Model
{
    //Attributs Intances =>  
    private int $id;
    private string $code;
    private string $nom;
    private string $description;
    private int $budget;
    private   $date_debut;
    private  $date_fin;
    private bool $statut;


    public function __construct(?string $code, ?string $nom,?string $description,int $budget,  $date_debut,  $date_fin)
    {
        $this->code=$code;
        $this->nom=$nom;
        $this->description=$description;
        $this->budget=$budget;
        $this->date_debut=$date_debut;
        $this->date_fin=$date_fin;
        $this->statut=true;
    }

    public static function table()
    {
        return parent::$table = "projet";
    }

    public static function findAll(): array
    {
        $sql = "select * from " . self::table() . " order by id desc";
        return parent::findBy($sql);
    }

    public function insert(): int
    {
        $db = self::database();
        $db->connexionBD();
        $sql = "INSERT INTO " . self::table() . " (`code`,`nom`,`description`,`budget`,`date_debut`,`date_fin`,`statut`) VALUES (?,?,?,?,?,?,?);";
        $result =  $db->executeUpdate($sql, [$this->code, $this->nom, $this->description, $this->budget, $this->date_debut, $this->date_fin,$this->statut]);
        $db->closeConnexion();
        return $result;
    }


    public function update($id): int
    {
        $db = self::database();
        $db->connexionBD();
        $sql = "UPDATE"." ". self::table() ." SET `code` = ?, `nom` = ?, `description` = ?,`budget` = ?,`date_debut` = ?,`date_fin` = ?WHERE `id` = ?";
        $result =  $db->executeUpdate($sql, [$this->code, $this->nom, $this->description, $this->budget, $this->date_debut, $this->date_fin,$id]);
        $db->closeConnexion();
        return $result;
    }
    
}
