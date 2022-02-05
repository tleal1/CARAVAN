function popup(){
    alert("Obrigado por entrar em contato, assim que possível nossa equipe lhe encaminhará uma resposta ; )")
}
function redirect(){
    const nomeuser=document.getElementById("textonome").value
    window.location.href="inscricao.php?plano=Platinum&nome="+nomeuser

}