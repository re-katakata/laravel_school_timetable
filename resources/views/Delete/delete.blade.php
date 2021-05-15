<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>school timetable delete</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <div class="day_period">
            <h2>{{$days[$schedule->day_number]}}：{{$periods[$schedule->period_number]}}限</h2>
        </div>
        <h2>講義名：{{$schedule->name}}</h2>
        <h3>内容を削除しますか？</h3>
        <div class="yes_no_buttons">
            <div class="delete_yes button">
                <form action="/schedules/{{$schedule->id}}/delete?term_number={{$tN}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="はい"/>
                </form>
            </div>
            <div class="delete_no button">
                <a href="/ind?term_number={{$tN}}"><p>いいえ</p></a>
            </div>
        </div>
        
    </body>
</html>