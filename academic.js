const mainmenu = document.querySelector('.mainmenu');
const openmenu = document.querySelector('.openmenu');
const closemenu = document.querySelector('.closemenu');


openmenu.addEventListener('click', show);
closemenu.addEventListener('click', close);

function show(){
    mainmenu.style.display = 'block';
    mainmenu.style.top = '0';
}

function close(){
    mainmenu.style.top = '-100%';
}

function scrollToTop() {
    window.scrollTo(0,0);
}