<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Project
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     * @Type("string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Type("string")
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     * @Type("string")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="homepage", type="string", length=255, nullable=true)
     * @Type("string")
     */
    private $homepage;

    /**
     * @var object
     *
     * @ORM\Column(name="parent", type="object", nullable=true)
     * @Type("AppBundle\Entity\Project")
     */
    private $parent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     * @Assert\NotBlank()
     * @Type("boolean")
     */
    private $status;

    /**
     * @var CustomField[]
     *
     * @ORM\Column(name="custom_fields", type="array", nullable=true)
     * @Type("ArrayCollection<AppBundle\Entity\CustomField>")
     */
    private $customFields;

    /**
     * @var Tracker[]
     *
     * @ORM\Column(name="trackers", type="array", nullable=true)
     * @Type("ArrayCollection<AppBundle\Entity\Tracker>")
     */
    private $trackers;

    /**
     * @var array
     *
     * @ORM\Column(name="issue_categories", type="array", nullable=true)
     * @Type("array")
     */
    private $issueCategories;

    /**
     * @var array
     *
     * @ORM\Column(name="enabled_modules", type="array", nullable=true)
     * @Type("array")
     */
    private $enabledModules;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return Project
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Project
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
     * Set homepage
     *
     * @param string $homepage
     * @return Project
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * Get homepage
     *
     * @return string 
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * Set parent
     *
     * @param \stdClass $parent
     * @return Project
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \stdClass 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Project
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set customFields
     *
     * @param array $customFields
     * @return Project
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * Get customFields
     *
     * @return array 
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * Set trackers
     *
     * @param array $trackers
     * @return Project
     */
    public function setTrackers($trackers)
    {
        $this->trackers = $trackers;

        return $this;
    }

    /**
     * Get trackers
     *
     * @return array 
     */
    public function getTrackers()
    {
        return $this->trackers;
    }

    /**
     * Set issueCategories
     *
     * @param array $issueCategories
     * @return Project
     */
    public function setIssueCategories($issueCategories)
    {
        $this->issueCategories = $issueCategories;

        return $this;
    }

    /**
     * Get issueCategories
     *
     * @return array 
     */
    public function getIssueCategories()
    {
        return $this->issueCategories;
    }

    /**
     * Set enabledModules
     *
     * @param array $enabledModules
     * @return Project
     */
    public function setEnabledModules($enabledModules)
    {
        $this->enabledModules = $enabledModules;

        return $this;
    }

    /**
     * Get enabledModules
     *
     * @return array 
     */
    public function getEnabledModules()
    {
        return $this->enabledModules;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Project
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
     * @return Project
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
}
