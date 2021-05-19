@extends('layouts.app')

@section('content')
        <link rel="stylesheet" href="../css/edit.css">
        <div class="day_period">
            <h2>{{$days[$schedule->day_number]}}：{{$periods[$schedule->period_number]}}限</h2>
        </div>
        <form action="/schedules/{{$schedule->id}}?term_number={{$schedule->term_number}}" method="POST">
            
            @csrf
            @method('PUT')
            <div class="term_number">
                <input type="tel" name="schedule[user_id]" value={{$user_id}} />
            </div>
            
            <div class="term_number">
                <input type="tel" name="schedule[term_number]" value={{$schedule->term_number}} />
            </div>
            
            <div class="day_number">
                <p>曜日（月＝０）</p>
                <input type="tel" name="schedule[day_number]" value={{$schedule->day_number}} >
            </div>
            
            <div class="period_number">
                <p>時限（1時限＝０）</p>
                <input type="tel" name="schedule[period_number]" value={{$schedule->period_number}} >
            </div>
            
            <div class="class_name_input">
                <p>講義名 : </p>
                <!--バリデーション実装-->
                <input type="text" name="schedule[name]" value='{{$schedule->name}}' required/>
            </div>
            
            <div class="place_input">
                <p>場所 : </p>
                <input type="text" name="schedule[place]" value='{{$schedule->place}}' />
            </div>
            
            <div class="absence_counter_input">
                <p>欠席数 :</p>
                <input type="number" name="schedule[absence]" value={{$schedule->absence}} min=0 />
            </div>
            
            <div class="note_input">
                <p>メモ : </p>
                <textarea name="schedule[note]" >{{$schedule->note}}</textarea>
            </div>
            
            <div class="credit_counter_input">
                <p>単位数 :</p>
                <input type="number" name="schedule[credit]" value={{$schedule->credit}} min=0 />
            </div>
            
            <div class="submit_button">
                <input type="submit" value="更新" />
            </div>
            
        </form>
        
        <a href="/ind?term_number={{$schedule->term_number}}">戻る</a>
@endsection