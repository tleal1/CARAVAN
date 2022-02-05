const planos=[{
    nome: "Gold", preco: "R$ 14.000", dias: "→ 30 dias de viagem"
},{
    nome: "Platinum", preco: "R$ 24.000", dias: "→ 60 dias de viagem"
}]
const url=window.location.href
const options=new URL(url)
const plano=options.searchParams.get("plano")
const planoselecionado=planos.find(p=>p.nome===plano)
console.log(planoselecionado)
document.getElementById("plano").innerText=planoselecionado.nome
document.getElementById("dias").innerText=planoselecionado.dias
document.getElementById("preco").innerText=planoselecionado.preco

const nome=options.searchParams.get("nome")
if(nome){
    document.getElementById("inputNome").value=nome
}
