
        function maior() {
            window.location.href = "principal.php";
        }

        function menor() {
            window.location.href = "http://www.teletubbies.com/";
        }



        function confirmaEmail() {

            var e1 = document.getElementById("email1").value;
            var e2 = document.getElementById("email2").value;
            
            if (e2 != e1) {
                alert("Os e-mails digitados não coincidem, digite novamente seu e-mail.")
            } 
        }


        function checaPreenchimento() {
            var nome = document.getElementById("nome").value;
            var data = document.getElementById("data").value;
            var email = document.getElementById("email").value;
            v
            if(nome || data || email == "") {
                alert("Campo obrigatório!");
            }
            if(data == "") {
                alert("Campo obrigatório!");
            }
            if(email == "") {
                alert("Campo obrigatório!");
            }
        }

