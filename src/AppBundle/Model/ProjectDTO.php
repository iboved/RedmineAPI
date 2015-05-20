<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation\Type;

class ProjectDTO
{
    /**
     * @var object
     *
     * @Type("AppBundle\Entity\Project")
     */
    public $project;
}
