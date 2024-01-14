<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ADUANATYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ADUANATYPE extends AbstractStructBase
{
    /**
     * The TipoEnvio
     * Meta information extracted from the WSDL
     * - ref: xsd:TipoEnvio
     * @var string|null
     */
    protected ?string $TipoEnvio = null;
    /**
     * The EnvioComercial
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EnvioComercial
     * @var string|null
     */
    protected ?string $EnvioComercial = null;
    /**
     * The FacturaSuperiora500
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:FacturaSuperiora500
     * @var string|null
     */
    protected ?string $FacturaSuperiora500 = null;
    /**
     * The DUAConCorreos
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:DUAConCorreos
     * @var string|null
     */
    protected ?string $DUAConCorreos = null;
    /**
     * The DescAduanera
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DescAduanera
     * @var \StructType\DescAduanera|null
     */
    protected ?\StructType\DescAduanera $DescAduanera = null;
    /**
     * The Factura
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Factura
     * @var string|null
     */
    protected ?string $Factura = null;
    /**
     * The TxtFactura
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:TxtFactura
     * @var string|null
     */
    protected ?string $TxtFactura = null;
    /**
     * The Licencia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Licencia
     * @var string|null
     */
    protected ?string $Licencia = null;
    /**
     * The TxtLicencia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:TxtLicencia
     * @var string|null
     */
    protected ?string $TxtLicencia = null;
    /**
     * The Certificado
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Certificado
     * @var string|null
     */
    protected ?string $Certificado = null;
    /**
     * The TxtCertificado
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:TxtCertificado
     * @var string|null
     */
    protected ?string $TxtCertificado = null;
    /**
     * The RefAduaneraExpedidor
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:RefAduaneraExpedidor
     * @var string|null
     */
    protected ?string $RefAduaneraExpedidor = null;
    /**
     * The RefFiscalImportador
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:RefFiscalImportador
     * @var string|null
     */
    protected ?string $RefFiscalImportador = null;
    /**
     * The NumIvaImportador
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:NumIvaImportador
     * @var string|null
     */
    protected ?string $NumIvaImportador = null;
    /**
     * The CodImportador
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:CodImportador
     * @var string|null
     */
    protected ?string $CodImportador = null;
    /**
     * The NumTelefonoImportador
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 26
     * - minOccurs: 0
     * - ref: xsd:NumTelefonoImportador
     * @var string|null
     */
    protected ?string $NumTelefonoImportador = null;
    /**
     * The DesEmailImportador
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:DesEmailImportador
     * @var string|null
     */
    protected ?string $DesEmailImportador = null;
    /**
     * Constructor method for ADUANATYPE
     * @uses ADUANATYPE::setTipoEnvio()
     * @uses ADUANATYPE::setEnvioComercial()
     * @uses ADUANATYPE::setFacturaSuperiora500()
     * @uses ADUANATYPE::setDUAConCorreos()
     * @uses ADUANATYPE::setDescAduanera()
     * @uses ADUANATYPE::setFactura()
     * @uses ADUANATYPE::setTxtFactura()
     * @uses ADUANATYPE::setLicencia()
     * @uses ADUANATYPE::setTxtLicencia()
     * @uses ADUANATYPE::setCertificado()
     * @uses ADUANATYPE::setTxtCertificado()
     * @uses ADUANATYPE::setRefAduaneraExpedidor()
     * @uses ADUANATYPE::setRefFiscalImportador()
     * @uses ADUANATYPE::setNumIvaImportador()
     * @uses ADUANATYPE::setCodImportador()
     * @uses ADUANATYPE::setNumTelefonoImportador()
     * @uses ADUANATYPE::setDesEmailImportador()
     * @param string $tipoEnvio
     * @param string $envioComercial
     * @param string $facturaSuperiora500
     * @param string $dUAConCorreos
     * @param \StructType\DescAduanera $descAduanera
     * @param string $factura
     * @param string $txtFactura
     * @param string $licencia
     * @param string $txtLicencia
     * @param string $certificado
     * @param string $txtCertificado
     * @param string $refAduaneraExpedidor
     * @param string $refFiscalImportador
     * @param string $numIvaImportador
     * @param string $codImportador
     * @param string $numTelefonoImportador
     * @param string $desEmailImportador
     */
    public function __construct(?string $tipoEnvio = null, ?string $envioComercial = null, ?string $facturaSuperiora500 = null, ?string $dUAConCorreos = null, ?\StructType\DescAduanera $descAduanera = null, ?string $factura = null, ?string $txtFactura = null, ?string $licencia = null, ?string $txtLicencia = null, ?string $certificado = null, ?string $txtCertificado = null, ?string $refAduaneraExpedidor = null, ?string $refFiscalImportador = null, ?string $numIvaImportador = null, ?string $codImportador = null, ?string $numTelefonoImportador = null, ?string $desEmailImportador = null)
    {
        $this
            ->setTipoEnvio($tipoEnvio)
            ->setEnvioComercial($envioComercial)
            ->setFacturaSuperiora500($facturaSuperiora500)
            ->setDUAConCorreos($dUAConCorreos)
            ->setDescAduanera($descAduanera)
            ->setFactura($factura)
            ->setTxtFactura($txtFactura)
            ->setLicencia($licencia)
            ->setTxtLicencia($txtLicencia)
            ->setCertificado($certificado)
            ->setTxtCertificado($txtCertificado)
            ->setRefAduaneraExpedidor($refAduaneraExpedidor)
            ->setRefFiscalImportador($refFiscalImportador)
            ->setNumIvaImportador($numIvaImportador)
            ->setCodImportador($codImportador)
            ->setNumTelefonoImportador($numTelefonoImportador)
            ->setDesEmailImportador($desEmailImportador);
    }
    /**
     * Get TipoEnvio value
     * @return string|null
     */
    public function getTipoEnvio(): ?string
    {
        return $this->TipoEnvio;
    }
    /**
     * Set TipoEnvio value
     * @uses \EnumType\TipoEnvio::valueIsValid()
     * @uses \EnumType\TipoEnvio::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tipoEnvio
     * @return \StructType\ADUANATYPE
     */
    public function setTipoEnvio(?string $tipoEnvio = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TipoEnvio::valueIsValid($tipoEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TipoEnvio', is_array($tipoEnvio) ? implode(', ', $tipoEnvio) : var_export($tipoEnvio, true), implode(', ', \EnumType\TipoEnvio::getValidValues())), __LINE__);
        }
        $this->TipoEnvio = $tipoEnvio;
        
        return $this;
    }
    /**
     * Get EnvioComercial value
     * @return string|null
     */
    public function getEnvioComercial(): ?string
    {
        return $this->EnvioComercial;
    }
    /**
     * Set EnvioComercial value
     * @param string $envioComercial
     * @return \StructType\ADUANATYPE
     */
    public function setEnvioComercial(?string $envioComercial = null): self
    {
        // validation for constraint: string
        if (!is_null($envioComercial) && !is_string($envioComercial)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($envioComercial, true), gettype($envioComercial)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($envioComercial) && mb_strlen((string) $envioComercial) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $envioComercial)), __LINE__);
        }
        $this->EnvioComercial = $envioComercial;
        
        return $this;
    }
    /**
     * Get FacturaSuperiora500 value
     * @return string|null
     */
    public function getFacturaSuperiora500(): ?string
    {
        return $this->FacturaSuperiora500;
    }
    /**
     * Set FacturaSuperiora500 value
     * @param string $facturaSuperiora500
     * @return \StructType\ADUANATYPE
     */
    public function setFacturaSuperiora500(?string $facturaSuperiora500 = null): self
    {
        // validation for constraint: string
        if (!is_null($facturaSuperiora500) && !is_string($facturaSuperiora500)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facturaSuperiora500, true), gettype($facturaSuperiora500)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($facturaSuperiora500) && mb_strlen((string) $facturaSuperiora500) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $facturaSuperiora500)), __LINE__);
        }
        $this->FacturaSuperiora500 = $facturaSuperiora500;
        
        return $this;
    }
    /**
     * Get DUAConCorreos value
     * @return string|null
     */
    public function getDUAConCorreos(): ?string
    {
        return $this->DUAConCorreos;
    }
    /**
     * Set DUAConCorreos value
     * @param string $dUAConCorreos
     * @return \StructType\ADUANATYPE
     */
    public function setDUAConCorreos(?string $dUAConCorreos = null): self
    {
        // validation for constraint: string
        if (!is_null($dUAConCorreos) && !is_string($dUAConCorreos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dUAConCorreos, true), gettype($dUAConCorreos)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($dUAConCorreos) && mb_strlen((string) $dUAConCorreos) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $dUAConCorreos)), __LINE__);
        }
        $this->DUAConCorreos = $dUAConCorreos;
        
        return $this;
    }
    /**
     * Get DescAduanera value
     * @return \StructType\DescAduanera|null
     */
    public function getDescAduanera(): ?\StructType\DescAduanera
    {
        return $this->DescAduanera;
    }
    /**
     * Set DescAduanera value
     * @param \StructType\DescAduanera $descAduanera
     * @return \StructType\ADUANATYPE
     */
    public function setDescAduanera(?\StructType\DescAduanera $descAduanera = null): self
    {
        $this->DescAduanera = $descAduanera;
        
        return $this;
    }
    /**
     * Get Factura value
     * @return string|null
     */
    public function getFactura(): ?string
    {
        return $this->Factura;
    }
    /**
     * Set Factura value
     * @param string $factura
     * @return \StructType\ADUANATYPE
     */
    public function setFactura(?string $factura = null): self
    {
        // validation for constraint: string
        if (!is_null($factura) && !is_string($factura)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($factura, true), gettype($factura)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($factura) && mb_strlen((string) $factura) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $factura)), __LINE__);
        }
        $this->Factura = $factura;
        
        return $this;
    }
    /**
     * Get TxtFactura value
     * @return string|null
     */
    public function getTxtFactura(): ?string
    {
        return $this->TxtFactura;
    }
    /**
     * Set TxtFactura value
     * @param string $txtFactura
     * @return \StructType\ADUANATYPE
     */
    public function setTxtFactura(?string $txtFactura = null): self
    {
        // validation for constraint: string
        if (!is_null($txtFactura) && !is_string($txtFactura)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($txtFactura, true), gettype($txtFactura)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($txtFactura) && mb_strlen((string) $txtFactura) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $txtFactura)), __LINE__);
        }
        $this->TxtFactura = $txtFactura;
        
        return $this;
    }
    /**
     * Get Licencia value
     * @return string|null
     */
    public function getLicencia(): ?string
    {
        return $this->Licencia;
    }
    /**
     * Set Licencia value
     * @param string $licencia
     * @return \StructType\ADUANATYPE
     */
    public function setLicencia(?string $licencia = null): self
    {
        // validation for constraint: string
        if (!is_null($licencia) && !is_string($licencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licencia, true), gettype($licencia)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($licencia) && mb_strlen((string) $licencia) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $licencia)), __LINE__);
        }
        $this->Licencia = $licencia;
        
        return $this;
    }
    /**
     * Get TxtLicencia value
     * @return string|null
     */
    public function getTxtLicencia(): ?string
    {
        return $this->TxtLicencia;
    }
    /**
     * Set TxtLicencia value
     * @param string $txtLicencia
     * @return \StructType\ADUANATYPE
     */
    public function setTxtLicencia(?string $txtLicencia = null): self
    {
        // validation for constraint: string
        if (!is_null($txtLicencia) && !is_string($txtLicencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($txtLicencia, true), gettype($txtLicencia)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($txtLicencia) && mb_strlen((string) $txtLicencia) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $txtLicencia)), __LINE__);
        }
        $this->TxtLicencia = $txtLicencia;
        
        return $this;
    }
    /**
     * Get Certificado value
     * @return string|null
     */
    public function getCertificado(): ?string
    {
        return $this->Certificado;
    }
    /**
     * Set Certificado value
     * @param string $certificado
     * @return \StructType\ADUANATYPE
     */
    public function setCertificado(?string $certificado = null): self
    {
        // validation for constraint: string
        if (!is_null($certificado) && !is_string($certificado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certificado, true), gettype($certificado)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($certificado) && mb_strlen((string) $certificado) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $certificado)), __LINE__);
        }
        $this->Certificado = $certificado;
        
        return $this;
    }
    /**
     * Get TxtCertificado value
     * @return string|null
     */
    public function getTxtCertificado(): ?string
    {
        return $this->TxtCertificado;
    }
    /**
     * Set TxtCertificado value
     * @param string $txtCertificado
     * @return \StructType\ADUANATYPE
     */
    public function setTxtCertificado(?string $txtCertificado = null): self
    {
        // validation for constraint: string
        if (!is_null($txtCertificado) && !is_string($txtCertificado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($txtCertificado, true), gettype($txtCertificado)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($txtCertificado) && mb_strlen((string) $txtCertificado) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $txtCertificado)), __LINE__);
        }
        $this->TxtCertificado = $txtCertificado;
        
        return $this;
    }
    /**
     * Get RefAduaneraExpedidor value
     * @return string|null
     */
    public function getRefAduaneraExpedidor(): ?string
    {
        return $this->RefAduaneraExpedidor;
    }
    /**
     * Set RefAduaneraExpedidor value
     * @param string $refAduaneraExpedidor
     * @return \StructType\ADUANATYPE
     */
    public function setRefAduaneraExpedidor(?string $refAduaneraExpedidor = null): self
    {
        // validation for constraint: string
        if (!is_null($refAduaneraExpedidor) && !is_string($refAduaneraExpedidor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refAduaneraExpedidor, true), gettype($refAduaneraExpedidor)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($refAduaneraExpedidor) && mb_strlen((string) $refAduaneraExpedidor) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $refAduaneraExpedidor)), __LINE__);
        }
        $this->RefAduaneraExpedidor = $refAduaneraExpedidor;
        
        return $this;
    }
    /**
     * Get RefFiscalImportador value
     * @return string|null
     */
    public function getRefFiscalImportador(): ?string
    {
        return $this->RefFiscalImportador;
    }
    /**
     * Set RefFiscalImportador value
     * @param string $refFiscalImportador
     * @return \StructType\ADUANATYPE
     */
    public function setRefFiscalImportador(?string $refFiscalImportador = null): self
    {
        // validation for constraint: string
        if (!is_null($refFiscalImportador) && !is_string($refFiscalImportador)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refFiscalImportador, true), gettype($refFiscalImportador)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($refFiscalImportador) && mb_strlen((string) $refFiscalImportador) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $refFiscalImportador)), __LINE__);
        }
        $this->RefFiscalImportador = $refFiscalImportador;
        
        return $this;
    }
    /**
     * Get NumIvaImportador value
     * @return string|null
     */
    public function getNumIvaImportador(): ?string
    {
        return $this->NumIvaImportador;
    }
    /**
     * Set NumIvaImportador value
     * @param string $numIvaImportador
     * @return \StructType\ADUANATYPE
     */
    public function setNumIvaImportador(?string $numIvaImportador = null): self
    {
        // validation for constraint: string
        if (!is_null($numIvaImportador) && !is_string($numIvaImportador)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numIvaImportador, true), gettype($numIvaImportador)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($numIvaImportador) && mb_strlen((string) $numIvaImportador) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $numIvaImportador)), __LINE__);
        }
        $this->NumIvaImportador = $numIvaImportador;
        
        return $this;
    }
    /**
     * Get CodImportador value
     * @return string|null
     */
    public function getCodImportador(): ?string
    {
        return $this->CodImportador;
    }
    /**
     * Set CodImportador value
     * @param string $codImportador
     * @return \StructType\ADUANATYPE
     */
    public function setCodImportador(?string $codImportador = null): self
    {
        // validation for constraint: string
        if (!is_null($codImportador) && !is_string($codImportador)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codImportador, true), gettype($codImportador)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($codImportador) && mb_strlen((string) $codImportador) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $codImportador)), __LINE__);
        }
        $this->CodImportador = $codImportador;
        
        return $this;
    }
    /**
     * Get NumTelefonoImportador value
     * @return string|null
     */
    public function getNumTelefonoImportador(): ?string
    {
        return $this->NumTelefonoImportador;
    }
    /**
     * Set NumTelefonoImportador value
     * @param string $numTelefonoImportador
     * @return \StructType\ADUANATYPE
     */
    public function setNumTelefonoImportador(?string $numTelefonoImportador = null): self
    {
        // validation for constraint: string
        if (!is_null($numTelefonoImportador) && !is_string($numTelefonoImportador)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numTelefonoImportador, true), gettype($numTelefonoImportador)), __LINE__);
        }
        // validation for constraint: maxLength(26)
        if (!is_null($numTelefonoImportador) && mb_strlen((string) $numTelefonoImportador) > 26) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 26', mb_strlen((string) $numTelefonoImportador)), __LINE__);
        }
        $this->NumTelefonoImportador = $numTelefonoImportador;
        
        return $this;
    }
    /**
     * Get DesEmailImportador value
     * @return string|null
     */
    public function getDesEmailImportador(): ?string
    {
        return $this->DesEmailImportador;
    }
    /**
     * Set DesEmailImportador value
     * @param string $desEmailImportador
     * @return \StructType\ADUANATYPE
     */
    public function setDesEmailImportador(?string $desEmailImportador = null): self
    {
        // validation for constraint: string
        if (!is_null($desEmailImportador) && !is_string($desEmailImportador)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desEmailImportador, true), gettype($desEmailImportador)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($desEmailImportador) && mb_strlen((string) $desEmailImportador) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $desEmailImportador)), __LINE__);
        }
        $this->DesEmailImportador = $desEmailImportador;
        
        return $this;
    }
}
