<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Role;

class RoleController extends FOSRestController
{
    /**
     *  @Rest\Get("/roles")
     */
    public function getAction()
    {
        $roles = $this->getDoctrine()->getRepository('AppBundle:Role')->findAll();
        if ($roles === null) {
            return new View("No role exists!", Response::HTTP_NOT_FOUND);
        }

        return $roles;
    }
}
