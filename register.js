function seterror(id,error){
    
    element= document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function validateForm(){
    var returnval = true;
    var name = document.forms['myForm']["username"].value;

    if(name.length<8){
        seterror("name","*username must be 8char long");
        returnval= false;
    }
    if(name.length==0){
        seterror("name","*Username cannot be empty");
        returnval= false;
    }

    var email = document.forms['myForm']["email"].value;
    if(email.length<15){
        seterror("email","* enter a valid email ");
        returnval= false;
    }
   
    var password = document.forms['myForm']["password"].value;
    if(password.length<7){
        seterror("password","*password should be 7 character long");
        returnval= false;
    }
    if(password.length==0){
        seterror("password","*choose a valid password");
        returnval= false;
    }
    var cpassword = document.forms['myForm']["cpassword"].value;
    if(cpassword !=password){
        seterror("cpassword","confirm password is not matching!");
        returnval= false;
    }
return returnval;
}
    