const croix=document.querySelector(".croix");
const menuWrapper=document.querySelector(".menuWrapper");
const menuFixe=document.querySelector(".menuFixe");
const toggleNav=document.querySelector(".toggleNav");
const accueil=document.querySelector(".accueil");
croix.addEventListener("click",(e)=>{
menuFixe.style.display="none";


})
toggleNav.addEventListener("click",(e)=>{
    menuFixe.style.display="block"; 
   
 window.scrollTo({
     top:0,
     left:0
 })
  
  
   
})
const mot=document.querySelector(".mot");
const motB=document.querySelector(".motB");
const motC=document.querySelector(".motC");
const motD=document.querySelector(".motD");
mot.addEventListener("mouseover",()=>{
mot.innerHTML="sérendipité";
})
mot.addEventListener("mouseout",()=>{
    mot.innerHTML="cherchais";
    })
 motB.addEventListener("mouseover",()=>{
 motB.innerHTML="bigarrure";
        })
 motB.addEventListener("mouseout",()=>{
            motB.innerHTML="préféré";
            })

 motC.addEventListener("mouseover",()=>{
 motC.innerHTML="inextinguiblement.";
                       })
 motC.addEventListener("mouseout",()=>{
 motC.innerHTML="continuellement.";
                           })
motD.addEventListener("mouseover",()=>{
motD.innerHTML="nourir&nbsp&nbsp&nbsp";
                                                  })
motD.addEventListener("mouseout",()=>{
 motD.innerHTML="enrichir";
                       })                           

const li=document.querySelectorAll(".amenu");
console.log(li);
    
    console.log(window.innerWidth);
    if(window.innerWidth<1000){     
      li.forEach(element => {
        element.addEventListener("click",(e)=>{
            menuFixe.style.display="none";
            
               console.log("ok");
            
           })  
      });
          
       
    }
    


   

