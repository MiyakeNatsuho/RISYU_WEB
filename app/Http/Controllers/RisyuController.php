<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\subjectRequest;
use App\Models\Subject;
use App\Models\Credit;

class RisyuController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function confirm(Request $request)
    {
        $subject = $request->subject;
        $category = $request->category;
        $credit = $request->credit;
        return view('confirm',compact(
            'subject',
            'category',
            'credit'
        ));
    }

    public function subjectIndex()
    {
        $senmon = Subject::where('category', '専門科目')->where('complete', 0)->get();
        $senmonkiso = Subject::where('category', '専門基礎科目')->where('complete', 0)->get();
        $kyouyou = Subject::where('category', '教養科目')->where('complete', 0)->get();
        $hissu = Subject::where('category', '必須科目')->where('complete', 0)->get();
        
        return view('course_list', compact('senmon', 'senmonkiso', 'kyouyou', 'hissu'));
    }

    public function creditIndex()
    {
        $specialized = Credit::where('category', '専門科目')->first();
        $base = Credit::where('category', '専門基礎科目')->first();
        $libral = Credit::where('category', '教養科目')->first();
        $necessary = Credit::where('category', '必須科目')->first();

        $senmon = Subject::where('category', '専門科目')->where('complete', 1)->get();
        $senmon = $senmon->count();
        $senmonkiso = Subject::where('category', '専門基礎科目')->where('complete', 1)->get();
        $senmonkiso = $senmonkiso->count();
        $kyouyou = Subject::where('category', '教養科目')->where('complete', 1)->get();
        $kyouyou = $kyouyou->count();
        $hissu = Subject::where('category', '必須科目')->where('complete', 1)->get();
        $hissu = $hissu->count();

        
        return view('get_credit', compact('specialized', 'base', 'libral', 'necessary', 'senmon', 'senmonkiso', 'kyouyou', 'hissu'));
    }

    public function graduationSetting()
    {
        $specialized = Credit::where('category', '専門科目')->first();
        $base = Credit::where('category', '専門基礎科目')->first();
        $libral = Credit::where('category', '教養科目')->first();
        $necessary = Credit::where('category', '必須科目')->first();
        return view('graduation_credit', compact('specialized', 'base', 'libral', 'necessary'));
    }
    
    public function postIndex(Request $request)
    {
        $specialized = Credit::where('category', '専門科目')->first();
        $base = Credit::where('category', '専門基礎科目')->first();
        $libral = Credit::where('category', '教養科目')->first();
        $necessary = Credit::where('category', '必須科目')->first();
        $specialized->credit = $request->specialized;
        $specialized->save();
        $base->credit = $request->base;
        $base->save();
        $libral->credit = $request->libral;
        $libral->save();
        $necessary->credit = $request->necessary;
        $necessary->save();
        return view('graduation_credit', compact('specialized', 'base', 'libral', 'necessary'));
    }

    public function subjectIndexStore(Request $request){
        
        if($request->pick_up){
            $subject = Subject::find($request->pick_up);
            $subject->complete = 1;
            $subject->save();
        }else if($request->quit){
            $subject = Subject::find($request->quit);
            $subject->delete();
        }else{
            $subject = Subject::find($request->drop);
            $subject->delete();
        }

        return redirect('/');
        
    }
    public function passwordEdit()
    {
        return view('password_change');
    }
    public function store(Request $request)
    {
        $subject = new Subject;
        $subject->subject = $request->subject;
        $subject->category = $request->category;
        $subject->credit = $request->credit;
        $subject->save();
        
        return redirect('/');
    }
}