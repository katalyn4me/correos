<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Calcula ServiceType
 * @subpackage Services
 */
class Calcula extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CalculaTarifa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CalculaTarifa $calculaTarifaRequest
     * @return \StructType\RespuestaCalculaTarifa|bool
     */
    public function CalculaTarifa(\StructType\CalculaTarifa $calculaTarifaRequest)
    {
        try {
            $this->setResult($resultCalculaTarifa = $this->getSoapClient()->__soapCall('CalculaTarifa', [
                $calculaTarifaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculaTarifa;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaCalculaTarifa
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
