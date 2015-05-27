<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation\Type;

class IssueDTO
{
    /**
     * @var object
     *
     * @Type("AppBundle\Entity\Issue")
     */
    public $issue;
}
