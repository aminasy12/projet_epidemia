<?php
require_once("model/Db.php");
class PaysModel
{
    private $nomPays;
    private $population;

    public function getPopulation(): string
    {
        return $this->population;
    }
    public function setPopulation($population): void
    {
        $this->population = $population;
    }
    public function getNomPays(): string
    {
        return $this->nomPays;
    }
    public function setNomPays($NomPays): void
    {
        $this->nomPays = $NomPays;
    }
    public function getAllPays()
    {
        $db = new Db();
        $db = $db->connectDB();
        $sql = "SELECT * FROM pays";
        return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addPays($nomPays, $population)
    {
        $db = new Db();
        $db = $db->connectDB();
        $pays = new PaysModel();
        $pays->setNomPays($nomPays);
        $pays->setPopulation($population);
        $sql = "INSERT INTO `pays` (`IdPays`, `NomPays`, `Population`) VALUES (NULL, '" . $pays->getNomPays() . "', " . $pays->getPopulation() . ")";
        return $db->exec($sql);
    }
    public function updatePays($idPays, $nomPays, $population)
    {
        $db = new Db();
        $db = $db->connectDB();
        $sql = "UPDATE pays SET NomPays='" . $nomPays . "', Population=" . $population . " WHERE IdPays=" . $idPays;
        return $db->exec($sql);
    }
    public function deletePays($idPays)
    {
        $db = new Db();
        $db = $db->connectDB();
        $sql = "DELETE FROM pays WHERE IdPays=" . $idPays;
        return $db->exec($sql);
    }
    public function getPaysById($id)
    {
        $db = new Db();
        $db = $db->connectDB();
        $sql = "SELECT * FROM pays WHERE IdPays = $id";
        return $db->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
}
