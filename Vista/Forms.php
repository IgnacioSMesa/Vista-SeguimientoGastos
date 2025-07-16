<?php

class Forms {

    public function registerForm() {
        return '
            <style>
                .formulario { background:#eee; padding:20px; border-radius:10px; }
                .formulario input { display:block; margin-bottom:10px; width:20%; }
                .formulario button { background:#28a745; color:white; border:none; padding:10px; }
            </style>
            <form action="controller/registerController.php" method="POST" class="formulario">
                <input type="text" name="name" placeholder="Nombre">
                <input type="email" name="email" placeholder="Correo">
                <input type="password" name="password" placeholder="Contraseña">
                <button type="submit">Registrarse</button>
            </form>
        ';
    }


}
