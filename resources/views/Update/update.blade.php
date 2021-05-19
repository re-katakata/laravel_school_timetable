@extends('layouts.app')

@section('content')
        <link rel="stylesheet" href="../css/update.css">
        <div class="day_period">
            <h2>{{$days[$dN]}}：{{$periods[$pN]}}限</h2>
        </div>
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
                <p>講義名 : </p>
                <!--バリデーション実装-->
                <input type="text" name="schedule[name]" required/>
            </div>
            
            <div class="place_input">
                <p>場所 : </p>
                <input type="text" name="schedule[place]" />
            </div>
            
            <div class="absence_counter_input">
                <p>欠席数 :</p>
                <input type="number" name="schedule[absence]" value=0 min=0 />
            </div>
            
            <div class="note_input">
                <p>メモ : </p>
                <textarea name="schedule[note]"></textarea>
            </div>
            
            <div class="credit_counter_input">
                <p>単位数 :</p>
                <input type="number" name="schedule[credit]" value="2" min=0 />
            </div>
            
            <div class="submit_button">
                <input type="submit" value="保存" />
            </div>
            
        </form>
        
        <a href="/ind?term_number={{$tN}}">戻る</a>
@endsection