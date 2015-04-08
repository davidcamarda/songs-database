<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {

	protected $fillable = [

        'name',
        'working_name',
        'composer_id',
        'lyric_id'

    ];

    //return redirect('songs');

}
