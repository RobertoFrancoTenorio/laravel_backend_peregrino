<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MetodoDeContactoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "doc_metodo" => $this->doc_metodo,
            "doc_telefono_aux" => $this->doc_telefono,
            "doc_horario" => $this->doc_horario,
            "estatus_metodo_de_contacto" => $this->estatus_metodo_de_contacto,
        ];
    }
}
