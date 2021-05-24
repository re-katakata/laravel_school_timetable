
document.addEventListener( 'DOMContentLoaded' , function( e ) {
    
    const termChanger=()=>{
        let trm = document.getElementsByName("term_number");
        document.getElementById('tnurl').action="/ind?term_number="+trm;
    };
    termChanger();
    
    const days=["monday","tuesday","wednesday","thursday","friday","saturday","sunday"];

    const onOffClassDetail=()=>{
        
        for(let i=0;i<7;i++){
            for(let j=0;j<6;j++){
                
                const classDetailShowPoint=days[i]+"Period"+j;
                const classDetail=days[i]+j+"Detail";
                const getClassDetailShowPoint=document.querySelector("."+classDetailShowPoint);
                const getClassDetail=document.querySelector("."+classDetail);
                
                getClassDetailShowPoint.addEventListener("click",function(){
                    
                    getClassDetail.style.opacity=0.9;
                    getClassDetail.style.display="block";
                });
                
                getClassDetailShowPoint.addEventListener("mouseleave",function(){
                    
                    getClassDetail.style.opacity=0;
                    getClassDetail.style.display="none";
                     
                });
                
            }
        }
        
    };
    onOffClassDetail();
    
    
    const makeUrlFromplace=()=>{
        
        for(let i=0;i<7;i++){
            for(let j=0;j<6;j++){
                
                const dpn=days[i]+"DetailPlace"+j;
                const getDetailPlace=document.querySelector("."+dpn).textContent;
                
                if(getDetailPlace.search(/https?:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+/gi) != -1){
                    
                    const insertDetailPlace='<a href="'+getDetailPlace+'">'+getDetailPlace+'</a>';
                    console.log(insertDetailPlace);
                    document.querySelector("."+dpn).innerHTML=insertDetailPlace;
                    
                }
                
            }
        }
        
    };
    makeUrlFromplace();
    

    
},false);




