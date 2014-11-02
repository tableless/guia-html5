<?

$title='Tipos de dados e validadores';

function content(){

?>

<h2>Formulários vitaminados</h2>

<p>Conforme você deve ter percebido no último capítulo, o HTML5 avançou bastante nos recursos de formulários, facilitando muito a vida de quem precisa desenvolver aplicações web baseadas em formulários. Neste capítulo vamos avançar um pouco mais nesse assunto e, você vai ver, a coisa vai ficar ainda melhor.</p>

<h3>autofocus</h3>

<p>Ao incluir em um campo de formulário o atributo autofocus, assim:</p>

<pre><code>&lt;input name="login" autofocus &gt;</code></pre>

<p>O foco será colocado neste campo automaticamente ao carregar a página. Diferente das soluções em Javascript, o foco estará no campo tão logo ele seja criado, e não apenas ao final do carregamento da página. Isso evita o problema, muito comum quando você muda o foco com Javascript, de o usuário já estar em outro campo, digitando, quando o foco é mudado.</p>

<h3>Placeholder text</h3>

<p>Você já deve ter visto um "placeholder". Tradicionalmente, vínhamos fazendo isso:</p>

<?Example('placeholderold')?>

<p>HTML5 nos permite fazer isso de maneira muito mais elegante:</p>

<?Example('placeholder')?>

<h3>required</h3>

<p>Para tornar um campo de formulário obrigatório (seu valor precisa ser preenchido) basta, em HTML5, incluir o atributo <code>required</code>:</p>

<pre><code>&lt;input name="login" required&gt;</code></pre>

<h3>maxlength</h3>

<p>Você já conhecia o atributo <code>maxlength</code>, que limita a quantidade de caracteres em um campo de formulário. Uma grande lacuna dos formulário HTML foi corrigida. Em HTML5, o elemento textarea também pode ter maxlength!</p>

<h2>Validação de formulários</h2>

<p>Uma das tarefas mais enfadonhas de se fazer em Javascript é validar formulários. Infelizmente, é também uma das mais comuns. HTML5 facilita muito nossa vida ao validar formulários, tornando automática boa parte do processo. Em muitos casos, todo ele. Você já viu que pode tornar seus campos "espertos" com os novos valores para o atributo type, que já incluem validação para datas, emails, URLs e números. Vamos um pouco além.</p>

<h3>pattern</h3>

<p>O atributo <code>pattern</code> nos permite definir expressões regulares de validação, sem Javascript. Veja um exemplo de como validar CEP:</p>

<?Example('pattern')?>

<h3>novalidate e formnovalidate</h3>

<p>Podem haver situações em que você precisa que um formulário não seja validado. Nestes casos, basta incluir no elemento <code>form</code> o atributo <code>novalidate</code>.</p>

<p>Outra situação comum é querer que o formulário não seja validade dependendo da ação de submit. Nesse caso, você pode usar no botão de submit o atributo <code>formnovalidate</code>. Veja um exemplo:</p>

<?Example('formnovalidate')?>

<h3>Custom validators</h3>

<p>É claro que as validações padrão, embora atendam a maioria dos casos, não são suficientes para todas as situações. Muitas vezes você vai querer escrever sua própria função de validação Javascript. Há alguns detalhes na especificação do HTML5 que vão ajudá-lo com isso:</p>

<ol>
  <li><strong>O novo evento oninput</strong> é disparado quando algo é modificado no valor de um campo de formulário. Diferente de onchange, que é disparado ao final da edição, oninput é disparado ao editar. É diferente também de onkeyup e onkeypress, porque vai capturar qualquer modificação no valor do campo, feita com mouse, teclado ou outra interface qualquer.</li>
  <li><strong>O método setCustomValidity</strong> pode ser invocado por você. Ele recebe uma string. Se a string for vazia, o campo será marcado como válido. Caso contrário, será marcado como inválido.</li>
</ol>

<p>Com isso, você pode inserir suas validações no campo de formulário e deixar o navegador fazer o resto. Não é mais preciso capturar o evento submit e tratá-lo. Veja, por exemplo, este formulário com validação de CPF:</p>

<?Example('customvalidator')?>

<?
}

