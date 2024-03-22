<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory; // данный трейт позволяет нам наполнять базу фейковыми данными
    use SoftDeletes; // данный трейт подключает мягкое удаление данных, то есть данные не удалятся из самой таблицы
}
