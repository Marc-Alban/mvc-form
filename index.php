<?php

declare(strict_types=1);

// On génère une constante contenant le chemin vers la racine publique du projet
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
// On inclut les fichiers du modèle et du contrôleur principaux
require_once(ROOT . 'app/Model.php');
require_once(ROOT . 'app/Controller.php');

// Si au moins 1 paramètre existe
if (isset($_GET['p'])  && $_GET['p'] != "") {
    // On effectue une action en fonction de la valeur de 'p'
    switch ($_GET['p']) {
        // Dans chaque cas, on définit les variables de session pour le site et l'adresse IP, puis on appelle le contrôleur de formulaire
        case 'credigo':
            $_SESSION['website'] = 'Credigo';
            $_SESSION['Adresse_Ip'] = '217.24.81.100';
            require_once(ROOT . 'controllers/Form.php');
            $controller = new Form();
            $controller->index();
            break;
        case 'solutis':
            $_SESSION['website'] = 'Solutis';
            $_SESSION['Adresse_Ip'] = '185.34.32.132';
            require_once(ROOT . 'controllers/Form.php');
            $controller = new Form();
            $controller->index();
            break;
        case 'responis':
            $_SESSION['website'] = 'Responis';
            $_SESSION['Adresse_Ip'] = '91.194.60.92';
            require_once(ROOT . 'controllers/Form.php');
            $controller = new Form();
            $controller->index();
            break;
        case 'conso':
            $_SESSION['website'] = 'conso.finapole';
            $_SESSION['Adresse_Ip'] = '185.34.32.73';
            require_once(ROOT . 'controllers/Form.php');
            $controller = new Form();
            $controller->index();
            break;
        case 'localhost':
            $_SESSION['website'] = 'localhost';
            $_SESSION['Adresse_Ip'] = 'localhost';
            require_once(ROOT . 'controllers/Form.php');
            $controller = new Form();
            $controller->index();
            break;
        default:
            // Si 'p' ne correspond à aucune des valeurs précédentes, on définit 'website' avec la valeur de 'p' et 'Adresse_Ip' sans IP
            $_SESSION['website'] = $_GET['p'];
            $_SESSION['Adresse_Ip'] = 'sans ip';
            require_once(ROOT . 'controllers/Form.php');
            $controller = new Form();
            $controller->index();
            break;
    }
} else {
    // Si aucun paramètre n'est défini, on envoie un code de réponse HTTP 404 et un message d'erreur
    http_response_code(404);
    echo "La page recherchée n'existe pas";
}
?>
