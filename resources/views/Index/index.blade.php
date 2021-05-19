 @extends('layouts.app')

@section('content')
        <link rel="stylesheet" href="../css/index.css">
        <script src="../script/index.js"></script>
       
        <div class="blackboard">
            <form id="tnurl" action="">
                <h2>時間割No.<input type="number" required="required" name="term_number" value={{$term_number}} min=1 /><input type="submit" value="表示"></h2>
            </form>
            
            <div class="schedules">
                
                <div class="timeTable">
                    <div class="dayLine">
                        <h2>　</h2>
                        @for($j=1;$j<7;$j++)
                            <div class="leftPeriod">
                                <h2 class="leftP">{{$j}}</h2>
                            </div>
                        @endfor
                    </div>
                    
                    <div class="monday dayLine">
                        <h2 class="dotw">月</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks mondayPeriod{{$j}} mondayBlock">
                                <p>月 : {{$periods[$j]}}限 </p>
                                <h4>{{$mondaySchedules[$j]['name']}}</h4>
                                <a href="/del/{{$mondaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/n0727.png" width="65" height="65"></a>
                                <a href="/upd/{{$mondaySchedules[$j]['id']}}?dayN=0&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/00038.png" width="28" height="28"></a>
                            </div>
                        @endfor
                    </div>
                    
                    <div class="tuesday dayLine">
                        <h2 class="dotw">火</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks tuesdayPeriod{{$j}} tuesdayBlock">
                                <p>火 : {{$periods[$j]}}限 </p>
                                <h4>{{$tuesdaySchedules[$j]['name']}}</h4>
                                <a href="/del/{{$tuesdaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/n0727.png" width="65" height="65"></a>
                                <a href="/upd/{{$tuesdaySchedules[$j]['id']}}?dayN=1&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/00038.png" width="28" height="28"></a>
                            </div>
                        @endfor

                    </div>
                    
                    <div class="wednesday dayLine">
                        <h2 class="dotw">水</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks wednesdayPeriod{{$j}} WednesdayBlock">
                                <p>水 : {{$periods[$j]}}限 </p>
                                <h4>{{$wednesdaySchedules[$j]['name']}}</h4>
                                <a href="/del/{{$wednesdaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/n0727.png" width="65" height="65"></a>
                                <a href="/upd/{{$wednesdaySchedules[$j]['id']}}?dayN=2&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/00038.png" width="28" height="28"></a>
                            </div>
                        @endfor

                    </div>
                    
                    <div class="thursday dayLine">
                        <h2 class="dotw">木</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks thursdayPeriod{{$j}} thursdayBlock">
                                <p>木 : {{$periods[$j]}}限 </p>
                                <h4>{{$thursdaySchedules[$j]['name']}}</h4>
                                <a href="/del/{{$thursdaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/n0727.png" width="65" height="65"></a>
                                <a href="/upd/{{$thursdaySchedules[$j]['id']}}?dayN=3&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/00038.png" width="28" height="28"></a>
                            </div>
                        @endfor

                    </div>
                    
                    <div class="friday dayLine">
                        <h2 class="dotw">金</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks fridayPeriod{{$j}} fridayBlock">
                                <p>金 : {{$periods[$j]}}限 </p>
                                <h4>{{$fridaySchedules[$j]['name']}}</h4>
                                <a href="/del/{{$fridaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/n0727.png" width="65" height="65"></a>
                                <a href="/upd/{{$fridaySchedules[$j]['id']}}?dayN=4&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/00038.png" width="28" height="28"></a>
                            </div>
                        @endfor

                    </div>
                    
                    <div class="saturday dayLine">
                        <h2 class="dotw">土</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks saturdaydayPeriod{{$j}} saturdayBlock">
                                <p>土 : {{$periods[$j]}}限 </p>
                                <h4>{{$saturdaySchedules[$j]['name']}}</h4>
                                <a href="/del/{{$saturdaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/n0727.png" width="65" height="65"></a>
                                <a href="/upd/{{$saturdaySchedules[$j]['id']}}?dayN=5&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/00038.png" width="28" height="28"></a>
                            </div>
                        @endfor

                    </div>
                    
                    <div class="sunday dayLine">
                        <h2 class="dotw">日</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks sundayPeriod{{$j}} sundayBlock">
                                <p>日 : {{$periods[$j]}}限 </p>
                                <h4>{{$sundaySchedules[$j]['name']}}</h4>
                                <a href="/del/{{$sundaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/n0727.png" width="65" height="65"></a>
                                <a href="/upd/{{$sundaySchedules[$j]['id']}}?dayN=6&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/00038.png" width="28" height="28"></a>
                            </div>
                        @endfor

                    </div>
                    
                    
                </div>
                
            </div>
        </div>
@endsection
