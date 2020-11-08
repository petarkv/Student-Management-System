<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admission
 * @package App\Models
 * @version November 1, 2020, 6:44 pm UTC
 *
 * @property string $role_no
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $mother_name
 * @property string $contact_phone
 * @property string $gender
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property string $current_address
 * @property string $nationality
 * @property string $passport
 * @property boolean $status
 * @property string $date_registered
 * @property integer $user_id
 * @property integer $class_id
 * @property string $image
 */
class Admission extends Model
{
    use SoftDeletes;

    public $table = 'admissions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'role_no',
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'contact_phone',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'date_registered',
        'user_id',
        'class_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'role_no' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'mother_name' => 'string',
        'contact_phone' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'user_id' => 'integer',
        'class_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'role_no' => 'required|string|max:191',
        'first_name' => 'required|string|max:191',
        'last_name' => 'required|string|max:191',
        'father_name' => 'required|string|max:191',
        'mother_name' => 'required|string|max:191',
        'contact_phone' => 'required|string|max:191',
        'gender' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'dob' => 'required',
        'phone' => 'required|string|max:191',
        'address' => 'required|string',
        'current_address' => 'required|string|max:191',
        'nationality' => 'required|string|max:191',
        'passport' => 'required|string|max:191',
        'status' => 'required|boolean',
        'date_registered' => 'required',
        'user_id' => 'required|integer',
        'class_id' => 'required|integer',
        'image' => 'nullable|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
