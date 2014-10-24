
    // Write your code below.
/**
_Ajax b0.1
Create Time :2014/10/22
Create Master:Cig
Email:252560815@qq.com
Blog:404sec.com
Name:_Ajax
*/
function _ajax(inurl){
var http;
this.url=inurl;
if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
this.http=new XMLHttpRequest();
}else{// code for IE6, IE5
this.http=new ActiveXObject("Microsoft.XMLHTTP");
}
this._get=function(s) {
if(s==true){
s=true;
}else if(s==false){
s=false;
}else{
s=true
}
this.http.open("GET",this.url,s);
this.http.send();
}
this._post=function(data,s) {
if(s==true){
s=true;
}else if(s==false){
s=false;
}else{
s=true
}
this.http.open("POST",this.url,s);
this.http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
this.http.send(data);
}
this._ok=function(func) {
var hp=this.http;
var req;
this.http.onreadystatechange=function(){
if (hp.readyState==4 && hp.status==200){
this.re=hp.responseText;
func(this.re);
}
}
}
}
function $_(id){
var getid=document.getElementById(id);
return getid;
}
function $v(id){
var getid=document.getElementById(id).value;
return getid;

}