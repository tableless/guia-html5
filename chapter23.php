<?

$title='Scroll in to view e hidden';

function content(){

?>

<h2>Scrolling into view</h2>

<p>Um truque simples, mas muito útil. Você pode fazer:</p>

<code><pre>document.getElementById('aviso').scrollIntoView()</pre></code>

<p>Isso vai rolar a página até que o elemento com o id "aviso" esteja visível no topo do viewport. Você pode passar um parâmetro opcional top:</p>

<code><pre>document.getElementById('aviso').scrollIntoView(false)</pre></code>

<p>O valor default é true. Se você passar false, a rolagem vai deixar o objeto visível na base do viewport.</p>

<h2>hidden</h2>

<p>Ocultar e exibir elementos é uma das tarefas mais comuns em Javascript. Em HTML5 existe um atributo específico para isso, o atributo hidden. Ao inserí-lo em um elemento assim:</p>

<code><pre>&lt;div hidden&gt;Xi, se esconde!&lt;/div&gt;</pre></code>

<p>Ou assim:</p>

<code><pre>&lt;div hidden="true"&gt;Xi, se esconde!&lt;/div&gt;</pre></code>

<p>O elemento estará oculto.</p>

<h3>hidden e Javascript</h3>

<p>Acessar o atributo hidden em Javascript é muito conveniente:</p>

<pre><code>function switchElement(elm){
  if(elm.hidden)
    elm.hidden=false
  else
    elm.hidden=true
}</code></pre>

<p>Claro, você pode fazer:</p>

<pre><code>function switchElement(elm){
  elm.hidden=!elm.hidden
}</code></pre>

<p>Sugiro que você sempre use o atributo hidden. Descobrir se o elemento está oculto lendo as propriedades display e visibility do CSS, além de dar mais trabalho, pode gerar confusão.</p>

<?
}

