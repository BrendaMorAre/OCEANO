<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['nombre_comercial', 'nombre_fiscal', 'contacto','telefono1', 'telefono2', 'correo_cobranza', 'correo_cotizaciones'
        , 'correo_sistemas', 'correo_boletin', 'rfc', 'domicilio'];

    protected $table = 'clientes';

    public function saveClientes($data){
        $this->nombre_comercial = $data['nombre_comercial'];
        $this->nombre_fiscal = $data['nombre_fiscal'];
        $this->contacto = $data['contacto'];
        $this->telefono1 = $data['telefono1'];
        $this->telefono2 = $data['telefono2'];
        $this->correo_cobranza = $data['correo_cobranza'];
        $this->correo_cotizaciones = $data['correo_cotizaciones'];
        $this->correo_sistemas = $data['correo_sistemas'];
        $this->correo_boletin = $data['correo_boletin'];
        $this->rfc = $data['rfc'];
        $this->domicilio = $data['domicilio'];
        $this->save();
        return 1;
    }
}
