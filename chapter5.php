<?

$title='Novos elementos e atributos';

function content(){

?>

<p>
	A função do HTML é indicar que tipo de informação a página está exibindo. Quando lemos um livro, conseguimos entender e diferenciar um título de um parágrafo. Basta percebermos a quantidade de letra, tamanho da fonte, cor etc. No código isso é diferente. Robôs de busca e outros user-agents não conseguem diferenciar tais detalhes. Por isso, cabe ao desenvolvedor marcar a informação para que elas possam ser diferenciadas por diversos dispositivos.
</p>

<p>
	Com as versões anteriores do HTML nós conseguimos marcar diversos elementos do layout, estruturando a página de forma que as informações ficassem em suas áreas específicas. Conseguiámos diferenciar por exemplo, um parágrafo de um título. Mas não conseguíamos diferenciar o rodapé do cabeçalho. Essa diferenciação era apenas percebida visualmente pelo layout pronto ou pela posição dos elementos na estrutura do HTML. Entretanto, não havia maneira de detectar automaticamente estes elementos já que as tags utilizada para ambos poderiam ser iguais e não havia padrão para nomenclatura de IDs e Classes.
</p>
<p>
	O HTML5 trouxe uma série de elementos que nos ajudam a definir setores principais no documento HTML. Com a ajuda destes elementos, podemos por exemplo diferenciar diretamente pelo código HTML5 áreas importantes do site como sidebar, rodapé e cabeçalho. Conseguimos seccionar a área de conteúdo indicando onde exatamente é o texto do artigo.
</p>

<p>
	Estas mudanças simplificam o trabalho de sistemas como os dos buscadores. Com o HTML5 os buscadores conseguem vasculhar o código de maneira mais eficaz. Procurando e guardando informações mais exatas e levando menos tempo para estocar essa informação.
</p>

<p>
	Abaixo segue uma lista dos novos elementos e atributos incluídos no HTML5:
</p>
<table>
	<tbody>
		<tr>
			<th><a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/sections.html#the-section-element">section</a></th>
			<td>A tag <code>section</code> define uma nova seção genérica no documento. Por exemplo, a home de um website pode ser dividida em diversas seções: introdução ou destaque, novidades, informação de contato e chamadas para conteúdo interno.</td>
		</tr>
		<tr>
			<th><a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/sections.html#the-nav-element">nav</a></th>
			<td>O elemento <code>nav</code> representa uma seção da página que contém links para outras partes do website. Nem todos os grupos de links devem ser elementos <code>nav</code>, apenas aqueles grupos que contém links importantes. Isso pode ser aplicado naqueles blocos de links que geralmente são colocados no Rodapé e também para compor o menu principal do site.</td>
		</tr>
		<tr>
			<th><a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/sections.html#the-article-element">article</a></th>
			<td>O elemento <code>article</code> representa uma parte da página que poderá ser distribuído e reutilizável em FEEDs por exemplo. Isto pode ser um post, artigo, um bloco de comentários de usuários ou apenas um bloco de texto comum.</td>
		</tr>
		<tr>
			<th><a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/sections.html#the-aside-element">aside</a></th>
			<td>O elemento <code>aside</code> representa um bloco de conteúdo que referência o conteúdo que envolta do elemento <code>aside</code>. O <code>aside</code> pode ser representado por conteúdos em sidebars em textos impressos, publicidade ou até mesmo para criar um grupo de elementos <code>nav</code> e outras informações separados do conteúdo principal do website.</td>
		</tr>
		<!--<tr>
			<th><a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/sections.html#the-hgroup-element">hgroup</a></th>
			<td>Este elemento consiste em um grupo de títulos. Ele serve para agrupar elementos de título de H1 até H6 quando eles tem múltiplos níveis como título com subtítulos e etc.</td>
		</tr>-->
		<tr>
			<th><a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/sections.html#the-header-element">header</a></th>
			<td>O elemento <code>header</code> representa um grupo de introdução ou elementos de navegação. O elemento <code>header</code> pode ser utilizado para agrupar índices de conteúdos, campos de busca ou até mesmo logos.</td>
		</tr>
		<tr>
			<th><a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/sections.html#the-footer-element">footer</a></th>
			<td>O elemento <code>footer</code> representa literalmente o rodapé da página. Seria o último elemento do último elemento antes de fechar a tag HTML. O elemento <code>footer</code> não precisa aparecer necessariamente no final de uma seção.</td>
		</tr>
		<tr>
			<th><a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/text-level-semantics.html#the-time-element">time</a></th>
			<td>Este elemento serve para marcar parte do texto que exibe um horário ou uma data precisa no calendário gregoriano.</td>
		</tr>
	</tbody>	
</table>

<p>Este atributos foram descontinuados porque modificam a formatação do elemento e suas funções são melhores controladas pelo CSS:
	
	<ul>
	   <li><code>align</code> como atributo da tag <code>caption</code>,
	    <code>iframe</code>, <code>img</code>, <code>input</code>,
	    <code>object</code>, <code>legend</code>, <code>table</code>,
	    <code>hr</code>, <code>div</code>, <code>h1</code>, <code>h2</code>,
	    <code>h3</code>, <code>h4</code>, <code>h5</code>, <code>h6</code>,
	    <code>p</code>, <code>col</code>, <code>colgroup</code>,
	    <code>tbody</code>, <code>td</code>, <code>tfoot</code>, <code>th</code>,
	    <code>thead</code> e <code>tr</code>.</li>
	<li><code>alink</code>, <code>link</code>, <code>text</code> e
	    <code>vlink</code> como atributos da tag <code>body</code>.

	   </li><li><code>background</code> como atributo da tag <code>body</code>.

	   </li><li><code>bgcolor</code> como atributo da tag <code>table</code>, <code>tr</code>,
	    <code>td</code>, <code>th</code> e <code>body</code>.

	   </li><li><code>border</code> como atributo da tag <code>table</code> e
	    <code>object</code>.

	   </li><li><code>cellpadding</code> e <code>cellspacing</code> como atributos da tag
	    <code>table</code>.

	   </li><li><code>char</code> e <code>charoff</code> como atributos da tag
	    <code>col</code>, <code>colgroup</code>, <code>tbody</code>,
	    <code>td</code>, <code>tfoot</code>, <code>th</code>, <code>thead</code>

	    e <code>tr</code>.

	   </li><li><code>clear</code> como atributo da tag <code>br</code>.

	   </li><li><code>compact</code> como atributo da tag <code>dl</code>, <code>menu</code>,
	    <code>ol</code> e <code>ul</code>.

	   </li><li><code>frame</code> como atributo da tag <code>table</code>.

	   </li><li><code>frameborder</code> como atributo da tag <code>iframe</code>.

	   </li><li><code>height</code> como atributo da tag <code>td</code> e <code>th</code>.

	   </li><li><code>hspace</code> e <code>vspace</code> como atributos da tag
	    <code>img</code> e <code>object</code>.

	   </li><li><code>marginheight</code> e <code>marginwidth</code> como atributos da tag
	    <code>iframe</code>.

	   </li><li><code>noshade</code> como atributo da tag <code>hr</code>.

	   </li><li><code>nowrap</code> como atributo da tag <code>td</code> e <code>th</code>.

	   </li><li><code>rules</code> como atributo da tag <code>table</code>.

	   </li><li><code>scrolling</code> como atributo da tag <code>iframe</code>.

	   </li><li><code>size</code> como atributo da tag <code>hr</code>.

	   </li><li><code>type</code> como atributo da tag <code>li</code>, <code>ol</code> e
	    <code>ul</code>.

	   </li><li><code>valign</code> como atributo da tag <code>col</code>,
	    <code>colgroup</code>, <code>tbody</code>, <code>td</code>,
	    <code>tfoot</code>, <code>th</code>, <code>thead</code> e
	    <code>tr</code>.

	   </li><li><code>width</code> como atributo da tag <code>hr</code>, <code>table</code>,
	    <code>td</code>, <code>th</code>, <code>col</code>, <code>colgroup</code>

	    e <code>pre</code>.
	  </li></ul>

<p>
	Alguns atributos do HTML4 não são mais permitidos no HTML5. Se eles tiverem algum impacto negativo na compatibilidade de algum user-agent eles serão discutidos.
</p>

<ul>
   <li><code>rev</code> e <code>charset</code> como atributos da tag
    <code>link</code> e <code>a</code>.

   </li><li><code>shape</code> e <code>coords</code> como atributos da tag
    <code>a</code>.

   </li><li><code>longdesc</code> como atributo da tag <code>img</code> and
    <code>iframe</code>.

   </li><li><code>target</code> como atributo da tag <code>link</code>.

   </li><li><code>nohref</code> como atributo da tag <code>area</code>.

   </li><li><code>profile</code> como atributo da tag <code>head</code>.

   </li><li><code>version</code> como atributo da tag <code>html</code>.

   </li><li><code>name</code> como atributo da tag <code>img</code> (use <code>id</code>

    instead).

   </li><li><code>scheme</code> como atributo da tag <code>meta</code>.

   </li><li><code>archive</code>, <code>classid</code>, <code>codebase</code>,
    <code>codetype</code>, <code>declare</code> e <code>standby</code>

    como atributos da tag <code>object</code>.

   </li><li><code>valuetype</code> e <code>type</code> como atributos da tag
    <code>param</code>.

   </li><li><code>axis</code> e <code>abbr</code> como atributos da tag <code>td</code>

    e <code>th</code>.

   </li><li><code>scope</code> como atributo da tag <code>td</code>.
  </li></ul>

<h3>Atributos</h3>
<p>Alguns elementos ganharam novos atributos:</p>
<ul>
	<li>O atributo <code>autofocus</code> pode ser especificado nos elementos <code>input</code> (exceto quando há atributo <code>hidden</code> atribuído), <code>textarea</code>, <code>select</code> e <code>button</code>.</li>
	<li>A tag <code>a</code> passa a suportar o atributo <code>media</code> como a tag <code>link</code>.</li>
	<li>A tag <code>form</code> ganha um atributo chamado <code>novalidate</code>. Quando aplicado o formulário pode ser enviado sem validação de dados.</li>
	<li>O elemento <code>ol</code> ganhou um atributo chamado <code>reversed</code>. Quando ele é aplicado os indicadores da lista são colocados na ordem inversa, isto é, da forma descendente.
	</li>
	<li>O elemento <code>fieldset</code> agora permite o atributo <code>disabled</code>. Quando aplicado, todos os filhos de <code>fieldset</code> são desativados.</li>
	<li>O novo atributo <code>placeholder</code> pode ser colocado em <code>inputs</code> e <code>textareas</code>.</li>
	<li>O elemento <code>area</code> agora suporta os atributos <code>hreflang</code> e <code>rel</code> como os elementos <code>a</code> e <code>link</code></li>
	<li>O elemento <code>base</code> agora suporta o atributo <code>target</code> assim como o elemento <code>a</code>. O atributo <code>target</code> também não está mais descontinuado nos elementos <code>a</code> e <code>area</code> porque são úteis para aplicações web.</li>
</ul>

<p>Os atributos abaixo foram descontinuados:</p>
<ul>
	<li>O atributo <code>border</code> utilizado na tag <code>img</code>.</li>
	<li>O atributo <code>language</code> na tag <code>script</code>.</li>
	<li>O atributo <code>name</code> na tag <code>a</code>. Porque os desenvolvedores utilizam ID em vez de name.</li>
	<li>O atributo <code>summary</code> na tag <code>table</code>.</li>
</ul>

<p>O W3C mantém um documento atualizado constantemente nesta página: <a href="http://www.w3.org/TR/2010/WD-html5-diff-20100624/">http://www.w3.org/TR/2010/WD-html5-diff-20100624/</a>.</p>

<?
}

