<?php
declare(strict_types=1);


abstract class Controller{
    /**
     * Afficher une vue
     *
     * @param string $fichier
     * @param array $datas
     * @return void
     */
    public function render(string $fichier, array $datas = []){
    
        extract($datas);


        // On démarre le buffer de sortie
        ob_start();

        // On génère la vue
        require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$fichier.'.php');

        // On stocke le contenu dans $content
        $content = ob_get_clean();

        // On fabrique le "template"
        require_once(ROOT.'views/layout/default.php');
    }

    /**
     * Permet de charger un modèle
     *
     * @param string $model
     * @return void
     */
    public function loadModel(string $model){
        // On va chercher le fichier correspondant au modèle souhaité
        require_once(ROOT.'models/'.$model.'.php');
        // On crée une instance de ce modèle. Ainsi "Article" sera accessible par $this->Article
        $this->$model = new $model();
    }
}