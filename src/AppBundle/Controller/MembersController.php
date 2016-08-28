<?php
/**
 * Created by PhpStorm.
 * User: jakomo
 * Date: 28.8.2016 г.
 * Time: 18:04
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MembersController
{
    /**
     * @Route("/members")
     */
    public function showAction()
    {
        return new Response('Memebers show action');
    }
}