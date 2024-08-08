function checking(){
    let h=checks("resCarac",7)
    let g=checks("vigi",6)
    let f=checks("notice",5)
    let e=checks("clin",4)
    let d=checks("preclin",3)
    let c=checks("adminInf",2)
    let b=checks("accom",1)
    let a=checks("resume",0)
   
    return a&&b&&c&&d&&e&&f&&g&&h;
}


function checks(name,a){
    let file=document.getElementById(name);
    
    if(file.files.length > 0){
        if(file.files[0].type=="application/pdf"){
            document.getElementsByTagName('small')[a].innerHTML="";
            return true;
        }else{
            document.getElementsByTagName('small')[a].innerHTML="The file must be a pdf";
            document.getElementsByTagName('label')[a].scrollIntoView({ behavior: 'instant', block: 'start' });
            return false;
        }
    }else{
        document.getElementsByTagName('small')[a].innerHTML="You have to upload the required file";
        document.getElementsByTagName('label')[a].scrollIntoView({ behavior: 'instant', block: 'start' });
        return false;
    }

    
}
