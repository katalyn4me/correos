<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Solicitud ServiceType
 * @subpackage Services
 */
class Solicitud extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SolicitudEtiquetaRefCliOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SolicitudEtiquetaRefCli $solicitudEtiquetaRefCliRequest
     * @return \StructType\RespuestaSolicitudEtiquetaRefCli|bool
     */
    public function SolicitudEtiquetaRefCliOp(\StructType\SolicitudEtiquetaRefCli $solicitudEtiquetaRefCliRequest)
    {
        try {
            $this->setResult($resultSolicitudEtiquetaRefCliOp = $this->getSoapClient()->__soapCall('SolicitudEtiquetaRefCliOp', [
                $solicitudEtiquetaRefCliRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSolicitudEtiquetaRefCliOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SolicitudEtiquetaExpOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SolicitudEtiquetaExp $solicitudEtiquetaExpRequest
     * @return \StructType\RespuestaSolicitudEtiquetaExp|bool
     */
    public function SolicitudEtiquetaExpOp(\StructType\SolicitudEtiquetaExp $solicitudEtiquetaExpRequest)
    {
        try {
            $this->setResult($resultSolicitudEtiquetaExpOp = $this->getSoapClient()->__soapCall('SolicitudEtiquetaExpOp', [
                $solicitudEtiquetaExpRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSolicitudEtiquetaExpOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SolicitudEtiquetaOp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SolicitudEtiqueta $solicitudEtiquetaRequest
     * @return \StructType\RespuestaSolicitudEtiqueta|bool
     */
    public function SolicitudEtiquetaOp(\StructType\SolicitudEtiqueta $solicitudEtiquetaRequest)
    {
        try {
            $this->setResult($resultSolicitudEtiquetaOp = $this->getSoapClient()->__soapCall('SolicitudEtiquetaOp', [
                $solicitudEtiquetaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSolicitudEtiquetaOp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaSolicitudEtiqueta|\StructType\RespuestaSolicitudEtiquetaExp|\StructType\RespuestaSolicitudEtiquetaRefCli
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
