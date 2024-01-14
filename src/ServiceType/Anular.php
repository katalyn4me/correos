<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Anular ServiceType
 * @subpackage Services
 */
class Anular extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AnularOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionAnular $anularRequest
     * @return \StructType\RespuestaAnular|bool
     */
    public function AnularOp(\StructType\PeticionAnular $anularRequest)
    {
        try {
            $this->setResult($resultAnularOp = $this->getSoapClient()->__soapCall('AnularOp', [
                $anularRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnularOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaAnular
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
