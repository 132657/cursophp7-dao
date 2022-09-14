<?php 

require_once("config.php");

//$sql=new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


//Careega um Usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de Usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("r");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("MicheleMoura", "michele123456");
//echo $usuario;

/* Criando um novo usuario
$aluno = new Usuario("daniel", "jhgadjh");
$aluno->insert ();
echo $aluno;
*/

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("instrutor", "hjdfgbjahsdb");
echo $usuario;

 ?> 