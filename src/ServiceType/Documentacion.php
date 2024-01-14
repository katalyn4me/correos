<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Documentacion ServiceType
 * @subpackage Services
 */
class Documentacion extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DocumentacionAduaneraOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SolicitudDocumentacionAduanera $documentacionAduaneraRequest
     * @return \StructType\RespuestaSolicitudDocumentacionAduanera|bool
     */
    public function DocumentacionAduaneraOp(\StructType\SolicitudDocumentacionAduanera $documentacionAduaneraRequest)
    {
        try {
            $this->setResult($resultDocumentacionAduaneraOp = $this->getSoapClient()->__soapCall('DocumentacionAduaneraOp', [
                $documentacionAduaneraRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDocumentacionAduaneraOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named DocumentacionAduaneraCN23CP71Op
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SolicitudDocumentacionAduaneraCN23CP71 $documentacionAduaneraCN23CP71Request
     * @return \StructType\RespuestaSolicitudDocumentacionAduaneraCN23CP71|bool
     */
    public function DocumentacionAduaneraCN23CP71Op(\StructType\SolicitudDocumentacionAduaneraCN23CP71 $documentacionAduaneraCN23CP71Request)
    {
        try {
            $this->setResult($resultDocumentacionAduaneraCN23CP71Op = $this->getSoapClient()->__soapCall('DocumentacionAduaneraCN23CP71Op', [
                $documentacionAduaneraCN23CP71Request,
            ], [], [], $this->outputHeaders));
        
            return $resultDocumentacionAduaneraCN23CP71Op;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaSolicitudDocumentacionAduanera|\StructType\RespuestaSolicitudDocumentacionAduaneraCN23CP71
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
