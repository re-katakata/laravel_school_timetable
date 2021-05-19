@extends('layouts.app')

@section('content')
        <link rel="stylesheet" href="../css/delete.css">
        <div class="day_period">
            <h2>{{$days[$schedule->day_number]}}：{{$periods[$schedule->period_number]}}限</h2>
        </div>
        <h2>講義名：{{$schedule->name}}</h2>
        <h3>内容を削除しますか？</h3>
        <div class="yes_no_buttons">
            <div class="delete_yes button">
                <form action="/schedules/{{$schedule->id}}/delete?term_number={{$schedule->term_number}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="はい"/>
                </form>
            </div>
            <div class="delete_no button">
                <a href="/ind?term_number={{$schedule->term_number}}"><p>いいえ</p></a>
            </div>
        </div>
@endsection