
<html>
    <head>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="frmusuario" action="Controlador/ValidarUsuario.php" method="post">
            <div>
                <label>
                    Usuario:
                </label>
                <input type="text" name="nomusuario" id="nomusuario">
            </div>
            <div>
                <label>
                    Clave:
                </label>
                <input type="password" name="clave" id="clave">
            </div>

            <input type="button" onclick="" value="Enviar" id="enviar">
        </form>
    </body>
    <script>
        $(document).ready(function () {
            $("#enviar").click(function () {
                //$("form").hide();
                //alert("Ocultaste el Formulario"+$("#nomusuario").val());
                if ($("#nomusuario").val() != "" && $("#clave".val() != "")) {
                    //$("#frmusuario").submit();
                    $.ajax({url: "Controlador/ValidarUsuario.php",
                        type: post,
                        data: {'nomusuario': $("#nomusuario").val(), 'clave': $("#clave").val()},
                        success: function (resultado) {
                            $("#mensaje").html(resultado);
                        }
                    }
                    )
                } else
                    alert("DEBE agregar el usuario y clave");
            }
            );
        }
        );
    </script>
</html>
