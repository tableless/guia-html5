<?

$title='Elemento device e Stream API';

function content(){

?>

<h2>O elemento device</h2>

<aside class="sidenote">
  <h3>Working Draft</h3>
  <p>O conteúdo desse capítulo está baseado numa especificação que ainda está em status de "Working Draft". Ou seja, as coisas ainda podem mudar bastante. Fique de olho no que vai acontecer com o elemento device e a Stream API, acessando (em inglês):<br /><a href="http://dev.w3.org/html5/html-device/">http://dev.w3.org/html5/html-device/</a></p>
</aside>

<p>Você pode inserir em seu HTML um elemento de acesso à webcam do usuário, assim:</p>

<pre><code>&lt;device type="media"&gt;</code></pre>

<p>Isso vai exibir uma interface solicitando ao usuário acesso a sua webcam. Se ele tiver mais de uma, também será permitido que ele escolha que webcam usar. O atributo media também pode conter o valor "fs", que vai abrir uma caixa de seleção no sistema de arquivos, permitindo ao usuário escolher um arquivo para fazer stream.</p>

<p>O passo seguinte é conectar o stream desse seu elemento device a alguma coisa. Veja, por exemplo, como conectá-lo a um elemento video na própria página, fazendo com que o usuário possa ver a imagem de sua própria webcam:</p>

<?Example('videochat')?>

<h3>Streams</h3>

<p>Você deve ter notado, no script acima, que a função de update recebe um parâmetro stream. Trata-se de um objeto da classe Stream, que possui uma propriedade url, que já usamos acima, e um método record. O método record inicia a gravação do stream e retorna um objeto StreamRecorder. Esse último possui um método stop, que retorna o arquivo que foi gravado.</p>

<h3>Peer-to-peer</h3>

<p><strong>Cuidado!</strong> O W3C ainda está trabalhando nessa especificação, e tudo aqui pode mudar. Por isso, não se preocupe em entender as minúcias. Saiba apenas que HTML5 prevê que os agentes de usuário tenham uma interface de comuicação P2P, que permite a troca de texto, imagem, vídeo e arquivos. Por enquanto, a especificação deste item esté sendo escrita junto da do elemento device, mas isso deve ganhar uma página própria em breve. Fique de olho.</p>

<?
}

