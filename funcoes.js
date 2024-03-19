function Trocar(){
    let tipo = document.getElementById("veiculo").value
    alert(tipo)

    if(tipo == "Básico"){
        document.getElementById("imagem").src="basico.png"
    }else if{
        document.getElementById("imagem").src="esporte.png"
    }else{
        document.getElementById("imagem").src="completo.png"
    }
}