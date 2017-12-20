<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infos
 *
 * @ORM\Table(name="infos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InfosRepository")
 */
class Infos
{
    /**
     * @var int
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
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="CVName", type="string", length=255)
     */
    private $cVName;

    /**
     * @var string
     *
     * @ORM\Column(name="CVFile", type="string", length=255)
     */
    private $cVFile;

    /**
     * @var string
     *
     * @ORM\Column(name="LinkedinUrl", type="string", length=255)
     */
    private $linkedinUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeWarsUrl", type="string", length=255, nullable=true)
     */
    private $codeWarsUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="GithubUrl", type="string", length=255)
     */
    private $githubUrl;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Infos
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
     * Set surname
     *
     * @param string $surname
     *
     * @return Infos
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set cVName
     *
     * @param string $cVName
     *
     * @return Infos
     */
    public function setCVName($cVName)
    {
        $this->cVName = $cVName;

        return $this;
    }

    /**
     * Get cVName
     *
     * @return string
     */
    public function getCVName()
    {
        return $this->cVName;
    }

    /**
     * Set cVFile
     *
     * @param string $cVFile
     *
     * @return Infos
     */
    public function setCVFile($cVFile)
    {
        $this->cVFile = $cVFile;

        return $this;
    }

    /**
     * Get cVFile
     *
     * @return string
     */
    public function getCVFile()
    {
        return $this->cVFile;
    }

    /**
     * Set linkedinUrl
     *
     * @param string $linkedinUrl
     *
     * @return Infos
     */
    public function setLinkedinUrl($linkedinUrl)
    {
        $this->linkedinUrl = $linkedinUrl;

        return $this;
    }

    /**
     * Get linkedinUrl
     *
     * @return string
     */
    public function getLinkedinUrl()
    {
        return $this->linkedinUrl;
    }

    /**
     * Set codeWarsUrl
     *
     * @param string $codeWarsUrl
     *
     * @return Infos
     */
    public function setCodeWarsUrl($codeWarsUrl)
    {
        $this->codeWarsUrl = $codeWarsUrl;

        return $this;
    }

    /**
     * Get codeWarsUrl
     *
     * @return string
     */
    public function getCodeWarsUrl()
    {
        return $this->codeWarsUrl;
    }

    /**
     * Set githubUrl
     *
     * @param string $githubUrl
     *
     * @return Infos
     */
    public function setGithubUrl($githubUrl)
    {
        $this->githubUrl = $githubUrl;

        return $this;
    }

    /**
     * Get githubUrl
     *
     * @return string
     */
    public function getGithubUrl()
    {
        return $this->githubUrl;
    }
}
