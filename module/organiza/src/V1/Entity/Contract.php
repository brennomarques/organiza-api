<?php

namespace organiza\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table(name="contract", indexes={@ORM\Index(name="cnpj_id", columns={"cnpj_id"})})
 * @ORM\Entity
 */
class Contract
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="files", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $files;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, precision=0, scale=0, nullable=false, unique=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_resgister", type="datetime", precision=0, scale=0, nullable=false, options={"default"="current_timestamp()"}, unique=false)
     */
    private $dtResgister = 'current_timestamp()';

    /**
     * @var \organiza\V1\Entity\Company
     *
     * @ORM\ManyToOne(targetEntity="organiza\V1\Entity\Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cnpj_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $cnpj;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set files.
     *
     * @param string $files
     *
     * @return Contract
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get files.
     *
     * @return string
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Set size.
     *
     * @param string $size
     *
     * @return Contract
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size.
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Contract
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dtResgister.
     *
     * @param \DateTime $dtResgister
     *
     * @return Contract
     */
    public function setDtResgister($dtResgister)
    {
        $this->dtResgister = $dtResgister;

        return $this;
    }

    /**
     * Get dtResgister.
     *
     * @return \DateTime
     */
    public function getDtResgister()
    {
        return $this->dtResgister;
    }

    /**
     * Set cnpj.
     *
     * @param \organiza\V1\Entity\Company|null $cnpj
     *
     * @return Contract
     */
    public function setCnpj(\organiza\V1\Entity\Company $cnpj = null)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj.
     *
     * @return \organiza\V1\Entity\Company|null
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }
}
