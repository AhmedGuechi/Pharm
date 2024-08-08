labels = document.getElementsByTagName('label');
smalls = document.getElementsByTagName('small');
inputs = document.getElementsByTagName('input');
names = /^[a-z A-Z ']+$/
function check(event){
    
    let a=checkPasswds()&&checkfiscale()&&checkAdress()&&checkPhone()&&checkEmail()&&checkname()&&checkInsname();
    
    checkPasswds()
    checkfiscale()
    checkAdress()
    checkPhone()
    checkrespPhone()
    checkname()
    checkEmail()
    checkInsname()
    return a;
}

function isAlphabetic(input) {
    return /^[a-z A-Z ']+$/.test(input);
}


function checkInsname(){
    i=0;
    a=inputs[i+1];
    nom = a.value.trim();
    if(nom==''){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Nom de L'institution ne peut pas etre vide\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;
    }else if(!isAlphabetic(nom)){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Nom de L'institution ne peut contenir que des lettres\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;
    }else{
        a.classList.remove('unvalid');
        a.classList.add('valid');
        smalls[i].innerHTML='';
        return true;
    }
}

function checkname(){
    i=1;
    a=inputs[i+1];
    nom = a.value.trim();
    if(nom==''){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Nom ne peut pas etre vide\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

    }else if(!isAlphabetic(nom)){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Nom ne peut contenir que des lettres\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

    }else{
        a.classList.remove('unvalid');
        a.classList.add('valid');
        smalls[i].innerHTML='';
        return true;
    }
}


function checkEmail(){
    i=3;
    a=inputs[i+1];
    mail = a.value.trim();
    if(mail==''){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Email ne peut pas etre vide\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

    }else if(!(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(mail))){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Email doit etre de la forme exemple@exemple.com\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

    }else{
        a.classList.remove('unvalid');
        a.classList.add('valid');
        smalls[i].innerHTML='';
        return true;
    }
}

function checkPhone(){
    i=4;
    
    a=inputs[i+1];
    phone = a.value.trim();
    if(phone==''){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Numero de telephone ne peut pas etre vide\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

    }else if(!(/^(0(21|23|24|25|26|27|29|31|32|33|34|35|36|37|38|41|43|45|46|48|49))[0-9]{6}$/
    .test(phone))){
            a.classList.remove('valid');
            a.classList.add('unvalid');
            smalls[i].innerHTML="Numero de telephone invalide\n";
            labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

        }else{
            a.classList.remove('unvalid');
            a.classList.add('valid');
            smalls[i].innerHTML='';
            return true;
        }
    
}

function checkAdress(){
    i=5;

    a=inputs[i+1];
    mail = a.value.trim();
    if(mail==''){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="L'adresse ne peut pas etre vide\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;
    }else{
        a.classList.remove('unvalid');
        a.classList.add('valid');
        smalls[i].innerHTML='';
        return true;
    }
}
function checkfiscale(){
    i=7;

    a=inputs[i+1];
    mail = a.value.trim();
    if(mail==''){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Le numero d'itenfication fiscale ne peut pas etre vide\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

    }else if(!(/^[0-9]{15}$/.test(mail))){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Le numero d'itenfication fiscale ne peut contenir que des chiffres\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

    }else{
            a.classList.remove('unvalid');
            a.classList.add('valid');
            smalls[i].innerHTML='';
            return true;
        }
}

function checkPasswds(){
    i=8;

    a=inputs[i+1];
    passwed = a.value.trim();
    passwd = a.value;
    j=9;
    b=inputs[j+1];
    passwed2 = a.value.trim();
    passwd2 = b.value;
    if(passwd!=passwd2){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        b.classList.remove('valid');
        b.classList.add('unvalid');
        smalls[i].innerHTML=''
        smalls[j].innerHTML="Les mots de passe ne corespande pas\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

    }else if(passwed=='' ||passwd2==''){
        if(passwd==''){
            a.classList.remove('valid');
            a.classList.add('unvalid');
            b.classList.remove('valid');
            b.classList.add('unvalid');
            smalls[i].innerHTML="Le mot de passe ne peut pas etre vide\n";
            labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        }
        if(passwed2==''){
            a.classList.remove('valid');
            a.classList.add('unvalid');
            b.classList.remove('valid');
            b.classList.add('unvalid');
            smalls[j].innerHTML="Le mot de passe ne peut pas etre vide\n";
            labels[j].scrollIntoView({ behavior: 'instant', block: 'start' });

        }
        return false;
    }else{
        a.classList.remove('unvalid');
        a.classList.add('valid');
        b.classList.remove('unvalid');
        b.classList.add('valid');
        smalls[j].innerHTML="";
        smalls[i].innerHTML="";
        return true;
    }
}

function checkrespPhone(){
    i=2;

    a=inputs[i+1];
    phone = a.value.trim();
    if(phone==''){
        a.classList.remove('valid');
        a.classList.add('unvalid');
        smalls[i].innerHTML="Numero de telephone ne peut pas etre vide\n";
        labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

    }else if(!(/^(0(5|6|7))[0-9]{8}$/.test(phone))){
            a.classList.remove('valid');
            a.classList.add('unvalid');
            smalls[i].innerHTML="Numero de telephone invalide\n";
            labels[i].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;

        }else{
            a.classList.remove('unvalid');
            a.classList.add('valid');
            smalls[i].innerHTML='';
            return true;
        }
}