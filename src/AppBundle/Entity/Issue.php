<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;

/**
 * Issue
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Issue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var object
     *
     * @ORM\Column(name="project", type="object")
     * @Type("AppBundle\Entity\Project")
     */
    private $project;

    /**
     * @var object
     *
     * @ORM\Column(name="tracker", type="object")
     * @Type("AppBundle\Entity\Tracker")
     */
    private $tracker;

    /**
     * @var object
     *
     * @ORM\Column(name="status", type="object")
     * @Type("AppBundle\Entity\IssueStatus")
     */
    private $status;

    /**
     * @var object
     *
     * @ORM\Column(name="priority", type="object")
     * @Type("AppBundle\Entity\IssuePriority")
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     * @Type("string")
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Type("string")
     */
    private $description;

    /**
     * @ORM\Column(name="start_date", type="datetime")
     * @Type("DateTime<'Y-m-d'>")
     */
    private $startDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="done_ratio", type="integer")
     * @Type("integer")
     */
    private $doneRatio;

    /**
     * @var float
     *
     * @ORM\Column(name="estimated_hours", type="float")
     * @Type("float")
     */
    private $estimatedHours;

    /**
     * @var float
     *
     * @ORM\Column(name="spent_hours", type="float")
     * @Type("float")
     */
    private $spentHours;

    /**
     * @ORM\Column(name="created_on", type="datetime")
     * @Type("DateTime")
     */
    private $createdOn;

    /**
     * @ORM\Column(name="updated_on", type="datetime")
     * @Type("DateTime")
     */
    private $updatedOn;

    /**
     * @ORM\Column(name="closed_on", type="datetime")
     * @Type("DateTime")
     */
    private $closedOn;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set project
     *
     * @param Project $project
     * @return Issue
     */
    public function setProject(Project $project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set tracker
     *
     * @param Tracker $tracker
     * @return Issue
     */
    public function setTracker(Tracker $tracker)
    {
        $this->tracker = $tracker;

        return $this;
    }

    /**
     * Get tracker
     *
     * @return Tracker
     */
    public function getTracker()
    {
        return $this->tracker;
    }

    /**
     * Set status
     *
     * @param IssueStatus $status
     * @return Issue
     */
    public function setStatus(IssueStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return IssueStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set priority
     *
     * @param IssuePriority $priority
     * @return Issue
     */
    public function setPriority(IssuePriority $priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return IssuePriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Issue
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Issue
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Issue
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set doneRatio
     *
     * @param integer $doneRatio
     * @return Issue
     */
    public function setDoneRatio($doneRatio)
    {
        $this->doneRatio = $doneRatio;

        return $this;
    }

    /**
     * Get doneRatio
     *
     * @return integer 
     */
    public function getDoneRatio()
    {
        return $this->doneRatio;
    }

    /**
     * Set estimatedHours
     *
     * @param float $estimatedHours
     * @return Issue
     */
    public function setEstimatedHours($estimatedHours)
    {
        $this->estimatedHours = $estimatedHours;

        return $this;
    }

    /**
     * Get estimatedHours
     *
     * @return float 
     */
    public function getEstimatedHours()
    {
        return $this->estimatedHours;
    }

    /**
     * Set spentHours
     *
     * @param float $spentHours
     * @return Issue
     */
    public function setSpentHours($spentHours)
    {
        $this->spentHours = $spentHours;

        return $this;
    }

    /**
     * Get spentHours
     *
     * @return float 
     */
    public function getSpentHours()
    {
        return $this->spentHours;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Issue
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set updatedOn
     *
     * @param \DateTime $updatedOn
     * @return Issue
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    /**
     * Get updatedOn
     *
     * @return \DateTime 
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * Set closedOn
     *
     * @param \DateTime $closedOn
     * @return Issue
     */
    public function setClosedOn($closedOn)
    {
        $this->closedOn = $closedOn;

        return $this;
    }

    /**
     * Get closedOn
     *
     * @return \DateTime 
     */
    public function getClosedOn()
    {
        return $this->closedOn;
    }
}
