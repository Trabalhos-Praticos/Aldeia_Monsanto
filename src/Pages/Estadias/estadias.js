function vermais(){
    let pontos=document.getElementById("pontos");
    let maist = document.getElementById("mais");
    let btnvm = document.getElementById("btnvm");
    
    if(pontos.style.display==="none"){
        pontos.style.display="inline";
        maist.style.display="none";
        btnvm.innerHTML="Ver Mais";
    }else{
        pontos.style.display="none";
        maist.style.display="inline";
        btnvm.innerHTML="Ver Menos";
    }
}