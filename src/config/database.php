<?php
function conectarBanco() {
    return new PDO("mysql:host=localhost;dbname=loja_profissional", "root", "mysql");
}
?>