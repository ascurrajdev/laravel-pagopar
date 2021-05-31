<?php
namespace Ascurrajdev\Pagopar\Entity;
/**
 * @author Jose Ascurra
 */
class Comprador{

    private string $email;
    private string $telefono;
    private string $ciudad;
    private string $ruc;
    private string $razonSocial;
    private string $nombre;
    private string $documento;
    private string $tipoDocumento;
    private string $direccion;
    private string $direccionReferencia;
    private array $coordenadas;

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function setTelefono(string $telefono){
        $this->telefono = $telefono;
    }

    public function getTelefono():string{
        return $this->telefono;
    }

    public function setCiudad(string $ciudad){
        $this->ciudad = $ciudad;
    }

    public function getCiudad():string{
        return $this->ciudad;
    }

    public function setRuc(string $ruc){
        $this->ruc = $ruc;
    }

    public function getRuc():string{
        return $this->ruc;
    }

    public function setRazonSocial(string $razonSocial){
        $this->razonSocial = $razonSocial;
    }

    public function getRazonSocial(){
        return $this->razonSocial;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function setDocumento(string $documento){
        $this->documento = $documento;
    }

    public function getDocumento():string{
        return $this->documento;
    }

    public function setTipoDocumento(string $tipoDocumento){
        $this->tipoDocumento = $tipoDocumento;
    }

    public function getTipoDocumento():string{
        return $this->tipoDocumento;
    }

    public function setDireccion(string $direccion){
        $this->direccion = $direccion;
    }

    public function getDireccion():string{
        return $this->direccion;
    }

    public function setDireccionReferencia(string $direccionReferencia){
        $this->direccionReferencia = $direccionReferencia;
    }

    public function getDireccionReferencia():string{
        return $this->direccionReferencia;
    }

    public function setCoordenadas(array $coordenadas){
        $this->coordenadas = $coordenadas;
    }

    public function getCoordenadas():array{
        return $this->coordenadas;
    }
}