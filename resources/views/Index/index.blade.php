<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>school timetable app</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                margin: 0;
            }
            
            .schedule{
                height:210px;
                width:170px;
                margin:3px;
                border-radius:5px;
                background-color:green;
            }
            
            .day6{
                background-color:red;
            }
            
            
        </style>
    </head>
    <body>
        
        <div class="blackboard">
            <h1 id="main_title">時間割</h1>
            <div>
                
            </div>
            <div class="schedules">
                @php
                $days=["月","火","水","木","金","土","日"];
                $periods=["1","2","3","4","5","6"];
                @endphp
                @for($i=0;$i<42;$i++)
                    @php
                    $n=floor($i/6);
                    $m=$i%6;
                    $day=$days[$n];
                    $period=$periods[$m];
                    @endphp
                    <div class="schedule day{{$n}} period{{$period}}">
                        <p>{{$day}} : {{$period}}限 </p>
                        <h2 class="className">講義名</h2>
                        <p class="place">講義場所</p>
                        <div class="edit_button">
                            <img src="../Images/00038.png" alt="edit_icon" width="30" height="30">
                        </div>
                        <div class="delete_button">
                            <img src="..Images/n0727.png" alt="delete_icon" width="30" height="30">
                        </div>
                    </div>
                    
                @endfor
            </div>
        </div>
    </body>
</html>
