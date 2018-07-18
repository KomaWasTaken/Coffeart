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
        if($parts[0] == "produit" && count($parts) == 2) {//Route vers la page produit
           $result["controller"] = "Page";
           $result["action"] = "produit";
           $result["params"]["id"] = $parts[1];          
        }
        if($request === 'tricafe'){ // Route vers la page de tri du café
            $result['controller']   = 'Page';
            $result['action']       = 'tricafe';
        }
        if($request === 'resultat'){ // Route vers la page résultat
            $result['controller']   = 'Page';
            $result['action']       = 'resultat';
        }
     }
     return $result;
    }  
}