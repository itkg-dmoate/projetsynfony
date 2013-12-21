<?php

namespace David\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
  public function indexAction()
  {
      echo 'tata-branch';
      $articles = array(
      array(
        'titre'   => 'Mon weekend a Phi Phi Island !',
        'id'      => 1,
        'auteur'  => 'winzou',
        'contenu' => 'Ce weekend était trop bien. Blabla…',
        'date'    => new \Datetime()),
      array(
        'titre'   => 'Repetition du National Day de Singapour',
        'id'      => 2,
        'auteur' => 'winzou',
        'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
        'date'    => new \Datetime()),
      array(
        'titre'   => 'Chiffre d\'affaire en hausse',
        'id'      => 3, 
        'auteur' => 'M@teo21',
        'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
        'date'    => new \Datetime())
    );
      
      return $this->render('DavidBlogBundle:Blog:index.html.twig', array(
          'articles' => $articles
        ));
  }
  
public function voirAction($id)
{
    $articles = array(
      array(
        'titre'   => 'Mon weekend a Phi Phi Island !',
        'id'      => 1,
        'auteur'  => 'winzou',
        'contenu' => 'Ce weekend était trop bien. Blabla…',
        'date'    => new \Datetime()),
      array(
        'titre'   => 'Repetition du National Day de Singapour',
        'id'      => 2,
        'auteur' => 'winzou',
        'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
        'date'    => new \Datetime()),
      array(
        'titre'   => 'Chiffre d\'affaire en hausse',
        'id'      => 3, 
        'auteur' => 'M@teo21',
        'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
        'date'    => new \Datetime())
    );
    $articleOk    = array();
    foreach( $articles as $article){
        if($article['id'] == $id){
            $articleOk    = $article;
            break;
        }        
    }
  // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
  return $this->render('DavidBlogBundle:Blog:voir.html.twig', array(
    'article' => $articleOk
  ));
}
  
  public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
  {
    $liste = array(
      array('id' => 2, 'titre' => 'Mon dernier weekend !'),
      array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
      array('id' => 9, 'titre' => 'Petit test')
    );
    $liste  =   array_slice($liste, 0, $nombre);
    return $this->render('DavidBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }
}
