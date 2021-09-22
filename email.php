<?php 
      if(isset($_POST['email']) && !empty($_POST['email'])){
            $nome = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $mensagem = addslashes($_POST['message']);

            $to = 'truz@truzcriacaodesites.com.br';
            $subject = 'Contato - Meu Portfólio';
            $body = 'Nome: '.$nome. "\r\n".
            'Email: '.$email. "\r\n".
            'Mensagem: '.$mensagem;
            $header = 'From:truz@truzcriacaodesites.com.br'."\r\n". "Reply-To".$email."\e\n"."X=Mailer:PHP/".phpversion();

          if(mail($to,$subject,$body,$header)){
            echo "<script>location.href='sucesso.html'</script>";
          }else{
            echo "O email não foi enviado!";
          }
      }  
?>