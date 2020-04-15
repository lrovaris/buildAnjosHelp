<?

include_once("conexao.php");

$nome      = $_POST['firstname'];
$sobrenome = $_POST['lastname'];
$email     = $_POST['email'];
$pass      = $_POST['passwd'];
$passwd    = $_POST['confPass'];
$tipo      = $_POST['tipo'];

$tipo      = 1;


if($pass != $passwd){
   echo "senha invalida";
} else {

   $sql = "INSERT INTO acess (user, pass, status, codigo, plano, validade, tipo) VALUES ('$email', '$pass', '0', NULL, '0', NULL, '$tipo')";
   $query = mysqli_query($conn, $sql) or die ( "Falha no Registro final: " . mysqli_error($conn));
   if($query){
      //echo "Cadastrado com sucesso.";
      $id = mysqli_insert_id($conn);
      if($id){
         $sql = "INSERT INTO perfil (id_login, nome, sobenome, email, feed, tipo) VALUES ('$id', '$nome', '$sobrenome', '$email', NULL, '$tipo')";
         $query = mysqli_query($conn, $sql) or die ( "Falha no Registro final: " . mysqli_error($conn));
         if($query){
            //echo "Sub - Cadastrado com sucesso.";
            echo "
               <script>
                 var concluir=alert('Cadastrado com Sucesso!');
                 if (concluir==true){}
                 else { window.open('http://projetos.startcafe.com.br/ativos/anjoshelp/dev/index.html', '_top'); }
               </script>";
         }
      }
   }
}
