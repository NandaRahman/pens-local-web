<?php

namespace App\Models;

/*
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * THIS FILE IS AUTO-GENERATED BY AUTOMODEL:TABLE COMMAND
 * ANY CHANGES MADE TO THIS FILE MAY BE LOST
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */

use Illuminate\Database\Eloquent\Model;

/**
 * No description found in the table comment.
 *
 * Class Absen
 * @package App\Models
 *
 * @property integer $id
 * @property integer $id_siswa
 * @property integer $id_jadwal
 * @property string $status
 * @property \Carbon\Carbon $absence_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \App\Models\Jadwal $jadwal
 * @property \App\Models\Siswa $siswa
 */
class Absen extends Model 
{

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'absen';


	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = ['pivot'];


	/**
	 * The attributes appended to the model's JSON form.
	 *
	 * @var array
	 */
	protected $appends = [];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['absence_at', 'created_at', 'updated_at'];



	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function jadwal()
	{
		return $this->belongsTo(
			// Model
			'App\Models\Jadwal',
			// Foreign key
			'id',
			// Other key
			'id_jadwal'
		);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function siswa()
	{
		return $this->belongsTo(
			// Model
			'App\Models\Siswa',
			// Foreign key
			'id',
			// Other key
			'id_siswa'
		);
	}



}
