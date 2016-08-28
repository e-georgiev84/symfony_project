<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Members;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MyController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $request = Request::createFromGlobals();
        // the URI being requested (e.g. /about) minus any query parameters
//        echo '<pre>';
//         print_r($request->query->get('path', 'default value if path does not exist' ));
//        echo '</pre>';
//
//        echo '<pre>';
//        print_r($request->server->get('HTTP_HOST'));
//        echo '</pre>';
//
//        echo '<pre>';
//        print_r($request->getLanguages());
//        echo '</pre>';
//
//        echo '<pre>';
//        print_r($request->getMethod());
//        echo '</pre>';


//        $response = new Response();
//        $response->setContent('<html><body><h1>Hello world!</h1></body></html>');
//        $response->setStatusCode(Response::HTTP_OK);
//        $response->headers->set('Content-Type', 'text/html');
//

//        $em = $this->getDoctrine()->getManager();
//        $member = $em->getRepository('AppBundle:Members')->find(1);
//        $id = $member->getUserName();
//        echo '<pre>';
//        print_r($id);
//        echo '</pre>';

        // replace this example code with whatever you need
        return $this->render('default/test.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
//        return new Response('<h1>TEST!</h1>');
    }
}
