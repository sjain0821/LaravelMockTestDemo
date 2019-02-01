<?php

namespace App\Modules\Answers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Crypt,Validator;
use App\Models\Answers;

class AnswersController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAnswer($id)
    {  
        $data['id'] = $id;
        $id = Crypt::decrypt($id);
        $this->answerObj = new Answers;
        $data['answers'] = $this->answerObj->getAnswers($id)->toArray();
        return view("Answers::add",$data);
    }

    /**
     * @DateOfCreation      31 January 2019
     * @ShortDescription    This function handles add examination form submission
     * @param               Request $request Array containing request data
     * @param               $id
     * @return              View
     */
    public function postAnswer(Request $request)
    {
        $rules = array(
            'answer'            => 'required',
        );
        $id = $request->id;
         if(!empty($id)){
            $id = Crypt::decrypt($id);
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        } else {
            $formData = [
                'answer'=> $request->answer,
                'question_id'=>$id
            ];
            $answers = Answers::where('question_id',$id)->get()->toArray();
            try{
                if(empty($answers)){
                    Answers::create($formData);
                    return redirect()->back()->with('status','Answer Added Successfully');
                }
                else{
                    Answers::where('question_id',$id)->update($formData);
                    return redirect()->back()->with('status','Answer updated Successfully');
                }
            }catch(Exception $e){
               return redirect()->back()->with("error",' The examination name has already been taken ');
            }            
        }
    }

}
