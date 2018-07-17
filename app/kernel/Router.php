<?php

class Router {

    public static function analyse($request){
        $result = array(
            'controller'    => 'Error',
            'action'        => 'error404',
            'params'        => array()
        );

        if($request === '' || $request === '/'){ // Route vers la page d'accueil
            $result['controller']   = 'Page';
            $result['action']       = 'display';
        } else {
        $parts = explode("/", $request);
        if($parts[0] == "produit" && count($parts) == 2) {//route vers fiche film
           $result["controller"] = "Page";
           $result["action"] = "produit";
           $result["params"]["id"] = $parts[1];
                     
        }
        if($parts[0] == "tricafe") {//route vers fiche film
            $result["controller"] = "Page";
            $result["action"] = "tricafe";
        }
    }
     return $result;
    }  
}
