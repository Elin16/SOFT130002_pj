function javascriptInhtml(){
        var HtmlFtp=document.getElementById("footprints");
        if(HtmlFtp==null) console.log("null of id ");
        var thishref=window.location.href.split("/");
        var thisfootprint="href_"+thishref[thishref.length-1]+"_eofhref"+"title_"+document.getElementsByTagName("title")[0].innerHTML+"_eoftitle";
        var src=getCookie();
        var footprints=src.split(";");
        if(footprints[0]==null||footprints[0]=="") footprints.shift();
        var flag=-1;
        var len=footprints.length;
        //console.log("lengthoffootprint",len,footprints[0]);
        var content="";//"i am a default content";
        for(var i=0;i<len;++i){
                if(footprints[i]==thisfootprint) flag=i;
                //else console.log("***",footprints[i],"----",thisfootprint,"\n");
        }
        
        if(flag==-1){
                footprints.push(thisfootprint);
                flag=footprints.length-1;
        }
        while(footprints.length>flag+1) footprints.pop();
        while(footprints.length>3){
                footprints.shift();
        }
        displayFootprints();
        setCookie();
        function setCookie(){
                sessionStorage.clear(); 
                sessionStorage.setItem("footprints", generateFootprints());
        }
        function getCookie(){
                if(sessionStorage.getItem("footprints")==null) return "";
                return sessionStorage.getItem("footprints");
        }
        function addlink(footprint){
                var _title_=/(?<=title_).*?(?=_eoftitle)/;
                var _href_=/(?<=href_).*?(?=_eofhref)/;
                var Href=footprint.match(_href_);
                var Title=footprint.match(_title_);
                if(Href==null||Title==null) return 0;
                //console.log("::",Href,Title,"::");
                content=content+"<a href="+Href+">"+Title+"</a>";
                return 1;
        }
        function displayFootprints(){
                for(var i=0;i<footprints.length-1;++i){
                        if(addlink(footprints[i])) content=content+"<<<";
                }
                addlink(thisfootprint);
                HtmlFtp.innerHTML=content;
                HtmlFtp.setAttribute("href","css/footprint.css");
        }
        
        function generateFootprints(){
                var nextsrc="";
                for(var i=0;i<footprints.length-1;++i) {
                        nextsrc = nextsrc + footprints[i] + ";";
                }
                nextsrc=nextsrc+thisfootprint;
                return nextsrc;
        }
}
javascriptInhtml();