<?php
/**
 * Created by PhpStorm.
 * User: jakomo
 * Date: 28.8.2016 г.
 * Time: 18:04
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MembersController extends Controller
{
    /**
     * @Route("/members/{memberName}")
     */
    public function showAction($memberName)
    {
        return $this->render('members/show.html.twig',
            [
                'name'  =>$memberName
            ]);
    }
}