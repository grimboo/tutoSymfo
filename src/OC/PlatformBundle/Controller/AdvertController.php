<?php
/**
 * Created by PhpStorm.
 * User: JJérémy
 * Date: 19/05/2015
 * Time: 15:27
 */

namespace OC\PlatformBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        // On veut avoir l'URL de l'annonce d'id 5.
        $url = $this->get('router')->generate(
            'oc_platform_view', // 1er argument : le nom de la route
            array('id' => 5)    // 2e argument : les valeurs des paramètres
        );
        // $url vaut « /platform/advert/5 »

        return new Response("L'URL de l'annonce d'id 5 est : ".$url);
    }



    public function viewAction($id)
    {
        return new Response("Affichage de l'annonce d'id : ".$id);
    }



    public function viewSlugAction($slug, $year, $format)
    {
        return new Response("On pourrait afficher l'annonce correspondant au slug '".$slug."', crée en ".$year." et au format ".$format.".");
    }
}