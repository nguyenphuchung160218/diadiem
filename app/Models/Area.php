<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table ='areas';
    const HOME_PUBLIC =1;
    const HOME_PRIVATE =0;
    protected $home = [
        1=>[
            'name'=>'Public',
            'class'=>'label-primary'
        ],
        0=>[
            'name'=>'Private',
            'class'=>'label-default'
        ]
    ];
    public function getHome()
    {
        return data_get($this->home,$this->area_home,'[error]');
    }
}

