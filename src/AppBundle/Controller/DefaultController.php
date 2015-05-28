<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Model\ProjectsDTO;

class DefaultController extends Controller
{
    /**
     * This method render last 25 projects
     *
     * @Route("/")
     * @Method({"GET"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $client = $this->get('redmine.client');
        $command = $client->getCommand('GetProjects');

        /** @var ProjectsDTO $projectsDTO */
        $projectsDTO = $client->execute($command);

        return $this->render('default/index.html.twig', [
            'projects' => $projectsDTO->projects
        ]);
    }
}
