<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>school timetable editer</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="day_period">
            <h2>月 3限</h2>
        </div>
        
        <div class="class_name_input">
            <p>講義名 :</p>
            <input>
        </div>
        
        <div class="place_input">
            <p>場所 :</p>
            <input>
        </div>
        
        <div class="absence_counter_input">
            <p>欠席数 :</p>
            <div class="counter_buttons">
                <p class="button minus">＜</p>
                <p class="absense_count">0</p>
                <p class="button plus">＞</p>
            </div>
        </div>
        
        <div class="note_input">
            <p>メモ :</p>
            <textarea></textarea>
        </div>
        
        <div class="credit_counter_input">
            <p>単位数 :</p>
            <div class="counter_buttons">
                <p class="button minus">＜</p>
                <p class="credit_count">2</p>
                <p class="button plus">＞</p>
            </div>
        </div>
        
        <div class="submit_button">
            <h2>保存</h2>
        </div>
        
        
    </body>
</html>