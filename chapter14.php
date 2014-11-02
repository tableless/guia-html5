<?

$title='Canvas API';

function content(){

?>

<h2>O elemento canvas</h2>

<p>A Canvas API permite a você desenhar na tela do navegador via Javascript. O único elemento HTML existente para isso é o elemento <code>canvas</code>, o resto todo é feito via Javascript. Veja como inserir o elemento <code>canvas</code> numa página:</p>

<pre><code>&lt;canvas id="x" width="300" height="300"&gt;&lt;/canvas&gt;</code></pre>

<p>Isso vai exibir um retângulo vazio. Para desenhar nele, primeiro obtemos o contexto de desenho, com Javascript:</p>

<pre><code>context=document.getElementById('x').getContext('2d')</code></pre>

<aside class="sidenote">
  <h3>Existe um contexto 3D?</h3>
  <p>Ainda não. Existem várias implementações de contexto 3D, e cada fabricante de navegador tem criado a sua, mas ainda não há um padrão do W3C sobre esse assunto.</p>
</aside>

<p>Agora que temos um contexto, podemos desenhar nele. Vamos começar com um simples retângulo:</p>

<code><pre>context.fillRect(10, 10, 50, 150)</pre></code>

<p>Simples, não? Que tal tentarmos algo um pouco mais complexo? Dê uma olhada no exemplo:</p>

<?Example('canvas')?>

<p>E veja o que acontece quando se clica no botão:</p>

<p><img src="img/canvas.png" alt="Exemplo de canvas" /></p>

<p>Há muito mais para você estudar se quiser se aprofundar na Canvas API. Apenas para que você tenha uma idéia, é possível desenhar texto, sombras, gradientes, incluir imagens no canvas, manipular os pixels, rotacionar e transformar os objetos.</p>

<h3>Canvas e SVG</h3>

<p>Uma dúvida muito comum é quando usar Canvas, quando usar SVG. Para saber escolher, é preciso entender as diferenças entre um e outro. SVG é vetorial, e baseado em XML, logo, acessível via DOM. Canvas é desenhado pixel a pixel, via Javascript.</p>

<p>Assim, as vantagens do SVG são:</p>

<ol>
  <li>O conteúdo é acessível a leitores de tela</li>
  <li>O gráfico é escalável, não perde resolução ou serrilha ao redimensionar</li>
  <li>O conteúdo é acessível via DOM</li>
</ol>

<p>E as vantagens do Canvas:</p>

<ol>
  <li>A performance é muito superior ao SVG na maioria dos casos</li>
  <li>É fácil desenhar via Javascript. Em SVG, é preciso fazer seu script escrever XML para você. Com Canvas você só manda desenhar, e pronto.</li>
</ol>

<?
}

