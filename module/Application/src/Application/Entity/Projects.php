<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projects
 *
 * @ORM\Table(name="projects", uniqueConstraints={@ORM\UniqueConstraint(name="unique_id_project", columns={"id_project"})})
 * @ORM\Entity
 */
class Projects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_project", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProject;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="string", length=255, nullable=false)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="string", length=255, nullable=false)
     */
    private $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="technologies", type="string", length=255, nullable=true)
     */
    private $technologies;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="jobsTitle", type="string", length=255, nullable=true)
     */
    private $jobstitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="company_id_company", type="integer", nullable=false)
     */
    private $companyIdCompany;



    /**
     * Get idProject
     *
     * @return integer 
     */
    public function getIdProject()
    {
        return $this->idProject;
    }

    /**
     * Set endDate
     *
     * @param string $endDate
     * @return Projects
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return string 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Projects
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Projects
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
     * Set site
     *
     * @param string $site
     * @return Projects
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set startDate
     *
     * @param string $startDate
     * @return Projects
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return string 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Projects
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return Projects
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set technologies
     *
     * @param string $technologies
     * @return Projects
     */
    public function setTechnologies($technologies)
    {
        $this->technologies = $technologies;

        return $this;
    }

    /**
     * Get technologies
     *
     * @return string 
     */
    public function getTechnologies()
    {
        return $this->technologies;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Projects
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
     * Set jobstitle
     *
     * @param string $jobstitle
     * @return Projects
     */
    public function setJobstitle($jobstitle)
    {
        $this->jobstitle = $jobstitle;

        return $this;
    }

    /**
     * Get jobstitle
     *
     * @return string 
     */
    public function getJobstitle()
    {
        return $this->jobstitle;
    }

    /**
     * Set companyIdCompany
     *
     * @param integer $companyIdCompany
     * @return Projects
     */
    public function setCompanyIdCompany($companyIdCompany)
    {
        $this->companyIdCompany = $companyIdCompany;

        return $this;
    }

    /**
     * Get companyIdCompany
     *
     * @return integer 
     */
    public function getCompanyIdCompany()
    {
        return $this->companyIdCompany;
    }
}
