<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationOccurrence extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "time",
        "requester",
        "anonymous",
        "phone",
        "city",
        "address",
        "number",
        "complement",
        "neighborhood",
        "reference",
        "bpmm_id",
        "natureOfOccurrence_id",
        "policeInDanger",
        "cellularImeiNumber",
        "cellularModel",
        "cellularBrand",
        "cellularStatus",
        "vehiclePlate",
        "vehicleBrand",
        "vehicleModel",
        "vehicleColor",
        "vehicleChassis",
        "vehicleStatus",
        "peopleRg",
        "peopleName",
        "peopleStatus",
        "status",
        "view",
        "situation",
        "observation",
        "attendance",
        "log",
    ];

    public function bpmm()
    {
        return $this->belongsTo(Bpmm::class);
    }
    public function natureOfOccurrence()
    {
        return $this->belongsTo(NatureOfOccurrence::class);
    }
}
