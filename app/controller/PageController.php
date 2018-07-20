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
            $research = $_GET['research'];
            $results = Home::getResult($research);
            $template = $this->twig->loadTemplate('/Page/produit.html.twig');
            echo $template->render(array(
                "result" => $result,   
                "results" => $results,   
        ));
    }

    public function tricafe(){

        $sweetness = Home::getBySweetness();
        $acid = Home::getByAcid();
        $balance = Home::getByBalance();
        $research = $_GET['research'];
        $results = Home::getResult($research);

        $template = $this->twig->loadTemplate('/Page/tricafe.html.twig');
        echo $template->render(array(
            'sweetness' => $sweetness,
            'acid' => $acid,
            'balance' => $balance,
            "results" => $results,
        
        )); 
        
    }

    public function resultat(){

        $research = $_GET['research'];
        $results = Home::getResult($research);

        $template = $this->twig->loadTemplate('/Page/resultat.html.twig');
        echo $template->render(array(
            "results" => $results,
            "research" => $research,
        
        )); 
        
    }

    public function mentionslegales(){

       ;

        $template = $this->twig->loadTemplate('/Page/mentionslegales.html.twig');
        echo $template->render(array(
        
        )); 
        
    }
}