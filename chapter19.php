<?

$title='Tipos de links';

function content(){

?>

<h2>Links</h2>

<p>A possibilidade de linkar documentos é o que torna a Web o que ela é. Existem duas maneiras principais de linkar documentos, os elementos <code>a</code> e <code>link</code>. O elemento <code>a</code> cria um link no conteúdo da página. Você conhece sua sintaxe:</p>

<code><pre>&lt;a href="http://visie.com.br"&gt;Visie&lt;/a&gt;</pre></code>

<p>O elemento <code>link</code>, por sua vez, cria um metadado, um link que não é mostrado no conteúdo, mas o agente de usuário usa de outras maneiras. O uso mais comum é vincular um documento a uma folha de estilos:</p>

<code><pre>&lt;link rel="stylesheet" href="estilo.css" /&gt;</pre></code>

<p>Note o atributo <code>rel="stylesheet"</code>. O atributo <code>rel</code> pode estar presente nos elementos <code>a</code> e <code>link</code>, e ter uma série de valores:</p>

<h3>Metadados de navegação</h3>

<dl>
  <dt>archives</dt>
  <dd>os arquivos do site</dd>
  <dt>author</dt>
  <dd>a página do autor do documento atual</dd>
  <dt>bookmark</dt>
  <dd>o permalink da seção a que este documento pertence</dd>
  <dt>first</dt>
  <dd>o primeiro documento da série a qual este pertence</dd>
  <dt>help</dt>
  <dd>ajuda para esta página</dd>
  <dt>index</dt>
  <dd>o índice ou sumário que inclui o link para esta página</dd>
  <dt>last</dt>
  <dd>o último documento da série a qual este pertence</dd>
  <dt>license</dt>
  <dd>a licensa que cobre este documento</dd>
  <dt>next</dt>
  <dd>o próximo documento da série a qual este pertence</dd>
  <dt>prefetch</dt>
  <dd>o agente de usuário deve fazer cache desse link em segundo plano tão logo o documento atual tenha sido carregado. O autor do documento indica que este link é o provável próximo destino do usuário.</dd>
  <dt>prev</dt>
  <dd>o documento anterior da série a qual este pertence</dd>
  <dt>search</dt>
  <dd>a busca deste site</dd>
  <dt>up</dt>
  <dd>O documento um nível acima deste</dd>
</dl>

<p>O Opera nos dá um interessante exemplo de como um agente de usuário pode exibir estes links:</p>

<p><img src="img/operalinks.png" alt="Opera exibindo links" /></p>

<h3>Metadados da página</h3>

<dl>
  <dt>alternate</dt>
  <dd>um formato alternativo para o conteúdo atual. Precisa estar acompanhado do atributo <code>type</code>, contendo o tipo MIME do formato. Por exemplo, para indicar o RSS da página atual usamos:
    <pre><code>&lt;link rel="alternate" type="application/rss+xml" href="rss.xml" /&gt;</code></pre>
  </dd>
  <dt>icon</dt>
  <dd>o ícone que representa esta página</dd>
  <dt>pingback</dt>
  <dd>a URL de pingback desta página. Através desse endereço um sistema de blogging ou gerenciador de conteúdo pode avisar automaticamente quando um link para esta página for inserido.</dd>
  <dt>stylesheet</dt>
  <dd>a folha de estilo linkada deve ser vinculada a este documento para exibição</dd>
</dl>

<h3>Comportamento dos links na página</h3>

<dl>
  <dt>external</dt>
  <dd>indica um link externo ao domínio do documento atual</dd>
  <dt>nofollow</dt>
  <dd>indica que o autor do documento atual não endossa o conteúdo desse link. Os robôs de indexação para motores de busca podem, por exemplo, não seguir este link ou levar em conta o nofollow em seu algoritmo de ranking.</dd>
  <dt>noreferrer</dt>
  <dd>o agente de usuário não deve enviar o header HTTP Referer se o usuário acessar esse link</dd>
  <dt>sidebar</dt>
  <dd>o link deve ser aberto numa sidebar do navegador, se este recurso estiver disponível</dd>
</dl>



<?
}

