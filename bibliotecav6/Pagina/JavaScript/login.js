function logear() {
            let usuario = document.getElementById('usuario').value;
            let palabra_secreta = document.getElementById('palabra_secreta').value;

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    let resultado = document.getElementById("resultado");

                    let respuesta = this.response;

                    resultado.innerHTML = this.response;

                    if (respuesta != "El usuario o la contraseña son incorrectos") {
                        location.href ="inicio.php";
                    }

                }
            };
            xhttp.open("GET", "../PHP/login.php?usuario=" + usuario + "&palabra_secreta=" + palabra_secreta, true);
            xhttp.send();

            return false;
        }