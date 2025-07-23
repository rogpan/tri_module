<?php

namespace Drupal\tri_module\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Controller\ControllerBase;

class TriController extends ControllerBase {
  public function gerarTri(Request $request) {
    if ($request->getMethod() === 'POST') {
      $post_grad = mb_strtoupper($request->request->get('post_grad', ''));
      $nomeCompleto = mb_strtoupper($request->request->get('nome_completo', ''));
      $nip = mb_strtoupper($request->request->get('NipUsuario', ''));

      date_default_timezone_set('America/Sao_Paulo');
      $dia = date('d');
      $mes = date('m');
      $ano = date('Y');
      $meses = ['janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro'];
      $mesTexto = $meses[intval($mes) - 1];
      $data = "Rio de Janeiro, $dia de $mesTexto de $ano.";

      $html = <<<HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>TRI - {$nomeCompleto}</title>
  
  <style>
  @page {
    size: A4;
    margin: 1cm;
  }

  body {
    font-family: 'Carlito', sans-serif;
    font-size: 8pt;
    margin: 0;
  }

  #corpotret {
    width: 100%;
    text-align: justify;
  }

  #titulotret {
    text-align: center;
    font-weight: bold;
    margin-top: 1cm;
  }

  #datatret {
    text-align: right;
    margin-top: 1cm;
  }

  #textotret {
    margin-top: 1cm;
  }

  #assinaturatret {
    width: 100%;
    margin-top: 1cm;
    text-align: center;
  }

  .digital-tag {
    font-style: italic;
    font-size: 10pt;
    color: #555;
  }

  button {
    margin: 1cm 1cm 0 0;
  }

  ol {
    list-style-type: lower-alpha;
  }

  /* Ocultar elementos desnecessários na impressão */
  @media print {
    button {
      display: none;
    }

    body {
      width: auto;
      height: auto;
    }
  }
</style>

  <script>
    function fechar_formulario(){window.location.href='/drupal10/web/tri';}
  </script>
</head>
<body>
  <div id="corpotret">
    <div id="titulotret">
      MARINHA DO BRASIL<br>
      BASE DE FUZILEIROS NAVAIS DO RIO MERITI<br>
      TERMO DE RESPONSABILIDADE INDIVIDUAL
    </div>
    <div id="datatret">{$data}</div>
       <div id="textotret">
Pelo  presente  instrumento,  eu,<b> {$post_grad} {$nomeCompleto}, {$nip}</b>, perante    a    Marinha    do      Brasil,    doravante  denominada  MB,  na  qualidade  de  usuário  do  ambiente  computacional  de  propriedade
daquela Instituição, <b>declaro estar ciente</b> das seguintes normas de segurança da informação em vigor na MB:</br>
(a) tratar a informação digital como patrimônio da MB e como um recurso que deva ter seu sigilo preservado, em consonância com a legislação vigente;</br>
(b) utilizar as informações disponíveis e os sistemas e produtos computacionais, dos quais a MB é
proprietária ou possui o direito de uso, exclusivamente para o interesse do serviço;</br>
(c) preservar o conteúdo das informações sigilosas a que tiver acesso, sem divulgá-las para pessoas não autorizadas;</br>
(d) não tentar obter acesso à informação cujo grau de sigilo não seja compatível com a minha Credencial de Segurança (CREDSEG) ou que eu não tenha autorização ou necessidade de conhecer;</br>
(e) não compartilhar o uso de senha com outros usuários;</br>
(f) não me fazer passar por outro usuário usando a sua identificação de acesso e senha;</br>
(g) não alterar o endereço de rede ou qualquer outro dado de identificação do microcomputador de meu uso;</br>
(h) instalar e utilizar em meu microcomputador somente programas homologados para uso na MB e que esta possua as respectivas licenças de uso ou, no caso de programas de domínio público, mediante autorização formal do Oficial de Segurança de Informações e Comunicações (OSIC) da OM;</br>
(i) no caso de exoneração, demissão, licenciamento, término de prestação de serviço ou qualquer tipo de afastamento, preservar o conteúdo das informações e documentos sigilosos a que tive acesso e não divulgá-los para pessoas não autorizadas;</br>
(j) guardar   segredo   das   minhas   autenticações   de   acesso   (senhas)   utilizadas   no   ambiente computacional da OM, não cedendo, não transferindo, não divulgando e não permitindo o seu conhecimento por terceiros;</br>
(k) não utilizar senha com seqüência fácil ou óbvia de caracteres que facilite a sua descoberta e não escrever a senha em lugares visíveis ou de fácil acesso;</br>
(l) utilizar, ao me afastar momentaneamente da minha estação de trabalho, descanso de tela (“screen saver”) protegido por senha, a fim de evitar que alguém possa ver as informações que estejam disponíveis na tela do computador;</br>
(m) ao me ausentar do local de trabalho, momentaneamente ou ao término de minhas atividades diárias,   certificar-me   de   que   a   sessão   aberta   no   ambiente   computacional   com   minha identificação   foi   fechada   e   as   informações   que   exigem   sigilo   foram   adequadamente salvaguardadas;</br>
(n) seguir as orientações da área de informática da OM relativas à instalação, à manutenção e ao uso adequado dos equipamentos, dos sistemas e dos programas do ambiente computacional;</br>
(o) comunicar   imediatamente   ao   meu   superior   hierárquico   e   ao   Oficial   de   Segurança   das Informações e Comunicações (OSIC) da OM a ocorrência de qualquer evento que implique ameaça ou impedimento de cumprir os procedimentos de segurança estabelecidos;</br>
(p) responder,   perante   a   MB,   as   auditorias   e   o   Oficial   de   Segurança   das   Informações   e Comunicações   (OSIC)   da   OM,     por   acessos,   tentativas   de   acessos   ou   uso   indevido   da informação digital realizados com a minha identificação ou autenticação;</br>
(q) não praticar quaisquer atos que possam afetar o sigilo ou a integridade da informação;</br>
(r) estar ciente de que toda informação digital armazenada e processada no ambiente computacional da OM pode ser auditada, como no caso de páginas informativas (“sites”)  visitadas por mim;</br>
(s) não transmitir, copiar  ou reter  arquivos  contendo textos, fotos, filmes  ou quaisquer  outros registros que contrariem a moral, os bons costumes e a legislação vigente;</br>
(t) não transferir qualquer tipo de arquivo que pertença à MB para outro local, seja por meio magnético   ou   não,   exceto   no   interesse   do   serviço   e   mediante   autorização   da   autoridade
competente;</br>
(u) estar ciente de que o processamento, o trâmite e o armazenamento de arquivos que não sejam de interesse do serviço são expressamente proibidos no ambiente computacional da OM;</br>
(v) estar   ciente   de   que   a   MB   poderá   auditar   os   arquivos   em   trâmite   ou   armazenados   nos equipamentos do ambiente computacional da OM sob meu uso ou responsabilidade;</br>
(w) estar ciente de que o correio eletrônico é de uso exclusivo para o interesse do serviço e qualquer correspondência eletrônica originada ou retransmitida no ambiente computacional da OM deve obedecer a este preceito; e</br>
(x) estar   ciente   de   que   a   MB   poderá   auditar   as   correspondências   eletrônicas   originadas   ou retransmitidas por mim no ambiente computacional da OM.</br>
Desta forma, estou ciente da minha responsabilidade pelas conseqüências decorrentes da não observância do acima exposto e da legislação vigente.</br>
<div id="assinaturatret">


      <hr style="width:50%;">
      <p><b>{$post_grad} {$nomeCompleto}
      <p><b>{$nip}</b></p>
    </div>
    <div>
      <button onclick="fechar_formulario()">Voltar</button>
      <button onclick="window.print()">Salvar em PDF</button>
    </div>
  </div>
</body>
</html>
HTML;

      return new Response($html);
    }

    return new Response('Acesse este endpoint via POST a partir do formulário.');
  }
}
