@extends('layouts.app')

@section('content')
        <link rel="stylesheet" href="../css/update.css">
        <div class="formContents">
            <div class="day_period">
                <h2>{{$days[$dN]}}：{{$periods[$pN]}}限</h2>
            </div>
            <a class="toInd" href="/ind?term_number={{$tN}}">時間割へ</a>
            
            <form action="/schedules?term_number={{$tN}}" method="POST">
                
                @csrf
                <div class="term_number">
                    <input type="tel" name="schedule[user_id]" value={{$user_id}} />
                </div>
                
                <div class="term_number">
                    <input type="tel" name="schedule[term_number]" value={{$tN}} />
                </div>
                
                <div class="day_number">
                    <input type="tel" name="schedule[day_number]" value={{$dN}} />
                </div>
                
                <div class="period_number">
                    <input type="tel" name="schedule[period_number]" value={{$pN}} />
                </div>
                
                <div class="class_name_input">
                    <p>講義名：<input type="text" name="schedule[name]" required/></p>
                    
                </div>
                
                <div class="place_input">
                    <p>　場所：<input type="text" name="schedule[place]" /></p>
                    <p class="urlok">（URLを貼り付けることもできます）</p>
                    
                </div>
                
                <div class="absence_counter_input">
                    <p>欠席数：<input type="number" name="schedule[absence]" value=0 min=0 required/></p>
                    
                </div>
                
                <div class="credit_counter_input">
                    <p>単位数：<input type="number" name="schedule[credit]" value="2" min=0 required/></p>
                    
                </div>
                
                <div class="note_input">
                    <p>　メモ：</p>
                    <textarea class="noteContents"  name="schedule[note]" cols="40" rows="6"></textarea>
                </div>
                
                
                
                <div class="submit_button_content">
                    <input class="submit_button" type="submit" value="保存" />
                </div>
                
            </form>
            
        </div>
        
@endsection