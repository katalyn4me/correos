<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Devolver ServiceType
 * @subpackage Services
 */
class Devolver extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DevolverOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionDevolver $devolverRequest
     * @return \StructType\RespuestaDevolver|bool
     */
    public function DevolverOp(\StructType\PeticionDevolver $devolverRequest)
    {
        try {
            $this->setResult($resultDevolverOp = $this->getSoapClient()->__soapCall('DevolverOp', [
                $devolverRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDevolverOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaDevolver
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
