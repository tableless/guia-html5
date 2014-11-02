<?

$title='Microdata';

function content(){

?>

<h2>Semântica adicional</h2>

<p>Dê um olhada no seguinte código:</p>

<?Example('microdata1')?>

<p>A Microdata API nos permite tornar esta estrutura semântica um pouco mais específica, definindo o que é o conteúdo de cada elemento. Veja este outro exemplo:</p>

<?Example('microdata2')?>

<p>Adicionamos atributos especias, itemscope e itemprop. Cada elemento itemscope define um item de dados. Cada itemprop define o nome de uma propriedade. O valor da propriedade é o conteúdo da tag HTML. A Microdata API nos fornece acesso especial a esses dados. Veja como acessar esses dados:</p>

<code><pre>resultados=document.getItems()
for(var i=0;i&lt;resultados.length;i++){
  alert(resultados[i].properties.nome[0].content+": R$ "+
        resultados[i].properties.total[0].content)
}</pre></code>

<h3>Diferentes tipos de dados</h3>

<p>No exemplo acima, temos uma listagem de pessoas. Agora imagine que você precise ter, no mesmo documento, uma listagem de pessoas e carros. Poderia escrever assim:</p>

<?Example('microdata3')?>

<p>Note que pessoas e carros tem propriedades em comum, nome e total. Quando você executar <code>document.getItems()</code> vai obter uma lista de todos os elementos com <code>itemscope</code>. Como obter uma lista apenas de pessoas ou de carros? Você pode adicionar a cada item um atributo <code>itemtype</code>, que diz de que tipo de entidade são aqueles dados:</p>

<?Example('microdata4')?>

<p>Agora você pode executar: <code>document.getItems('carro')</code> para obter só os carros, por exemplo.</p>

<h4>Falando um idioma comum</h4>

<p>Você deve ter notado que pode definir seus próprios padrões de metadados com microdata. Recomendo que, antes de criar seu próprio formato, verifique se o mesmo problema não já foi resolvido por alguém. O site <a href="http://www.data-vocabulary.org/">www.data-vocabulary.org</a> contém alguns desses formatos padronizados. Por exemplo, para descrever os dados de sua empresa ou organização, não invente seu próprio formato, use o formato definido em <a href="http://www.data-vocabulary.org/Organization">http://www.data-vocabulary.org/Organization</a>. O valor de <code>itemtype</code> deve ser a própria URL que documenta o formato. Veja como fica:</p>

<?Example('visie')?>

<p>Claro que a vantagem de usar o formato padronizado ao invés de inventar o seu não é apenas não ter o trabalho de pensar os nomes das propriedades. Os sistemas de busca, e outros sistemas que acessem seu site, podem entender e tratar esses dados. O Google já faz isso, veja neste endereço:</p>

<p><a href="http://www.google.com/support/webmasters/bin/answer.py?hl=en&answer=146861">http://www.google.com/support/webmasters/bin/answer.py?hl=en&answer=146861</a></p>

<?
}

