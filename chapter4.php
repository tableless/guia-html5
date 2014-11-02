<?

$title='Modelos de conteúdo';

function content(){

?>

<p>Há pequenas regras básicas que nós já conhecemos e que estão no HTML desde o início. Estas regras definem onde os elementos podem ou não estar. Se eles podem ser filhos ou pais de outros elementos e quais os seus comportamentos.</p>

<p>Dentre todas as categorias de modelos de conteúdo, existem dois tipos de elementos: elementos de linha e de bloco.<br> Os elementos de linha marcam, na sua maioria das vezes, texto. Alguns exemplos: <code>a</code>, <code>strong</code>, <code>em</code>, <code>img</code>, <code>input</code>, <code>abbr</code>, <code>span</code>.</p>
<p>Os elementos de blocos são como caixas, que dividem o conteúdo nas seções do layout.</p>

<p>Abaixo segue algumas premissas que você precisa relembrar e conhecer:</p>
<ul>
	<li>Os elementos de linha podem conter outros elementos de linha, dependendo da categoria que ele se encontra. Por exemplo: o elemento <code>a</code> não pode conter o elemento <code>label</code>.</li>
	<li>Os elementos de linha nunca podem conter elementos de bloco.</li>
	<li>Elementos de bloco sempre podem conter elementos de linha.</li>
	<li>Elementos de bloco podem conter elementos de bloco, dependendo da categoria que ele se encontra. Por exemplo, um parágrafo não pode conter um DIV. Mas o contrário é possível.</li>
</ul>

<p>Estes dois grandes grupos podem ser divididos em categorias. Estas categorias dizem qual modelo de conteúdo o elemento trabalha e como pode ser seu comportamento.</p>

<h3>Categorias</h3>
<p>Cada elemento no HTML pode ou não fazer parte de um grupo de elementos com características similares. As categorias estão a seguir. Manteremos os nomes das categorias em inglês para que haja um melhor entendimento:</p>

<ul>
	<li>Metadata content</li>
	<li>Flow content</li>
	<li>Sectioning content</li>
	<li>Heading content</li>
	<li>Phrasing content</li>
	<li>Embedded content</li>
	<li>Interactive content</li>
</ul>

<p>Abaixo segue como as categorias estão relacionadas de acordo com o WHATWG:</p>
<object data="img/content-venn.svg" width="1000" height="288"><img alt="Sectioning content, heading content, phrasing content, and
  embedded content are all types of flow content. Embedded content is
  also a type of phrasing content." src="img/content-venn.png"></object>

<h3>Metadata content</h3>
<p>Os elementos que compõe a categoria Metadata são:</p>
<ul>
	<li>base</li>
	<li>command</li>
	<li>link</li>
	<li>meta</li>
	<li>noscript</li>
	<li>script</li>
	<li>style</li>
	<li>title</li>
</ul>

<p>Este conteúdo vem antes da apresentação, formando uma relação com o documento e seu conteúdo com outros documentos que distribuem informação por outros meios.</p>

<h3>Flow content</h3>
<p>A maioria dos elementos utilizados no body e aplicações são categorizados como Flow Content. São eles:</p>

<ul>
	<li>a</li>
	<li>abbr</li>
	<li>address</li>
	<li>area (se for um decendente de um elemento de mapa)</li>
	<li>article</li>
	<li>aside</li>
	<li>audio</li>
	<li>b</li>
	<li>bdo</li>
	<li>blockquote</li>
	<li>br</li>
	<li>button</li>
	<li>canvas</li>
	<li>cite</li>
	<li>code</li>
	<li>command</li>
	<li>datalist</li>
	<li>del</li>
	<li>details</li>
	<li>dfn</li>
	<li>div</li>
	<li>dl</li>
	<li>em</li>
	<li>embed</li>
	<li>fieldset</li>
	<li>figure</li>
	<li>footer</li>
	<li>form</li>
	<li>h1</li>
	<li>h2</li>
	<li>h3</li>
	<li>h4</li>
	<li>h5</li>
	<li>h6</li>
	<li>header</li>
	<li>hgroup</li>
	<li>hr</li>
	<li>i</li>
	<li>iframe</li>
	<li>img</li>
	<li>input</li>
	<li>ins</li>
	<li>kbd</li>
	<li>keygen</li>
	<li>label</li>
	<li>link (Se o atributo <code>itemprop</code> for utilizado)</li>
	<li>map</li>
	<li>mark</li>
	<li>math</li>
	<li>menu</li>
	<li>meta (Se o atributo <code>itemprop</code> for utilizado)</li>
	<li>meter</li>
	<li>nav</li>
	<li>noscript</li>
	<li>object</li>
	<li>ol</li>
	<li>output</li>
	<li>p</li>
	<li>pre</li>
	<li>progress</li>
	<li>q</li>
	<li>ruby</li>
	<li>samp</li>
	<li>script</li>
	<li>section</li>
	<li>select</li>
	<li>small</li>
	<li>span</li>
	<li>strong</li>
	<li>style  (Se o atributo <code>scoped</code> for utilizado)</li>
	<li>sub</li>
	<li>sup</li>
	<li>svg</li>
	<li>table</li>
	<li>textarea</li>
	<li>time</li>
	<li>ul</li>
	<li>var</li>
	<li>video</li>
	<li>wbr</li>
	<li>Text</li>
</ul>

<p>Por via de regra, elementos que seu modelo de conteúdo permitem inserir qualquer elemento que se encaixa no Flow Content, devem ter pelo menos um descendente de texto ou um elemento descendente que faça parte da categoria <code>embedded</code>.</p>

<h3>Sectioning content</h3>
<p>Estes elementos definem um grupo de cabeçalhos e rodapés.</p>
<ul>
	<li>article</li>
	<li>aside</li>
	<li>nav</li>
	<li>section</li>
</ul>

<p>Basicamente são elementos que juntam grupos de textos no documento.</p>

<h3>Heading content</h3>
<p>Os elementos da categoria Heading definem uma seção de cabeçalhos, que podem estar contidos em um elemento na categoria Sectioning.</p>
<ul>
<li>h1</li>
<li>h2</li>
<li>h3</li>
<li>h4</li>
<li>h5</li>
<li>h6</li>
<li>hgroup</li>
</ul>

<h3>Phrasing content</h3>
<p>Fazem parte desta categoria elementos que marcam o texto do documento, bem como os elementos que marcam este texto dentro do elemento de parágrafo.</p>
<ul>
<li>a</li>
<li>abbr</li>
<li>area (se ele for descendente de um elemento de mapa)</li>
<li>audio</li>
<li>b</li>
<li>bdo</li>
<li>br</li>
<li>button</li>
<li>canvas</li>
<li>cite</li>
<li>code</li>
<li>command</li>
<li>datalist</li>
<li>del (se ele contiver um elemento da categoria de Phrasing)</li>
<li>dfn</li>
<li>em</li>
<li>embed</li>
<li>i</li>
<li>iframe</li>
<li>img</li>
<li>input</li>
<li>ins (se ele contiver um elemento da categoria de Phrasing)</li>
<li>kbd</li>
<li>keygen</li>
<li>label</li>
<li>link (se o atributo <code>itemprop</code> for utilizado)</li>
<li>map (se apenas ele contiver um elemento da categoria de Phrasing)</li>
<li>mark</li>
<li>math</li>
<li>meta (se o atributo <code>itemprop</code> for utilizado)</li>
<li>meter</li>
<li>noscript</li>
<li>object</li>
<li>output</li>
<li>progress</li>
<li>q</li>
<li>ruby</li>
<li>samp</li>
<li>script</li>
<li>select</li>
<li>small</li>
<li>span</li>
<li>strong</li>
<li>sub</li>
<li>sup</li>
<li>svg</li>
<li>textarea</li>
<li>time</li>
<li>var</li>
<li>video</li>
<li>wbr</li>
<li>Text</li>
</ul>

<h3>Embedded content</h3>
<p>Na categoria Embedded, há elementos que importam outra fonte de informação para o documento.</p>
<ul>
<li>audio</li>
<li>canvas</li>
<li>embed</li>
<li>iframe</li>
<li>img</li>
<li>math</li>
<li>object</li>
<li>svg</li>
<li>video</li>
</ul>

<h3>Interactive content</h3>
<p>Interactive Content são elementos que fazem parte da interação de usuário.</p>

<ul>
<li>a</li>
<li>audio (se o atributo <code>control</code> for utilizado)</li>
<li>button</li>
<li>details</li>
<li>embed</li>
<li>iframe</li>
<li>img (se o atributo <code>usemap</code> for utilizado)</li>
<li>input (se o atributo <code>type</code> não tiver o valor hidden)</li>
<li>keygen</li>
<li>label</li>
<li>menu (se o atributo <code>type</code> tiver o valor <code>toolbar</code>)</li>
<li>object (se o atributo <code>usemap</code> for utilizado)</li>
<li>select</li>
<li>textarea</li>
<li>video (se o atributo <code>control</code> for utilizado)</li>
</ul>

<p>Alguns elementos no HTML podem ser ativados por um comportamento. Isso significa que o usuário pode ativá-lo de alguma forma. O início da sequencia de eventos depende do mecanismo de ativação e normalmente culminam em um evento de click seguido pelo evento DOMActivate.</p>

<p>O user-agent permite que o usuário ative manualmente o elemento que tem este comportamento utilizando um teclado, mouse, comando de voz etc.</p>


<?
}

