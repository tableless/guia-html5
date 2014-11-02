<?

$title='Elementos audio e video, e codecs';

function content(){

?>

<h2>Áudio</h2>

<p>Para inserir áudio em uma página web, basta usar o elemento <code>audio</code>:</p>

<pre><code>&lt;audio src="mus.oga" controls="true" autoplay="true" /&gt;</code></pre>

<p>O valor de controls define se um controle de áudio, com botões de play, pause, volume, barra de progresso, contador de tempo, etc. será exibido na tela. Se for setado como "false", será preciso controlar o player via javascript, com métodos como <code>play()</code> e <code>pause()</code>. O valor de autoplay define se o áudio vai começar a tocar assim que a página carregar.</p>

<h3>Origens alternativas de áudio</h3>

<p>Todo agente de usuário deveria suportar o codec livre OggVorbis, mas, infelizmente, pode acontecer de seu arquivo oga não tocar no computador ou celular de alguém. Quem sabe do seu chefe ou seu cliente. Então é preciso saber como oferecer um formato alternativo de áudio. Fazemos assim:</p>

<pre><code>&lt;audio controls="true" autoplay="true"&gt;
  &lt;source src="mus.oga" /&gt;
  &lt;source src="mus.mp3" /&gt;
  &lt;source src="mus.wma" /&gt;
&lt;/audio&gt;</code></pre>

<p>Claro, o agente de usuário pode ainda não saber tocar nenhum desses formatos, ou sequer ter suporte a áudio. Para esses casos, ofereça um conteúdo alternativo:</p>

<pre><code>&lt;audio controls="true" autoplay="true"&gt;
  &lt;source src="mus.oga" /&gt;
  &lt;source src="mus.mp3" /&gt;
  &lt;source src="mus.wma" /&gt;
  &lt;p&gt;Faça o &lt;a href="mus.mp3"&gt;download da música&lt;/a&gt;.&lt;/p&gt;
&lt;/audio&gt;</code></pre>

<h2>Vídeo</h2>

<p>O uso de vídeo é muito semelhante ao de áudio:</p>

<pre><code>&lt;video src="u.ogv" width="400" height="300" /&gt;</code></pre>

<p>E com vários elementos source:</p>

<pre><code>&lt;video controls="true" autoplay="true" width="400" height="300"&gt;
  &lt;source src="u.ogv" /&gt;
  &lt;source src="u.mp4" /&gt;
  &lt;source src="u.wmv" /&gt;
  &lt;p&gt;Faça o &lt;a href="u.mp4"&gt;download do vídeo&lt;/a&gt;.&lt;/p&gt;
&lt;/video&gt;</code></pre>

<h2>Codecs</h2>

<aside class="sidenote">
  <h4>O que funciona na web</h4>
  <p>Mark Pilgrim está escrevendo um livro muito interessante (em inglês) chamado "<a href="http://diveintohtml5.org">Dive Into HTML 5</a>". O <a href="http://www.diveintohtml5.org/video.html">capítulo sobre Vídeo</a> é a referência de que você precisa para publicar vídeo na web com HTML5.</p>
</aside>

<p>É muito importante que você inclua, nos seus elementos source de áudio e vídeo, informação a respeito do container e codecs utilizados. Isso vai evitar que o navegador tenha que baixar, pelo menos parcialmente, o arquivo de mídia para, depois, descobrir que não consegue tocá-lo. É importante lembrar que a extensão do arquivo não é informação relevante para isso, pelo contrário, não significa nada. Uma URL pode não ter extensão de arquivo e pode levar a um redirecionamento.</p>

<p>Para indicar ao navegador o container e codecs de determinado arquivo, usa-se o atributo <code>type</code>, no formato:</p>

<code>type='<strong>MIME-type do container</strong>; codecs="<strong>codec de vídeo</strong>, <strong>codec de áudio</strong>"'</code>

<p>Por exemplo, um vídeo em Ogg, usando os codecs Theora e Vorbis, terá seu source assim:</p>

<pre><code>&lt;source src='video.ogv' type='video/ogg; codecs="theora, vorbis"'&gt;</code></pre>

<p>Com MPEG-4 a coisa é um pouco mais complicada, por que é preciso indicar ao navegador também o profile do codec de vídeo utilizado. Veja um exemplo:</p>

<pre><code>&lt;source src='video.mp4' type='video/mp4; codecs="mp4v.20.240, mp4a.40.2"'&gt;</code></pre>

<?
}

