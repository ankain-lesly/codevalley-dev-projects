const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}
if(close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

document.getElementById('userIcon')
.addEventListener('click',function(){
    const dropdown = document.getElementById('dropdownContent');
    dropdown.style.display = dropdown.style.display ===
    'blck' ? 'none' : 'block';
 });
//close dropdown when clicking outside
window.onclick = function(event){
    if(!
        event.target.matches('.user-icon')){
            const dropdown =document.getElementById('dropdownContent');
          if(dropdown.style.display ==='block'){
            dropdown.style.display = 'none';
        }
    }
}