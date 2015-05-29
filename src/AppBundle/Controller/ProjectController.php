<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use AppBundle\Model\ProjectsDTO;

class ProjectController extends Controller
{
    /**
     * Returns a collection of projects
     *
     * @QueryParam(name="offset", requirements="\d+", default="0", description="Skip this number of projects in response")
     * @QueryParam(name="limit", requirements="\d+", default="25", description="Number of projects per page")
     * @QueryParam(name="include", description="Fetch associated data")
     *
     * @Route("/projects")
     * @Method({"GET"})
     *
     * @param ParamFetcher $paramFetcher
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAllAction(ParamFetcher $paramFetcher)
    {
        $client = $this->get('redmine.client');
        $command = $client->getCommand('GetProjects', [
            'offset' => $paramFetcher->get('offset'),
            'limit' => $paramFetcher->get('limit'),
            'include' => $paramFetcher->get('include')
        ]);

        /** @var ProjectsDTO $projectsDTO */
        $projectsDTO = $client->execute($command);

        return $this->render('project/get_all.html.twig', [
            'projects' => $projectsDTO->projects
        ]);
    }
}
