function clickEnlace (event,url){
    event.preventDefault();
    setTimeout(()=>{
        window.location.href = url;
    },800)
}