<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function showIndex(Schedule $schedule)
    {
        //ログイン時に'user_id'をパラメータで渡せる？
        //それともログイン中のuserに対応しているdbのuser_idを取得するメソッドがある？
        //user_id取得後はそれを各viewにパラメータとして渡し、データの登録、更新時に見えない項目として設置
        
        $user_id=Auth::id();
        $credit_sum=0;
        
        if(isset($_GET['term_number']))
        {
            $term_number=$_GET['term_number'];
        }else{
            $term_number=1;
        }
        $mondaySchedules = $schedule->getMondaySchedules($term_number,$user_id);
        $mondayArray=[];
        
        for($i=0;$i<6;$i++){
            array_push($mondayArray,
            [
                'id'=>null,
                'name'=>'',
                'place'=>'',
                'absence'=>0,
                'note'=>'',
                'credit'=>0
            ]);
        }
        
        
        foreach ($mondaySchedules as $mondaySchedule) {
            $mondaySchedulePeriod = $mondaySchedule->period_number;
            $mondayArray[$mondaySchedulePeriod]['id']=$mondaySchedule->id;
            $mondayArray[$mondaySchedulePeriod]['name']=$mondaySchedule->name;
            $mondayArray[$mondaySchedulePeriod]['place']=$mondaySchedule->place;
            $mondayArray[$mondaySchedulePeriod]['absence']=$mondaySchedule->absence;
            $mondayArray[$mondaySchedulePeriod]['note']=$mondaySchedule->note;
            $mondayArray[$mondaySchedulePeriod]['credit']=$mondaySchedule->credit;
            $credit_sum+=$mondaySchedule->credit;
        }
        
        
    //火曜日の表示用配列生成
        $tuesdaySchedules = $schedule->getTuesdaySchedules($term_number,$user_id);
        $tuesdayArray=[];
        
         for($i=0;$i<6;$i++){
            array_push($tuesdayArray,
            [
                'id'=>null,
                'name'=>'',
                'place'=>'',
                'absence'=>0,
                'note'=>'',
                'credit'=>0
            ]);
        }
        
        foreach ($tuesdaySchedules as $tuesdaySchedule) {
            $tuesdaySchedulePeriod = $tuesdaySchedule->period_number;
            $tuesdayArray[$tuesdaySchedulePeriod]['id']=$tuesdaySchedule->id;
            $tuesdayArray[$tuesdaySchedulePeriod]['name']=$tuesdaySchedule->name;
            $tuesdayArray[$tuesdaySchedulePeriod]['place']=$tuesdaySchedule->place;
            $tuesdayArray[$tuesdaySchedulePeriod]['absence']=$tuesdaySchedule->absence;
            $tuesdayArray[$tuesdaySchedulePeriod]['note']=$tuesdaySchedule->note;
            $tuesdayArray[$tuesdaySchedulePeriod]['credit']=$tuesdaySchedule->credit;
            $credit_sum+=$tuesdaySchedule->credit;
        }
        
        
     //水曜日の表示用配列生成
        $wednesdaySchedules = $schedule->getWednesdaySchedules($term_number,$user_id);
        $wednesdayArray=[];
        
        for($i=0;$i<6;$i++){
            array_push($wednesdayArray,
            [
                'id'=>null,
                'name'=>'',
                'place'=>'',
                'absence'=>0,
                'note'=>'',
                'credit'=>0
            ]);
        }
        
        foreach ($wednesdaySchedules as $wednesdaySchedule) {
            $wednesdaySchedulePeriod = $wednesdaySchedule->period_number;
            $wednesdayArray[$wednesdaySchedulePeriod]['id']=$wednesdaySchedule->id;
            $wednesdayArray[$wednesdaySchedulePeriod]['name']=$wednesdaySchedule->name;
            $wednesdayArray[$wednesdaySchedulePeriod]['place']=$wednesdaySchedule->place;
            $wednesdayArray[$wednesdaySchedulePeriod]['absence']=$wednesdaySchedule->absence;
            $wednesdayArray[$wednesdaySchedulePeriod]['note']=$wednesdaySchedule->note;
            $wednesdayArray[$wednesdaySchedulePeriod]['credit']=$wednesdaySchedule->credit;
            $credit_sum+=$wednesdaySchedule->credit;
        }
        
        
     //木曜日の表示用配列生成
        $thursdaySchedules = $schedule->getThursdaySchedules($term_number,$user_id);
        $thursdayArray=[];
        
        for($i=0;$i<6;$i++){
            array_push($thursdayArray,
            [
                'id'=>null,
                'name'=>'',
                'place'=>'',
                'absence'=>0,
                'note'=>'',
                'credit'=>0
            ]);
        }
        
        foreach ($thursdaySchedules as $thursdaySchedule) {
            $thursdaySchedulePeriod = $thursdaySchedule->period_number;
            $thursdayArray[$thursdaySchedulePeriod]['id']=$thursdaySchedule->id;
            $thursdayArray[$thursdaySchedulePeriod]['name']=$thursdaySchedule->name;
            $thursdayArray[$thursdaySchedulePeriod]['place']=$thursdaySchedule->place;
            $thursdayArray[$thursdaySchedulePeriod]['absence']=$thursdaySchedule->absence;
            $thursdayArray[$thursdaySchedulePeriod]['note']=$thursdaySchedule->note;
            $thursdayArray[$thursdaySchedulePeriod]['credit']=$thursdaySchedule->credit;
            $credit_sum+=$thursdaySchedule->credit;
        }
        
        
     //金曜日の表示用配列生成
        $fridaySchedules = $schedule->getFridaySchedules($term_number,$user_id);
        $fridayArray=[];
        
        for($i=0;$i<6;$i++){
            array_push($fridayArray,
            [
                'id'=>null,
                'name'=>'',
                'place'=>'',
                'absence'=>0,
                'note'=>'',
                'credit'=>0
            ]);
        }
        
        foreach ($fridaySchedules as $fridaySchedule) {
            $fridaySchedulePeriod = $fridaySchedule->period_number;
            $fridayArray[$fridaySchedulePeriod]['id']=$fridaySchedule->id;
            $fridayArray[$fridaySchedulePeriod]['name']=$fridaySchedule->name;
            $fridayArray[$fridaySchedulePeriod]['place']=$fridaySchedule->place;
            $fridayArray[$fridaySchedulePeriod]['absence']=$fridaySchedule->absence;
            $fridayArray[$fridaySchedulePeriod]['note']=$fridaySchedule->note;
            $fridayArray[$fridaySchedulePeriod]['credit']=$fridaySchedule->credit;
            $credit_sum+=$fridaySchedule->credit;
        }
        
        
     //土曜日の表示用配列生成
        $saturdaySchedules = $schedule->getSaturdaySchedules($term_number,$user_id);
        $saturdayArray=[];
        
        for($i=0;$i<6;$i++){
            array_push($saturdayArray,
            [
                'id'=>null,
                'name'=>'',
                'place'=>'',
                'absence'=>0,
                'note'=>'',
                'credit'=>0
            ]);
        }
        
        foreach ($saturdaySchedules as $saturdaySchedule) {
            $saturdaySchedulePeriod = $saturdaySchedule->period_number;
            $saturdayArray[$saturdaySchedulePeriod]['id']=$saturdaySchedule->id;
            $saturdayArray[$saturdaySchedulePeriod]['name']=$saturdaySchedule->name;
            $saturdayArray[$saturdaySchedulePeriod]['place']=$saturdaySchedule->place;
            $saturdayArray[$saturdaySchedulePeriod]['absence']=$saturdaySchedule->absence;
            $saturdayArray[$saturdaySchedulePeriod]['note']=$saturdaySchedule->note;
            $saturdayArray[$saturdaySchedulePeriod]['credit']=$saturdaySchedule->credit;
            $credit_sum+=$saturdaySchedule->credit;
        }
        
        
     //日曜日の表示用配列生成
        $sundaySchedules = $schedule->getSundaySchedules($term_number,$user_id);
        $sundayArray=[];
        
        for($i=0;$i<6;$i++){
            array_push($sundayArray,
            [
                'id'=>null,
                'name'=>'',
                'place'=>'',
                'absence'=>0,
                'note'=>'',
                'credit'=>0
            ]);
        }
        
        foreach ($sundaySchedules as $sundaySchedule) {
            $sundaySchedulePeriod = $sundaySchedule->period_number;
            $sundayArray[$sundaySchedulePeriod]['id']=$sundaySchedule->id;
            $sundayArray[$sundaySchedulePeriod]['name']=$sundaySchedule->name;
            $sundayArray[$sundaySchedulePeriod]['place']=$sundaySchedule->place;
            $sundayArray[$sundaySchedulePeriod]['absence']=$sundaySchedule->absence;
            $sundayArray[$sundaySchedulePeriod]['note']=$sundaySchedule->note;
            $sundayArray[$sundaySchedulePeriod]['credit']=$sundaySchedule->credit;
            $credit_sum+=$sundaySchedule->credit;
        }
        
        //dd($mondayArray);
        $days=["月","火","水","木","金","土","日"];
        $periods=[1,2,3,4,5,6];
        
        return view('Index/index')->with([
            'mondaySchedules' => $mondayArray,
            'tuesdaySchedules' => $tuesdayArray,
            'wednesdaySchedules' => $wednesdayArray,
            'thursdaySchedules' => $thursdayArray,
            'fridaySchedules' => $fridayArray,
            'saturdaySchedules' => $saturdayArray,
            'sundaySchedules' => $sundayArray,
            'days' => $days,
            'periods' => $periods,
            'term_number' =>$term_number,
            'credit_sum'=>$credit_sum,
        ]);
        
        
    }
    
    
    
    public function showUpdate(Schedule $schedule)
    {
        
        $days=["月","火","水","木","金","土","日"];
        $periods=[1,2,3,4,5,6];
        $dN=$_GET['dayN'];
        $pN=$_GET['periodN'];
        $term_number=$_GET['termN'];
        $user_id=Auth::id();
        return view('Update/update')->with([
            'schedule' => $schedule,
            'days'=>$days,
            'periods'=>$periods,
            'dN'=>$dN,
            'pN'=>$pN,
            'tN'=>$term_number,
            'user_id'=>$user_id,
            ]);
    }
    
    public function showEdit(Schedule $schedule)
    {
        $user_id=Auth::id();
        $data_user_id=$schedule->user_id;
        $term_number=$_GET['termN'];
        //ifで該当した時だけ
        
        if($user_id == $data_user_id){
            $days=["月","火","水","木","金","土","日"];
            $periods=[1,2,3,4,5,6];
            $dN=$_GET['dayN'];
            $pN=$_GET['periodN'];
            $term_number=$_GET['termN'];
            return view('Edit/edit')->with([
                'schedule' => $schedule,
                'days'=>$days,
                'periods'=>$periods,
                'tN'=>$term_number,
                'user_id'=>$user_id,
               ]);
        }else{
            return redirect('/ind?term_number='.$term_number);
        }
        
    }
    
    public function showDelete(Schedule $schedule)
    {
        $user_id=Auth::id();
        $data_user_id=$schedule->user_id;
        $term_number=$_GET['termN'];
        
        if($user_id == $data_user_id){
            $days=["月","火","水","木","金","土","日"];
            $periods=[1,2,3,4,5,6];
            return view('Delete/delete')->with([
                'schedule' => $schedule,
                'days'=>$days,
                'periods'=>$periods,
                'tN'=>$term_number,
            ]);
        }else{
            return redirect('/ind?term_number='.$term_number);
        }

    }
    
    public function showIndexFromDel()
    {
        $term_number=$_GET['termN'];
        return redirect('/ind?term_number='.$term_number);
    }
    
    public function store(Request $request, Schedule $schedule)
    {
        $input = $request['schedule'];
        $schedule->fill($input)->save();
        $term_number=$_GET['term_number'];
        return redirect('/ind?term_number='.$term_number);
    }
    
    public function delete(Schedule $schedule)
    {
        $schedule->delete();
        $term_number=$_GET['term_number'];
        return redirect('/ind?term_number='.$term_number);
    }

    public function edit(Request $request, Schedule $schedule)
    {
        $input_schedule = $request['schedule'];
        $schedule->fill($input_schedule)->save();
        $term_number=$_GET['term_number'];
        return redirect('/ind?term_number='.$term_number);
    }
}
