function confirmaSenha() {

    var n1 = document.getElementById("nome").value;
    var s1 = document.getElementById("senha").value;
    var s2 = document.getElementById("senha2").value;
    
    
    if (s2 != s1) {
        alert("As senhas digitadas não coincidem!");
    }

    else {
        alert("Usuário criado com sucesso!");
    }
}
