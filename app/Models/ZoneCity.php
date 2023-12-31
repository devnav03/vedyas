<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZoneCity extends Model {
    use SoftDeletes;

    protected $fillable = [
        'name', 'state_id', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];

    
    public function store($input, $id = null) {
        if ($id) {
            return $this->find($id)->update($input);
        } else {
            return $this->create($input)->id;
        }
    }


}
