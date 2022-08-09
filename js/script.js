//Null precisa criar a integração com o banco de dados. Se o usuario tiver algum pedido ou não...
function nuul(){

}
function abrir() {

    document.getElementById('Sm').style.display = "block";
}
function abrir1() {

    document.getElementById('Sm1').style.display = "block";
}


function Escolha2(){
    var escolha = document.getElementById('Escolha1').value;
    if(escolha == '1'){
        document.getElementById('serv1').style.display = "block";
        document.getElementById('Assinatura1').style.display = "none";
    }else{
        document.getElementById('Assinatura1').style.display = "block";
        document.getElementById('serv1').style.display = "none";
    }
}