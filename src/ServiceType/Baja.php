<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Baja ServiceType
 * @subpackage Services
 */
class Baja extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named BajaOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionBaja $bajaRequest
     * @return \StructType\RespuestaBaja|bool
     */
    public function BajaOp(\StructType\PeticionBaja $bajaRequest)
    {
        try {
            $this->setResult($resultBajaOp = $this->getSoapClient()->__soapCall('BajaOp', [
                $bajaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultBajaOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaBaja
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
