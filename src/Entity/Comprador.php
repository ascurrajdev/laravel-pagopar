<?php
namespace Ascurrajdev\Pagopar\Entity;
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

    public function __construct(){
        
    }
}