<?php

namespace URMS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity
 */
class Module
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Coordinator", type="string", length=45, nullable=false)
     */
    private $coordinator;

    /**
     * @var string
     *
     * @ORM\Column(name="Semester_Batch", type="string", length=45, nullable=false)
     */
    private $semesterBatch;

    /**
     * @var string
     *
     * @ORM\Column(name="Module_Id", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moduleId;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Module
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
     * Set coordinator
     *
     * @param string $coordinator
     *
     * @return Module
     */
    public function setCoordinator($coordinator)
    {
        $this->coordinator = $coordinator;

        return $this;
    }

    /**
     * Get coordinator
     *
     * @return string
     */
    public function getCoordinator()
    {
        return $this->coordinator;
    }

    /**
     * Set semesterBatch
     *
     * @param string $semesterBatch
     *
     * @return Module
     */
    public function setSemesterBatch($semesterBatch)
    {
        $this->semesterBatch = $semesterBatch;

        return $this;
    }

    /**
     * Get semesterBatch
     *
     * @return string
     */
    public function getSemesterBatch()
    {
        return $this->semesterBatch;
    }

    /**
     * Get moduleId
     *
     * @return string
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }
}
