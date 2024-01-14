<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validar ServiceType
 * @subpackage Services
 */
class Validar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ValidarDatosOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidarDatos $validarDatosRequest
     * @return \StructType\RespuestaValidarDatos|bool
     */
    public function ValidarDatosOp(\StructType\ValidarDatos $validarDatosRequest)
    {
        try {
            $this->setResult($resultValidarDatosOp = $this->getSoapClient()->__soapCall('ValidarDatosOp', [
                $validarDatosRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidarDatosOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaValidarDatos
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
