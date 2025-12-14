<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';

    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones'
    ];

    public static function getVehiculos()
    {
        return self::all();
    }

    public static function getVehiculosById($id)
    {
        return self::find($id);
    }

    public static function createVehiculo(array $data)
    {
        return self::create($data);
    }

    public static function updateVehiculo(Request $data, $id)
    {
        $vehiculo = self::findOrFail($id);
        $vehiculo->update($data);
        return $vehiculo;
    }

    public static function deleteVehiculo($id)
    {
        return self::destroy($id);
    }
}
