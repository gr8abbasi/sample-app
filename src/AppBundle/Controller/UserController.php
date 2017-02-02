<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\User;

class UserController extends FOSRestController
{
    /**
     *  @Route("/user")
     *  @Method("GET")
     */
    public function getAction()
    {
        return $this->getDoctrine()->getRepository('AppBundle:User')->find('1');
        // $restResult = $this->getDoctrine()->getRepository('AppBundle:User');
        // if ($restResult === null) {
        //     return new View("No user exists!", Response::HTTP_NOT_FOUND);
        // }
        // var_dump($restResult);exit;
        // return $restResult;
    }
}
