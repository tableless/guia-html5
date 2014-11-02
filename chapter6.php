<?

$title='Elementos modificados e ausentes';

function content(){

?>

<p>Existiam no HTML alguns elementos que traziam apenas características visuais e não semânticas para o conteúdo da página. Esses elementos anteriormente foram descontinuados porque atrapalhavam o código e também porque sua função era facilmente suprida pelo CSS. Contudo, alguns destes elementos voltaram à tona com novos significados semânticos. Outros elementos que não descontinuados, mas seus significados foram modificados.</p>

<h3>Elementos modificados</h3>
<ul>
<li>O elemento B passa a ter o mesmo nível semântico que um SPAN, mas ainda mantém o estilo de negrito no texto. Contudo, ele não dá nenhuma importância para o text marcado com ele.</li>

<li>O elemento I também passa a ser um SPAN. O texto continua sendo itálico e para usuários de leitores de tela, a voz utilizada é modificada para indicar ênfase. Isso pode ser útil para marcar frases em outros idiomas, termos técnicos e etc.</li>
</ul>

<p>O interessante é que nestes dois casos houve apenas uma mudança semântica. Provavelmente você não precisará modificar códigos onde estes dois elementos são utilizados.</p>

<ul>
	<li>O elemento <code>a</code> sem o atributo <code>href</code> agora representa um <em>placeholder</em> no exato lugar que este link se encontra.</li>
	<li>O elemento <code>address</code> agora é tratado como uma seção no documento.</li>
	<li>O elemento <code>hr</code> agora tem o mesmo nível que um parágrafo, mas é utilizado para quebrar linhas e fazer separações.
	</li>
	<li>O elemento <code>strong</code> ganhou mais importância.</li>
	<li>O elemento <code>head</code> não aceita mais elementos <code>child</code> como seu filho.</li>
</ul>

<h3>Elementos ou atributos descontinuados</h3>
<p>Os elementos abaixo foram descontinuados por que seus efeitos são apenas visuais:</p>
<ul>
<li>basefont</li>
<li>big</li>
<li>center</li>
<li>font</li>
<li>s</li>
<li>strike</li>
<li>tt</li>
<li>u</li>
</ul>

<p>Os elementos abaixo foram descontinuados por que ferem os princípios de acessibilide e usabilidade:</p>

<ul>
<li>frame</li>
<li>frameset</li>
<li>noframes</li>
</ul>

<p>Os elementos abaixo não foram incluídos na especificação porque não tiveram uso entre os desenvolvedores ou porque sua função foi substituída por outro elemento:</p>

<ul>
<li><code>acronym</code> não foi incluído porque criou um bocado de confusão entre os desenvolvedores que preferiram utilizar a tag <code>abbr</code>.</li>
<li><code>applet</code> ficou obsoleto em favor da tag <code>object</code>.</li>
<li><code>isindex</code> foi substituído pelo uso de form controls.</li>
<li><code>dir</code> ficou obsoleto em favor da tag <code>ul</code>.</li>
</ul>

<?
}

