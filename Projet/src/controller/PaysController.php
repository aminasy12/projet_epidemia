<?php
require_once("model/PaysModel.php");

class PaysController
{

    public function index()
    {
        // Appel au modèle pour obtenir des données
        $model = new PaysModel();
        $listepays = $model->getAllpays();

        // Affichage de la vue
        include 'view/pays/liste.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Récupération des données saisies dans le formulaire
            $nomPays = $_POST['nomPays'];
            $population = $_POST['population'];

            // Validation des données
            // ...

            // Ajout du pays dans la base de données
            $paysModel = new PaysModel();
            if ($paysModel->addPays($nomPays, $population) != false) {
                header('Location: index.php');
            }

            // Redirection vers la page de liste des pays
            exit;
        } else {
            // Affichage du formulaire d'ajout de pays
            include 'view/pays/ajout.php';
        }
    }

    public function edit()
    {
        // Récupération de l'ID du pays à modifier
        $idPays = $_GET['id'];

        // Récupération des détails du pays à modifier
        $paysModel = new PaysModel();
        $pays = $paysModel->getPaysById($idPays);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Récupération des données saisies dans le formulaire
            $nomPays = $_POST['nomPays'];
            $population = $_POST['population'];

            // Validation des données
            // ...

            // Mise à jour du pays dans la base de données
            $paysModel = new PaysModel();
            if ($paysModel->updatePays($idPays, $nomPays, $population)) {
                header('Location: index.php');
                exit;
            }
        } else {
            // Affichage du formulaire de modification de pays
            include 'view/pays/modification.php';
        }
    }


    public function delete()
    {
        // Récupération de l'ID du pays à supprimer
        $idPays = $_GET['id'];

        // Suppression du pays dans la base de données
        $paysModel = new PaysModel();
        if ($paysModel->deletePays($idPays)) {
            header('Location: index.php');
            exit;
        }
    }

}