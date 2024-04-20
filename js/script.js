const toggleBtn = document.querySelector('.toggle_btn')
const toggleBtnIcon = document.querySelector('.toggle_btn i')
const DropDownMenu = document.querySelector('.dropdown_menu')

toggleBtn.onclick = function(){
    DropDownMenu.classList.toggle('open')
    
    const isOpen = DropDownMenu.classList.contains('open')

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}


const toggleDark = document.getElementById('toggleDark');
const toggle = document.getElementById('toggleDark');

toggle.addEventListener('click', function(){
    this.classList.toggle('fa-moon');
    document.body.classList.toggle("dark-mode")
    document.body.style.transition = '1s';
})