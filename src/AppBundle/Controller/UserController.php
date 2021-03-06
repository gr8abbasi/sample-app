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
     *  @Rest\Get("/users")
     */
    public function getAction()
    {
        $users = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
        if ($users === null) {
            return new View("No user exists!", Response::HTTP_NOT_FOUND);
        }

        return $users;
    }
}
