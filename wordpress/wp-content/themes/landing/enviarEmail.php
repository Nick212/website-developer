<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipoEvento = $_POST['tipo_site'];
    $mensagem = $_POST['descricao'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    $arquivo = "
   <style type='text/css'>
   body {
   margin:0px;
   font-family:Verdane;
   font-size:12px;
   color: #666666;
   }
   a{
   color: #666666;
   text-decoration: none;
   }
   a:hover {
   color: #FF0000;
   text-decoration: none;
   }
   </style>
   <html>
       <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
           <tr>
             <td>
   <tr>
                <td width='500'>Nome:$nome</td>
               </tr>
               <tr>
                 <td width='320'>E-mail:<b>$email</b></td>
      </tr>
       <tr>
                 <td width='320'> Tipo de nvento:<b>$tipoEvento</b></td>
               </tr>
               <tr>
                 <td width='320'>Mensagem:$mensagem</td>
               </tr>
           </td>
         </tr>
         <tr>
           <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
         </tr>
       </table>
   </html>
   ";


   $emailenviar = "nicolas.ale.carvalho@gmail.com";
   $destino = $emailenviar;
   $assunto = "DEVELOPER WEBSITE - Orcamento pelo Site";


   // É necessário indicar que o formato do e-mail é html
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= 'From: '+ $nome +' <$email>';
   //$headers .= "Bcc: $EmailPadrao\r\n";


   $enviaremail = mail($destino, $assunto, $arquivo, $headers);

   //header("location:http://roarfilmes.com");

 ?>
