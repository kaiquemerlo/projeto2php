<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Surf SBC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-5 col-md-6 col-sm-push-6" style="background: red; height:80px;"> Exemplo coluna com push essa era a primeira a ser exibida</div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-sm-pull-6" style="background: blue; height:80px;"></div>
    </div>


    <div class="col-md-12">
        <div class="col-md-12">
            <p>Paragrafo</p>
        </div>

        <div class="col-md-12">
            <p class="lead">Paragrafo .lead</p>
        </div>

        <div class="col-md-12">
            <p><mark>Paragrafo .mark</mark></p>
        </div>

        <div class="col-md-12">
            <p><small>Paragrafo .small</small></p>
        </div>

        <div class="col-md-12">
            <p class="text-lowercase">Paragrafo .text-lowercase</p>
        </div>

        <div class="col-md-12">
            <p class="text-uppercase">Paragrafo .text-uppercase</p>
        </div>

        <div class="col-md-12">
            <p>Texto abreviado tag abbr title="titulo" <abbr title="telefone">Tel.</abbr> </p>
        </div>

        <div class="col-md-12">
            <p>Texto abreviado tag abbr com class="initialism" title="titulo" <abbr title="telefone" class="initialism">Tel.</abbr> </p>
        </div>

        <div class="col-md-12">
        <blockquote>
            <p><abbr title="Bloco de texto" class="initialism"> Texto entre bloquote</abbr></p>
        </blockquote>
        </div>

        <div class="col-md-12">
            Blockquote reverso<br>
            <blockquote class="blockquote-reverse">
                <p><abbr title="Bloco de texto" class="initialism"> Texto entre bloquote</abbr></p>
                <footer>Esse é o footer <cite title="Isso é a citação">Isso é um citação</cite></footer>
            </blockquote>
        </div>

        <div class="col-md-12">
            Blockquote com opçoes de footer e cite<br>
            <blockquote>
                <p><abbr title="Bloco de texto" class="initialism"> Texto entre bloquote</abbr></p>
                <footer>Esse é o footer <cite title="Isso é a citação">Isso é um citação</cite></footer>
            </blockquote>
        </div>

        <div class="col-md-12">
            <abbr title="texto entre tag <address>" class="initialism">Texto em addres</abbr><br>
            <address>
                <strong>Rua</strong>: Avenida Sérgio Trevisan<br>
                <strong><abbr title="Numéro da casa">N°</abbr></strong>: 327
            </address>
        </div>


        <div class="col-md-12">
            <abbr title="texto entre tag <address>" class="initialism">Texto em addres</abbr><br>
            <address>
                <strong>Rua</strong>: Avenida Sérgio Trevisan<br>
                <strong><abbr title="Numéro da casa">N°</abbr></strong>: 327
            </address>
        </div>

        <div class="col-md-12">
            Lista sem estilo<br>
            <ul class="list-unstyled">
                <li>Exemplo 1</li>
                <li>Exemplo 1</li>
                <li>Exemplo 1</li>
                <li>Exemplo 1</li>
            </ul>
        </div>

        <div class="col-md-12">
            Lista in-line<br>
            <ul class="list-inline">
                <li>Exemplo 1</li>
                <li>Exemplo 2</li>
                <li>Exemplo 3</li>
                <li>Exemplo 4</li>
            </ul>
        </div>

        <div class="col-md-12">
            Lista descritiva<br>
            <dl>
                <dt>Item 1</dt>
                <dd>Descrevendo o item 1</dd>
            </dl>
        </div>

        <div class="col-md-12">
            Lista descritiva horizontal<br>
            <dl class="dl-horizontal">
                <dt>Item  1</dt>
                <dd>Descrevendo o item 1</dd>
            </dl>
        </div>

        <div class="col-md-12">
            Inserir código<br>
            Assim que se poe negrito <code>&lt;u&gt;</code>
        </div>


        <div class="col-md-12">
            Inserir background de instruções<br>
            Aperte <kbd>Enter</kbd> para enviar uma mensagem<br>
        </div>


        <div class="col-md-12">
            Tabela<br>

            <table class="table table-bordered">
                <thead><tr><th>dadsa</th></tr></thead>
                <tbody><tr><td class="danger">dadsa</td></tr></tbody>
                <tfoot><tr><td>dadsa</td></tr></tfoot>
            </table>
        </div>

        <div class="col-md-12">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>
    </div><!-- div mae das colunas -->


</div>
<!-- container -->

</body>
</html>