<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table ='stores';
    const HOT = 1;
    const STATUS_PUBLIC =1;
    const STATUS_PRIVATE =0;
    protected $status = [
        1=>[
            'name'=>'Public',
            'class'=>'label-danger'
        ],
        0=>[
            'name'=>'Private',
            'class'=>'label-default'
        ]
    ];
    protected $hot = [
        1=>[
            'name'=>'Hot',
            'class'=>'label-danger'
        ],
        0=>[
            'name'=>'None',
            'class'=>'label-default'
        ]
    ];
    public function getStatus()
    {
        return data_get($this->status,$this->sto_active,'[N\A]');
    }
    public function getHot()
    {
        return data_get($this->hot,$this->sto_hot,'[N\A]');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'sto_category_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class,'sto_area_id');
    }
}
