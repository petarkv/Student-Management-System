<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teacher
 * @package App\Models
 * @version November 1, 2020, 6:44 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property string $nationality
 * @property string $passport
 * @property boolean $status
 * @property string $date_registered
 * @property integer $user_id
 * @property string $image
 */
class Teacher extends Model
{
    use SoftDeletes;

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'nationality',
        'passport',
        'status',
        'date_registered',
        'user_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'user_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:191',
        'last_name' => 'required|string|max:191',
        'gender' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'dob' => 'required',
        'phone' => 'required|string|max:191',
        'address' => 'required|string',
        'nationality' => 'required|string|max:191',
        'passport' => 'required|string|max:191',
        'status' => 'required|boolean',
        'date_registered' => 'required',
        'user_id' => 'required|integer',
        'image' => 'nullable|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
