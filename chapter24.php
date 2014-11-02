<?

$title='Geolocation API';

function content(){

?>

<h2>Métodos de Geolocalização</h2>

<p>Há três populares maneiras de um agente de usuário descobrir sua posição no globo:</p>

<dl>
  <dt>Geolocalização IP</dt>
  <dd>É o método usado pela maioria dos navegadores web em computadores. Através de consultas whois e serviços de localização de IP, vai determinar a cidade ou região em que você está.</dd>
  <dt>Triangulação GPRS</dt>
  <dd>Dispositivos conectados a uma rede de celulares e sem um GPS, ou com o GPS desligado, podem determinar sua posição pela triângulação das antenas GPRS próximas. É bem mais preciso que o método baseado em IP, vai mostrar em que parte do bairro você está.</dd>
  <dt>GPS</dt>
  <dd>É o método mais preciso. Em condições ideais, a margem de erro é de apenas 5 metros.</dd>
</dl>

<p>Embora essas sejam as três maneiras mais populares de se resolver o problema, podem não ser as únicas. Alguns agentes de usuário podem usar uma combinação desses métodos, ou mesmo um novo método que venha a ser inventado. Por isso, a Geolocation API é agnóstica em relação ao método usado. Há apenas uma maneira de ligar e desligar o "modo de alta precisão", o que vai ter significado diferente em cada agente de usuário.</p>

<p>Para obter a posição do usuário, basta executar o script:</p>

<pre><code>navigator.geolocation.getCurrentPosition(showpos)</code></pre>

<p>Onde <code>showpos</code> é uma função callback, que vai receber um objeto de posicionamento. Veja um exemplo:</p>

<pre><code>function showpos(position){
  lat=position.coords.latitude
  lon=position.coords.longitude
  alert('Your position: '+lat+','+lon)
}</code></pre>

<p>Claro, você pode fazer o que quiser, abrir um mapa, submeter a posição via Ajax, enviar os dados para um webservice, etc.</p>

<p>O método getCurrentPosition recebe dois outros parâmetros. O primeiro é uma função para tratamento de erro. O segundo, um objeto de configuração.</p>

<h3>Tratando erros</h3>

<p>Quando o script tenta acessar o posicionamento, o navegador exibe uma barra como esta:</p>

<p><img src="img/geobar.png" alt="Barra de confirmação de Geolocalização" /></p>

<p>O usuário pode então escolher se deseja ou não compartilhar sua posição com o site. Além de o usuário poder dizer não, muita coisa pode dar errado na hora de obter a geolocalização. Para tratar isso, você pode passar o segundo parâmetro a getCurrentPosition:</p>

<pre><code>navigator.geolocation.getCurrentPosition(showpos,erropos)</code></pre>

<p>Caso algo dê errado, a função erropos vai receber um objeto PositionError, que tem o atributo code, que pode ter um dos seguintes valores:</p>

<dl>
  <dt>1 - Permissão negada</dt>
  <dd>O usuário clicou em "não compartilhar".</dd>
  <dt>2 - Posição indisponível</dt>
  <dd>O agente de usuário está desconectado, os satélites de GPS não puderam ser alcançados ou algum erro semelhante.</dd>
  <dt>3 - Timeout</dt>
  <dd>Tempo esgotado ao obter uma posição. Você pode definir o tempo máximo ao chamar getCurrentPosition.</dd>
  <dt>0 - Erro desconhecido</dt>
  <dd>Alguma outra coisa impediu o agente de usuário de obter uma posição.</dd>
</dl>

<h4>Não trate a resposta do usuário como um erro</h4>

<p>Em sua função de tratamento de erro, se obtiver o código de erro 1, por favor, não incomode o usuário com mensagens de erro. Ele escolheu não compartilhar sua posição com o site. Talvez a melhor atitude seja não fazer nada nesse momento.</p>

<h3>O objeto de configuração</h3>

<p>O terceiro parâmetro de getCurrentPosition é um objeto de configuração, que pode ter as seguintes propriedades:</p>

<dl>
  <dt>enableHighAccuracy</dt>
  <dd>Se true, liga o modo de alta precisão. Num celular isso pode instruir o navegador, por exemplo, a usar o GPS ao invés da triangulação GPRS</dd>
  <dt>timeout</dt>
  <dd>O tempo em milissegundos que o agente do usuário vai esperar pela posição antes de disparar um erro tipo 3.</dd>
  <dt>maximumAge</dt>
  <dd>O tempo, em milissegundos, que o navegador pode cachear a posição.</dd>
</dl>

<h3>watchPosition</h3>

<p>Se o que você deseja é rastrear a posição do usuário continuamente, pode usar, ao invés de getCurrentPosition, o método watchPosition. Ele tem a mesma assinatura de getCurrentPosition:</p>

<pre><code>w=navigator.geolocation.watchPosition(showpos,erropos)</code></pre>

<p>A diferença é que a função showpos será chamada toda vez que a posição do usuário mudar. O valor de retorno é um número, que pode ser usado posteriormente para cancelar o watcher:</p>

<pre><code>navigator.geolocation.clearWatch(w)</code></pre>

<?
}

