let input = document.getElementById('inp');
let btn = document.getElementById('btn');
let boxs = document.querySelectorAll('.box');
let drag = null;

btn.addEventListener('click',function(){
    
let value = input.value;
if(value !=''){
let p = document.createElement('p');
p.classList.add('item');
p.draggable='true';
p.innerText+=value;
input.value='';

//hna khdemt b index hit ana wsalt ljami3 box fmara wahda wahchi kaykhalihm 3la ckekel array
boxs[0].appendChild(p);

}

trasnprt();


})

function trasnprt(){

let items =  document.querySelectorAll('.item');
items.forEach(item=>{

//dragstart howa event ksyiw9a3 mli kanhezo l3onsor.

item.addEventListener('dragstart',function(){
drag = item ;          // hna drag flowl kan khawi lakin db 9otlo dir fih di item (hoz dik item);
item.style.opacity ='0.5';                 
});


// dragend howa event kayiw9a3 mli kanizlo l3onsor.

item.addEventListener('dragend',function(){
drag = null;                       // hna reja3t drag n value dyalo lowla li hiya null;
item.style.opacity ='1';
});

// hna dert loop 3la lbox 

boxs.forEach(box=>{
    
box.addEventListener('dragover',function(e){
    e.preventDefault();                  // hna lghit event mora makhdem event dyal drop
    this.style.background = '#090';
    this.style.color ='white';
});

box.addEventListener('dragleave',function(){
    this.style.background = 'white';
    this.style.color ='black';
});

// hna ghadi drop ay l3onsor ytem tanzil dyalo 
 box.addEventListener('drop',function(){

    this.appendChild(drag);
    this.style.background = 'white';
    this.style.color ='black';

 });




});



});



};






