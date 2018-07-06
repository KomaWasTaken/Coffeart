<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller

{

    public function index(){
        $number = random_int(0, 100);
        return $this->render('base.html.twig', array(
            'number' => $number,
        ));
    }

}


