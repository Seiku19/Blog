  function enviar() {
            let asunto = document.getElementById('asunto').value;
            let mensaje = document.getElementById('mensaje').value;

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    let resultado = document.getElementById("resultado");

                    let respuesta = this.response;

                    resultado.innerHTML = this.response;


                }
            };
            xhttp.open("GET", "../PHP/sugerencia.php?asunto=" + asunto + "&mensaje=" + mensaje, true);
            xhttp.send();

            return false;
        }