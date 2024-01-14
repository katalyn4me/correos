<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Modificar ServiceType
 * @subpackage Services
 */
class Modificar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ModificarOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionModificar $modificarRequest
     * @return \StructType\RespuestaModificar|bool
     */
    public function ModificarOp(\StructType\PeticionModificar $modificarRequest)
    {
        try {
            $this->setResult($resultModificarOp = $this->getSoapClient()->__soapCall('ModificarOp', [
                $modificarRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultModificarOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ModificarAutorizacionPreviaEntregaOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionModificarAutorizacionPreviaEntrega $modificarAutorizacionPreviaEntregaRequest
     * @return \StructType\RespuestaModificarAutorizacionPreviaEntrega|bool
     */
    public function ModificarAutorizacionPreviaEntregaOp(\StructType\PeticionModificarAutorizacionPreviaEntrega $modificarAutorizacionPreviaEntregaRequest)
    {
        try {
            $this->setResult($resultModificarAutorizacionPreviaEntregaOp = $this->getSoapClient()->__soapCall('ModificarAutorizacionPreviaEntregaOp', [
                $modificarAutorizacionPreviaEntregaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultModificarAutorizacionPreviaEntregaOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaModificar|\StructType\RespuestaModificarAutorizacionPreviaEntrega
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
