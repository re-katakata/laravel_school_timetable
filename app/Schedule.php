<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Schedule extends Model
{
    
    
    protected $fillable = [
        'term_number',
        'day_number',
        'period_number',
        'name',
        'place',
        'absence',
        'note',
        'credit',
    ];
    
    //名前をわかりやすく
    public function getMondaySchedules($term_number)
        {
            return $this ->orderBy('created_at', 'ASC')->where('term_number',$term_number)->where('day_number', '=',0)->get();
        }
        
    public function getTuesdaySchedules($term_number)
        {
            return $this ->orderBy('created_at', 'ASC')->where('term_number',$term_number)->where('day_number', '=',1)->get();
        }
    public function getWednesdaySchedules($term_number)
        {
            return $this ->orderBy('created_at', 'ASC')->where('term_number',$term_number)->where('day_number', '=',2)->get();
        }    
    public function getThursdaySchedules($term_number)
        {
            return $this ->orderBy('created_at', 'ASC')->where('term_number',$term_number)->where('day_number', '=',3)->get();
        } 
    public function getFridaySchedules($term_number)
        {
            return $this ->orderBy('created_at', 'ASC')->where('term_number',$term_number)->where('day_number', '=',4)->get();
        } 
    public function getSaturdaySchedules($term_number)
        {
            return $this ->orderBy('created_at', 'ASC')->where('term_number',$term_number)->where('day_number', '=',5)->get();
        }
    public function getSundaySchedules($term_number)
        {
            return $this ->orderBy('created_at', 'ASC')->where('term_number',$term_number)->where('day_number', '=',6)->get();
        }     
}

