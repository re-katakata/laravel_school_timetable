@extends('layouts.app')

@section('content')
        <link rel="stylesheet" href="../css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../script/index_jquely.js"></script>
       
        <div class="blackboard">
            <form id="tnurl" action="">
                <h2 id="tnLeft">時間割 No.<input id="tnRight" type="number" required="required" name="term_number" value={{$term_number}} min=1 /><input id="tnSubmit" type="submit" value="表示"></h2>
            </form>
            
            <h4 id="creditSum">合計単位数：{{$credit_sum}}</4>
            
            <div class="schedules">
                
                <div class="timeTable">
                    <div class="dayLine">
                        <h2 id="invisible" class="dotw">⬜︎</h2>
                        @for($j=1;$j<7;$j++)
                            <div class="leftPeriod">
                                <h2 class="leftP">{{$j}}</h2>
                            </div>
                        @endfor
                    </div>
                    
                    <div class="monday dayLine">
                        <h2 class="dotw">月</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks mondayPeriod{{$j}} mondayBlock ">
                                
                                <h5 class="className">{{$mondaySchedules[$j]['name']}}</h5>
                                <a href="/del/{{$mondaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/trash.png" width="28" height="28"></a>
                                <a href="/upd/{{$mondaySchedules[$j]['id']}}?dayN=0&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/pen.png" width="28" height="28"></a>
                                <div class="classDetail monday{{$j}}Detail">
                                    <p class="detailContents">場所：<span class="mondayDetailPlace{{$j}}">{{$mondaySchedules[$j]['place']}}</span></p>
                                    <p class="detailContents detailAbsence">欠席数：{{$mondaySchedules[$j]['absence']}}</p>
                                    <p class="detailContents detailCredit">単位数：{{$mondaySchedules[$j]['credit']}}</p>
                                    <p class="detailContents detailNote">メモ：<br>{{$mondaySchedules[$j]['note']}}</p>
                                    
                                </div>
                                
                            </div>
                            
                            

                        @endfor
                    </div>
                    
                    <div class="tuesday dayLine">
                        <h2 class="dotw">火</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks tuesdayPeriod{{$j}} tuesdayBlock">
                                
                                <h5 class="className">{{$tuesdaySchedules[$j]['name']}}</h5>
                                <a href="/del/{{$tuesdaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/trash.png" width="28" height="28"></a>
                                <a href="/upd/{{$tuesdaySchedules[$j]['id']}}?dayN=1&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/pen.png" width="28" height="28"></a>
                                <div class="classDetail tuesday{{$j}}Detail">
                                    <p class="detailContents">場所：<span class="tuesdayDetailPlace{{$j}}">{{$tuesdaySchedules[$j]['place']}}</span></p>
                                    <p class="detailContents detailAbsence">欠席数：{{$tuesdaySchedules[$j]['absence']}}</p>
                                    <p class="detailContents detailCredit">単位数：{{$tuesdaySchedules[$j]['credit']}}</p>
                                    <p class="detailContents detailNote">メモ：<br>{{$tuesdaySchedules[$j]['note']}}</p>
                                    
                                </div>  
                            </div>
                            
                                                  
                        @endfor

                    </div>
                    
                    <div class="wednesday dayLine">
                        <h2 class="dotw">水</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks wednesdayPeriod{{$j}} WednesdayBlock">
                                
                                <h5 class="className">{{$wednesdaySchedules[$j]['name']}}</h5>
                                <a href="/del/{{$wednesdaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/trash.png" width="28" height="28"></a>
                                <a href="/upd/{{$wednesdaySchedules[$j]['id']}}?dayN=2&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/pen.png" width="28" height="28"></a>
                                <div class="classDetail wednesday{{$j}}Detail">
                                    <p class="detailContents">場所：<span class="wednesdayDetailPlace{{$j}}">{{$wednesdaySchedules[$j]['place']}}</span></p>
                                    <p class="detailContents detailAbsence">欠席数：{{$wednesdaySchedules[$j]['absence']}}</p>
                                    <p class="detailContents detailCredit">単位数：{{$wednesdaySchedules[$j]['credit']}}</p>
                                    <p class="detailContents detailNote">メモ：<br>{{$wednesdaySchedules[$j]['note']}}</p>
                                    
                                </div> 
                            </div>
                            
                                                       
                        @endfor

                    </div>
                    
                    <div class="thursday dayLine">
                        <h2 class="dotw">木</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks thursdayPeriod{{$j}} thursdayBlock">
                                
                                <h5 class="className">{{$thursdaySchedules[$j]['name']}}</h5>
                                <a href="/del/{{$thursdaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/trash.png" width="28" height="28"></a>
                                <a href="/upd/{{$thursdaySchedules[$j]['id']}}?dayN=3&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/pen.png" width="28" height="28"></a>
                                <div class="classDetail thursday{{$j}}Detail">
                                    <p class="detailContents">場所：<span class="thursdayDetailPlace{{$j}}">{{$thursdaySchedules[$j]['place']}}</span></p>
                                    <p class="detailContents detailAbsence">欠席数：{{$thursdaySchedules[$j]['absence']}}</p>
                                    <p class="detailContents detailCredit">単位数：{{$thursdaySchedules[$j]['credit']}}</p>
                                    <p class="detailContents detailNote">メモ：<br>{{$thursdaySchedules[$j]['note']}}</p>
                                    
                                </div>
                            </div>
                            
                                                        
                        @endfor

                    </div>
                    
                    <div class="friday dayLine">
                        <h2 class="dotw">金</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks fridayPeriod{{$j}} fridayBlock">
                                
                                <h5 class="className">{{$fridaySchedules[$j]['name']}}</h5>
                                <a href="/del/{{$fridaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/trash.png" width="28" height="28"></a>
                                <a href="/upd/{{$fridaySchedules[$j]['id']}}?dayN=4&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/pen.png" width="28" height="28"></a>
                                <div class="classDetail friday{{$j}}Detail">
                                    <p class="detailContents">場所：<span class="fridayDetailPlace{{$j}}">{{$fridaySchedules[$j]['place']}}</span></p>
                                    <p class="detailContents detailAbsence">欠席数：{{$fridaySchedules[$j]['absence']}}</p>
                                    <p class="detailContents detailCredit">単位数：{{$fridaySchedules[$j]['credit']}}</p>
                                    <p class="detailContents detailNote">メモ：<br>{{$fridaySchedules[$j]['note']}}</p>
                                    
                                </div>
                            </div>
                            
                                                        
                        @endfor

                    </div>
                    
                    <div class="saturday dayLine">
                        <h2 class="dotw">土</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks saturdayPeriod{{$j}} saturdayBlock">
                                
                                <h5 class="className">{{$saturdaySchedules[$j]['name']}}</h5>
                                <a href="/del/{{$saturdaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/trash.png" width="28" height="28"></a>
                                <a href="/upd/{{$saturdaySchedules[$j]['id']}}?dayN=5&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/pen.png" width="28" height="28"></a>
                                <div class="classDetail saturday{{$j}}Detail">
                                    <p class="detailContents">場所：<span class="saturdayDetailPlace{{$j}}">{{$saturdaySchedules[$j]['place']}}</span></p>
                                    <p class="detailContents detailAbsence">欠席数：{{$saturdaySchedules[$j]['absence']}}</p>
                                    <p class="detailContents detailCredit">単位数：{{$saturdaySchedules[$j]['credit']}}</p>
                                    <p class="detailContents detailNote">メモ：<br>{{$saturdaySchedules[$j]['note']}}</p>
                                    
                                </div>
                            </div>
                            
                                                        
                        @endfor

                    </div>
                    
                    <div class="sunday dayLine">
                        <h2 class="dotw">日</h2>
                        @for($j=0;$j<6;$j++)
                            <div class="classBlocks sundayPeriod{{$j}} sundayBlock">
                                
                                <h5 class="className">{{$sundaySchedules[$j]['name']}}</h5>
                                <a href="/del/{{$sundaySchedules[$j]['id']}}?termN={{$term_number}}"><img class="deleteImage"  src="../Images/trash.png" width="28" height="28"></a>
                                <a href="/upd/{{$sundaySchedules[$j]['id']}}?dayN=6&periodN={{$j}}&termN={{$term_number}}"><img class="editImage" src="../Images/pen.png" width="28" height="28"></a>
                                <div class="classDetail sunday{{$j}}Detail">
                                    <p class="detailContents">場所：<span class="sundayDetailPlace{{$j}}">{{$sundaySchedules[$j]['place']}}</span></p>
                                    <p class="detailContents detailAbsence">欠席数：{{$sundaySchedules[$j]['absence']}}</p>
                                    <p class="detailContents detailCredit">単位数：{{$sundaySchedules[$j]['credit']}}</p>
                                    <p class="detailContents detailNote">メモ：<br>{{$sundaySchedules[$j]['note']}}</p>
                                </div>
                            </div>
                            
                                                      
                        @endfor

                    </div>
                    
                    
                </div>
                
            </div>
        </div>
        
        <script src="../script/index.js"></script>
@endsection