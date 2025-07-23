# MÓDULO - TRI - Termo de Responsabilidade Individual

## Visão Geral

O **TRI - Termo de Responsabilidade Individual** é um módulo para **Drupal 10** desenvolvido para gerar um documento digital (em HTML formatado para impressão) contendo um termo de responsabilidade baseado nas normas de segurança da informação da Marinha do Brasil.

O documento é preenchido dinamicamente por meio de um formulário e pode ser impresso diretamente pelo navegador. A estrutura é compatível com o formato A4 (21cm x 29.7cm), com fonte **Carlito** 10pt e espaçamento otimizado para caber em uma única página.

## Funcionalidades

- Formulário de entrada com:
  - Nome completo
  - Posto/Graduação
  - NIP ou Identidade
- Geração dinâmica do documento com:
  - Texto legal formatado
  - Assinatura com nome completo, posto e NIP
  - Interface limpa e pronta para impressão
- Navegação integrada com botão "Voltar"
- Compatível com navegadores modernos e impressoras

## Instalação e Configuração

1. Coloque a pasta `tri_module` dentro do diretório `/modules/custom` da sua instalação do Drupal 10.
2. Acesse a página "Estender" do Drupal: `/admin/modules` e marque a opção **TRI - Termo de Responsabilidade Individual**.
3. Crie uma nova página no seu site com o caminho `/tri` (ou conforme desejar).
4. Na página criada, adicione o seguinte formulário HTML (em um bloco ou conteúdo do tipo "Página Básica"):

   <form method="POST" action="drupal10/web/tri/gerar">
    <div class="form-group">
        <label for="nomeCompleto">Nome Completo</label> <input class="form-control" style="text-transform:uppercase;" type="text" maxlength="50" size="50" name="nome_completo" id="nomecompleto" required="">
    </div>
    <div class="form-group">
        <label for="PostGrad">Posto/Grad</label> <input class="form-control" style="text-transform:uppercase;" type="text" maxlength="50" size="50" name="post_grad" id="postgrad" required="">
    </div>
    <div class="form-group">
        <label for="NipUsuario">Nip ou Nº da Identidade</label> <input class="form-control" style="text-transform:uppercase;" type="text" maxlength="50" size="50" name="NipUsuario" required="required" id="nipUsuario">
    </div>
    <p>
        <button class="btn btn-primary form-submit" type="submit">Gerar TRI</button>
    </p>
</form>

 ## Estrutura do Módulo 
    
 modules/custom/tri_module/
├── tri_module.info.yml
├── tri_module.routing.yml
├── src/Controller/TriController.php
└── css/print.css
 
 ## Requisito

    Drupal 10.1 ou superior
    PHP 8.1 ou superior
    Apache/Nginx com suporte a URL amigável
    Fonte Carlito instalada no sistema (opcional — fonte carregada via Google Fonts)

## Histórico de Versões
Versão 1.0.0 - 18/07/2025

    Testado com Drupal 10.4.x
    Lançamento inicial do módulo
    Formulário e controlador integrados
    Layout responsivo e compatível com formato A4
    Texto legal completo e otimizado para impressão

## Autoria e Créditos

    Autor Principal: Roger Pantoja da Silva
    Data de Criação: Julho/2025

    Desenvolvimento: Este módulo foi elaborado por Roger Pantoja da Silva com o apoio da inteligência artificial ChatGPT da OpenAI, atuando como assistente na codificação, estruturação e depuração do projeto Drupal 10.

## Licença

Este projeto é licenciado sob a GNU General Public License v3 ou superior. Consulte o arquivo LICENSE.txt para mais informações.
