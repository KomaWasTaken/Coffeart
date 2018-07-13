<?php

class PageController extends Controller {

    public function display(){

        $sweetness = Home::getBySweetness();
        $acid = Home::getByAcid();
        $balance = Home::getByBalance();


        $template = $this->twig->loadTemplate('/Page/home.html.twig');
        echo $template->render(array(
            'sweetness' => $sweetness,
            'acid' => $acid,
            'balance' => $balance,
        
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

    public function tricafe(){

        $sweetness = Home::getBySweetness();
        $acid = Home::getByAcid();
        $balance = Home::getByBalance();


        $template = $this->twig->loadTemplate('/Page/tricafe.html.twig');
        echo $template->render(array(
            'sweetness' => $sweetness,
            'acid' => $acid,
            'balance' => $balance,
        
        )); 
        
    }


}