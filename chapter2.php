<?

$title='Análise do suporte atual pelos navegadores e estratégias de uso';

function content(){

?>

<h3>O desenvolvimento modular</h3>

<p>Antigamente, para que uma nova versão do HTML ou do CSS fosse lançada, todas as ideias listadas na especificação deveriam ser testadas e desenvolvidas para então serem publicadas para o uso dos browsers e os desenvolvedores. <br>Esse método foi mudado com o lançamento do HTML5 e o CSS3. A partir de agora, as duas tecnologias foram divididas em módulos. Isso quer dizer que a comunidade de desenvolvedores e os fabricantes de browsers não precisam esperar que todo o padrão seja escrito e publicado para utilizarem as novidades das linguagens.<br> As propriedades do CSS3, por exemplo, foram divididas em pequenos grupos. Há um grupo cuidando da propriedade Background, outro da propriedade Border, outro das propriedades de Texto e etc. Cada um destes grupos são independentes e podem lançar suas novidades a qualquer momento. Logo, o desenvolvimento para web ficou mais dinâmico, com novidades mais constantes.</p>

<p>O ponto negativo nesse formato, é que problemas de compatibilidade podem ocorrer com mais frequencia. Por exemplo, um browser pode adotar bordas arredondadas e outro não. Ou um browser pode escolher suportar um API diferente do API que o concorrente implementou. Contudo, os browsers tem mostrado grande interesse em se manterem atualizados em relação aos seus concorrentes.</p>

<h3>Motores de Renderização</h3>
<p>Há uma grande diversidade de dispositivos que acessam a internet. Entre eles, há uma série de tablets, smartphones, pc's e etc. Cada um destes meios de acesso utilizam um determinado browser para navegar na web. Não há como os desenvolvedores manterem um bom nível de compatibilidade com todos estes browsers levando em consideração a particularidade de cada um. Uma maneira mais segura de manter o código compatível, é nivelar o desenvolvimento pelos motores de renderização. Cada browser utiliza um motor de renderização que é responsável pelo processamento do código da página.</p>

<p>Abaixo, segue uma lista dos principais browsers e seus motores:</p>
<table>
	<thead>
		<tr>
			<th>Motor</th>
			<th>Browser</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Webkit</th>
			<td>Safari, Google Chrome</td>
		</tr>
		<tr>
			<th>Gecko</th>
			<td>Firefox, Mozilla, Camino</td>
		</tr>
		<tr>
			<th>Trident</th>
			<td>Internet Explorer 4 ao 9</td>
		</tr>
		<tr>
			<th>Presto</th>
			<td>Opera 7 ao 10</td>
		</tr>
	</tbody>
</table>

<p>É interessante que você faça código compatível com estes motores. Focando a compatibilidade nos motores de renderização você atingirá uma amplitude maior de browsers. <br>Por exemplo, se seu código funcionar no <a href="http://webkit.org" title="Site oficial do Webkit">Webkit</a>, você alcançará o <a href="http://apple.com/safari/" title="link para o browser da Apple">Safari</a> e o <a href="http://google.com/chrome/" title="Link para o browser do Google">Chrome</a>, dois dos principais browsers do mercado para desktops. Além disso, você também alcança aparelhos como Blackberry, iPhone, iPod Touch, iPad e dispositivos que rodam Android. </p>

<h3>Compatibilidade com HTML5</h3>
<p>Atualmente o Webkit é o motor mais compatível com os Padrões do HTML5. Como a Apple tem interesse que seus dispositivos sejam ultracompatíveis com os Padrões, ela tem feito um belo trabalho de atualização e avanço da compatibilidade deste motor.<br>
Contudo o Firefox e o Opera já estão compatíveis com grande parte da especificação do HTML5 e CSS3 e a cada upgrade eles trazem mais novidades e atualização  dos padrões.</p>

<p>O que pode te preocupar de verdade é a retrocompatibilidade com versões antigas de browsers como o Internet Explorer. A Microsoft está fazendo um bom trabalho com o IE9, mas as versões 8 e 7 não tem quase nenhum suporte ao HTML5, o que é um problema sério para aplicações web baseadas em tecnologias mais recentes, mas que a base de usuários utiliza as versões antigas do Internet Explorer.</p>

<p>Abaixo segue uma tabela simples de compatibilidade entre os browsers e alguns módulos do HTML5:</p>

<table>
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>Safari</th>
			<th>Chrome</th>
			<th>Opera</th>
			<th>Firefox</th>
			<th>IE 8</th>
			<th>IE 9</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Local Storage</th>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
		</tr>
		<tr>
			<th>Histórico de Sessão</th>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
		</tr>
		<tr>
			<th>Aplicações Offline</th>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
		</tr>
		<tr>
			<th>Novos tipos de campos</th>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
		</tr>
		<tr>
			<th>Form: Autofocus</th>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
		</tr>
		<tr>
			<th>Form: Autocomplete</th>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
		</tr>
		<tr>
			<th>Form: Required</th>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportno">n</span></td>
		</tr>
		<tr>
			<th>Video, Audio e Canvas Text</th>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportyes">s</span></td>
			<td><span class="supportno">n</span></td>
			<td><span class="supportyes">s</span></td>
		</tr>
	</tbody>
</table>

<h3>Técnicas de detecção</h3>
<p>Pode ser que o usuário não utilize um browser que suporta HTML5. Neste caso, você pode redirecioná-lo para uma versão do site mais simples, ou talvez apenas mostrar uma mensagem alertando o usuário sobre a importância da atualização do browser. Para isso temos algumas técnicas de detecção para conferir se o browser suporta ou não HTML5.</p>

<p>Quando o browser visita um website, ele constrói uma coleção de objetos que representam elementos HTML na página. Cada elemento no código é representado no DOM como um objeto diferente. Todo objeto DOM tem propriedades em comum, mas alguns objetos tem características específicas. Usaremos estes objetos para fazermos a detecção. Abaixo segue 4 meios que você poderá utilizar para detectar o suporte do browser:</p>

<ol>
	<li>
		Verifique se uma determinada propriedade existe em objetos globais como WINDOW ou NAVIGATOR. Nesse caso, verificamos o suporte a geolocalização.
	</li>
	<li>
		Crie um elemento e verifique se uma determinada propriedade existe neste elemento. 
	</li>
	<li>
		Crie um elemento e verifique se um determinado método existe neste elemento, então chame o método e verifique se o valor retorna. Por exemplo, teste quais formatos de vídeo são suportados.
	</li>
	<li>
		Crie um elemento e defina um atributo com um determinado valor, então verifique se o atributo suporta este valor. Por exemplo, crie um input e verifique quais types são suportados.
	</li>
</ol>

<h4>Utilizando o Modernizr</h4>
<p>O Modernizr (<a href="http://www.modernizr.com/" title="Biblioteca de verificação">http://www.modernizr.com/</a>) é uma biblioteca de detecção que lhe permite verificar o suporte da maioria das características do HTML5 e CSS3.</p>

<p>O Modernizr roda automaticamente assim que você o adiciona no head do documento. 
	Assim, se você quiser verificar se o browser suporta Geolocalização, por exemplo, basta inserir este script na página. Se o browser suportar a feature testada, ele retornará true:</p>

<pre>
<code>
	if (Modernizr.geolocation) {
	  // Aceita a feature
	} else {
	  // Não aceita a feature testada. 
	}
</code>
</pre>

<?
}

