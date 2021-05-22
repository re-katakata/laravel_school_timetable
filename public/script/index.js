
document.addEventListener( 'DOMContentLoaded' , function( e ) {
    
    const termChanger=()=>{
        let trm = document.getElementsByName("term_number");
        document.getElementById('tnurl').action="/ind?term_number="+trm;
    };
    termChanger();
    
    
    const onOffClassDetail=()=>{
        
        const days=["monday","tuesday","wednesday","thursday","friday","saturday","sunday"];
        
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
    

    
},false);




