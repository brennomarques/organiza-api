<?php

namespace organiza\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Involved
 *
 * @ORM\Table(name="involved", indexes={@ORM\Index(name="contract_id", columns={"contract_id"})})
 * @ORM\Entity
 */
class Involved
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
     * @ORM\Column(name="responsible_name", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $responsibleName;

    /**
     * @var string
     *
     * @ORM\Column(name="Responsibilities", type="string", length=20, precision=0, scale=0, nullable=false, unique=false)
     */
    private $responsibilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="string", length=255, precision=0, scale=0, nullable=true, options={"default"="NULL"}, unique=false)
     */
    private $comments = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_resgister", type="datetime", precision=0, scale=0, nullable=false, options={"default"="current_timestamp()"}, unique=false)
     */
    private $dtResgister = 'current_timestamp()';

    /**
     * @var \organiza\V1\Entity\Contract
     *
     * @ORM\ManyToOne(targetEntity="organiza\V1\Entity\Contract")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contract_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $contract;


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
     * Set responsibleName.
     *
     * @param string $responsibleName
     *
     * @return Involved
     */
    public function setResponsibleName($responsibleName)
    {
        $this->responsibleName = $responsibleName;

        return $this;
    }

    /**
     * Get responsibleName.
     *
     * @return string
     */
    public function getResponsibleName()
    {
        return $this->responsibleName;
    }

    /**
     * Set responsibilities.
     *
     * @param string $responsibilities
     *
     * @return Involved
     */
    public function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;

        return $this;
    }

    /**
     * Get responsibilities.
     *
     * @return string
     */
    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    /**
     * Set comments.
     *
     * @param string|null $comments
     *
     * @return Involved
     */
    public function setComments($comments = null)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments.
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set dtResgister.
     *
     * @param \DateTime $dtResgister
     *
     * @return Involved
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
     * Set contract.
     *
     * @param \organiza\V1\Entity\Contract|null $contract
     *
     * @return Involved
     */
    public function setContract(\organiza\V1\Entity\Contract $contract = null)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get contract.
     *
     * @return \organiza\V1\Entity\Contract|null
     */
    public function getContract()
    {
        return $this->contract;
    }
}
