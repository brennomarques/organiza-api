<?php

namespace organiza\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company", uniqueConstraints={@ORM\UniqueConstraint(name="cnpj", columns={"cnpj"})}, indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Company
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
     * @ORM\Column(name="full_name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=15, precision=0, scale=0, nullable=false, unique=false)
     */
    private $cnpj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cep", type="string", length=8, precision=0, scale=0, nullable=true, options={"default"="NULL"}, unique=false)
     */
    private $cep = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="logradouro", type="string", length=100, precision=0, scale=0, nullable=true, options={"default"="NULL"}, unique=false)
     */
    private $logradouro = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="complemento", type="string", length=50, precision=0, scale=0, nullable=true, options={"default"="NULL"}, unique=false)
     */
    private $complemento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="bairro", type="string", length=100, precision=0, scale=0, nullable=true, options={"default"="NULL"}, unique=false)
     */
    private $bairro = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="localidade", type="string", length=100, precision=0, scale=0, nullable=true, options={"default"="NULL"}, unique=false)
     */
    private $localidade = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="uf", type="string", length=2, precision=0, scale=0, nullable=true, options={"default"="NULL"}, unique=false)
     */
    private $uf = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_resgister", type="datetime", precision=0, scale=0, nullable=false, options={"default"="current_timestamp()"}, unique=false)
     */
    private $dtResgister = 'current_timestamp()';

    /**
     * @var \organiza\V1\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="organiza\V1\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;


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
     * Set fullName.
     *
     * @param string $fullName
     *
     * @return Company
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName.
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set cnpj.
     *
     * @param string $cnpj
     *
     * @return Company
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj.
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set cep.
     *
     * @param string|null $cep
     *
     * @return Company
     */
    public function setCep($cep = null)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep.
     *
     * @return string|null
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set logradouro.
     *
     * @param string|null $logradouro
     *
     * @return Company
     */
    public function setLogradouro($logradouro = null)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get logradouro.
     *
     * @return string|null
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set complemento.
     *
     * @param string|null $complemento
     *
     * @return Company
     */
    public function setComplemento($complemento = null)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento.
     *
     * @return string|null
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set bairro.
     *
     * @param string|null $bairro
     *
     * @return Company
     */
    public function setBairro($bairro = null)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro.
     *
     * @return string|null
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set localidade.
     *
     * @param string|null $localidade
     *
     * @return Company
     */
    public function setLocalidade($localidade = null)
    {
        $this->localidade = $localidade;

        return $this;
    }

    /**
     * Get localidade.
     *
     * @return string|null
     */
    public function getLocalidade()
    {
        return $this->localidade;
    }

    /**
     * Set uf.
     *
     * @param string|null $uf
     *
     * @return Company
     */
    public function setUf($uf = null)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf.
     *
     * @return string|null
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set contract.
     *
     * @param string|null $contract
     *
     * @return Company
     */
    public function setContract($contract = null)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get contract.
     *
     * @return string|null
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Set dtResgister.
     *
     * @param \DateTime $dtResgister
     *
     * @return Company
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
     * Set user.
     *
     * @param \organiza\V1\Entity\User|null $user
     *
     * @return Company
     */
    public function setUser(\organiza\V1\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \organiza\V1\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
