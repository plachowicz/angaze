<?php

namespace Gajdaw\AngazeBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Gajdaw\AngazeBundle\Entity\EmployeeSubject;

/**
 * EmployeeSubject controller.
 *
 * @Route("/employeesubject")
 */
class EmployeeSubjectController extends Controller
{
    /**
     * Lists all EmployeeSubject entities.
     *
     * @Route("/", name="employeesubject")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GajdawAngazeBundle:EmployeeSubject')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a EmployeeSubject entity.
     *
     * @Route("/{id}", name="employeesubject_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GajdawAngazeBundle:EmployeeSubject')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmployeeSubject entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }

}
