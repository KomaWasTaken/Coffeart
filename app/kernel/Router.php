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
            if($parts[0] == "produit" && count($parts) == 2) {//route vers fiche du produit
                $result["controller"] = "Page";
                $result["action"] = "produit";
                $result["params"]["id"] = $parts[1];            
            }
            elseif($parts[0] == "resultat" && count($parts) == 2) {//route vers fiche de recherche produit
                $result["controller"] = "Page";
                $result["action"] = "resultat";
                $result["params"]["id"] = $parts[1];          
            }
        }
     return $result;
    }  
}
