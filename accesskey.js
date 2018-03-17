function checklogin(){
    var format = /[!#$%^*+\=\[\]{}:"\\|<>\/?]+/;
    var u = document.logform.username.value;
    var p = document.logform.password.value;

    if(format.test(u)){
        alert("Please avoid special characters in Username!");
        return false;
    }
    if(format.test(p)){
        alert("Please avoid special characters in Password!");
        return false;
    }
    else{ 
        return true;
    }  
}

function checkreg(){
    var format = /[!#$%^*+\=\[\]{}:"\\|<>\/?]+/;
    var u = document.regform.username.value;
    var p1 = document.regform.password1.value;
    var p2 = document.regform.password2.value;

    if(format.test(u)){
        alert("Please avoid special characters in Username!");
        return false;
    }
    if(format.test(p1)){
        alert("Please avoid special characters in Password!");
        return false;
    }
    if (p1 != p2){
        alert("Passwords NOT matching!");
        return false;
    }
    else{ 
        return true;
    }  
}

function del(){
      var c = confirm("Are you sure?");
      if (c == true){ 
          return true;
      }        
      if (c == false){
          return false;
      }    
    
}

