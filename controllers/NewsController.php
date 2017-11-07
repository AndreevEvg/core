<?php

include_once ROOT . '/models/News.php';

class NewsController
{  
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();
        
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);      
        echo $twig->render(
            'news.html.twig', array('newsList' => $newsList)
        );

        return true;
    }
    
    public function actionView($category, $id)
    {
        
        
        return true;
    }
}

