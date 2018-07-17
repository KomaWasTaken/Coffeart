<?php

class PageController extends Controller {

    public function display(){

        $template = $this->twig->loadTemplate('/Page/home.html.twig');
        echo $template->render(array(
        
        )); 
        
    }

    public function produit(){

            $id = $this->route["params"]["id"];
            $result = Home::getProduit($id);
            $template = $this->twig->loadTemplate('/Page/produit.html.twig');
            echo $template->render(array(
                "result" => $result,      
        ));
    }

    public function resultat(){
        $id = $this->route["params"]["id"];
        $recherche = Home::getResultat($id);
        $template = $this->twig->loadTemplate('/Page/resultat.html.twig');        
        echo $template->render(array(
            "result" => $recherche,      
        ));
        echo ('Oui bonjour');        
    }



}