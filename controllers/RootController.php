<?php

class RootController
{  
    public function actionIndex()
    {
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);		
        echo $twig->render(
        	'index.html.twig', array('name' => 'Hello Root!')
        );   
        
        return true;
    }
}

