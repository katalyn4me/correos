<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generar ServiceType
 * @subpackage Services
 */
class Generar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GenerarCodigoExpedicionOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionGenerarCodigoExpedicion $generarCodigoExpedicionRequest
     * @return \StructType\RespuestaGenerarCodigoExpedicion|bool
     */
    public function GenerarCodigoExpedicionOp(\StructType\PeticionGenerarCodigoExpedicion $generarCodigoExpedicionRequest)
    {
        try {
            $this->setResult($resultGenerarCodigoExpedicionOp = $this->getSoapClient()->__soapCall('GenerarCodigoExpedicionOp', [
                $generarCodigoExpedicionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerarCodigoExpedicionOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaGenerarCodigoExpedicion
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
