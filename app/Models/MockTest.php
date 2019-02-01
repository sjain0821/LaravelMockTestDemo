<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class MockTest extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section_id','examination_id','test_name','max_question'
    ];

    public function getMockTests($mock_tests)
    {
        return DB::table('mock_tests')
               ->join('sections', 'mock_tests.section_id', '=', 'sections.id')
               ->select('mock_tests.section_id','section_name','mock_tests.test_id as id','max_question')
               ->where('test_name',$mock_tests)
               ->get();
    }

}
