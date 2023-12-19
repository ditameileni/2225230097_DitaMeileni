<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_UAS extends Model
{
    use HasFactory;

protected $table = 'project__u_a_s';
protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'email',
        'noTelepon',
        'jumlahTiket',
        'catTempatDuduk'
    ];
}
