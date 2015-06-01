<?php

namespace TG\UdecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trabgrado
 *
 * @ORM\Table(name="trabgrado", indexes={@ORM\Index(name="FK_trabgrado_programas", columns={"id_programa"}), @ORM\Index(name="FK_trabgrado_clasificaciontg", columns={"id_clasificacion"})})
 * @ORM\Entity
 */
class Trabgrado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_rg", type="datetime", nullable=true)
     */
    private $fechaRg;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=250, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=50, nullable=true)
     */
    private $concepto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_grado", type="date", nullable=true)
     */
    private $fechaGrado;

    /**
     * @var string
     *
     * @ORM\Column(name="palabras_clave", type="string", length=250, nullable=true)
     */
    private $palabrasClave;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_trabajo", type="string", length=50, nullable=true)
     */
    private $tipoTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado = '1';

    /**
     * @var \Clasificaciontg
     *
     * @ORM\ManyToOne(targetEntity="Clasificaciontg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clasificacion", referencedColumnName="id")
     * })
     */
    private $idClasificacion;

    /**
     * @var \Programas
     *
     * @ORM\ManyToOne(targetEntity="Programas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_programa", referencedColumnName="id")
     * })
     */
    private $idPrograma;
    
    
    public function __construct() {
        $this->fechaRg = new \DateTime(date("Y-m-d H:i:s"));
    }



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
     * Set fechaRg
     *
     * @param \DateTime $fechaRg
     * @return Trabgrado
     */
    public function setFechaRg($fechaRg)
    {
        $this->fechaRg = $fechaRg;

        return $this;
    }

    /**
     * Get fechaRg
     *
     * @return \DateTime 
     */
    public function getFechaRg()
    {
        return $this->fechaRg;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Trabgrado
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     * @return Trabgrado
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set fechaGrado
     *
     * @param \DateTime $fechaGrado
     * @return Trabgrado
     */
    public function setFechaGrado($fechaGrado)
    {
        $this->fechaGrado = $fechaGrado;

        return $this;
    }

    /**
     * Get fechaGrado
     *
     * @return \DateTime 
     */
    public function getFechaGrado()
    {
        return $this->fechaGrado;
    }

    /**
     * Set palabrasClave
     *
     * @param string $palabrasClave
     * @return Trabgrado
     */
    public function setPalabrasClave($palabrasClave)
    {
        $this->palabrasClave = $palabrasClave;

        return $this;
    }

    /**
     * Get palabrasClave
     *
     * @return string 
     */
    public function getPalabrasClave()
    {
        return $this->palabrasClave;
    }

    /**
     * Set tipoTrabajo
     *
     * @param string $tipoTrabajo
     * @return Trabgrado
     */
    public function setTipoTrabajo($tipoTrabajo)
    {
        $this->tipoTrabajo = $tipoTrabajo;

        return $this;
    }

    /**
     * Get tipoTrabajo
     *
     * @return string 
     */
    public function getTipoTrabajo()
    {
        return $this->tipoTrabajo;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Trabgrado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idClasificacion
     *
     * @param \TG\UdecBundle\Entity\Clasificaciontg $idClasificacion
     * @return Trabgrado
     */
    public function setIdClasificacion(\TG\UdecBundle\Entity\Clasificaciontg $idClasificacion = null)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return \TG\UdecBundle\Entity\Clasificaciontg 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set idPrograma
     *
     * @param \TG\UdecBundle\Entity\Programas $idPrograma
     * @return Trabgrado
     */
    public function setIdPrograma(\TG\UdecBundle\Entity\Programas $idPrograma = null)
    {
        $this->idPrograma = $idPrograma;

        return $this;
    }

    /**
     * Get idPrograma
     *
     * @return \TG\UdecBundle\Entity\Programas 
     */
    public function getIdPrograma()
    {
        return $this->idPrograma;
    }
    
    public function __toString(){
        return $this->getTitulo();
    }
    
}
