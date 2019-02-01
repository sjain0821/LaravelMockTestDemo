<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class MockTest extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section_id','examination_id','test_name'
    ];

     /**
     * Get the post that owns the comment.
     */
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    /**
     * Get the post that owns the comment.
     */
    public function examination()
    {
        return $this->belongsTo('App\Models\Examination');
    }

}
