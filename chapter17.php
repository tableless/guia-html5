<?

$title='Novos eventos DOM';

function content(){

?>

<h2>Uma palavra sobre eventos</h2>

<p>O suporte ao tratamento de eventos disparados pelo usuário é parte essencial do DOM. HTML5 oferece a você um extenso conjunto de novos eventos. Vamos dar uma olhada nos mais interessantes:</p>

<h3>Elementos multimídia:</h3>

<dl>
  <dt>oncanplay</dt><dd>O elemento audio ou video já tem dados suficientes no buffer para começar a tocar.</dd>
  <dt>oncanplaythrough</dt><dd>O elemento audio ou video já tem dados suficientes no buffer para começar a tocar e, se a tranferência de dados continuar no ritmo em que está ocorrendo, estima-se que tocará até o final sem interrupções.</dd>
  <dt>ondurationchange</dt><dd>O elemento audio ou video teve seu atributo <code>duration</code> modificado. Isso acontece, por exemplo, ao alterar a origem da mídia.</dd>
  <dt>onemptied</dt><dd>O elemento audio ou video teve um erro de retorno vazio de dados da rede. O retorno vazio acontece quando, por exemplo, você tenta invocar o método play de um elemento que ainda não tem uma origem de mídia definida.</dd>
  <dt>onended</dt><dd>O vídeo ou áudio chegou ao fim.</dd>
  <dt>onloadeddata</dt><dd>Os dados começaram a ser carregados e a posição atual de playback já pode ser renderizada.</dd>
  <dt>onloadedmetadata</dt><dd>Os metadados foram carregados. Já sabemos as dimensões, formato e duração do vídeo.</dd>
  <dt>onloadstart</dt><dd>Os dados começaram a ser carregados.</dd>
  <dt>onpause</dt><dd>O usuário clicou em pause.</dd>
  <dt>onplay</dt><dd>O usuário clicou em play ou o playback começou por causa do atributo <code>autoplay</code></dd>
  <dt>onplaying</dt><dd>O vídeo ou áudio está tocando.</dd>
  <dt>onprogress</dt><dd>O agente de usuário está buscando dados do vídeo ou áudio.</dd>
</dl>

<h3>Eventos em campos de formulário:</h3>
<dl>
  <dt>oninput</dt><dd>O usuário entrou com dados no campo</dd>
  <dt>oninvalid</dt><dd>O campo não passou pela validação</dd>
</dl>

<h3>Eventos gerais:</h3>
<dl>
  <dt>oncontextmenu</dt><dd>O usuário disparou um menu de contexto sobre o objeto. Na maioria dos sistemas Desktop, isso significa clicar com o botão direito do mouse ou segurando uma tecla especial.</dd>
  <dt>onmousewheel</dt><dd>A rodinha do mouse foi acionada.</dd>
  <dt>onbeforeprint</dt><dd>Disparado antes da impressão da página. Você pode usá-lo para modificar, esconder ou exibir elementos, preparando a página para impressão.</dd>
  <dt>onafterprint</dt><dd>Disparado após a impressão da página. Você pode usá-lo para reverter o status anterior à impressão.</dd>
  <dt>onhashchange</dt><dd>A última porção da URL, após o hash (#), foi modificada.</dd>
  <dt>onoffline</dt><dd>O agente de usuário ficou offline.</dd>
  <dt>ononline</dt><dd>O agente de usuário está novamente conectado.</dd>
  <dt>onredo</dt><dd>O usuário disparou a ação de "Refazer".</dd>
  <dt>onundo</dt><dd>O usuário disparou a ação de "Desfazer".</dd>
</dl>

<h3>Drag-and-drop:</h3>
<p>Vimos a definição desses eventos no <a href="?chapter=10" title="Drag-n-drop e correção ortográfica">Capítulo 10</a>:</p>

<ul>
  <li>ondrag</li>
  <li>ondragend</li>
  <li>ondragenter</li>
  <li>ondragleave</li>
  <li>ondragover</li>
  <li>ondragstart</li>
  <li>ondrop</li>
</ul>

<h2>Atributos de evento</h2>

<p>A especificação do HTML5 padronizou um formato de atribuição de eventos que já era amplamente utilizado. Você pode atribuir eventos através de atributos HTML com o nome do evento. Por exemplo:</p>

<code><pre>&lt;input onblur="return verifica(this)" /&gt;</pre></code>

<p>É claro que você pode continuar usando o método do DOM <code>addEventListener</code>, com a vantagem de poder atribuir vários listeners ao mesmo evento.</p>

<?
}

