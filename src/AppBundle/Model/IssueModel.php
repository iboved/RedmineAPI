<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation\Type;

class IssueModel
{
    /**
     * @var object
     * @Type("AppBundle\Entity\Issue")
     */
    protected $issue;

    /**
     * @return object
     */
    public function getIsuue()
    {
        return $this->issue;
    }

    /**
     * @param \AppBundle\Entity\Issue $issue
     */
    public function setIssue(\AppBundle\Entity\Issue $issue)
    {
        $this->issue = $issue;
    }
}
