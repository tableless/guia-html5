<?

$title='Detalhes e conteúdo editável.';

function content(){

?>

<h2>Ainda mais formulários</h2>

<p>Vejamos mais duas coisas que você certamente já fez mais de uma vez e foram simplificadas pelo HTML5.</p>

<h3>Detalhes e sumário</h3>

<p>Veja um exemplo de uso dos novos elementos details e summary:</p>

<pre><code>&lt;details&gt;
  &lt;summary&gt;Copiando &lt;progress max="39248" value="14718"&gt; 37,5%&lt;/summary&gt;
  &lt;dl&gt;
    &lt;dt&gt;Tamanho total:&lt;/dt&gt;
    &lt;dd&gt;39.248KB&lt;/dd&gt;
    &lt;dt&gt;Transferido:&lt;/dt&gt;
    &lt;dd&gt;14.718&lt;/dd&gt;
    &lt;dt&gt;Taxa de transferência:&lt;/dt&gt;
    &lt;dd&gt;127KB/s&lt;/dd&gt;
    &lt;dt&gt;Nome do arquivo:&lt;/dt&gt;
    &lt;dd&gt;HTML5.mp4&lt;/dd&gt;
  &lt;/dl&gt;
&lt;/details&gt;</code></pre>

<p>Veja como um agente de usuário poderia renderizar isso:</p>

<p><img src="img/details.png" alt="Renderização das tags summary e details" /></p>

<p>E ao clicar:</p>

<p><img src="img/details2.png" alt="Renderização expandida das tags summary e details" /></p>

<h3>Conteúdo editável</h3>

<p>Para tornar um elemento do HTML editável, basta incluir nele o atributo contenteditable, assim:</p>

<code><pre>&lt;div contenteditable="true"&gt;
  Edite-me...
&lt;/div&gt;</pre></code>

<p>Você pode ler e manipular os elementos editáveis normalmente usando os métodos do DOM. Isso permite, com facilidade, construir uma área de edição de HTML.</p>

<?
}

