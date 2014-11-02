<?

$title='Drag-n-drop e correção ortográfica';

function content(){

?>

<h2>Drag and Drop</h2>

<p>A API de Drag and Drop é relativamente simples. Basicamente, inserir o atributo <code>draggable="true"</code> num elemento o torna arrastável. E há uma série de eventos que você pode tratar. Os eventos do objeto sendo arrastado são:</p>

<dl>
  <dt>dragstart</dt>
  <dd>O objeto começou a ser arrastado. O evento que a função recebe tem um atributo <code>target</code>, que contém o objeto sendo arrastado.</dd>
  <dt>drag</dt>
  <dd>O objeto está sendo arrastado</dd>
  <dt>dragend</dt>
  <dd>A ação de arrastar terminou</dd>
</dl>

<p>O objeto sobre o qual outro é arrastado sofre os seguintes eventos:</p>

<dl>
  <dt>dragenter</dt>
  <dd>O objeto sendo arrastado entrou no objeto target</dd>
  <dt>dragleave</dt>
  <dd>O objeto sendo arrastado deixou o objeto target</dd>
  <dt>dragover</dt>
  <dd>O objeto sendo arrastado se move sobre o objeto target</dd>
  <dt>drop</dt>
  <dd>O objeto sendo arrastado foi solto sobre o objeto target</dd>
</dl>

<h3>Detalhes importantes:</h3>

<p>A ação padrão do evento dragover é cancelar a ação de dragging atual. Assim, nos objetos que devem receber drop, é preciso setar uma ação de dragover com, no mínimo, <code>return false</code>.</p>

<p>Seleções de texto são automaticamente arrastáveis, não precisam do atributo <code>draggable</code>. E se você quiser criar uma área para onde seleções de texto possam ser arrastadas, basta tratar esses mesmos eventos.</p>

<p>Por fim, todas funções de tratamento de evento de drag recebem um objeto de evento que contém uma propriedade <code>dataTransfer</code>, um dataset comum a todos os eventos durante essa operação de drag.</p>

<?Example('drag')?>

<h4>Exemplo</h4>

<p>Segue um exemplo de drag-and-drop, baseado no excelente exemplo de Laurent Jouanneau (<a href="http://ljouanneau.com/lab/html5/demodragdrop.html">http://ljouanneau.com/lab/html5/demodragdrop.html</a>).</p>

<h2>Revisão ortográfica e gramatical</h2>

<p>Os agentes de usuário podem oferecer recursos de revisão ortográfica e gramatical, dependendo do que houver disponível em cada plataforma. Os desenvolvedores podem controlar o comportamento dessa ferramenta através do atributo <code>spellcheck</code>. Inserir <code>spellcheck="true"</code> num elemento faz com que a revisão esteja habilitada para ele. Você também pode desabilitar a revisão para determinado elemento, inserindo <code>spellcheck="false"</code>.</p>

<?
}

