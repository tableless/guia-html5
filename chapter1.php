<?

$title='Visão geral do HTML5';

function content(){

?>

<p>De acordo com o W3C a Web é baseada em 3 pilares:</p>
<ul>
<li>Um esquema de nomes para localização de fontes de informação na Web, esse esquema chama-se URI.</li>
<li>Um Protocolo de acesso para acessar estas fontes, hoje o HTTP.</li>
<li>Uma linguagem de Hypertexto, para a fácil navegação entre as fontes de informação: o HTML.</li>
</ul>

<p>Vamos nos focar no terceiro pilar, o HTML.</p>

<h3>Hypertexto</h3>
<p>HTML é uma abreviação de Hypertext Markup Language - Linguagem de Marcação de Hypertexto. Resumindo em uma frase: o HTML é uma linguagem para publicação de conteúdo (texto, imagem, vídeo, áudio e etc) na Web.</p>

<p>O HTML é baseado no conceito de Hipertexto. Hipertexto são conjuntos de elementos – ou <strong>nós</strong> – ligados por conexões. Estes elementos podem ser palavras, imagens, vídeos, áudio, documentos etc. Estes elementos conectados formam uma grande rede de informação. Eles não estão conectados linearmente como se fossem textos de um livro, onde um assunto é ligado ao outro seguidamente. A conexão feita em um hipertexto é algo imprevisto que permite a comunicação de dados, organizando conhecimentos e guardando informações relacionadas.</p>

<p>Para distribuir informação de uma maneira global, é necessário haver uma linguagem que seja entendida universalmente por diversos meios de acesso. O HTML se propõe a ser esta linguagem. <br>
Desenvolvido originalmente por Tim Berners-Lee o HTML ganhou popularidade quando o Mosaic - browser desenvolvido por Marc Andreessen na década de 1990 - ganhou força. A partir daí, desenvolvedores e fabricantes de browsers utilizaram o HTML como base, compartilhando as mesmas convenções.</p>

<h3>O começo e a interoperabilidade</h3>
<p>
Entre 1993 e 1995, o HTML ganhou as versões HTML+, HTML2.0 e HTML3.0, onde foram propostas diversas mudanças para enriquecer as possibilidades da linguagem. Contudo, até aqui o HTML ainda não era tratado como um padrão. Apenas em 1997, o grupo de trabalho do W3C responsável por manter o padrão do código, trabalhou na versão 3.2 da linguagem, fazendo com que ela fosse tratada como prática comum. Você pode ver: <a href="http://www.w3.org/TR/html401/appendix/changes.html">http://www.w3.org/TR/html401/appendix/changes.html</a>.</p>

<p>Desde o começo o HTML foi criado para ser uma linguagem independente de plataformas, browsers e outros meios de acesso. Interoperabilidade significa menos custo. Você cria apenas um código HTML e este código pode ser lido por diversos meios, ao invés de  versões diferentes para diversos dispositivos. Dessa forma, evitou-se que a Web fosse desenvolvida em uma base proprietária, com formatos incompatíveis e limitada.</p>

<p>Por isso o HTML foi desenvolvido para que essa barreira fosse ultrapassada, fazendo com que a informação publicada por meio deste código fosse acessível por dispositivos e outros meios com características diferentes, não importando o tamanho da tela, resolução, variação de cor. Dispositivos próprios para deficientes visuais e auditivos ou dispositivos móveis e portáteis. O HTML deve ser entendido universalmente, dando a possibilidade para a reutilização dessa informação de acordo com as limitações de cada meio de acesso.</p>

<h3>WHAT Working Group</h3>
<p>Enquanto o W3C focava suas atenções para a criação da segunda versão do XHTML, um grupo chamado Web Hypertext Application Technology Working Group ou WHATWG trabalhava em uma versão do HTML que trazia mais flexibilidade para a produção de websites e sistemas baseados na web.</p>

<p>O WHATWG (<a href="http://www.whatwg.org/" title="Página oficial do WHATWG">http://www.whatwg.org/</a>) foi fundado por desenvolvedores de empresas como Mozilla, Apple e Opera em 2004. Eles não estavam felizes com o caminho que a Web tomava e nem com o rumo dado ao XHTML. Por isso, estas organizações se juntaram para escrever o que seria chamado hoje de HTML5.<br>
Entre outros assuntos que o WHATWG se focava era Web Forms 2.0 que foi incluído no HTML5 e o Web Controls 1.0 que foi abandonado por enquanto.</p>

<p>A participação no grupo é livre e você pode se inscrever na <a href="http://www.whatwg.org/mailing-list#specs">lista de email</a> para contribuir.</p>

<p>Por volta de 2006, o trabalho do WHATWG passou ser conhecido pelo mundo e principalmente pelo W3C - que até então trabalhavam separadamente - que reconheceu todo o trabalho do grupo. Em Outubro de 2006, Tim Berners-Lee anunciou que trabalharia juntamente com o WHATWG na produção do HTML5 em detrimento do XHTML 2. Contudo o XHTML continuaria sendo mantido paralelamente de acordo comas mudanças causadas no HTML. O grupo que estava cuidando especificamente do XHTML 2 foi descontinuado em 2009.</p>

<h3>O HTML5 e suas mudanças</h3>
<p>Quando o HTML4 foi lançado, o W3C alertou os desenvolvedores sobre algumas boas práticas que deveriam ser seguidas ao produzir códigos client-side. Desde este tempo, assuntos como a separação da estrutura do código com a formatação e princípios de acessibilidade foram trazidos para discussões e à atenção dos fabricantes e desenvolvedores.</p>

<p>Contudo, o HTML4 ainda não trazia diferencial real para a semântica do código. o HTML4 também não facilitava a manipulação dos elementos via Javascript ou CSS. Se você quisesse criar um sistema com a possibilidade de Drag’n Drop de elementos, era necessário criar um grande script, com bugs e que muitas vezes não funcionavam de acordo em todos os browsers.</p>

<h4>O que é o HTML5?</h4>
<p>O HTML5 é a nova versão do HTML4. Enquanto o WHATWG define as regras de marcação que usaremos no HTML5 e no XHTML, eles também definem APIs que formarão a base da arquitetura web. Essas APIs são conhecidas como <strong>DOM Level 0</strong>.<br>
Um dos principais objetivos do HTML5 é facilitar a manipulação do elemento possibilitando o desenvolvedor a modificar as características dos objetos de forma não intrusiva e de maneira que seja transparente para o usuário final. </p>

<p>Ao contrário das versões anteriores, o HTML5 fornece ferramentas para a CSS e o Javascript fazerem seu trabalho da melhor maneira possível. O HTML5 permite por meio de suas APIs a manipulação das características destes elementos, de forma que o website ou a aplicação continue leve e funcional.</p>

<p>O HTML5 também cria novas tags e modifica a função de outras. As versões antigas do HTML não continham um padrão universal para a criação de seções comuns e específicas como rodapé, cabeçalho, sidebar, menus e etc. Não havia um padrão de nomenclatura de IDs, Classes ou tags. Não havia um método de capturar de maneira automática as informações localizadas nos rodapés dos websites.</p>

<p>Há outros elementos e atributos que sua função e significado foram modificados e que agora podem ser reutilizados de forma mais eficaz. Por exemplo, elementos como B ou I que foram descontinuados em versões anteriores do HTML agora assumem funções diferentes e entregam mais significado para os usuários.</p>

<p>O HTML5 modifica a forma de como escrevemos código e organizamos a informação na página. Seria mais semântica com menos código. Seria mais interatividade sem a necessidade de instalação de plugins e perda de performance.
É a criação de código interoperável, pronto para futuros dispositivos e que facilita a reutilização da informação de diversas formas.</p>

<p>
O WHATWG tem mantido o foco para manter a retrocompatibilidade. Nenhum site deverá ter de ser refeito totalmente para se adequar aos novos conceitos e regras. O HTML5 está sendo criado para que seja compatível com os browsers recentes, possibilitando a utilização das novas características imediatamente.
</p>

<?
}

