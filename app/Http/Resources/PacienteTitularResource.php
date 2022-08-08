<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacienteTitularResource extends JsonResource
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
            'id' => $this->id,
            'pac_nombres' => $this->pac_nombres,
            'pac_primer_apellido' => $this->pac_primer_apellido,
            'pac_segundo_apellido' => $this->pac_segundo_apellido,
            'pac_nombre_completo' => $this->pac_nombre_completo,
            'pac_curp' => $this->pac_curp,
            'pac_email' => $this->pac_email,
            'pac_telefono' => $this->pac_telefono,
            'pac_celular' => $this->pac_celular,
            'pac_estado_civil' => $this->pac_estado_civil,
            'pac_sexo' => $this->pac_sexo,
            'pac_pais' => $this->pac_pais,
            'pac_estado' => $this->pac_estado,
            'pac_municipio' => $this->pac_municipio,
            'pac_localidad' => $this->pac_localidad,
            'pac_dir_cp' => $this->pac_dir_cp,
            'pac_dir_colonia' => $this->pac_dir_cp,
            'pac_dir_calle' => $this->pac_dir_calle,
            'pac_dir_comentarios' => $this->pac_dir_comentarios,
            'pac_escolaridad' => $this->pac_escolaridad,
            'pac_f_nacimiento' => $this->pac_f_nacimiento,
            'pac_tipo' => $this->pac_tipo,
            'pac_cant_adicionales' => $this->pac_cant_adicionales,

            'pac_parentesco' => $this->pac_parentesco,
            'id_titular' => $this->id_titular,
        ];
    }
}
