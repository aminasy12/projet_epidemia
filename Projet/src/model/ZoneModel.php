<?php
require_once("model/Db.php");
class ZoneModel
{
    private $nomZone;
    private $NbrePersSympt;
    private $NbrePersPositi;

    public function getNbrePersSympt(): string
    {
        return $this->NbrePersSympt;
    }
    public function setNbrePersSympt($NbrePersSympt): void
    {
        $this->NbrePersSympt = $NbrePersSympt;
    }
    public function getNbrePersPositi(): string
    {
        return $this->NbrePersPosiiti;
    }
    public function setNbrePersPositi($NbrePersPositi): void
    {
        $this->NbrePersPositi= $NbrePersPositi;
    }
    public function getNomZone(): string
    {
        return $this->getNomZone;
    }
    public function setNomZone($nomZone): void
    {
        $this->nomZone = $NomZone;
    }
    public function getAllZone()
    {
        $db = new Db();
        $db = $db->connectDB();
        $sql = "SELECT * FROM zone";
        return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addPays($nomPays, $NbrePersSympt, $NbrePersPositi)
    {
        $db = new Db();
        $db = $db->connectDB();
        $zone = new ZoneModel();
        $zone->setNomZone($nomZone);
        $zone>setNbrePersPositi($NbrePersPositi);
        $zone>setNbrePersSympt($NbrePersSympt);
        $sql = "INSERT INTO `zone` (`IdZone`, `NomZone`, `NbrePersSympt`, `NbrePersPositi`) VALUES (NULL, '" . $pays->getNomPays() . "', " . $pays->getPopulation() . ")";
        return $db->exec($sql);
    }
    public function updateZone($idPays, $nomPays,  $NbrePersSympt, $NbrePersPositi)
    {
        $db = new Db();
        $db = $db->connectDB();
        $sql = "UPDATE zone SET NomZone='" . $nomPays . "', NbrePersSympt=" . $NbrePersSympt . "', NbrePersPositi=" . $NbrePersPositi ." WHERE IdZone=" . $idZone;
        return $db->exec($sql);
    }
    public function deleteZone($idZone)
    {
        $db = new Db();
        $db = $db->connectDB();
        $sql = "DELETE FROM zone WHERE IdZone=" . $idZone;
        return $db->exec($sql);
    }
    public function getPaysById($id)
    {
        $db = new Db();
        $db = $db->connectDB();
        $sql = "SELECT * FROM zone WHERE IdZone = $id";
        return $db->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
}
