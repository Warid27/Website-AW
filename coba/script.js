const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('fa-moon');
    if(this.classList.toggle('fa-sun')){
        body.style.backgroundImage = 'url(bg-lightmode.png)';
        body.style.color = 'black';
        toggle.style.color = 'white';
        body.style.transition = '2s';
    }else{
        body.style.backgroundImage = 'url(bg-darkmode.png)';
        body.style.color = 'white';
        toggle.style.color = 'black';
        body.style.transition = '2s';

    }
})