<?

$title='Aplicações offline';

function content(){

?>

<h2>Caching</h2>

<p>HTML5 provê uma maneira de se indicar ao navegador que elementos são necessários e devem ser postos em cache para que uma aplicação funcione offline. O exemplo da documentação oficial é bastante esclarecedor. Dê uma olhada na seguinte página:</p>

<?Example('clock')?>

<p>Trata-se de um widget de relógio. Para funcionar, este HTML depende dos arquivos "clock.js" e "clock.css". Para permitir que o usuário acesse esta página offile, precisamos escrever um arquivo de manifesto, indicando que URLs devem ser postas em cache. Vamos preparar uma nova versão do widget, contendo o manifesto, que é um arquivo com a extensão .manifest e que deve ser servido com o tipo MIME <code>text/cache-manifest</code>. Em nosso caso, o arquivo vai se chamar clock.manifest e terá o seguinte conteúdo:</p>

<pre><code>CACHE MANIFEST
clock1.html
clock.css
clock.js</code></pre>

<p>Agora veja o HTML com o arquivo de manifesto linkado:</p>

<?Example('clock1')?>

<p>Note que é recomendado que você insira o próprio HTML principal na lista de URLs do arquivo de manifesto, embora não seja necessário. Ao encontrar uma página com um arquivo de manifesto vinculado, o navegador fará cache das URLs listadas no manifesto e da própria página.</p>

<p>Note também que não é necessário que todas as URLs para cache estejam importadas no documnto atual. O arquivo de manifesto pode contar todas as páginas de sua aplicação que forem necessárias para permitir o funcionamento offline, inclusive a navegação entre páginas.</p>

<h2>O objeto ApplicationCache</h2>

<p>O objeto ApplicationCache controla o status e operações de caching da página. Ele pode ser acessado via javascript, assim:</p>

<pre><code>window.applicationCache</code></pre>

<p>Seu método mais interessante é o update(), que faz com que o agente de usuário recarregue o cache da aplicação. Além disso, ele possui a propriedade status, cujo valor numérico pode ser um dos seguintes:</p>

<dl>
  <dt>0 - UNCACHED</dt>
  <dd>Não há um arquivo de manifesto nesta página ou apontando para ela</dd>
  <dt>1 - IDLE</dt>
  <dd>O objeto ApplicationCache está ocioso. O cache está atualizado.</dd>
  <dt>2 CHECKING</dt>
  <dd>O arquivo de manifesto está sendo baixado e conferido.</dd>
  <dt>3 - DOWNLOADING</dt>
  <dd>As URLs vinculadas no manifesto estão sendo baixadas.</dd>
  <dt>4 - UPDATEREADY</dt>
  <dd>O cache é antigo, mas ainda não foi marcado como obsoleto.</dd>
  <dt>5 - OBSOLETE</dt>
  <dd>O cache foi marcado como obsoleto e precisa ser atualizado assim que possível.</dd>
</dl>

<p>O objeto ApplicationCache também possui os seguintes eventos, relacionados a sua mudança de status:</p>

<ul>
  <li>onchecking</li>
  <li>onerror</li>
  <li>onnoupdate</li>
  <li>ondownloading</li>
  <li>onprogress</li>
  <li>onupdateready</li>
  <li>oncached</li>
  <li>onobsolete</li>
</ul>

<p>Como você pode ver, além de onerror, temos um evento para cada um dos status da lista acima.</p>

<h2>Controle de status da aplicação</h2>

<p>No exemplo do relógio acima não há formulários ou submissões Ajax. O agente de usuários não troca dados com o servidor. Assim é muito fácil fazer sua aplicação rodar offline, mas essa não é a realidade da maioria das aplicações. Vimos no <a href="?chapter=21">capítulo anterior</a> como fazer armazenamento local de dados. Com isso, você pode armazenar os dados que o navegador deveria enviar para o servidor enquanto a aplicação estiver offline e, tão logo ela esteja online, enviar tudo.</p>

<p>Para saber se a aplicação está online, basta acessar a propriedade onLine do objeto window.navigator:</p>

<pre><code>function salva(dados){
  if(window.navigator.onLine){
    enviaAjax(dados)
  }else{
    salvaLocal(dados)
  }
}</code></pre>

<p>E para disparar o envio quando a aplicação estiver online e avisar o usuário quando ela estiver offline, usamos os eventos ononline e onoffline do objeto window:</p>

<pre><code>window.ononline=function(){
  enviaAjax(obtemLocal())
  document.getElementById('warning').innerHTML=''
}

window.onoffline=function(){
  document.getElementById('warning').innerHTML='Aplicação offline.'
}</code></pre>

<?
}

