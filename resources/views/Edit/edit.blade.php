<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>school timetable editer</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            .term_number{
                display:none;   
            }
            .day_number{
                display:none;
            }
            .period_number{
                display:none;
            }
        </style>
        
    </head>
    <body>
        
        <div class="day_period">
            <h2>{{$days[$dN]}}：{{$periods[$pN]}}限</h2>
        </div>
        
        <form action="/schedules/{{$schedule->id}}?term_number={{$tN}}" method="POST">
            
            @csrf
            @method('PUT')
            <div class="term_number">
                <input type="tel" name="schedule[term_number]" value={{$tN}} />
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
                <input type="text" name="schedule[name]" value='{{$schedule->name}}'/>
            </div>
            
            <div class="place_input">
                <p>場所 : </p>
                <input type="text" name="schedule[place]" value='{{$schedule->place}}'/>
            </div>
            
            <div class="absence_counter_input">
                <p>欠席数 :</p>
                <input type="tel" name="schedule[absence]" value={{$schedule->absence}} >
            </div>
            
            <div class="note_input">
                <p>メモ : </p>
                <textarea name="schedule[note]" >{{$schedule->note}}</textarea>
            </div>
            
            <div class="credit_counter_input">
                <p>単位数 :</p>
                <input type="tel" name="schedule[credit]" value={{$schedule->credit}} >
            </div>
            
            <div class="submit_button">
                <input type="submit" value="更新" />
            </div>
            
        </form>
        
        <a href="/ind?term_number={{$tN}}">戻る</a>
        
    </body>
</html>