<?php
/**
 * PHP Bootstrap Class - Demonstração Completa (Bootstrap 5.3.8)
 *
 * Arquivo de demonstração interativo apresentando todos os 101 métodos públicos
 * da classe Bootstrap (DMetibr\Bootstrap), organizados por categorias funcionais.
 *
 * Compatível com PHP 8.x e Bootstrap 5.3.8 nativo.
 */

declare(strict_types=1);

require_once __DIR__ . '/Bootstrap.class.php';

$bs = new \DMetibr\Bootstrap();

// Configuração do Menu da NavBar
$menuEsquerda = array(
    array('nome' => 'Início', 'url' => '#inicio', 'atual' => true, 'icone' => 'star'),
    array(
        'nome' => 'Categorias',
        'sub' => array(
            array('nome' => 'Layout & Stacks', 'url' => '#sec-layout'),
            array('nome' => 'Botões & Ações', 'url' => '#sec-botoes'),
            array('nome' => 'Formulários & Inputs', 'url' => '#sec-forms'),
            array('nome' => 'Floating Labels', 'url' => '#sec-floating'),
            array('nome' => 'Navegação & Paginação', 'url' => '#sec-nav'),
            array('nome' => 'Cards & Agrupamentos', 'url' => '#sec-cards'),
            array('nome' => 'Overlays & Notificações', 'url' => '#sec-overlays'),
            array('nome' => 'Spinners & Placeholders', 'url' => '#sec-loaders'),
            array('nome' => 'Mídia, Figures & Carrossel', 'url' => '#sec-midia'),
            array('nome' => 'Conteúdo & Tabelas', 'url' => '#sec-conteudo'),
            array('nome' => 'Helpers & Scripts', 'url' => '#sec-scripts'),
        )
    ),
    array('nome' => 'Cards', 'url' => '#sec-cards'),
    array('nome' => 'Formulários', 'url' => '#sec-forms'),
);

$menuDireita = array(
    array('nome' => 'Repositório GitHub', 'url' => 'https://github.com/danmadeira/php-bootstrap-class', 'icone' => 'file'),
    array('nome' => 'BS 5.3.8 Docs', 'url' => 'https://getbootstrap.com/docs/5.3/', 'botao' => true, 'classe' => 'outline-light')
);
?>
<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bootstrap Class - Demonstração Completa (BS 5.3.8)</title>
    
    <!-- tagCss: Carregamento do CSS via CDN jsDelivr (padrão) e Bootstrap Icons CDN -->
    <?= $bs->tagCss() ?>
    
    <!-- scriptThemeToggle: Suporte nativo a Dark Mode / Light Mode / Auto -->
    <?= $bs->scriptThemeToggle() ?>
    
    <style>
        body {
            padding-top: 70px;
        }
        .demo-section {
            padding-top: 30px;
            margin-bottom: 40px;
            border-bottom: 1px solid var(--bs-border-color);
            padding-bottom: 30px;
        }
        .demo-box {
            background-color: var(--bs-body-bg);
            border: 1px solid var(--bs-border-color);
            border-radius: 0.5rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.05);
        }
        .demo-box-title {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--bs-secondary-color);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .method-badge {
            font-family: monospace;
            font-size: 0.8rem;
        }
        .sidebar-nav {
            position: sticky;
            top: 85px;
            max-height: calc(100vh - 100px);
            overflow-y: auto;
        }
    </style>
</head>
<body>

    <!-- geraNavBar: Barra de Navegação Topo Fixa com suporte a tema dark/primary -->
    <?= $bs->geraNavBar(
        posicao: 'F',
        brand: 'PHP Bootstrap 5.3.8',
        logo: '',
        link: '#inicio',
        menuesq: $menuEsquerda,
        menudir: $menuDireita,
        tema: 'inverse',
        bg: 'primary'
    ) ?>

    <!-- Seletor Flutuante de Tema Claro/Escuro (geraThemeToggle) -->
    <?= $bs->geraThemeToggle(tipo: 'dropdown', posicao: 'bottom-end', incluiScript: false) ?>

    <main id="inicio" class="container-fluid px-lg-5">
        <div class="row">
            
            <!-- Menu Lateral (Sumário das 12 Seções) -->
            <div class="col-lg-2 d-none d-lg-block">
                <nav class="sidebar-nav p-2 border-end">
                    <h6 class="text-uppercase text-body-secondary fw-bold fs-7 mb-3">
                        <?= $bs->obtemGlyphicon('th') ?> Índice de Métodos
                    </h6>
                    <div class="nav nav-pills flex-column gap-1">
                        <a class="nav-link py-1 px-2 small" href="#sec-layout">1. Layout & Stacks</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-botoes">2. Botões & Ações</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-forms">3. Formulários Clássicos</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-floating">4. Floating Labels</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-nav">5. Navegação & Abas</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-cards">6. Cards & Grids</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-overlays">7. Overlays & Modais</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-loaders">8. Loaders & Skeletons</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-midia">9. Mídia & Figures</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-conteudo">10. Conteúdo & Dados</a>
                        <a class="nav-link py-1 px-2 small" href="#sec-scripts">11. Helpers & Scripts</a>
                    </div>
                </nav>
            </div>

            <!-- Conteúdo Principal -->
            <div class="col-lg-10">

                <!-- divJumbotron: Hero Banner de Destaque -->
                <?php
                $heroConteudo = '<h1 class="display-5 fw-bold">' . $bs->obtemGlyphicon('star') . ' PHP Bootstrap Class</h1>' .
                    $bs->par('Demonstração interativa de todos os <strong>101 métodos públicos</strong> da biblioteca modernizada para <strong>Bootstrap 5.3.8</strong> e <strong>PHP 8.x</strong>. Uma classe PHP 100% autônoma, sem dependências externas, compatível com Dark Mode nativo e flexbox utilities.', classe: 'lead') .
                    '<hr class="my-4">' .
                    '<div class="d-flex flex-wrap gap-2 align-items-center">' .
                        $bs->obtemBadge('101 Métodos Públicos', 'text-bg-primary fs-6') .
                        $bs->obtemBadge('Bootstrap 5.3.8 Nativo', 'text-bg-success fs-6') .
                        $bs->obtemBadge('PHP 8.x Compatível', 'text-bg-info fs-6') .
                        $bs->obtemBadge('Zero jQuery', 'text-bg-warning fs-6') .
                        $bs->linkIcone('Documentação Oficial Bootstrap', 'https://getbootstrap.com/docs/5.3/', 'arrow-up-right', hover: true, classe: 'ms-auto') .
                    '</div>';
                echo $bs->divJumbotron($heroConteudo, id: 'jumbotron-hero');
                ?>

                <!-- ============================================================== -->
                <!-- SEÇÃO 1: LAYOUT, CONTAINERS & STACKS -->
                <!-- ============================================================== -->
                <section id="sec-layout" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('th') ?> 1. Layout, Containers & Stacks
                        <span class="badge text-bg-secondary fs-7">10 métodos</span>
                    </h2>
                    <?= $bs->par('Utilitários para contêineres, alinhamentos, grids de colunas e stacks verticais/horizontais do Bootstrap 5.') ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Tipografia & Contêineres</span>
                                    <span class="badge bg-light text-dark method-badge">par() span() divCenterBlock()</span>
                                </div>
                                <?= $bs->par('Este parágrafo foi gerado com <code>$bs->par()</code> com classe de destaque.', classe: 'text-primary fw-medium') ?>
                                <p>Exemplo de elemento inline: <?= $bs->span('Span estilizado com $bs->span()', classe: 'badge text-bg-dark') ?></p>
                                
                                <?= $bs->divCenterBlock(
                                    $bs->span('Bloco centralizado com $bs->divCenterBlock()', classe: 'alert alert-info py-2 px-3 mb-0 text-center w-70'),
                                    id: 'exemplo-center-block'
                                ) ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Linha e Colunas Responsivas</span>
                                    <span class="badge bg-light text-dark method-badge">divLinha() divColuna()</span>
                                </div>
                                <?php
                                $col1 = $bs->divColuna('<div class="p-2 border bg-light text-center">Col 4 (sm)</div>', tamanho: 'sm', colspan: 4);
                                $col2 = $bs->divColuna('<div class="p-2 border bg-light text-center">Col 4 (sm)</div>', tamanho: 'sm', colspan: 4);
                                $col3 = $bs->divColuna('<div class="p-2 border bg-light text-center">Col 4 (sm)</div>', tamanho: 'sm', colspan: 4);
                                echo $bs->divLinha($col1 . $col2 . $col3, classe: 'g-2');
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Stacks Modernas e Separador Vertical</span>
                            <span class="badge bg-light text-dark method-badge">divVStack() divHStack() divVr() divContainer() divContainerFluid()</span>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h6 class="small text-muted">VStack (Pilha Vertical)</h6>
                                <?= $bs->divVStack(
                                    '<div class="p-2 bg-body-secondary border rounded">Item Vertical 1</div>' .
                                    '<div class="p-2 bg-body-secondary border rounded">Item Vertical 2</div>' .
                                    '<div class="p-2 bg-body-secondary border rounded">Item Vertical 3</div>',
                                    gap: 2
                                ) ?>
                            </div>
                            <div class="col-md-6">
                                <h6 class="small text-muted">HStack (Pilha Horizontal com Divisor VR)</h6>
                                <?= $bs->divHStack(
                                    '<div class="p-2 bg-body-secondary border rounded">Esquerda</div>' .
                                    $bs->divVr() .
                                    '<div class="p-2 bg-body-secondary border rounded ms-auto">Direita (ms-auto)</div>' .
                                    $bs->divVr() .
                                    $bs->buttonButton('btnAcao', '1', 'Ação', classe: 'success', tamanho: 'sm'),
                                    gap: 3
                                ) ?>
                                <div class="mt-3 small text-muted">
                                    Exemplo de invólucro de contêineres:
                                    <?= $bs->divContainer('<small class="text-secondary">Renderizado dentro de $bs->divContainer()</small>', classe: 'border p-1 rounded mt-1') ?>
                                    <?= $bs->divContainerFluid('<small class="text-secondary">Renderizado dentro de $bs->divContainerFluid()</small>', classe: 'border p-1 rounded mt-1') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 2: BOTÕES, AÇÕES & TOOLBARS -->
                <!-- ============================================================== -->
                <section id="sec-botoes" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('wrench') ?> 2. Botões, Ações & Toolbars
                        <span class="badge text-bg-secondary fs-7">14 métodos</span>
                    </h2>
                    <?= $bs->par('Botões nativos, links estilizados, botão de fechar, spinners de carregamento, toolbars e grupos alternadores (btn-check).') ?>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Botões Básicos, Botão de Fechar e Links</span>
                            <span class="badge bg-light text-dark method-badge">buttonButton() buttonSubmit() buttonlink() buttonClose() linkIcone()</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
                            <?= $bs->buttonButton('btnP', '1', 'Primary', classe: 'primary') ?>
                            <?= $bs->buttonButton('btnS', '1', 'Secondary Outline', classe: 'secondary', contorno: true) ?>
                            <?= $bs->buttonSubmit('btnSub', '1', 'Submit Button', classe: 'success') ?>
                            <?= $bs->buttonlink('#sec-botoes', 'Link em Botão', classe: 'warning') ?>
                            <?= $bs->buttonButton('btnDis', '1', 'Desativado', classe: 'danger', desativado: true) ?>
                            <?= $bs->buttonButton('btnLg', '1', 'Grande (L)', classe: 'info', tamanho: 'lg') ?>
                            <?= $bs->buttonButton('btnSm', '1', 'Pequeno (S)', classe: 'dark', tamanho: 'sm') ?>
                            <div class="d-inline-flex align-items-center border p-2 rounded gap-2">
                                <span class="small text-muted">buttonClose:</span>
                                <?= $bs->buttonClose() ?>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-4 align-items-center pt-2 border-top">
                            <div>
                                <span class="small text-muted d-block mb-1">linkIcone (Ícone à direita com animação hover):</span>
                                <?= $bs->linkIcone('Continuar Leitura', '#', 'arrow-right', hover: true, posicaoIcone: 'fim') ?>
                            </div>
                            <div>
                                <span class="small text-muted d-block mb-1">linkIcone (Ícone à esquerda):</span>
                                <?= $bs->linkIcone('Baixar Pacote', '#', 'download', hover: true, posicaoIcone: 'inicio', classe: 'text-success') ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Botões Dinâmicos e Interativos</span>
                                    <span class="badge bg-light text-dark method-badge">buttonSpinner() buttonPlaceholder() buttonOffcanvas() buttonToast()</span>
                                </div>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <?= $bs->buttonSpinner('Processando...', tipo: 'border', classe: 'primary') ?>
                                    <?= $bs->buttonSpinner('Gravando...', tipo: 'grow', classe: 'success', contorno: true) ?>
                                    <?= $bs->buttonPlaceholder(colunas: 4, classe: 'secondary', animacao: 'glow') ?>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <?= $bs->buttonOffcanvas('offcanvasDemo', 'Abrir Gaveta (Offcanvas)', classe: 'outline-primary') ?>
                                    <?= $bs->buttonToast('toastDemo', 'Disparar Notificação (Toast)', classe: 'outline-success') ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Tooltips & Popovers em Botões</span>
                                    <span class="badge bg-light text-dark method-badge">buttonTooltip() buttonPopover()</span>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <?= $bs->buttonTooltip('Passe o mouse (Tooltip Top)', 'Este é um tooltip interativo BS 5.3.8!', posicao: 'top', classe: 'secondary') ?>
                                    <?= $bs->buttonTooltip('Tooltip à Direita', 'Tooltip posicionado à direita!', posicao: 'right', classe: 'info', contorno: true) ?>
                                    <?= $bs->buttonPopover('Clique para Popover', 'Conteúdo rico exibido dentro de um popover nativo do Bootstrap 5!', titulo: 'Detalhes Adicionais', posicao: 'right', trigger: 'click', classe: 'danger') ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Grupos de Botões, Toolbars e Toggle Groups (btn-check)</span>
                            <span class="badge bg-light text-dark method-badge">geraButtonGroup() geraButtonToggleGroup() divButtonToolbar()</span>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <h6 class="small text-muted">ButtonGroup Simples</h6>
                                <?php
                                $botoesGrupo = array(
                                    $bs->buttonButton('b1', '1', 'Esq', classe: 'secondary'),
                                    $bs->buttonButton('b2', '2', 'Centro', classe: 'secondary'),
                                    $bs->buttonButton('b3', '3', 'Dir', classe: 'secondary')
                                );
                                echo $bs->geraButtonGroup($botoesGrupo);
                                ?>
                            </div>
                            <div class="col-md-4">
                                <h6 class="small text-muted">ButtonToggleGroup (Radio com btn-check)</h6>
                                <?php
                                $opcoesToggle = array('op1' => 'Diário', 'op2' => 'Semanal', 'op3' => 'Mensal');
                                echo $bs->geraButtonToggleGroup('frequencia', $opcoesToggle, tipo: 'radio', selecionados: 'op2', classe: 'primary');
                                ?>
                            </div>
                            <div class="col-md-4">
                                <h6 class="small text-muted">ButtonToolbar Completa</h6>
                                <?php
                                $g1 = $bs->geraButtonGroup(array(
                                    $bs->buttonButton('', '', '1', classe: 'outline-secondary', tamanho: 'sm'),
                                    $bs->buttonButton('', '', '2', classe: 'outline-secondary', tamanho: 'sm'),
                                    $bs->buttonButton('', '', '3', classe: 'outline-secondary', tamanho: 'sm')
                                ));
                                $g2 = $bs->geraButtonGroup(array(
                                    $bs->buttonButton('', '', '4', classe: 'outline-secondary', tamanho: 'sm'),
                                    $bs->buttonButton('', '', '5', classe: 'outline-secondary', tamanho: 'sm')
                                ));
                                echo $bs->divButtonToolbar(array($g1, $g2));
                                ?>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 3: FORMULÁRIOS CLÁSSICOS & INPUTS BÁSICOS -->
                <!-- ============================================================== -->
                <section id="sec-forms" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('edit') ?> 3. Formulários Clássicos & Inputs Básicos
                        <span class="badge text-bg-secondary fs-7">26 métodos</span>
                    </h2>
                    <?= $bs->par('Campos de texto, e-mail, senha, textarea, switches, sliders, color picker, grupos de inputs com addons, uploads e feedbacks de validação.') ?>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Formulário Completo e Campos de Texto</span>
                            <span class="badge bg-light text-dark method-badge">generalForm() divFormGroup() fieldsetFormGroup() inputTexto() inputEmail() inputSenha() inputArea() inputOculto()</span>
                        </div>
                        <?php
                        $formConteudo = $bs->inputOculto('csrf_token', 'token', 'a8f7b6c5d4e3') .
                            '<div class="row g-3">' .
                                '<div class="col-md-4">' .
                                    $bs->divFormGroup($bs->inputTexto('txtNome', 'nome', 'Daniel Oliveira', 30, 60, rotulo: 'Nome Completo', dica: 'Digite seu nome', requerido: true)) .
                                '</div>' .
                                '<div class="col-md-4">' .
                                    $bs->divFormGroup($bs->inputEmail('txtEmail', 'email', 'daniel@exemplo.com', 30, rotulo: 'E-mail Comercial', dica: 'nome@empresa.com', requerido: true)) .
                                '</div>' .
                                '<div class="col-md-4">' .
                                    $bs->divFormGroup($bs->inputSenha('txtSenha', 'senha', '', 20, rotulo: 'Senha de Acesso', dica: 'Mínimo 8 caracteres')) .
                                '</div>' .
                                '<div class="col-12">' .
                                    $bs->fieldsetFormGroup($bs->inputArea('txtObs', 'observacoes', 'Observações registradas através da classe Bootstrap.', 3, 50, rotulo: 'Mensagem/Observações'), legenda: 'Informações Adicionais') .
                                '</div>' .
                            '</div>';
                        echo $bs->generalForm($formConteudo, acao: '#', id: 'form-exemplo-1');
                        ?>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Input Groups Simplificados & Addons</span>
                                    <span class="badge bg-light text-dark method-badge">inputTextoGroup() inputGroupAddon() inputGroupTexto() divInputGroup()</span>
                                </div>
                                <div class="mb-3">
                                    <?= $bs->inputTextoGroup('igUsuario', 'usuario', 'usuario_admin', prefixo: '@', rotulo: 'Nome de Usuário') ?>
                                </div>
                                <div class="mb-3">
                                    <?= $bs->inputTextoGroup('igPreco', 'preco', '149.90', prefixo: 'R$', sufixo: ',00', rotulo: 'Valor do Produto') ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Input Group com Addon Avulso ($bs->inputGroupAddon):</label>
                                    <?= $bs->inputGroupAddon('<input type="text" class="form-control" placeholder="https://exemplo.com/artigo/">', prefixo: $bs->obtemGlyphicon('star'), sufixo: '.html') ?>
                                </div>
                                <div class="mb-3">
                                    <?= $bs->inputGroupTexto('igTexto', 'texto_group', 'Valor do Campo', 20, 50, rotulo: 'Input Group Estruturado', addon1: '[Pre]', addon2: '[Pos]') ?>
                                </div>
                                <div>
                                    <label class="form-label">Div Input Group Genérico ($bs->divInputGroup):</label>
                                    <?= $bs->divInputGroup('<span class="input-group-text"><i class="bi bi-search"></i></span><input type="text" class="form-control" placeholder="Pesquisar catálogo...">') ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Uploads, Sliders, Cores & Validação</span>
                                    <span class="badge bg-light text-dark method-badge">inputFile() inputRange() inputColor() geraFeedback()</span>
                                </div>
                                <div class="mb-3">
                                    <?= $bs->inputFile('arqDocumento', 'documento', rotulo: 'Enviar Documento (PDF/DOC)', ajuda: 'Tamanho máximo permitido: 10MB.', aceita: '.pdf,.doc,.docx') ?>
                                </div>
                                <div class="mb-3">
                                    <?= $bs->inputRange('rngVolume', 'volume', valor: 75, minimo: 0, maximo: 100, passo: 5, rotulo: 'Nível de Volume', exibeValor: true) ?>
                                </div>
                                <div class="mb-3">
                                    <?= $bs->inputColor('corDestaque', 'cor_destaque', valor: '#0d6efd', rotulo: 'Cor Predominante do Tema', comHex: true) ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Exemplos de Feedback de Validação:</label>
                                    <input type="text" class="form-control is-valid mb-1" value="Valor válido preenchido">
                                    <?= $bs->geraFeedback('Excelente! O campo foi validado com sucesso.', tipo: 'valid') ?>
                                    <input type="text" class="form-control is-invalid mt-2 mb-1" value="Valor incorreto">
                                    <?= $bs->geraFeedback('Por favor, corrija o formato do dado informado.', tipo: 'invalid', tooltip: false) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Switches, Checkboxes & Radios</span>
                                    <span class="badge bg-light text-dark method-badge">inputSwitch() inputSwitchArray() inputCheckbox() inputRadio() inputRadioArray()</span>
                                </div>
                                <div class="mb-3">
                                    <h6 class="small text-muted">Switches Individuais e em Array</h6>
                                    <?= $bs->inputSwitch('swNotif', 'notif', '1', rotulo: 'Ativar Notificações por E-mail', ligado: true) ?>
                                    <?= $bs->inputSwitch('swSms', 'sms', '1', rotulo: 'Ativar Alertas via SMS', ligado: false) ?>
                                    <div class="mt-2 pt-2 border-top">
                                        <?= $bs->inputSwitchArray('swArray', array('optA' => 'Opção Automática A', 'optB' => 'Opção Automática B'), selecionados: array('optA')) ?>
                                    </div>
                                </div>
                                <div class="row g-2 pt-2 border-top">
                                    <div class="col-6">
                                        <h6 class="small text-muted">Checkbox & Radio Simples</h6>
                                        <?= $bs->inputCheckbox('chkTermos', 'termos', '1', rotulo: 'Aceito os Termos', classe: 'mb-2') ?>
                                        <?= $bs->inputRadio('radSim', 'resposta', 'sim', rotulo: 'Sim, concordo', checked: true) ?>
                                        <?= $bs->inputRadio('radNao', 'resposta', 'nao', rotulo: 'Não concordo') ?>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="small text-muted">Radio Array</h6>
                                        <?= $bs->inputRadioArray('radPlano', 'plano', array('free' => 'Gratuito', 'pro' => 'Profissional', 'enterprise' => 'Empresarial'), padrao: 'pro') ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Seleções, Data Nativa & Botões de Input</span>
                                    <span class="badge bg-light text-dark method-badge">selectArray() inputData() inputButton() inputSubmit() inputReset()</span>
                                </div>
                                <div class="mb-3">
                                    <?= $bs->selectArray('selCategoria', 'categoria', array('tec' => 'Tecnologia', 'sau' => 'Saúde', 'edu' => 'Educação'), padrao: 'tec', rotulo: 'Categoria Profissional (Simples)') ?>
                                </div>
                                <div class="mb-3">
                                    <?= $bs->selectArray('selTags', 'tags[]', array('php' => 'PHP 8.x', 'bs5' => 'Bootstrap 5.3.8', 'css' => 'CSS3 Moderno', 'html' => 'HTML5'), padrao: array('php', 'bs5'), rotulo: 'Habilidades (Múltipla Seleção)', multiplo: true) ?>
                                </div>
                                <div class="mb-3">
                                    <?= $bs->inputData('dtNasc', 'nascimento', '1995-05-15', rotulo: 'Data de Nascimento (HTML5 Nativo)') ?>
                                </div>
                                <div class="d-flex flex-wrap gap-2 pt-2 border-top">
                                    <?= $bs->inputButton('btnInp', 'Input Button', classe: 'primary', tamanho: 'sm') ?>
                                    <?= $bs->inputSubmit('btnInpSub', 'Input Submit', classe: 'success', tamanho: 'sm') ?>
                                    <?= $bs->inputReset('btnInpRes', 'Input Reset', classe: 'secondary', tamanho: 'sm') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 4: FLOATING LABELS (RÓTULOS FLUTUANTES) -->
                <!-- ============================================================== -->
                <section id="sec-floating" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('edit') ?> 4. Floating Labels (Bootstrap 5)
                        <span class="badge text-bg-secondary fs-7">3 métodos</span>
                    </h2>
                    <?= $bs->par('Campos modernos onde o rótulo (label) flutua elegantemente para o topo durante a digitação e preenchimento.') ?>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Inputs Flutuantes, Textarea Flutuante e Select Flutuante</span>
                            <span class="badge bg-light text-dark method-badge">inputFloating() inputAreaFloating() selectFloating()</span>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <?= $bs->inputFloating('fltEmail', 'flt_email', 'Endereço de E-mail', valor: 'usuario@exemplo.com', tipo: 'email') ?>
                            </div>
                            <div class="col-md-4">
                                <?= $bs->inputFloating('fltSenha', 'flt_senha', 'Senha Segura', tipo: 'password', requerido: true) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $bs->selectFloating('fltPais', 'flt_pais', 'País de Origem', array('BR' => 'Brasil', 'PT' => 'Portugal', 'US' => 'Estados Unidos'), padrao: 'BR') ?>
                            </div>
                            <div class="col-12">
                                <?= $bs->inputAreaFloating('fltMsg', 'flt_msg', 'Digite seus comentários detalhados aqui...', texto: 'Excelente integração com a nova arquitetura do Bootstrap 5.3.8!', altura: '90px') ?>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 5: NAVEGAÇÃO, ABAS, BREADCRUMB & PAGINAÇÃO -->
                <!-- ============================================================== -->
                <section id="sec-nav" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('flag') ?> 5. Navegação, Abas, Breadcrumbs & Paginação
                        <span class="badge text-bg-secondary fs-7">7 métodos</span>
                    </h2>
                    <?= $bs->par('Componentes de navegação estruturada: breadcrumbs, list groups interativos, nav tabs/pills com painéis funcionais e sistemas completos de paginação.') ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Breadcrumbs & Nav Underline / Pills</span>
                                    <span class="badge bg-light text-dark method-badge">geraBreadcrumb() geraNav()</span>
                                </div>
                                <div class="mb-3">
                                    <?php
                                    $caminhoBreadcrumb = array(
                                        array('linkurl' => '#inicio', 'linktxt' => 'Início'),
                                        array('linkurl' => '#sec-nav', 'linktxt' => 'Navegação'),
                                        array('linkurl' => '#', 'linktxt' => 'Exemplo Atual')
                                    );
                                    echo $bs->geraBreadcrumb($caminhoBreadcrumb);
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <h6 class="small text-muted">Estilo Moderno: Nav Underline (BS 5.3)</h6>
                                    <?php
                                    $itensNav = array(
                                        array('rotulo' => 'Visão Geral', 'ativo' => true, 'icone' => 'eye-open'),
                                        array('rotulo' => 'Recursos', 'badge' => 'Novo', 'badgeClasse' => 'text-bg-primary'),
                                        array('rotulo' => 'Configurações', 'icone' => 'wrench'),
                                        array('rotulo' => 'Desativado', 'desativado' => true)
                                    );
                                    echo $bs->geraNav($itensNav, estilo: 'underline');
                                    ?>
                                </div>
                                <div>
                                    <h6 class="small text-muted">Estilo: Nav Pills</h6>
                                    <?= $bs->geraNav(array(
                                        array('rotulo' => 'Pill Ativo', 'ativo' => true),
                                        array('rotulo' => 'Segundo Item'),
                                        array('rotulo' => 'Terceiro Item')
                                    ), estilo: 'pills') ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Abas Interativas com Conteúdo (NavTab)</span>
                                    <span class="badge bg-light text-dark method-badge">geraNavTab()</span>
                                </div>
                                <?php
                                $abasInterativas = array(
                                    array(
                                        'rotulo' => 'Aba Dados',
                                        'ativo' => true,
                                        'conteudo' => '<div class="p-3 border rounded bg-body-tertiary"><h6 class="fw-bold">Painel de Dados</h6><p class="mb-0 small">Conteúdo dinâmico da primeira aba navegável carregado com sucesso.</p></div>'
                                    ),
                                    array(
                                        'rotulo' => 'Aba Relatórios',
                                        'conteudo' => '<div class="p-3 border rounded bg-body-tertiary"><h6 class="fw-bold">Painel de Relatórios</h6><p class="mb-0 small">Estatísticas, métricas e análises detalhadas do sistema.</p></div>'
                                    ),
                                    array(
                                        'rotulo' => 'Aba Suporte',
                                        'conteudo' => '<div class="p-3 border rounded bg-body-tertiary"><h6 class="fw-bold">Central de Suporte</h6><p class="mb-0 small">Canais de atendimento ao desenvolvedor e suporte técnico.</p></div>'
                                    )
                                );
                                echo $bs->geraNavTab($abasInterativas, id: 'demoTabInterativa', desvanecer: true);
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>List Groups Completos</span>
                                    <span class="badge bg-light text-dark method-badge">geraListGroup()</span>
                                </div>
                                <?php
                                $itensListGroup = array(
                                    array('texto' => 'Item Principal Ativo', 'ativo' => true, 'badge' => '14', 'badgeClasse' => 'text-bg-light'),
                                    array('texto' => 'Item com Link Clicável', 'url' => '#sec-nav', 'badge' => 'Link', 'badgeClasse' => 'text-bg-info'),
                                    array('titulo' => 'Item Rico com Título', 'texto' => 'Descrição complementar detalhada do registro selecionado.'),
                                    array('texto' => 'Opção com Checkbox Selecionável', 'checkbox' => true, 'nomeCheck' => 'chkLG1', 'checado' => true),
                                    array('texto' => 'Item Desativado', 'desativado' => true)
                                );
                                echo $bs->geraListGroup($itensListGroup, numerada: false);
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Sistemas de Paginação</span>
                                    <span class="badge bg-light text-dark method-badge">geraPaginacao() geraPaginacaoComHref() geraPaginacaoTapeDeck()</span>
                                </div>
                                <?php
                                $paginasDemo = array(
                                    array('numero' => 1, 'url' => '#', 'atual' => false),
                                    array('numero' => 2, 'url' => '#', 'atual' => true),
                                    array('numero' => 3, 'url' => '#', 'atual' => false),
                                    array('numero' => 4, 'url' => '#', 'atual' => false),
                                    array('numero' => 5, 'url' => '#', 'atual' => false),
                                );
                                ?>
                                <h6 class="small text-muted">1. Paginação Padrão ($bs->geraPaginacao):</h6>
                                <?= $bs->geraPaginacao($paginasDemo, simbolo: true, tamanho: 'sm') ?>

                                <h6 class="small text-muted mt-3">2. Paginação com Href Direto ($bs->geraPaginacaoComHref):</h6>
                                <?= $bs->geraPaginacaoComHref($paginasDemo, simbolo: true, tamanho: 'sm') ?>

                                <h6 class="small text-muted mt-3">3. Paginação TapeDeck (Primeira / Última):</h6>
                                <?= $bs->geraPaginacaoTapeDeck($paginasDemo, simbolo: true, tamanho: 'sm') ?>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 6: CARDS, GRIDS & PAINÉIS -->
                <!-- ============================================================== -->
                <section id="sec-cards" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('th') ?> 6. Cards, Grids & Painéis
                        <span class="badge text-bg-secondary fs-7">5 métodos</span>
                    </h2>
                    <?= $bs->par('Organização visual através do sistema moderno de Cards do Bootstrap 5, Card Groups contínuos, Card Grids responsivas com altura alinhada (.h-100), painéis e caixas de destaque.') ?>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Card Grid Responsiva (row-cols com nivelamento h-100)</span>
                            <span class="badge bg-light text-dark method-badge">geraCard() divCardGrid()</span>
                        </div>
                        <?php
                        $btnCard1 = $bs->buttonlink('#', 'Detalhes', classe: 'primary', tamanho: 'sm');
                        $btnCard2 = $bs->buttonlink('#', 'Comprar', classe: 'success', tamanho: 'sm');
                        
                        $card1 = $bs->geraCard(
                            titulo: 'Plano Básico',
                            subtitulo: 'Ideal para iniciantes',
                            cabecalho: '🚀 Entrada',
                            rodape: 'Cobrado mensalmente',
                            texto: 'Acesso a todas as ferramentas essenciais com suporte por e-mail em até 48 horas úteis.',
                            botaolink1: $btnCard1,
                            largura: '100%'
                        );

                        $card2 = $bs->geraCard(
                            titulo: 'Plano Pro',
                            subtitulo: 'Mais popular',
                            cabecalho: '⭐ Recomendado',
                            rodape: 'Cobrado anualmente',
                            texto: 'Projetos ilimitados, ferramentas avançadas e atendimento prioritário em tempo real via chat.',
                            botaolink1: $btnCard2,
                            largura: '100%'
                        );

                        $card3 = $bs->geraCard(
                            titulo: 'Plano Corporativo',
                            subtitulo: 'Grandes organizações',
                            cabecalho: '🏢 Enterprise',
                            rodape: 'Faturamento customizado',
                            texto: 'Infraestrutura dedicada, SLA de 99.9% e gerente de contas exclusivo para sua equipe.',
                            botaolink1: $btnCard1,
                            botaolink2: $btnCard2,
                            largura: '100%'
                        );

                        echo $bs->divCardGrid(array($card1, $card2, $card3), colunas: array('xs' => 1, 'md' => 3), gap: 3);
                        ?>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Card Group Contínuo</span>
                                    <span class="badge bg-light text-dark method-badge">divCardGroup()</span>
                                </div>
                                <?php
                                $cg1 = '<div class="card"><div class="card-body"><h6 class="card-title">Módulo Alpha</h6><p class="card-text small">Conectado ao grupo.</p></div></div>';
                                $cg2 = '<div class="card"><div class="card-body"><h6 class="card-title">Módulo Beta</h6><p class="card-text small">Compartilha mesma linha.</p></div></div>';
                                $cg3 = '<div class="card"><div class="card-body"><h6 class="card-title">Módulo Gamma</h6><p class="card-text small">Bordas integradas.</p></div></div>';
                                echo $bs->divCardGroup(array($cg1, $cg2, $cg3));
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Painéis & Caixas de Destaque</span>
                                    <span class="badge bg-light text-dark method-badge">geraPainel() geraWell()</span>
                                </div>
                                <?= $bs->geraPainel(
                                    conteudo: '<p class="small mb-0">Este painel foi gerado através de <code>geraPainel()</code>, mapeado nativamente para a classe Card do Bootstrap 5.</p>',
                                    classe: 'primary',
                                    cabecalho: 'Cabeçalho do Painel',
                                    rodape: 'Rodapé do Painel'
                                ) ?>
                                <div class="mt-2">
                                    <?= $bs->geraWell('Exemplo de caixa estilizada gerada por <code>geraWell()</code> (utilizando bg-body-tertiary do BS 5.3).') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 7: OVERLAYS, MODAIS, DRAWER & NOTIFICAÇÕES -->
                <!-- ============================================================== -->
                <section id="sec-overlays" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('eye-open') ?> 7. Overlays, Modais, Offcanvas & Notificações
                        <span class="badge text-bg-secondary fs-7">6 métodos</span>
                    </h2>
                    <?= $bs->par('Componentes dinâmicos de interface: janelas modais, gaveta lateral (Offcanvas), alertas dispensáveis, dropdowns independentes e notificações Toast.') ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Alertas Contextuais</span>
                                    <span class="badge bg-light text-dark method-badge">geraAlerta()</span>
                                </div>
                                <?= $bs->geraAlerta('success', 'Operação Concluída!', 'O registro foi salvo no banco de dados com êxito.', dispensar: true, linktxt: 'Ver lista', linkurl: '#') ?>
                                <?= $bs->geraAlerta('warning', 'Atenção Necessária:', 'Sua chave de API expirará nos próximos 5 dias úteis.', dispensar: true) ?>
                                <?= $bs->geraAlerta('danger', 'Erro Detectado:', 'Não foi possível estabelecer conexão com o servidor remoto.', dispensar: false) ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Dropdowns Independentes (BS 5.3)</span>
                                    <span class="badge bg-light text-dark method-badge">geraDropdown()</span>
                                </div>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <?php
                                    $itensDropdown = array(
                                        array('tipo' => 'cabecalho', 'nome' => 'Ações do Sistema'),
                                        array('nome' => 'Editar Dados', 'icone' => 'edit', 'url' => '#'),
                                        array('nome' => 'Baixar Cópia', 'icone' => 'save', 'url' => '#'),
                                        '-',
                                        array('nome' => 'Excluir Item', 'icone' => 'erase', 'url' => '#', 'desativado' => true)
                                    );
                                    echo $bs->geraDropdown('Ações Rápidas', $itensDropdown, classe: 'primary');
                                    echo $bs->geraDropdown(array('rotulo' => 'Salvar Registro', 'url' => '#'), $itensDropdown, classe: 'success', split: true);
                                    echo $bs->geraDropdown('Tema Dark', $itensDropdown, classe: 'dark', escuro: true);
                                    ?>
                                </div>
                                <div class="p-3 border rounded bg-body-tertiary">
                                    <h6 class="small text-muted mb-2">Gatilhos dos Componentes Dinâmicos:</h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalExemplo">
                                            <?= $bs->obtemGlyphicon('eye-open') ?> Abrir Modal
                                        </button>
                                        <?= $bs->buttonOffcanvas('offcanvasDemo', 'Abrir Gaveta (Offcanvas)', classe: 'info', tamanho: 'sm') ?>
                                        <?= $bs->buttonToast('toastDemo', 'Exibir Notificação Toast', classe: 'success', tamanho: 'sm') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Definição da Modal (geraModal) -->
                    <?= $bs->geraModal(
                        id: 'modalExemplo',
                        classe: '',
                        tamanho: 'md',
                        titulo: 'Confirmação de Procedimento',
                        corpo: '<p>Esta janela modal é gerada pelo método <code>geraModal()</code> com estrutura 100% nativa do Bootstrap 5.3.8, incluindo botão de fechar moderno e controles de acessibilidade.</p>',
                        rodape: $bs->buttonButton('btnFechar', '0', 'Fechar', classe: 'secondary', modaldis: true) .
                                $bs->buttonButton('btnSalvar', '1', 'Salvar Alterações', classe: 'primary'),
                        script: ''
                    ) ?>

                    <!-- Definição da Offcanvas (geraOffcanvas) -->
                    <?= $bs->geraOffcanvas(
                        id: 'offcanvasDemo',
                        titulo: 'Menu Lateral (Offcanvas)',
                        corpo: '<p>A gaveta Offcanvas é ideal para navegações secundárias, filtros laterais em e-commerces e painéis de configuração rápida.</p>' .
                               $bs->geraNav(array(
                                   array('rotulo' => 'Meu Perfil', 'icone' => 'eye-open'),
                                   array('rotulo' => 'Segurança & Chaves', 'icone' => 'wrench'),
                                   array('rotulo' => 'Notificações', 'icone' => 'flag')
                               ), vertical: true),
                        posicao: 'end'
                    ) ?>

                    <!-- Definição do Toast e Toast Container (geraToast, divToastContainer) -->
                    <?php
                    $meuToast = $bs->geraToast(
                        id: 'toastDemo',
                        titulo: 'Alerta do Sistema',
                        mensagem: 'Os dados da demonstração foram carregados perfeitamente!',
                        horario: 'agora',
                        icone: $bs->obtemGlyphicon('star'),
                        autohide: true,
                        delay: 4000
                    );
                    echo $bs->divToastContainer($meuToast, posicao: 'bottom-end');
                    ?>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 8: LOADERS, SKELETONS & INDICADORES -->
                <!-- ============================================================== -->
                <section id="sec-loaders" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('refresh') ?> 8. Loaders, Placeholders (Skeletons) & Indicadores
                        <span class="badge text-bg-secondary fs-7">8 métodos</span>
                    </h2>
                    <?= $bs->par('Barras de progresso animadas, spinners modernos de espera, skeletons (placeholders) para efeito de pré-carregamento e badges contextuais.') ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Barras de Progresso & Spinners</span>
                                    <span class="badge bg-light text-dark method-badge">geraProgressBar() geraSpinner()</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small text-muted">Progresso Padrão (65%):</label>
                                    <?= $bs->geraProgressBar(65, legenda: '65% Completo', tema: 'primary') ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small text-muted">Progresso Listrado (85%):</label>
                                    <?= $bs->geraProgressBar(85, legenda: '85% Listrado', tema: 'success', listrado: true) ?>
                                </div>
                                <div class="d-flex flex-wrap align-items-center gap-3 pt-2 border-top">
                                    <span class="small text-muted">Spinners:</span>
                                    <?= $bs->geraSpinner(tipo: 'border', tema: 'primary') ?>
                                    <?= $bs->geraSpinner(tipo: 'border', tema: 'success', tamanho: 'sm') ?>
                                    <?= $bs->geraSpinner(tipo: 'grow', tema: 'warning') ?>
                                    <?= $bs->geraSpinner(tipo: 'grow', tema: 'danger', tamanho: 'sm') ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Placeholders (Skeletons para Carregamento)</span>
                                    <span class="badge bg-light text-dark method-badge">geraPlaceholder() divPlaceholder() geraPlaceholderLinhas() geraCardPlaceholder()</span>
                                </div>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <h6 class="small text-muted">Linhas com Efeito Glow:</h6>
                                        <?= $bs->geraPlaceholderLinhas(array(12, 8, 10, 6), animacao: 'glow', tema: 'secondary') ?>
                                        <div class="mt-2">
                                            <?= $bs->divPlaceholder(
                                                $bs->geraPlaceholder(colunas: 5, tema: 'primary') . ' ' .
                                                $bs->geraPlaceholder(colunas: 3, tema: 'info'),
                                                animacao: 'wave'
                                            ) ?>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="small text-muted">Card Placeholder:</h6>
                                        <?= $bs->geraCardPlaceholder(largura: '100%', imgAltura: '80px', animacao: 'glow') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Badges Contextuais & Ícones Mapeados</span>
                            <span class="badge bg-light text-dark method-badge">obtemBadge() obtemGlyphicon()</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <?= $bs->obtemBadge('Primary', 'text-bg-primary') ?>
                            <?= $bs->obtemBadge('Secondary', 'text-bg-secondary') ?>
                            <?= $bs->obtemBadge('Success', 'text-bg-success') ?>
                            <?= $bs->obtemBadge('Danger', 'text-bg-danger') ?>
                            <?= $bs->obtemBadge('Warning', 'text-bg-warning') ?>
                            <?= $bs->obtemBadge('Info', 'text-bg-info') ?>
                            <?= $bs->obtemBadge('Dark', 'text-bg-dark') ?>
                            <?= $bs->obtemBadge('Pill Arredondado', 'text-bg-primary rounded-pill') ?>
                        </div>
                        <div class="mt-3 pt-2 border-top d-flex flex-wrap gap-3 align-items-center small text-muted">
                            <span>Exemplos de ícones mapeados para Bootstrap Icons:</span>
                            <span><?= $bs->obtemGlyphicon('star') ?> star</span>
                            <span><?= $bs->obtemGlyphicon('save') ?> save</span>
                            <span><?= $bs->obtemGlyphicon('edit') ?> edit</span>
                            <span><?= $bs->obtemGlyphicon('erase') ?> erase</span>
                            <span><?= $bs->obtemGlyphicon('refresh') ?> refresh</span>
                            <span><?= $bs->obtemGlyphicon('wrench') ?> wrench</span>
                        </div>
                    </div>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 9: MÍDIA, IMAGENS, FIGURES & VÍDEO EMBED -->
                <!-- ============================================================== -->
                <section id="sec-midia" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('file') ?> 9. Mídia, Imagens, Figures & Vídeo Embed
                        <span class="badge text-bg-secondary fs-7">6 métodos</span>
                    </h2>
                    <?= $bs->par('Imagens responsivas (.img-fluid), miniaturas (.img-thumbnail), figures com legendas alinhadas, carrossel de imagens e incorporação responsiva de vídeos.') ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Imagens Estilizadas e Figures com Legenda</span>
                                    <span class="badge bg-light text-dark method-badge">geraImagem() geraFigure()</span>
                                </div>
                                <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                                    <div class="text-center">
                                        <?= $bs->geraImagem('https://picsum.photos/120/120?random=1', 'Imagem Thumbnail', responsiva: false, miniatura: true) ?>
                                        <small class="d-block text-muted mt-1">Thumbnail</small>
                                    </div>
                                    <div class="text-center">
                                        <?= $bs->geraImagem('https://picsum.photos/120/120?random=2', 'Imagem Círculo', responsiva: false, formato: 'circle') ?>
                                        <small class="d-block text-muted mt-1">Rounded Circle</small>
                                    </div>
                                </div>
                                <div class="pt-2 border-top">
                                    <?= $bs->geraFigure('https://picsum.photos/400/140?random=3', 'Legenda informativa da figura alinhada à direita.', alt: 'Figura Exemplo', alinhamentoLegenda: 'end') ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Vídeos e Embeds com Proporção (Ratio)</span>
                                    <span class="badge bg-light text-dark method-badge">geraRatioEmbed() geraVideoEmbed() converteUrlEmbed()</span>
                                </div>
                                <?php
                                $urlOriginal = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
                                $urlConvertida = $bs->converteUrlEmbed($urlOriginal);
                                ?>
                                <p class="small text-muted mb-2">
                                    URL convertida automaticamente por <code>converteUrlEmbed()</code>: <br>
                                    <code><?= htmlspecialchars($urlConvertida) ?></code>
                                </p>
                                <?= $bs->geraVideoEmbed($urlOriginal, proporcao: '16x9', titulo: 'Demonstração de Vídeo') ?>
                                <div class="mt-3">
                                    <h6 class="small text-muted">Embed Genérico com Ratio ($bs->geraRatioEmbed):</h6>
                                    <?= $bs->geraRatioEmbed('<div class="d-flex align-items-center justify-content-center bg-dark text-white fw-bold">Conteúdo Incorporado Ratio 21x9</div>', proporcao: '21x9') ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Carrossel de Slides</span>
                            <span class="badge bg-light text-dark method-badge">geraCarrossel()</span>
                        </div>
                        <?php
                        $slidesCarrossel = array(
                            array(
                                'src' => 'https://picsum.photos/1000/250?random=10',
                                'alt' => 'Slide 1',
                                'titulo' => 'Primeiro Slide de Destaque',
                                'texto' => 'Apresentação visual com controles de avanço e retrocesso nativos.',
                                'ativo' => true
                            ),
                            array(
                                'src' => 'https://picsum.photos/1000/250?random=11',
                                'alt' => 'Slide 2',
                                'titulo' => 'Segundo Slide de Conteúdo',
                                'texto' => 'Transição suave com indicador de páginas configurável.'
                            )
                        );
                        echo $bs->geraCarrossel('demoCarrosselPrincipal', $slidesCarrossel, indicador: true, controle: true, intervalo: 5000);
                        ?>
                    </div>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 10: CONTEÚDO, DADOS & TABELAS -->
                <!-- ============================================================== -->
                <section id="sec-conteudo" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('calendar') ?> 10. Conteúdo, Dados & Tabelas
                        <span class="badge text-bg-secondary fs-7">5 métodos</span>
                    </h2>
                    <?= $bs->par('Estruturação de artigos editoriais, painéis sanfonados colapsáveis (Accordion) e tabelas responsivas completas com zebra e hover.') ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Accordion Colapsável (Acordeão)</span>
                                    <span class="badge bg-light text-dark method-badge">geraAccordion() geraAccordionPanel()</span>
                                </div>
                                <?php
                                $conteudoAccordion = array(
                                    array(
                                        'titulo' => 'O que é o PHP Bootstrap Class?',
                                        'texto' => 'É uma classe PHP autônoma e completa projetada para simplificar a geração de marcação HTML em conformidade estrita com o Bootstrap 5.3.8.',
                                        'colapso' => false
                                    ),
                                    array(
                                        'titulo' => 'Quais versões do PHP são suportadas?',
                                        'texto' => 'A biblioteca é totalmente compatível e testada em PHP 8.0, 8.1, 8.2 e 8.3.',
                                        'colapso' => true
                                    ),
                                    array(
                                        'titulo' => 'Possui dependência de bibliotecas JS externas?',
                                        'texto' => 'Não. Todas as animações e comportamentos dependem exclusivamente do JavaScript nativo (Vanilla) do próprio Bootstrap 5.3.8.',
                                        'colapso' => true
                                    )
                                );
                                echo $bs->geraAccordion($conteudoAccordion, id: 'accordionDemoPrincipal');
                                ?>
                                <div class="mt-3 pt-2 border-top">
                                    <h6 class="small text-muted">Accordion Panel ($bs->geraAccordionPanel):</h6>
                                    <?= $bs->geraAccordionPanel(array(array('titulo' => 'Painel Sanfonado Integrado', 'texto' => 'Demonstração de chamada ao método geraAccordionPanel().', 'colapso' => true)), id: 'accPanelDemo') ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo-box">
                                <div class="demo-box-title">
                                    <span>Artigo / Blog Post</span>
                                    <span class="badge bg-light text-dark method-badge">geraBlogPost()</span>
                                </div>
                                <?= $bs->geraBlogPost(
                                    titulo: 'Modernização Completa para Bootstrap 5.3.8',
                                    meta: '24 de Outubro de 2026 por <a href="#">Equipe de Arquitetura</a>',
                                    conteudo: '<p>A biblioteca adota a especificação <code>data-bs-*</code> nativa do Bootstrap 5.3.8, suporte a color modes (Dark/Light/Auto) e empacotamento completo em um único arquivo autônomo.</p>'
                                ) ?>
                            </div>
                        </div>
                    </div>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Tabela de Dados Responsiva com Listras e Hover</span>
                            <span class="badge bg-light text-dark method-badge">geraTabela()</span>
                        </div>
                        <?php
                        $dadosTabela = array(
                            array('ID', 'Nome do Módulo', 'Versão', 'Status', 'Linguagem'),
                            array('1', 'Offcanvas & Drawers', '5.3.8', '<span class="badge text-bg-success">Concluído</span>', 'PHP 8.x'),
                            array('2', 'Theme Toggle Dark/Light', '5.3.8', '<span class="badge text-bg-success">Concluído</span>', 'PHP 8.x'),
                            array('3', 'Floating Labels Form', '5.3.8', '<span class="badge text-bg-success">Concluído</span>', 'PHP 8.x'),
                            array('4', 'Ratio Video Embeds', '5.3.8', '<span class="badge text-bg-success">Concluído</span>', 'PHP 8.x'),
                        );
                        echo $bs->geraTabela(
                            id: 'tabelaDemoPrincipal',
                            conteudo: $dadosTabela,
                            zebra: true,
                            borda: true,
                            hover: true,
                            responsiva: true
                        );
                        ?>
                    </div>
                </section>

                <!-- ============================================================== -->
                <!-- SEÇÃO 11: HELPERS DE SCRIPT, INJEÇÃO & ASSETS -->
                <!-- ============================================================== -->
                <section id="sec-scripts" class="demo-section">
                    <h2 class="h3 mb-3 d-flex align-items-center gap-2">
                        <?= $bs->obtemGlyphicon('wrench') ?> 11. Helpers de Scripts, Injeção & Assets
                        <span class="badge text-bg-secondary fs-7">9 métodos</span>
                    </h2>
                    <?= $bs->par('Helpers para injeção de atributos tooltip/popover em qualquer tag HTML pura, scripts oficiais de inicialização Vanilla JS e injeção de assets CSS/JS.') ?>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Injeção de Tooltip e Popover em HTML Arbitrário</span>
                            <span class="badge bg-light text-dark method-badge">withTooltip() withPopover()</span>
                        </div>
                        <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                            <?php
                            $linkSimples = '<a href="#" class="btn btn-outline-info">Link Puro com Tooltip</a>';
                            echo $bs->withTooltip($linkSimples, 'Tooltip injetado via $bs->withTooltip()!', posicao: 'top');

                            $spanSimples = '<button type="button" class="btn btn-outline-warning">Botão com Popover Injetado</button>';
                            echo $bs->withPopover($spanSimples, 'Texto explicativo anexado dinamicamente com $bs->withPopover()', titulo: 'Informação Adicional');
                            ?>
                        </div>
                        <p class="small text-muted mb-0">
                            Estes métodos permitem enriquecer qualquer elemento HTML com os atributos <code>data-bs-*</code> sem necessidade de recriar as tags.
                        </p>
                    </div>

                    <div class="demo-box">
                        <div class="demo-box-title">
                            <span>Scripts de Inicialização & Injeção de Assets</span>
                            <span class="badge bg-light text-dark method-badge">tagCss() tagJs() scriptTooltips() scriptPopovers() scriptThemeToggle() scriptInicializaTodos()</span>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h6 class="small text-muted">Carregamento de Assets CSS e JS</h6>
                                <pre class="p-2 border rounded bg-body-tertiary small"><code>// Inclusão no &lt;head&gt; (padrão oficial CDN jsDelivr)
echo $bs-&gt;tagCss();

// Inclusão antes do fechamento de &lt;/body&gt; (padrão oficial CDN jsDelivr)
echo $bs-&gt;tagJs();</code></pre>
                            </div>
                            <div class="col-md-6">
                                <h6 class="small text-muted">Inicialização Vanilla JS</h6>
                                <?php
                                // Chamada demonstrativa aos geradores de scripts específicos
                                $scriptIndivTooltips = $bs->scriptTooltips('#tooltips-especificos');
                                $scriptIndivPopovers = $bs->scriptPopovers('#popovers-especificos');
                                ?>
                                <pre class="p-2 border rounded bg-body-tertiary small"><code>// Inicialização unificada de Tooltips, Popovers e Toasts
echo $bs-&gt;scriptInicializaTodos();

// Ou scripts individuais específicos
echo $bs-&gt;scriptTooltips('#seletor');
echo $bs-&gt;scriptPopovers('#seletor');</code></pre>
                            </div>
                        </div>
                    </div>
                </section>

            </div> <!-- /col-lg-10 -->
        </div> <!-- /row -->
    </main>

    <!-- geraFooter: Rodapé Oficial da Aplicação -->
    <?php
    $conteudoRodape = '<div class="d-flex flex-wrap justify-content-between align-items-center">' .
        '<span class="text-body-secondary small">© ' . date('Y') . ' PHP Bootstrap Class. Desenvolvido para Bootstrap 5.3.8 e PHP 8.x.</span>' .
        '<div class="d-flex gap-3">' .
            '<a href="#inicio" class="text-body-secondary text-decoration-none small">Voltar ao Topo ↑</a>' .
            '<a href="https://github.com/danmadeira/php-bootstrap-class" class="text-body-secondary text-decoration-none small">GitHub</a>' .
        '</div>' .
    '</div>';
    echo $bs->geraFooter($conteudoRodape, id: 'rodape-demo');
    ?>

    <!-- tagJs: Script Bundle do Bootstrap 5.3.8 via CDN jsDelivr (padrão) -->
    <?= $bs->tagJs() ?>

    <!-- scriptInicializaTodos: Ativação dos Tooltips, Popovers e Toasts nativos do Bootstrap 5 -->
    <?= $bs->scriptInicializaTodos() ?>

</body>
</html>
