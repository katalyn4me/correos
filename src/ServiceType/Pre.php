<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Pre ServiceType
 * @subpackage Services
 */
class Pre extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PreRegistro
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PreregistroEnvio $preRegistroEnvioRequest
     * @return \StructType\RespuestaPreregistroEnvio|bool
     */
    public function PreRegistro(\StructType\PreregistroEnvio $preRegistroEnvioRequest)
    {
        try {
            $this->setResult($resultPreRegistro = $this->getSoapClient()->__soapCall('PreRegistro', [
                $preRegistroEnvioRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreRegistro;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroMultibulto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PreregistroEnvioMultibulto $preRegistroEnvioMultibultoRequest
     * @return \StructType\RespuestaPreregistroEnvioMultibulto|bool
     */
    public function PreRegistroMultibulto(\StructType\PreregistroEnvioMultibulto $preRegistroEnvioMultibultoRequest)
    {
        try {
            $this->setResult($resultPreRegistroMultibulto = $this->getSoapClient()->__soapCall('PreRegistroMultibulto', [
                $preRegistroEnvioMultibultoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreRegistroMultibulto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroCodEnvio
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PreregistroCodEnvio $preRegistroCodEnvioRequest
     * @return \StructType\RespuestaPreregistroCodEnvio|bool
     */
    public function PreRegistroCodEnvio(\StructType\PreregistroCodEnvio $preRegistroCodEnvioRequest)
    {
        try {
            $this->setResult($resultPreRegistroCodEnvio = $this->getSoapClient()->__soapCall('PreRegistroCodEnvio', [
                $preRegistroCodEnvioRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreRegistroCodEnvio;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroCodExpedicion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PreregistroCodExpedicion $preRegistroCodExpedicionRequest
     * @return \StructType\RespuestaPreregistroCodExpedicion|bool
     */
    public function PreRegistroCodExpedicion(\StructType\PreregistroCodExpedicion $preRegistroCodExpedicionRequest)
    {
        try {
            $this->setResult($resultPreRegistroCodExpedicion = $this->getSoapClient()->__soapCall('PreRegistroCodExpedicion', [
                $preRegistroCodExpedicionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreRegistroCodExpedicion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroIdaVuelta
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionPreRegistroIdaVta $preRegistroIdaVtaRequest
     * @return \StructType\RespuestaPreRegistroIdaVta|bool
     */
    public function PreRegistroIdaVuelta(\StructType\PeticionPreRegistroIdaVta $preRegistroIdaVtaRequest)
    {
        try {
            $this->setResult($resultPreRegistroIdaVuelta = $this->getSoapClient()->__soapCall('PreRegistroIdaVuelta', [
                $preRegistroIdaVtaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreRegistroIdaVuelta;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroCN
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionPreRegistroCN $preRegistroCNRequest
     * @return \StructType\RespuestaPreRegistroCN|bool
     */
    public function PreRegistroCN(\StructType\PeticionPreRegistroCN $preRegistroCNRequest)
    {
        try {
            $this->setResult($resultPreRegistroCN = $this->getSoapClient()->__soapCall('PreRegistroCN', [
                $preRegistroCNRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreRegistroCN;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named PreRegistroCNCodEnvio
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PeticionPreRegistroCNCodEnvio $preRegistroCNCodEnvioRequest
     * @return \StructType\RespuestaPreRegistroCNCodEnvio|bool
     */
    public function PreRegistroCNCodEnvio(\StructType\PeticionPreRegistroCNCodEnvio $preRegistroCNCodEnvioRequest)
    {
        try {
            $this->setResult($resultPreRegistroCNCodEnvio = $this->getSoapClient()->__soapCall('PreRegistroCNCodEnvio', [
                $preRegistroCNCodEnvioRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreRegistroCNCodEnvio;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RespuestaPreRegistroCN|\StructType\RespuestaPreRegistroCNCodEnvio|\StructType\RespuestaPreregistroCodEnvio|\StructType\RespuestaPreregistroCodExpedicion|\StructType\RespuestaPreregistroEnvio|\StructType\RespuestaPreregistroEnvioMultibulto|\StructType\RespuestaPreRegistroIdaVta
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
