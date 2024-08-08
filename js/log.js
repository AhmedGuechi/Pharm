

function check(){
    let a=checkPasswd()&&checkEmail();
    checkPasswd()
    checkEmail()
    return(a);
}

function checkPasswd(){
    a = document.getElementsByTagName('input')[0]
    if((a.value).trim()==''){
        document.getElementsByTagName('small')[0].innerHTML='Identifiant ou adresse e-mail ne peut pas etre vide'
        a.classList.remove('valid')
        a.classList.add('unvalid')
        return false
    }else{
        document.getElementsByTagName('small')[0].innerHTML=''
        a.classList.remove('unvalid')
        a.classList.add('valid')
        return true
    }
}

function checkEmail(){
    a = document.getElementsByTagName('input')[1]
    if((a.value).trim()==''){
        document.getElementsByTagName('small')[1].innerHTML='Mot de passe ne peut pas etre vide'
        a.classList.remove('valid')
        a.classList.add('unvalid')
        return false
    }else{
        document.getElementsByTagName('small')[1].innerHTML=''
        a.classList.remove('unvalid')
        a.classList.add('valid')
        return true
    }
}

function IsIn(){
    $("#result").load("log.php");
}


