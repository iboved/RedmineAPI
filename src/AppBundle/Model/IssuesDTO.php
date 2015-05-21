<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation\Type;

class IssuesDTO
{
    /**
     * @var array
     *
     * @Type("ArrayCollection<AppBundle\Entity\Issue>")
     */
    public $issues;
}
