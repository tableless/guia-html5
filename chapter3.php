<?

$title='Estrutura básica, DOCTYPE e charsets';

function content(){

?>

<p>A estrutura básica do HTML5 continua sendo a mesma das versões anteriores da linguagem, há apenas uma excessão na escrita do Doctype. Segue abaixo como a estrutura básica pode ser seguida:</p>

<?Example('estruturabasica')?>

<h3>O Doctype</h3>
<p>O Doctype deve ser a primeira linha de código do documento antes da tag HTML.</p>

<pre><code>&lt;!DOCTYPE html&gt;</code></pre>

<p>O Doctype indica para o navegador e para outros meios qual a especificação de código utilizar. Em versões anteriores, era necessário referenciar o DTD diretamente no código do Doctype. Com o HTML5, a referência por qual DTD utilizar é responsabilidade do Browser.
</p>
<p>
O Doctype não é uma tag do HTML, mas uma instrução para que o browser tenha informações sobre qual versão de código a marcação foi escrita.
</p>

<h3>O elemento HTML</h3>
<p>O código HTML é uma série de elementos em árvore onde alguns elementos são filhos de outros e assim por diante. O elemento principal dessa grande árvore é sempre a tag HTML.</p>

<pre><code>&lt;html lang="pt-br"&gt;</pre></code>

<p>O atributo LANG é necessário para que os user-agents saibam qual a linguagem principal do documento.<br>
Lembre-se que o atributo LANG não é restrito ao elemento HTML, ele pode ser utilizado em qualquer outro elemento para indicar o idioma do texto representado.</p>

<p>Para encontrar a listagem de códigos das linguagens, acesse: <a href="http://www.w3.org/International/questions/qa-choosing-language-tags">http://www.w3.org/International/questions/qa-choosing-language-tags</a>.</p>

<h3>HEAD</h3>
<p>A Tag HEAD é onde fica toda a parte inteligente da página. No HEAD ficam os metadados. Metadados são informações sobre a página e o conteúdo ali publicado. </p>

<h4>Metatag Charset</h4>
<p>No nosso exemplo há uma metatag responsável por chavear qual tabela de caractéres a página está utilizando.</p>

<pre><code>&lt;meta charset="utf-8"&gt;</code></pre>

<p>Nas versões anteriores ao HTML5, essa tag era escrita da forma abaixo:</p>

<pre><code>&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8"&gt;</code></pre>

<p>Essa forma antiga será também suportada no HTML5. Contudo, é melhor que você utilize a nova forma.</p>

<p>A Web é acessada por pessoas do mundo inteiro. Ter um sistema ou um site que limite o acesso e pessoas de outros países é algo que vai contra a tradição e os ideais da internet. Por isso, foi criado uma tabela que suprisse essas necessidades, essa tabela se chama Unicode. A tabela Unicode suporta algo em torno de um milhão de caracteres. Ao invés de cada região ter sua tabela de caracteres, é muito mais sensato haver uma tabela padrão com o maior número de caracteres possível. Atualmente a maioria dos sistemas e browsers utilizados por usuários suportam plenamente Unicode. Por isso, fazendo seu sistema Unicode você garante que ele será bem visualizado aqui, na China ou em qualquer outro lugar do mundo.</p>
<p>O que o Unicode faz é fornecer um único número para cada caractere, não importa a plataforma, nem o programa, nem a língua.</p>

<h4>Tag LINK</h4>
<p>Há dois tipos de links no HTML: a tag A, que são links que levam o usuário para outros documentos e a tag LINK, que são links para fontes externas que serão usadas no documento.</p>

<p>No nosso exemplo há uma tag LINK que importa o CSS para nossa página:</p>

<pre><code>&lt;link rel="stylesheet" type="text/css" href="estilo.css"&gt;</code></pre>

<p>O atributo <code>rel="stylesheet"</code> indica que aquele link é relativo a importação de um arquivo referente a folhas de estilo.</p>

<p>Há outros valores para o atributo REL, como por exemplo o ALTERNATE:</p>

<pre><code>&lt;link rel="alternate" type="application/atom+xml" title="feed" href="/feed/"&gt;</code></pre>

<p>Neste caso, indicamos aos user-agents que o conteúdo do site poder ser encontrado em um caminho alternativo via Atom FEED.</p>

<p>No HTML5 há outros links relativos que você pode inserir como o <code>rel="archives"</code> que indica uma referência a uma coleção de material histórico da página. Por exemplo, a página de histórico de um blog pode ser referenciada nesta tag.</p>

<?
}

