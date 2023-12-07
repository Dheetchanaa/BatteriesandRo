function navi(index){
    const nav=document.getElementById("nav");
    const navchild=nav.children;
    for(var i=0;i<navchild.length;i++){
        navchild[i].className="";
    }
    navchild[index].className="active";
}
window.addEventListener("scroll",()=>{
    const nav=document.getElementById("nav").children;
    const content=document.getElementsByClassName("content");
    for(var i=0;i<content.length;i++){
        var offtop=content[i].getBoundingClientRect().top;
        if(offtop<=225){
            for(var j=0;j<nav.length;j++){
                nav[j].className="";
            }
            nav[i].className="active";
        }
    }
});