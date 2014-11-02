<?

$title='DOM e HTML5';

function content(){

?>

<h2>DOM e HTML5</h2>

<p>O Modelo de Objetos do Documento (DOM, na sigla em inglês) é a interface entre a linguagem Javascript e os objetos do HTML. DOM é o método padrão para construção de aplicações ricas com Javascript e é amplamente conhecido e utilizado. Neste capítulo, supondo que você já conhece DOM para HTML 4 ou XHTML, vamos nos focar na diferença entre as versões anteriores do DOM e a do HTML 5.</p>

<h3>Por quê DOM?</h3>

<p>Os primeiros navegadores a incorporar um motor de Javascript tinham alert, prompt, document.write e mais meia dúzia de maneiras de se interagir com o usuário. E só. A idéia de acessar a árvore de objetos do HTML trouxe poder às interfaces com o usuário na web. A idéia era tão boa que os fabricantes de navegadores não puderam esperar até que tivéssemos uma especificação padrão que atendesse suas necessidades, e criaram cada um seu próprio método de resolver o problema. Isso resultou em anos e anos de incompatibilidade, em que era preciso escrever uma versão de seus scripts para cada navegador.</p>

<p>Queremos, com certeza, evitar uma nova guerra de padrões. Por isso recomendamos a você, por mais sedutor que pareça utilizar um recurso proprietário Javascript, que se atenha ao DOM.</p>

<h2>Vamos às diferenças</h2>

<h3>getElementsByClassName</h3>

<p>Esse é um sonho antigo de todo desenvolvedor Javascript. Com HTML5 você pode fazer:</p>

<pre><code>destaques = document.getElementsByClassName('destaque')</code></pre>

<p>E isso retornará todos os elementos do HTML que possuem a classe "destaque".</p>

<h3>innerHTML</h3>

<p>Outro sonho antigo que se torna realidade. A propriedade innerHTML é uma idéia tão boa que todos os navegadores atuais já a suportam há muito tempo e todo desenvolvedor web sabe usá-la. Apesar disso, ela nunca havia sido descrita como um padrão.</p>

<p>Se porventura você nunca viu a propriedade innerHTML em ação (puxa, onde você estava nos últimos dez anos?) saiba que ela contém uma string, o conteúdo HTML da página. E você tem acesso de leitura e escrita a essa propriedade.</p>

<p>Veja um exemplo de innerHTML:</p>

<pre><code>function adicionaItem(nome){
  document.getElementById('lista').innerHTML += '&lt;li>'+nome+'&lt;/li>'
}</code></pre>

<h3>activeElement e hasFocus()</h3>

<p>O documento HTML5 tem uma nova propriedade, activeElement, que contém o elemento que possui o foco no momento. O documento também possui o método hasFocus(), que retorna true se o documento contém o foco. Seu usuário pode estar trabalhando com múltiplas janelas, abas, frames, ou mesmo ter alternado para outro aplicativo deixando o navegador com sua aplicação Javascript rodando em segundo plano. O método hasFocus() é uma conveniente maneira de tratar ações que dependem do foco na aplicação atual.</p> 

<p>Veja um exemplo de script dependente de foco:</p>

<?Example('focusNotify')?>

<h3>getSelection()</h3>

<p>Os objetos document e window possuem um método getSelection(), que retorna a seleção atual, um objeto da classe Selection. A seleção tem, entre outros, os seguintes métodos e propriedades:</p>

<aside class="sidenote">
<h3>Usando getSelection() hoje</h3>
<p>A maioria dos navegadores ainda não teve tempo de se atualizar em relação à especificação e, retorna uma string quando você chama <code>document.getSelection()</code> e um objeto Selection quando você chama <code>window.getSelection()</code>. Como esperamos que num futuro próximo o comportamento de <code>document.getSelection()</code> mude, sugerimos que você prefira usar o método de window por enquanto.</p>
</aside>

<dl>
  <dt>anchorNode</dt>
  <dd>O elemento que contém o início da seleção</dd>
  <dt>focusNode</dt>
  <dd>O elemento que contém o final da seleção</dd>
  <dt>selectAllChildern(parentNode)</dt>
  <dd>Seleciona todos os filhos de parentNode</dd>
  <dt>deleteFromDocument()</dt>
  <dd>Remove a seleção do documento</dd>
  <dt>rangeCount</dt>
  <dd>A quantidade de intervalos na seleção</dd>
  <dt>getRangeAt(index)</dt>
  <dd>Retorna o intervalo na posição index</dd>
  <dt>addRange(range)</dt>
  <dd>Adiciona um intervalo à seleção</dd>
  <dt>removeRange(range)</dt>
  <dd>Remove um intervalo da seleção</dd>
</dl>

<h4>Intervalos de seleção</h4>

<p>Você deve ter notado acima que uma seleção é um conjunto de intervalos, da classe Range. Cada intervalo possui, entre outros, os seguintes métodos e propriedades:</p>

<dl>
  <dt>deleteContent()</dt>
  <dd>Remove o conteúdo do intervalo</dd>
  <dt>setStart(parent,offset)</dt>
  <dd>Seta o início do intervalo para o caractere na posição offset dentro do elemento DOM parent</dd>
  <dt>setEnd(parent,offset)</dt>
  <dd>Seta o final do intervalo para o caractere na posição offset dentro do elemento DOM parent</dd>
</dl>

<p>Tanto os objetos Selection quanto os objetos Range retornam o texto da seleção quando convertidos para strings.</p>

<h3>document.head</h3>

<p>O objeto document já possuía uma propriedade body, uma maneira conveniente de acessar o elemento body do HTML. Agora ele ganhou uma propriedade head, maneira também muito conveniente de acessar o elemento head.</p>

<h3>Selector API</h3>

<p>A Selector API não é novidade do HTML5, é anterior a ele. Mas como ainda é desconhecida de parte dos desenvolvedores, convém dizer que ela existe, e que continua funcionando no HTML5. Com a selector API você pode usar seletores CSS para encontrar elementos DOM.</p>

<aside class="sidenote">
  <h4>querySelector e jQuery</h4>
  <p>Se você é usuário de jQuery, já entendeu tudo. É exatamente a mesma idéia dos seletores jQuery.</p>
  <p>Alguns preocupados usuários de jQuery têm nos perguntado se não é melhor, em termos de performance usar a Selector API. Mas é claro que é. Se você realmente souber programar, escrever todo o seu código sempre será melhor em performance que usar um framework. Mas o ganho, nesse caso, é desprezível. Talvez o conforte saber que, nos navegadores em que isto está disponível, a própria jQuery usa internamente a Selector API.</p>
</aside>

<p>A Selector API expõe duas funções em cada um dos elementos DOM: querySelector e querySelectorAll. Ambas recebem como argumento uma string com um seletor CSS. A consulta é sempre feita na subtree do elemento DOM a partir do qual a chamada foi disparada. A querySelector retorna o primeiro elemento que satisfaz o seletor, ou null caso não haja nenhum. A querySelectorAll retorna a lista de elementos que satisfazem o seletor.</p>

<p>Veja, neste exemplo, um script para tabelas zebradas com Selector API:</p>

<?Example('zebra')?>

<h4>Características especiais de DomNodeList</h4>

<p>As listas de elementos retornadas pelos métodos do DOM não são Arrays comuns, são objetos DomNodeList, o que significa que, entre outros métodos especiais, você pode usar <code>list[0]</code> ou <code>list(0)</code> para obter um elemento da lista. Também pode usar <code>list["name"]</code> ou <code>list("name")</code> para obter um objeto por seu nome. Duas adições interessantes do HTML5 ao usar este último método:</p>

<ol>
  <li>O objeto é buscado pelos atributos name ou id.</li>
  <li>Uma lista de campos de formulário com o mesmo valor no atributo name (uma lista de radio buttons, por exemplo) será retornada caso mais de um objeto seja encontrado. Essa lista contém um atributo especial, value, muito conveniente. Ele contém o valor do radio marcado e, ao ser setado, marca o radio correspondente.</li>
</ol>

<h3>Datasets</h3>

<p>Você pode atribuir dados arbitrários a um elemento HTML qualquer, prefixando seus atributos com "data-". Por exemplo:</p>

<pre><code>&lt;img src="computador1.jpg" alt="Novo GNexius Forethinker" id="c1"
  data-processor="35Ghz" data-memory="48GB" 
  data-harddrive="16TB" data-screen='45"' &gt;</code></pre>

<p>Você pode acessar esses valores via Javascript, através do atributo dataset, assim:</p>

<pre><code>var img=document.getElementById('c1')
proc=img.dataset.processor</code></pre>

<p>As propriedades de dataset têm permissão de leitura e escrita.</p>

<?
}

