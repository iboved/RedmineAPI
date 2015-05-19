<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation\Type;

class ProjectModel
{
    /**
     * @var object
     * @Type("AppBundle\Entity\Project")
     */
    protected $project;

    /**
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param \AppBundle\Entity\Project $project
     */
    public function setProject(\AppBundle\Entity\Project $project)
    {
        $this->project = $project;
    }
}
