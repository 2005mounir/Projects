let saturate = document.getElementById('saturate');
let Contrast = document.getElementById('Contrast');
let brightnes = document.getElementById('brightnes');
let sepia = document.getElementById('sepia');
let grayscale = document.getElementById('grayscale');
let blur = document.getElementById('blur');
let huerotate = document.getElementById('hue-rotate');
let upload = document.getElementById('upload')
let download = document.getElementById('download');
let img = document.getElementById('img');
let rest = document.querySelector('span');
let imgbox = document.querySelector('.img-box')
let removebackground= document.getElementById('removebackground');


 function filtersvalue(){
 img.style.filter='none'
 saturate.value='100';
 Contrast.value='100';
 brightnes.value='100';
 sepia.value='0';
 grayscale.value='0';
 blur.value='0';
 huerotate.value='0';

}



window.onload = function(){
rest.style.display='none';
download.style.display='none';
}
upload.onchange = function(){
rest.style.display='block';
download.style.display='block';
img.style.display='block';
let file = new FileReader();
file.readAsDataURL(upload.files[0]);
file.onload = function(){
img.src = file.result
filtersvalue()
}
};
 
let filters = document.querySelectorAll('ul li input');

filters.forEach(filter=>{

filter.addEventListener('input',function(){

img.style.filter=`

saturate(${saturate.value}%)
contrast(${Contrast.value}%)
brightness(${brightnes.value}%)
sepia(${sepia.value}%)
grayscale(${grayscale.value})
blur(${blur.value}px)
hue-rotate(${huerotate.value}deg)
`

})
rest.addEventListener('click',function(){
    filtersvalue()}
)
});

download.addEventListener('click',function(){
download.href = img.src
})