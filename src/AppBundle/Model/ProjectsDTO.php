<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation\Type;

class ProjectsDTO
{
    /**
     * @var array
     *
     * @Type("ArrayCollection<AppBundle\Entity\Project>")
     */
    public $projects;
}
