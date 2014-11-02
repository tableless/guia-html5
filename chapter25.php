<?

$title='Undo';

function content(){

?>

<h2>O objeto UndoManager</h2>

<p>O agente de usuário deve armazenar um histórico de alterações para cada documento carregado. Esse histórico é controlado pelo objeto UndoManager, acessível através de <code>window.undoManager</code>. O histórico guarda dois tipos de alterações:</p>

<dl>
  <dt>Alterações DOM</dt>
  <dd>O próprio histórico de alterações do navegador, as alterações DOM são inseridas automaticamente no histórico quando o usuário usa um campo de edição.</dd>
  <dt>Objetos undo</dt>
  <dd>Os objetos undo são inseridos no histórico e controlados pelos seus scripts. Por exemplo, uma aplicação de e-mail pode guardar um objeto undo representando o fato de que o usuário moveu um e-mail de uma pasta para outra.</dd>
</dl>

<p>O objeto UndoManager possui os seguintes métodos e propriedades:</p>

<dl>
  <dt>length</dt>
  <dd>o número de entradas no histórico</dd>
  <dt>position</dt>
  <dd>o número da entrada atual no histórico</dd>
  <dt>add(data,title)</dt>
  <dd>adiciona uma entrada específica no histório. <code>data</code> pode ser um objeto literal com dados arbitrários. <code>title</code> é como essa entrada vai aparecer descrita na lista do histórico</dd>
  <dt>remove(index)</dt>
  <dd>remove uma entrada específica do histórico</dd>
  <dt>clearUndo()</dt>
  <dd>remove todas as entradas antes da atual no histórico</dd>
  <dt>clearRedo()</dt>
  <dd>remove todas as entradas após a atual no histórico</dd>
</dl>

<p>Além disso, os itens no histórico podem ser acessados com <code>window.undoManager[index]</code>.</p>

<h3>Respondendo às ações de undo e redo</h3>

<p>Cada vez que o usuário disparar uma ação de undo ou redo, e o item do histórico for um objeto undo, será disparado o evento correspondente, window.onundo ou window.onredo. As funções associadas a estes eventos receberão como parâmetro um objeto event, contendo uma propriedade data, cujo valor é o objeto undo que você inseriu no histórico.</p>

<p>Veja o exemplo:</p>

<pre><code>window.onundo=function(e){
  alert('Refazer a alteração: '+e.data)
}</code></pre>

<h3>Disparando as ações de undo e redo</h3>

<p>Se você quiser oferecer em sua aplicação botões para undo e redo, basta que eles executem:</p>

<pre><code>document.execCommand('undo')</code></pre>

<p>Ou:</p>

<pre><code>document.execCommand('redo')</code></pre>

<?
}

