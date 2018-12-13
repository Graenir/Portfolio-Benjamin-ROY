<?php
/**
 * Created by PhpStorm.
 * User: RoyBe
 * Date: 13/12/2018
 * Time: 17:22
 */

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Contact extends AbstractController
{
    /**
     * @Route("contact")
     */
    public function show()

    {
        $title = "Contact";

        $titleHeader = "Contact || Benjamin ROY";

        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];
        return $this->render('contact/show.html.twig', [
            'comments' => $comments,
            'title' => $title,
            'titleHeader' => $titleHeader,
        ]);
    }
}