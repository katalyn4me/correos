<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Reexpedicion ServiceType
 * @subpackage Services
 */
class Reexpedicion extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Reexpedicion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionReexpedicion $reexpedicionRequest
     * @return \StructType\RespuestaReexpedicion|bool
     */
    public function Reexpedicion(\StructType\PeticionReexpedicion $reexpedicionRequest)
    {
        try {
            $this->setResult($resultReexpedicion = $this->getSoapClient()->__soapCall('Reexpedicion', [
                $reexpedicionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultReexpedicion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaReexpedicion
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
