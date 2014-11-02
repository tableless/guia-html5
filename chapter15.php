<?

$title='Server-Sent Events';

function content(){

?>

<h2>EventSource</h2>

<p>A Server-Sent Events API é uma maneira de inverter o fluxo das aplicações Ajax, fazendo com que o servidor possa disparar o envio de dados ao agente de usuário. Para isso, cria-se, no agente de usuário, um objeto EventSource:</p>

<pre><code>es=new EventSource('comm.php')</code></pre>

<p>Isso vai abrir uma conexão HTTP para "comm.php" e mantê-la escutando. Cada vez que o servidor enviar eventos para esse cliente, será disparado o evneto message do objeto EventSource. Veja um exemplo:</p>

<pre><code>es.onmessage=function(e){
  alert("Chegaram dados: "+e.data)
}</code></pre>

<p>Isso pode ser usado, por exemplo, para implementar uma interface de chat ou um monitor de status de alguma operação demorada ocorrendo no servidor.</p>

<h3>O protocolo de comunicação</h3>

<p>Em nosso exemplo acima, a página comm.php envia eventos para o agente de usuário. Você não precisa se preocupar em saber como isso funciona do lado do cliente, uma vez que o agente de usuário faz todo o trabalho. Mas é importante que saiba como isso deve funcionar do lado do servidor. A URL de comunicação deve devolver ao cliente um header <code>Content-type: text/event-stream</code>. Em seguida, envia as mensagens, que são blocos de texto separados um do outro por uma linha em branco:</p>

<pre><code>data: mensagem 1

data: a mensagem 2 tem
data: mais de uma linha

data: mensagem 3</code></pre>

<p>O prefixo data: indica que o que segue são os dados da mensagem. Você também pode usar o prefixo id:</p>

<pre><code>data: mensagem 1
id: 1

data: a mensagem 2 tem
data: mais de uma linha
id: 2

data: mensagem 3
id: 3</code></pre>

<p>Se você enviar prefixos id em suas mensagens e o agente de usuário perder a conexão, ao tentar reconectar ele vai enviar o valor do último id no header HTTP <code>Last-Event-ID</code>. Com isso você pode, por exemplo, enviar as mensagens do chat do ponto em que parou.</p>

<?
}

