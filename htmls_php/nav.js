function hidden(obj){
        obj.className="undisplay_button";
        obj.innerHTML="";
}
function hidden2(obj){
        console.log(obj,'"'+obj+'"');
        obj=document.getElementById('"'+obj+'"');
        obj=document.getElementById("login");
        console.log(" ",obj);
        obj.innerHTML="";
        obj.className=" undisplay_button";
}
function display(obj,str){
        console.log(obj,str);
        obj.className=" button";
        obj.innerHTML=str;
}
function is_login(){
        hidden(document.getElementById("login"));
        hidden(document.getElementById("register"),"register");
        display(document.getElementById("logout"),"logout");
        display(document.getElementById("collection"),"collection");
}
function not_login(){
        console.log("no user");
        display(document.getElementById("login"),"login");
        display(document.getElementById("register"),"register");
        hidden(document.getElementById("logout"));
        hidden(document.getElementById("collection"));
}