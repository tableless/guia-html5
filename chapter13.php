<?

$title='MathML e SVG';

function content(){

?>

<h2>MathML</h2>

<p>O HTML5 incorpora o padrão MathML. Trata-se de uma linguagem de marcação, baseada em XML, para representação de fórmulas matemáticas. Você pode ler mais sobre MathML em <a href="http://www.w3.org/Math/">http://www.w3.org/Math/</a>. Para incorporar código MathML em seu documento HTML5, não preciso fazer declarações especiais. Basta escrever normalmente o código, iniciando com um elemento <code>math</code>. Veja este exemplo:</p>

<?Example('mathml')?>

<p>Veja como esse exemplo é renderizado no navegador:</p>

<p><img src="img/mathml.png" alt="Exemplo de MathML" /></p>

<p>Mesmo que você nunca tenha visto MathML, e este código pareça um pouco assustador, dê uma olhada com calma no código, comparando com a imagem do resultado, e você vai perceber que é muito simples. Talvez algo que possa deixá-lo confuso é a entidade <code>&amp;InvisibleTimes;</code>, que aparece algumas vezes no código. Ela está lá para separar os fatores 4ac, por exemplo. Esses valores são multiplicados, é o que a fórmula representa, mas não queremos colocar um operador de multiplicação entre eles, porque por convenção se simplesmente escrevemos 4ac qualquer leitor saberá que isso é uma multiplicação.</p>

<p>Por que então se preocupar em inserir <code>&amp;InvisibleTimes;</code>? Você vai notar que se remover a entidade e a tag <code>mo</code> correspondente o resultado visual será o mesmo. Colocamos <code>&amp;InvisibleTimes;</code> porque MathML não é só visual, é semântica. Um outro agente de usuário pode ter recursos de importar essa fórmula para uma ferramenta de cálculo, por exemplo.</p>

<h2>SVG</h2>

<p>Assim como MathML, SVG é uma outra linguagem XML que pode ser incorporada com facilidade em HTML5. Você pode ler mais sobre SVG em <a href="http://www.w3.org/Graphics/SVG/">http://www.w3.org/Graphics/SVG/</a>. SVG é uma linguagem para marcação de gráficos vetoriais. Vejamos um exemplo bem simples:</p>

<?Example('svg')?>

<p>E veja como isso é renderizado no navegador:</p>

<p><img src="img/svg.png" alt="Exemplo de SVG" /></p>

<p>É possível fazer muito mais com SVG. A maioria dos editores de gráficos vetoriais hoje exporta e importa automaticamente SVG, permitindo a um designer construir um gráfico em seu editor vetorial predileto e exportá-lo diretamente. Em seguida, um programador pode construir javascript que manipula esse SVG, usando os métodos do DOM. Com isso você pode ter gráficos dinâmicos, com animação, escaláveis e com excelente qualidade visual, programáveis em Javascript, sem tecnologias proprietárias e plugins.</p>

<?
}

