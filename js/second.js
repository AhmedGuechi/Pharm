
function MenuAppear(x){
    x.classList.toggle('change');
    document.getElementById('leftMenu').classList.toggle('sideMenu');
    for(let i=0;i<3;i++){
        document.getElementsByClassName('nn')[i].classList.remove('appear');
        document.getElementsByClassName('nn')[i].classList.add('appear');
    }
}


function makeChildsAppear(x){
    document.getElementById(x).classList.toggle('appear');
    arrow = document.getElementsByClassName('arrow');
    switch(x){
        case 'a':
            arrow[0].classList.toggle('up');
            break;
        case 'e':
            arrow[1].classList.toggle('up');
            break;
    }
}

function searchappear(){
    document.getElementById('search_bar1').classList.toggle('search_bar1');
    document.getElementById('search_bar1').classList.toggle('search_bar');
}

function medLoged(){
    let items=document.querySelectorAll('.item')
    for(let i=0;i<items.length;i++){
        items[i].setAttribute('style',"min-width:16% !important")
    }
    document.getElementById('complete').classList.add('complete');
    // alert(document.getElementsByClassName('item')[3].getAttribute('style'))
    // document.getElementsByClassName('underline')[0].setAttribute('style','margin-left:4% !important');
    // document.getElementsByClassName('underline')[0].setAttribute('style','width:var(--width) !important;');
}