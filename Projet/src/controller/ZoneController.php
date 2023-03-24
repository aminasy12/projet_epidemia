<?php
require_once("model/ZoneModel.php");


class PaysController
{

    public function index()
    {
        // Appel au modèle pour obtenir des données
        $model = new ZoneModel();
        $listezone = $model->getAllzone();
       

        // Affichage de la vue
        include 'view/zone/liste.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Récupération des données saisies dans le formulaire
            $nomZone = $_POST['nomZone'];
            $NbrePersSympt = $_POST['NbrePersSympt'];
            $NbrePersPositi = $_POST['NbrePersPositi'];

            // Validation des données
            // ...

            // Ajout du pays dans la base de données
            $ZoneModel = new ZoneModel();
            if ($zoneModel->addZone($nomZone, $NbrePersSympt, $NbrePersPositi ) != false) {
                header('Location: index.php');
            }

            // Redirection vers la page de liste des pays
            exit;
        } else {
            // Affichage du formulaire d'ajout de pays
            include 'view/Zone/ajout.php';
        }
    }

    public function edit()
    {
        // Récupération de l'ID du pays à modifier
        $idZone = $_GET['id'];

        // Récupération des détails du pays à modifier
        $zoneModel = new ZoneModel();
        $Zone = $ZoneModel->getZoneById($idZone);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Récupération des données saisies dans le formulaire
            $nomZone = $_POST['nomZone'];
            $NbrePersSympt = $_POST['NbrePersSympt'];
            $NbrePersPositi = $_POST['NbrePersPositi'];

            // Validation des données
            // ...

            // Mise à jour du pays dans la base de données
            $zoneModel = new PaysModel();
            if ($zoneModel->updateZone($idZone, $nomPays, $NbrePersSympt, $NbrePersPositi)) {
                header('Location: index.php');
                exit;
            }
        } else {
            // Affichage du formulaire de modification de pays
            include 'view/zone/modification.php';
        }
    }


    public function delete()
    {
        // Récupération de l'ID du pays à supprimer
        $idZone = $_GET['id'];

        // Suppression du pays dans la base de données
        $zoneModel = new ZoneModel();
        if ($zoneModel->deleteZone($idZone)) {
            header('Location: index.php');
            exit;
        }
    }

}