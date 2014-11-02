<?

$title='Histórico de sessão e API Storage';

function content(){

?>

<h2>Histórico de Sessão e API Storage</h2>

<p>Um dos grandes desafios de usabilidade ao se construir aplicações web com a tecnologia atual é apresentar um modelo de navegação consistente para o usuário. Duas grandes lacunas nos impediam de fazê-lo:</p>

<ol>
  <li>Não havia uma forma simples de fazer com que as ações locais do usuário numa página fossem refletidas na próxima. Por exemplo, se o usuário abre e fecha itens em um menu em árvore e em seguida navega para a próxima página, era muito difícil fazer com que o menu aparece no mesmo estado na segunda página.</li>
  <li>Não havia uma forma simples de fazer com que as ações do usuário numa página Ajax respondessem corretamente aos botões de controle de histórico do navegador (voltar e avançar).</li>
</ol>

<p>HTML5 traz formas simples de solucionar os dois problemas.</p>

<h3>Histórico de Sessão</h3>

<p>Você provavelmente conhece o objeto history do navegador e seus métodos <code>go</code>, <code>back</code> e <code>forward</code>. Ele nos permite, via javascript, um controle básico do histórico de navegação. O mesmo controle que o usuário, voltar e avançar.</p>

<p>O objeto history foi vitaminado no HTML5 com dois novos métodos:</p>

<ol>
  <li><strong>pushState(data,title[,url])</strong>: acrescenta uma entrada na lista de histórico.</li>
  <li><strong>replaceState(data,title[,url])</strong>: modifica a entrada atual na lista de histórico.</li>
</ol>

<p>Com isso, você pode acrescentar itens à lista de histórico, associando dados ou mesmo uma URL a eles. Por exemplo, digamos que você tenha três elementos de conteúdo em sua página e um script que exiba um por vez de acordo com os cliques do usuário no menu:</p>

<aside class="sidenote">
<h3>Segurança</h3>
<p>Claro, se seu script tentar associar uma URL fora do domínio do script à lista de histórico, isso vai resultar numa exceção de segurança.</p>
</aside>

<pre><code>function showContent(n){

  <del>// Escondemos todos os elementos de conteúdo</del>
  for(var i=1;i&lt;4;i++)
    document.getElementById('cont'+i).style.display='none'

  <del>// Exibimos o elemento escolhido</del>
  document.getElementById('cont'+n).style.display='block'

}</code></pre>

<p>Vamos fazer com que nosso script acrescente uma linha de histórico ao selecionar um elemento:</p>

<pre><code>function showPage(n){

  <del>// Escondemos todos os elementos de conteúdo</del>
  for(var i=1;i&lt;4;i++)
    document.getElementById('cont'+i).style.display='none'

  <del>// Exibimos o elemento escolhido</del>
  document.getElementById('cont'+n).style.display='block'

}

function showContent(n){
  <del>// Mostramos o conteúdo escolhido</del>
  showPage(n)
  <del>// Salvamos a página atual no histórico</del>
  history.pushState({page:n},'Conteúdo '+n)
}</code></pre>

<p>Fazendo isso, cada vez que o usuário escolher um item no menu, o elemento será exibido e uma linha será acrescentada no histórico. O usuário poderá acessar normalmente esses itens de histórico usando o botão de voltar do navegador. Cada vez que ele usar o histórico, será disparado um evento popstate. Assim, para que nosso script esteja completo, basta tratar esse evento:</p>

<pre><code>function showPage(n){

  <del>// Escondemos todos os elementos de conteúdo</del>
  for(var i=1;i&lt;4;i++)
    document.getElementById('cont'+i).style.display='none'

  <del>// Exibimos o elemento escolhido</del>
  document.getElementById('cont'+n).style.display='block'

}

function showContent(n){
  <del>// Mostramos o conteúdo escolhido</del>
  showPage(n)
  <del>// Salvamos a página atual no histórico</del>
  history.pushState({page:n},'Conteúdo '+n)
}

<del>// Quando o usuário navegar no histórico, mostramos a página relacionada:</del>
window.onpopstate=function(e){
  if(e.state)
    showPage(e.page)
}</code></pre>

<h3>localStorage e sessionStorage</h3>

<p>Até o HTML4, quando precisávamos armazenar dados no agente de usuário que persistissem entre as páginas, usávamos Cookies. Cookies nos permitiam armazenar o status de um menu javascript que precisava ser mantido entre as páginas, lembrar o nome do usuário, o histórico de operações realizadas por ele ou a última vez que ele visitou nosso site.</p>

<p>Com o aumento da complexidade das aplicações baseadas em web, duas grandes limitações dos Cookies nos incomodam:</p>

<ol>
  <li><strong>Interface complexa:</strong> o código para armazenar Cookies envolve complexos cálculos com datas e controle do nome de domínio.</li>
  <li><strong>Limite de armazenamento:</strong> alguns agentes de usuário permitiam o armazenamento de no máximo 20 Cookies, com apenas 4KB cada.</li>
</ol>

<p>HTML5 traz uma nova maneira de armazenar dados no client, a API Storage. Um objeto Storage possui os métodos:</p>

<ol>
  <li><strong>getItem(key)</strong>: obtém um valor armazenado no Storage</li>
  <li><strong>setItem(key,value)</strong> guarda um valor no Storage</li>
  <li><strong>removeItem(key)</strong> exclui um valor do Storage</li>
  <li><strong>clear()</strong> limpa o Storage</li>
</ol>

<aside class="sidenote">
  <h3>Serializar</h3>
  <p>Uma outra complicação dos Cookies resolvida pela API Storage é o fato de Cookies só armazenarem strings, nos obrigando a serializar arrays e objetos javascript. A especificação da API Storage rege que qualquer valor javascript pode ser armazenado e recuperado. Infelizmente, em alguns dos navegadores em que testamos, os valores são convertidos para strings assim como nos Cookies. Torçamos para que os agentes de usuário implementem corretamente esse recurso.</p>
</aside>

<p>Estão disponíveis dois objetos no escopo global (window): localStorage e sessionStorage. O objeto localStorage armazena os dados no client sem expiração definida. Ou seja, se o usuário fechar o navegador e voltar ao site semanas depois, os dados estarão lá. O sessionStorage armazena os dados durante a sessão atual de navegação.</p>

<p>O código para armazenar um valor na Storage se parece com isso:</p>

<code>localStorage.setItem('userChoice',33)</code>

<p>E quando você precisar desse valor, em outra página:</p>

<pre><code>localStorage.getItem('userChoice')</code></pre>

<p>Essa interface já é muito mais simples que a de Cookies. Mas pode ficar melhor. Você pode usar o Storage como um array. Por exemplo:</p>

<pre><code>if(!sessionStorage['theme']){
  sessionStorage['theme']='oldfurniture';
}</code></pre>

<p>Não há como isso ser mais simples! Além disso, o espaço de armazenamento sugerido pela documentação é de 5MB para cada domínio, resolvendo, acredito que por mais uma década, o problema de espaço de armazenamento local.</p>

<?
}

