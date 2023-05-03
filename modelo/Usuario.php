<?php
class Usuario extends Conectar
{
    public function login()
    {
        $conectar = parent::conexion();
        parent::set_names();
        if (isset($_POST["enviar"])) {
            $captcha_secret_key = "6LdlqqIiAAAAABbxX3dgSDBT7tNrEIsqYppmdL7T"; // reemplazar con tu clave secreta
            $captcha_response = $_POST['recaptcha-response'];
            $verify_captcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$captcha_secret_key}&response={$captcha_response}");
            $captcha_response_data = json_decode($verify_captcha);

      
            $email = $_POST["email"];
            $password = $_POST["password"];
            echo '<script>console.log("' . $email . '");</script>';
            var_dump($password);
             echo $password;
            if (empty($email) and empty($password)) {
                /*TODO: En caso esten vacios correo y contraseña, devolver al index con mensaje = 2 */
                header("Location:" . Conectar::ruta() . "/index.php?m=2");
                exit();
            } else {
                $sql = "SELECT * FROM usuarios WHERE email=?";
                $stmt = $conectar->prepare($sql);
                $stmt->bindValue(1, $email);
                $stmt->execute();

                $resultado = $stmt->fetch();
                if ($password == $resultado['password']) {

                    session_start();
                    $_SESSION["id"] = $resultado["id"];
                    $_SESSION["nombre"] = $resultado["nombre"];
                    $_SESSION["email"] = $resultado["email"];
                    header("Location:" . Conectar::ruta() . "/portafolio/vista/home/");
                } else {
                    /*TODO: En caso no coincidan el usuario o la contraseña */
                    header("Location:" . Conectar::ruta() . "index.php?m=1");
                    exit();
                }
            }
        }
    }


    public function proyecto(){


    }
}