function lermais(){
    var pontos = document.getElementByClass("pontos");
    var maisTexto=document.getElementByClass("mais");
    var btnLerMais=document.getElementByClass("Read_More");
    if(pontos.style.display==="none"){
        pontos.style.display="inline";
        maisTexto.style.display
    }else{
        pontos.style.display="none";
        maisTexto.style.display="inline";
        btnLerMais.innerHTML="Ler Menos";
    }
}