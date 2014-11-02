<?

$title='Menus e toolbars';

function content(){

?>
<h2>O elemento menu</h2>

<p>O elemento <code>menu</code> é usado para definir menus e barras de ferramenta. Dentro do menu, você pode inserir submenus ou comandos. Para inserir submenus, basta inserir outros elementos <code>menu</code>. Para definir comandos, você pode inserir:</p>

<ol>
  <li>Um link, um elemento <code>a</code> com atributo <code>href</code>;</li>
  <li>Um botão, um elemento <code>button</code>;</li>
  <li>Um botão, um elemento <code>input</code> com o atributo <code>type</code> contendo button, submit, reset ou image;</li>
  <li>Um radiobutton, um elemento <code>input</code> com o atributo <code>type</code> contendo radio;</li>
  <li>Um checkbox, um elemento <code>input</code> com o atributo <code>type</code> contendo checkbox;</li>
  <li>Um elemento <code>select</code>, contendo um ou mais options, define um grupo de comandos</li>
  <li>Um elemento qualquer com o atributo <code>accesskey</code></li>
  <li>Um elemento <code>command</code></li>
</ol>

<h3>Tipos de comando</h3>

<p>Há três tipos de comando:</p>

<dl>
  <dt>command</dt>
  <dd>Uma ação comum;</dd>
  <dt>checkbox</dt>
  <dd>Uma ação que pode estar no status de ligada ou desligada, e alterna entre esses dois stauts quando clicada;</dd>
  <dt>radio</dt>
  <dd>Uma ação que pode estar no status de ligada ou desligada, e quando clicada vai para o status de ligada, deligando todas as ações com o mesmo valor no atributo <code>radiogroup</code>;</dd>
</dl>

<p>Da lista de elementos possíveis para definir comandos, os três primeiros, link, button e input button, definem comandos do tipo command. O quarto elemento, radiobutton, define um comando do tipo radio. O quinto, checkbox, define um comando do tipo checkbox.</p>

<p>O sexto elemento, o select, vai definir um grupo de comandos. Se o select tiver o atributo multiple, definirá uma lista de comandos do tipo checkbox. Caso contrário, os comandos serão do tipo radio, tendo o mesmo radiogroup.</p>

<p>No sétimo caso, um elemento qualquer com tecla de acesso, o tipo de comando vai depender do tipo de elemento que recebeu accesskey.</p>

<h3>O elemento command</h3>

<p>Por fim, temos o oitavo método, o elemento <code>command</code>. Neste caso o tipo de comando dependerá do valor do atributo <code>type</code>. Veja um exemplo de como usá-lo:</p>

<code><pre>&lt;command type="command" label="Salvar" onclick="salvar()" &gt;</pre></code>

<h4>Prefira não usar command, por enquanto</h4>

<p>Por que a especificação permite que se use o novo elemento command para definir comandos, e ao mesmo tempo permite que se use os velhos elementos como input, button e select para isso? Para possibilitar ao desenvolvedor oferecer alguma compatibilidade com navegadores antigos. Veja este exemplo:</p>

<?Example('command')?>

<p>O agente de usuário deveria renderizar algo como:</p>

<p><img src="img/command.png" alt="Exemplo de menu" /></p>

<p>Um agente de usuário que não conhece o novo elemento <code>menu</code> vai entender esse código como listas aninhadas com botões e links. E vai renderizar isso assim:</p>

<p><img src="img/command2.png" alt="Exemplo de menu" /></p>

<p>Não está bonito, mas é perfeitamente acessível. E o visual pode ser bem trabalhado com CSS. A mesma coisa poderia ser escrita com o elemento <code>command</code>:</p>

<?Example('command2')?>

<p>Mas um agente de usuário que não conhece os elementos <code>menu</code> e <code>command</code> não vai mostrar absolutamente nada.</p>

<?
}

