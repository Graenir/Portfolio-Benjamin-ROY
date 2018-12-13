<?php
/**
 * Created by PhpStorm.
 * User: RoyBe
 * Date: 13/12/2018
 * Time: 18:41
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Index extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('accueil/accueil.html.twig');
    }
}