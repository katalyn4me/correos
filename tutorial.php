<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'preregistroenvios.wsdl.xml',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'preregistroenvios.wsdl.xml',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Pre ServiceType
 */
$pre = new \ServiceType\Pre($options);
/**
 * Sample call for PreRegistro operation/method
 */
if ($pre->PreRegistro(new \StructType\PreregistroEnvio()) !== false) {
    print_r($pre->getResult());
} else {
    print_r($pre->getLastError());
}
/**
 * Sample call for PreRegistroMultibulto operation/method
 */
if ($pre->PreRegistroMultibulto(new \StructType\PreregistroEnvioMultibulto()) !== false) {
    print_r($pre->getResult());
} else {
    print_r($pre->getLastError());
}
/**
 * Sample call for PreRegistroCodEnvio operation/method
 */
if ($pre->PreRegistroCodEnvio(new \StructType\PreregistroCodEnvio()) !== false) {
    print_r($pre->getResult());
} else {
    print_r($pre->getLastError());
}
/**
 * Sample call for PreRegistroCodExpedicion operation/method
 */
if ($pre->PreRegistroCodExpedicion(new \StructType\PreregistroCodExpedicion()) !== false) {
    print_r($pre->getResult());
} else {
    print_r($pre->getLastError());
}
/**
 * Sample call for PreRegistroIdaVuelta operation/method
 */
if ($pre->PreRegistroIdaVuelta(new \StructType\PeticionPreRegistroIdaVta()) !== false) {
    print_r($pre->getResult());
} else {
    print_r($pre->getLastError());
}
/**
 * Sample call for PreRegistroCN operation/method
 */
if ($pre->PreRegistroCN(new \StructType\PeticionPreRegistroCN()) !== false) {
    print_r($pre->getResult());
} else {
    print_r($pre->getLastError());
}
/**
 * Sample call for PreRegistroCNCodEnvio operation/method
 */
if ($pre->PreRegistroCNCodEnvio(new \StructType\PeticionPreRegistroCNCodEnvio()) !== false) {
    print_r($pre->getResult());
} else {
    print_r($pre->getLastError());
}
/**
 * Samples for Solicitud ServiceType
 */
$solicitud = new \ServiceType\Solicitud($options);
/**
 * Sample call for SolicitudEtiquetaRefCliOp operation/method
 */
if ($solicitud->SolicitudEtiquetaRefCliOp(new \StructType\SolicitudEtiquetaRefCli()) !== false) {
    print_r($solicitud->getResult());
} else {
    print_r($solicitud->getLastError());
}
/**
 * Sample call for SolicitudEtiquetaExpOp operation/method
 */
if ($solicitud->SolicitudEtiquetaExpOp(new \StructType\SolicitudEtiquetaExp()) !== false) {
    print_r($solicitud->getResult());
} else {
    print_r($solicitud->getLastError());
}
/**
 * Sample call for SolicitudEtiquetaOp operation/method
 */
if ($solicitud->SolicitudEtiquetaOp(new \StructType\SolicitudEtiqueta()) !== false) {
    print_r($solicitud->getResult());
} else {
    print_r($solicitud->getLastError());
}
/**
 * Samples for Validar ServiceType
 */
$validar = new \ServiceType\Validar($options);
/**
 * Sample call for ValidarDatosOp operation/method
 */
if ($validar->ValidarDatosOp(new \StructType\ValidarDatos()) !== false) {
    print_r($validar->getResult());
} else {
    print_r($validar->getLastError());
}
/**
 * Samples for Anular ServiceType
 */
$anular = new \ServiceType\Anular($options);
/**
 * Sample call for AnularOp operation/method
 */
if ($anular->AnularOp(new \StructType\PeticionAnular()) !== false) {
    print_r($anular->getResult());
} else {
    print_r($anular->getLastError());
}
/**
 * Samples for Modificar ServiceType
 */
$modificar = new \ServiceType\Modificar($options);
/**
 * Sample call for ModificarOp operation/method
 */
if ($modificar->ModificarOp(new \StructType\PeticionModificar()) !== false) {
    print_r($modificar->getResult());
} else {
    print_r($modificar->getLastError());
}
/**
 * Sample call for ModificarAutorizacionPreviaEntregaOp operation/method
 */
if ($modificar->ModificarAutorizacionPreviaEntregaOp(new \StructType\PeticionModificarAutorizacionPreviaEntrega()) !== false) {
    print_r($modificar->getResult());
} else {
    print_r($modificar->getLastError());
}
/**
 * Samples for Documentacion ServiceType
 */
$documentacion = new \ServiceType\Documentacion($options);
/**
 * Sample call for DocumentacionAduaneraOp operation/method
 */
if ($documentacion->DocumentacionAduaneraOp(new \StructType\SolicitudDocumentacionAduanera()) !== false) {
    print_r($documentacion->getResult());
} else {
    print_r($documentacion->getLastError());
}
/**
 * Sample call for DocumentacionAduaneraCN23CP71Op operation/method
 */
if ($documentacion->DocumentacionAduaneraCN23CP71Op(new \StructType\SolicitudDocumentacionAduaneraCN23CP71()) !== false) {
    print_r($documentacion->getResult());
} else {
    print_r($documentacion->getLastError());
}
/**
 * Samples for Baja ServiceType
 */
$baja = new \ServiceType\Baja($options);
/**
 * Sample call for BajaOp operation/method
 */
if ($baja->BajaOp(new \StructType\PeticionBaja()) !== false) {
    print_r($baja->getResult());
} else {
    print_r($baja->getLastError());
}
/**
 * Samples for Generar ServiceType
 */
$generar = new \ServiceType\Generar($options);
/**
 * Sample call for GenerarCodigoExpedicionOp operation/method
 */
if ($generar->GenerarCodigoExpedicionOp(new \StructType\PeticionGenerarCodigoExpedicion()) !== false) {
    print_r($generar->getResult());
} else {
    print_r($generar->getLastError());
}
/**
 * Samples for Reexpedicion ServiceType
 */
$reexpedicion = new \ServiceType\Reexpedicion($options);
/**
 * Sample call for Reexpedicion operation/method
 */
if ($reexpedicion->Reexpedicion(new \StructType\PeticionReexpedicion()) !== false) {
    print_r($reexpedicion->getResult());
} else {
    print_r($reexpedicion->getLastError());
}
/**
 * Samples for Calcula ServiceType
 */
$calcula = new \ServiceType\Calcula($options);
/**
 * Sample call for CalculaTarifa operation/method
 */
if ($calcula->CalculaTarifa(new \StructType\CalculaTarifa()) !== false) {
    print_r($calcula->getResult());
} else {
    print_r($calcula->getLastError());
}
/**
 * Samples for Devolver ServiceType
 */
$devolver = new \ServiceType\Devolver($options);
/**
 * Sample call for DevolverOp operation/method
 */
if ($devolver->DevolverOp(new \StructType\PeticionDevolver()) !== false) {
    print_r($devolver->getResult());
} else {
    print_r($devolver->getLastError());
}
