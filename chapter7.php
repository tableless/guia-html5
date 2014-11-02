<?

$title='Novos tipos de campos';

function content(){

?>

<h2>Novos valores para o atributo type</h2>

<aside class="sidenote">
  <h3>Opera 10</h3>
  <p>Enquanto escrevo, o <a href="http://opera.com/">Opera 10</a> é o único navegador Desktop que fez um bom trabalho implementando os novos recursos de formulário do HTML5. Se você instalá-lo, poderá testar quase tudo deste e dos próximos dois capítulos.</p>
</aside>

<p>O elemento input aceita os seguintes novos valores para o atributo type:</p>

<h3>tel</h3>

<p>Telefone. Não há máscara de formatação ou validação, propositalmente, visto não haver no mundo um padrão bem definido para números de telefones. É claro que você pode usar a nova API de validação de formulários (descrita no <a href="?chapter=8">capítulo 8</a>) para isso. Os agentes de usuário podem permitir a integração com sua agenda de contatos, o que é particularmente útil em telefones celulares.</p>

<h3>search</h3>

<p>Um campo de busca. A aparência e comportamento do campo pode mudar ligeiramente dependendo do agente de usuário, para parecer com os demais campos de busca do sistema.</p>

<h3>email</h3>

<p>E-mail, com formatação e validação. O agente de usuário pode inclusive promover a integração com sua agenda de contatos.</p>

<h3>url</h3>

<p>Um endereço web, também com formatação e validação.</p>

<h3>Datas e horas</h3>

<aside class="sidenote">
  <h4>datetime-local</h4>
  <p>O tipo de campo datetime-local trata automaticamente as diferenças de fusos horários, submetendo ao servidor e recebendo dele valores GMT. Com isso você pode, com facilidade, construir um sistema que será usado em diferentes fusos horários e permitir que cada usuário lide com os valores em seu próprio fuso horário.</p>
</aside>

<p>O campo de formulário pode conter qualquer um desses valores no atributo type:</p>
<ul>
  <li>datetime</li>
  <li>date</li>
  <li>month</li>
  <li>week</li>
  <li>time</li>
  <li>datetime-local</li>
</ul>

<p>Todos devem ser validados e formatados pelo agente de usuário, que pode inclusive mostrar um calendário, um seletor de horário ou outro auxílio ao preenchimento que estiver disponível no sistema do usuário.</p>

<p>O atributo adicional step define, para os validadores e auxílios ao preenchimento, a diferença mínima entre dois horários. O valor de step é em segundos, e o valor padrão é 60. Assim, se você usar <code>step="300"</code> o usuário poderá fornecer como horários 7:00, 7:05 e 7:10, mas não 7:02 ou 7:08.</p>

<h3>number</h3>

<p>Veja um exemplo do tipo number com seus atributos opcionais:</p>

<?Example('number')?>

<p>O Opera 10 nos dá uma excelente visualização do que um agente de usuário pode fazer nesse caso:</p>

<p><img src="img/number.png" alt="Opera 10 mostrando o input number" /></p>

<h3>range</h3>

<p>Vamos modificar, no exemplo acima, apenas o valor de type, mudando de "number" para "range":</p>

<?Example('range')?>

<p>Novamente, Opera 10:</p>

<p><img src="img/range.png" alt="Opera 10 mostrando o input number" /></p>

<h3>color</h3>

<p>O campo com <code>type="color"</code> é um seletor de cor. O agente de usuário pode mostrar um controle de seleção de cor ou outro auxílio que estiver disponível. O valor será uma cor no formato <code>#ff6600</code>.</p>

<?
}

