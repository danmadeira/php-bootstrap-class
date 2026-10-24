<?php
/**
 * PHP Bootstrap Class v2.0 - Demonstração Completa (Bootstrap 5.3.8)
 *
 * Arquivo de demonstração interativo apresentando todos os 179 métodos públicos
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

// Cabeçalho HTML oficial com meta tags, Bootstrap CSS, script de tema e estilos customizados
$htmlHead = '<!DOCTYPE html>' . PHP_EOL .
    '<html lang="pt-BR" data-bs-theme="auto">' . PHP_EOL .
    '<head>' . PHP_EOL .
    '    <meta charset="UTF-8">' . PHP_EOL .
    '    <meta name="viewport" content="width=device-width, initial-scale=1.0">' . PHP_EOL .
    '    <title>PHP Bootstrap Class v2.0 - Demonstração Completa</title>' . PHP_EOL .
    '    ' . $bs->tagCss() .
    '    ' . $bs->scriptThemeToggle() .
    '    <style>' . PHP_EOL .
    '        body {' . PHP_EOL .
    '            padding-top: 70px;' . PHP_EOL .
    '        }' . PHP_EOL .
    '        .demo-section {' . PHP_EOL .
    '            padding-top: 30px;' . PHP_EOL .
    '            margin-bottom: 40px;' . PHP_EOL .
    '            border-bottom: 1px solid var(--bs-border-color);' . PHP_EOL .
    '            padding-bottom: 30px;' . PHP_EOL .
    '        }' . PHP_EOL .
    '        .demo-box {' . PHP_EOL .
    '            background-color: var(--bs-body-bg);' . PHP_EOL .
    '            border: 1px solid var(--bs-border-color);' . PHP_EOL .
    '            border-radius: 0.5rem;' . PHP_EOL .
    '            padding: 1.5rem;' . PHP_EOL .
    '            margin-bottom: 1.5rem;' . PHP_EOL .
    '            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.05);' . PHP_EOL .
    '        }' . PHP_EOL .
    '        .demo-box-title {' . PHP_EOL .
    '            font-size: 0.9rem;' . PHP_EOL .
    '            text-transform: uppercase;' . PHP_EOL .
    '            letter-spacing: 0.05em;' . PHP_EOL .
    '            color: var(--bs-secondary-color);' . PHP_EOL .
    '            margin-bottom: 1rem;' . PHP_EOL .
    '            display: flex;' . PHP_EOL .
    '            flex-wrap: wrap;' . PHP_EOL .
    '            align-items: center;' . PHP_EOL .
    '            justify-content: space-between;' . PHP_EOL .
    '            gap: 0.5rem;' . PHP_EOL .
    '        }' . PHP_EOL .
    '        .method-badge {' . PHP_EOL .
    '            font-family: monospace;' . PHP_EOL .
    '            font-size: 0.78rem;' . PHP_EOL .
    '            white-space: normal !important;' . PHP_EOL .
    '            word-break: normal;' . PHP_EOL .
    '            overflow-wrap: break-word;' . PHP_EOL .
    '            line-height: 1.5;' . PHP_EOL .
    '            padding: 0.35rem 0.65rem;' . PHP_EOL .
    '            max-width: 100%;' . PHP_EOL .
    '            background-color: var(--bs-tertiary-bg) !important;' . PHP_EOL .
    '            color: var(--bs-body-color) !important;' . PHP_EOL .
    '            border: 1px solid var(--bs-border-color) !important;' . PHP_EOL .
    '            text-align: start;' . PHP_EOL .
    '        }' . PHP_EOL .
    '        .sidebar-nav {' . PHP_EOL .
    '            position: sticky;' . PHP_EOL .
    '            top: 85px;' . PHP_EOL .
    '            max-height: calc(100vh - 100px);' . PHP_EOL .
    '            overflow-y: auto;' . PHP_EOL .
    '        }' . PHP_EOL .
    '    </style>' . PHP_EOL .
    '</head>';
echo $htmlHead . PHP_EOL;

// Abertura do corpo do documento
$htmlBodyInicio = '<body>';
echo $htmlBodyInicio . PHP_EOL;

// geraNavBar: Barra de Navegação Topo Fixa com suporte a tema dark/primary encapsulada na tag semântica <header>
echo $bs->header(
    $bs->geraNavBar(
        posicao: 'F',
        brand: 'PHP Bootstrap Class v2.0',
        logo: '',
        link: '#inicio',
        menuesq: $menuEsquerda,
        menudir: $menuDireita,
        tema: 'inverse',
        bg: 'primary'
    ),
    id: 'topo-navegacao'
);

// Seletor Flutuante de Tema Claro/Escuro (geraThemeToggle)
echo $bs->geraThemeToggle(tipo: 'dropdown', posicao: 'bottom-end', incluiScript: false);

// Menu Lateral (Sumário das 12 Seções)
$sidebarNav = $bs->nav(
    $bs->h(6, $bs->obtemGlyphicon('th') . ' Índice de Métodos', classe: 'text-uppercase text-body-secondary fw-bold fs-7 mb-3') .
    $bs->geraNav(array(
        array('rotulo' => '1. Layout & Stacks', 'url' => '#sec-layout'),
        array('rotulo' => '2. Botões & Ações', 'url' => '#sec-botoes'),
        array('rotulo' => '3. Formulários Clássicos', 'url' => '#sec-forms'),
        array('rotulo' => '4. Floating Labels', 'url' => '#sec-floating'),
        array('rotulo' => '5. Navegação & Abas', 'url' => '#sec-nav'),
        array('rotulo' => '6. Cards & Grids', 'url' => '#sec-cards'),
        array('rotulo' => '7. Overlays & Modais', 'url' => '#sec-overlays'),
        array('rotulo' => '8. Loaders & Skeletons', 'url' => '#sec-loaders'),
        array('rotulo' => '9. Mídia & Figures', 'url' => '#sec-midia'),
        array('rotulo' => '10. Conteúdo & Dados', 'url' => '#sec-conteudo'),
        array('rotulo' => '11. Helpers & Scripts', 'url' => '#sec-scripts'),
    ), estilo: 'pills', vertical: true, classe: 'gap-1 small'),
    classe: 'sidebar-nav p-2 border-end',
    ariaLabel: 'Sumário da documentação'
);
$sidebarMenu = $bs->aside($sidebarNav, classe: 'col-lg-2 d-none d-lg-block', ariaLabel: 'Menu Lateral de Navegação');

// Buffer para o Conteúdo Principal (Hero Banner + Seções 1 a 11)
ob_start();

// divJumbotron: Hero Banner de Destaque
$heroConteudo = $bs->h(1, $bs->obtemGlyphicon('star') . ' PHP Bootstrap Class', classe: 'display-5 fw-bold') .
    $bs->par('Demonstração interativa de todos os ' . $bs->strong('179 métodos públicos') . ' da biblioteca modernizada para ' . $bs->strong('Bootstrap 5.3.8') . ' e ' . $bs->strong('PHP 8.x') . '. Uma classe PHP 100% autônoma, sem dependências externas, compatível com Dark Mode nativo e flexbox utilities.', classe: 'lead') .
    $bs->hr('my-4') .
    $bs->div(
        $bs->obtemBadge('v2.0 Milestone', 'text-bg-dark fs-6') . ' ' .
        $bs->obtemBadge('179 Métodos Públicos', 'text-bg-primary fs-6') . ' ' .
        $bs->obtemBadge('Bootstrap 5.3.8 Nativo', 'text-bg-success fs-6') . ' ' .
        $bs->obtemBadge('PHP 8.x Compatível', 'text-bg-info fs-6') . ' ' .
        $bs->obtemBadge('Zero jQuery', 'text-bg-warning fs-6') . ' ' .
        $bs->linkIcone('Documentação Oficial Bootstrap', 'https://getbootstrap.com/docs/5.3/', 'arrow-up-right', hover: true, classe: 'ms-auto'),
        classe: 'd-flex flex-wrap gap-2 align-items-center'
    );
echo $bs->divJumbotron($heroConteudo, id: 'jumbotron-hero');

// ==============================================================
// SEÇÃO 1: LAYOUT, CONTAINERS & STACKS
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('th') . ' 1. Layout, Containers & Stacks ' . $bs->span('51 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Utilitários para contêineres, alinhamentos, grids de colunas e stacks verticais/horizontais do Bootstrap 5.');

$box1 = $bs->div(
    $bs->div(
        $bs->span('Tipografia, Listas & Contêineres') . PHP_EOL .
        $bs->span('par() span() div() section() h() hr() nav() main() header() footer() aside() code() label() a() small() pre() button() strong() br() blockquote() figcaption() cite() mark() kbd() ul() ol() li() dl() dt() dd() i() abbr() address() em() b() sub() sup() del() s() ins() u() samp() var()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->par('Este parágrafo foi gerado com ' . $bs->code('$bs->par()') . ' com classe de destaque.', classe: 'text-primary fw-medium') .
    $bs->par('Exemplo de elemento inline: ' . $bs->span('Span estilizado com $bs->span()', classe: 'badge text-bg-dark')) .
    $bs->par('Exemplos de texto inline: ' . $bs->strong('Negrito ($bs->strong)') . ' | ' . $bs->b('Negrito B ($bs->b)') . ' | ' . $bs->em('Ênfase ($bs->em)', classe: 'fst-italic text-info') . ' | ' . $bs->mark('Destaque ($bs->mark)') . ' | ' . $bs->kbd('Ctrl + S ($bs->kbd)') . ' | ' . $bs->small('Pequeno ($bs->small)', classe: 'text-muted') . ' | H' . $bs->sub('2') . 'O ($bs->sub) | E = mc' . $bs->sup('2') . ' ($bs->sup) | ' . $bs->del('R$ 199', classe: 'text-muted small') . ' ' . $bs->ins('R$ 149', classe: 'text-success fw-bold') . ' | ' . $bs->s('Obsoleto ($bs->s)') . ' | ' . $bs->u('Sublinhado ($bs->u)') . ' | ' . $bs->samp('Output ($bs->samp)') . ' | ' . $bs->var('x') . ' + ' . $bs->var('y') . ' = ' . $bs->var('z') . ' ($bs->var) | ' . $bs->code('codigo()') . ' | ' . $bs->a('#inicio', 'Link ($bs->a)') . ' | ' . $bs->i('', 'bi bi-star-fill text-warning') . ' ' . $bs->i('Itálico ($bs->i)', classe: 'fst-italic') . ' | ' . $bs->abbr('HTML5', 'HyperText Markup Language', classe: 'initialism')) .
    $bs->blockquote(
        $bs->par('O Bootstrap 5 foi reconstruído com foco em flexbox, CSS Grid nativo e color modes.', classe: 'mb-0') .
        $bs->figcaption('W3C Web Standards em ' . $bs->cite('Guia Oficial de Design', 'Especificação W3C'), classe: 'blockquote-footer mt-1 mb-0'),
        classe: 'blockquote border-start border-3 ps-3 py-1 my-2 bg-body-tertiary rounded-end'
    ) .
    $bs->div(
        $bs->ul(array('Item 1 via $bs->ul()', $bs->li('Item 2 ativo via $bs->li()', classe: 'list-group-item', ativo: true)), classe: 'list-group list-group-flush small mb-2') .
        $bs->ol(array('Etapa 1 via $bs->ol()', 'Etapa 2 via $bs->ol()'), classe: 'list-group list-group-numbered list-group-flush small mb-2'),
        classe: 'p-2 border rounded bg-body-tertiary mb-2'
    ) .
    $bs->div(
        $bs->h(6, 'Lista de Descrição em Grade ($bs->dl, dt, dd):', classe: 'small text-muted mb-2') .
        $bs->dl(
            $bs->dt('Versão', classe: 'col-sm-4') . $bs->dd('2.0 Major Release', classe: 'col-sm-8 mb-1') .
            $bs->dt('Ambiente', classe: 'col-sm-4') . $bs->dd('PHP 8.x + Bootstrap 5.3.8', classe: 'col-sm-8 mb-1') .
            $bs->dt('Licença', classe: 'col-sm-4') . $bs->dd('MIT Open Source', classe: 'col-sm-8 mb-0'),
            classe: 'row small mb-0'
        ),
        classe: 'p-2 border rounded bg-body-tertiary mb-2'
    ) .
    $bs->div('Exemplo de bloco estilizado gerado com $bs->div()', classe: 'p-2 border rounded bg-body-secondary mb-2 text-center small fw-medium') .
    $bs->section('Exemplo de seção semântica gerada com $bs->section()', classe: 'p-2 border rounded bg-body-tertiary mb-2 text-center small fw-medium') .
    $bs->header('Exemplo de cabeçalho semântico gerado com $bs->header()', classe: 'p-2 border rounded bg-body-tertiary mb-2 text-center small fw-medium') .
    $bs->aside('Exemplo de bloco lateral semântico gerado com $bs->aside()', classe: 'p-2 border rounded bg-body-tertiary mb-2 text-center small fw-medium') .
    $bs->address('Contato com $bs->address(): ' . $bs->a('mailto:suporte@exemplo.com', 'suporte@exemplo.com') . ' - Av. Paulista, 1000', classe: 'p-2 border rounded bg-body-tertiary mb-2 text-center small text-body-secondary') .
    $bs->footer('Exemplo de rodapé semântico genérico gerado com $bs->footer()', classe: 'p-2 border rounded bg-body-tertiary mb-2 text-center small fw-medium') .
    $bs->h(6, 'Exemplo de título h6 semântico gerado com $bs->h(6, ...)', classe: 'text-primary mb-2 text-center') .
    $bs->hr('my-2 border-primary border-2') .
    $bs->nav('Exemplo de navegação semântica gerada com $bs->nav()', classe: 'p-2 border rounded bg-body-tertiary mb-2 text-center small fw-medium', ariaLabel: 'Exemplo de navegação') .
    $bs->main('Exemplo de contêiner semântico gerado com $bs->main()', classe: 'p-2 border rounded bg-body-tertiary mb-2 text-center small fw-medium') .
    $bs->divCenterBlock(
        $bs->span('Bloco centralizado com $bs->divCenterBlock()', classe: 'alert alert-info py-2 px-3 mb-0 text-center w-70'),
        id: 'exemplo-center-block'
    ),
    classe: 'demo-box'
);

$col1 = $bs->divColuna($bs->div('Col 4 (sm)', classe: 'p-2 border bg-light text-center'), tamanho: 'sm', colspan: 4);
$col2 = $bs->divColuna($bs->div('Col 4 (sm)', classe: 'p-2 border bg-light text-center'), tamanho: 'sm', colspan: 4);
$col3 = $bs->divColuna($bs->div('Col 4 (sm)', classe: 'p-2 border bg-light text-center'), tamanho: 'sm', colspan: 4);
$box2 = $bs->div(
    $bs->div(
        $bs->span('Linha e Colunas Responsivas') . PHP_EOL .
        $bs->span('divLinha() divColuna()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->divLinha($col1 . $col2 . $col3, classe: 'g-2'),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($box1, classe: 'col-md-6') .
    $bs->div($box2, classe: 'col-md-6'),
    classe: 'row'
);

$conteudoPilhas = $bs->div(
    $bs->div(
        $bs->h(6, 'VStack (Pilha Vertical)', classe: 'small text-muted') .
        $bs->divVStack(
            $bs->div('Item Vertical 1', classe: 'p-2 bg-body-secondary border rounded') .
            $bs->div('Item Vertical 2', classe: 'p-2 bg-body-secondary border rounded') .
            $bs->div('Item Vertical 3', classe: 'p-2 bg-body-secondary border rounded'),
            gap: 2
        ),
        classe: 'col-md-6'
    ) .
    $bs->div(
        $bs->h(6, 'HStack (Pilha Horizontal com Divisor VR)', classe: 'small text-muted') .
        $bs->divHStack(
            $bs->div('Esquerda', classe: 'p-2 bg-body-secondary border rounded') .
            $bs->divVr() .
            $bs->div('Direita (ms-auto)', classe: 'p-2 bg-body-secondary border rounded ms-auto') .
            $bs->divVr() .
            $bs->buttonButton('btnAcao', '1', 'Ação', classe: 'success', tamanho: 'sm'),
            gap: 3
        ) .
        $bs->div(
            'Exemplo de invólucro de contêineres:' .
            $bs->divContainer($bs->small('Renderizado dentro de $bs->divContainer()', classe: 'text-secondary'), classe: 'border p-1 rounded mt-1') .
            $bs->divContainerFluid($bs->small('Renderizado dentro de $bs->divContainerFluid()', classe: 'text-secondary'), classe: 'border p-1 rounded mt-1'),
            classe: 'mt-3 small text-muted'
        ),
        classe: 'col-md-6'
    ),
    classe: 'row g-3'
);

echo $bs->div(
    $bs->div(
        $bs->span('Stacks Modernas e Separador Vertical') . PHP_EOL .
        $bs->span('divVStack() divHStack() divVr() divContainer() divContainerFluid()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $conteudoPilhas,
    classe: 'demo-box'
);

echo $bs->section(ob_get_clean(), id: 'sec-layout', classe: 'demo-section');

// ==============================================================
// SEÇÃO 2: BOTÕES, AÇÕES & TOOLBARS
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('wrench') . ' 2. Botões, Ações & Toolbars ' . $bs->span('14 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Botões nativos, links estilizados, botão de fechar, spinners de carregamento, toolbars e grupos alternadores (btn-check).');

echo $bs->div(
    $bs->div(
        $bs->span('Botões Básicos, Botão de Fechar e Links') . PHP_EOL .
        $bs->span('buttonButton() buttonSubmit() buttonlink() buttonClose() linkIcone()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->buttonButton('btnP', '1', 'Primary', classe: 'primary') .
        $bs->buttonButton('btnS', '1', 'Secondary Outline', classe: 'secondary', contorno: true) .
        $bs->buttonSubmit('btnSub', '1', 'Submit Button', classe: 'success') .
        $bs->buttonlink('#sec-botoes', 'Link em Botão', classe: 'warning') .
        $bs->buttonButton('btnDis', '1', 'Desativado', classe: 'danger', desativado: true) .
        $bs->buttonButton('btnLg', '1', 'Grande (L)', classe: 'info', tamanho: 'lg') .
        $bs->buttonButton('btnSm', '1', 'Pequeno (S)', classe: 'dark', tamanho: 'sm') .
        $bs->div(
            $bs->span('buttonClose:', classe: 'small text-muted') .
            $bs->buttonClose(),
            classe: 'd-inline-flex align-items-center border p-2 rounded gap-2'
        ),
        classe: 'd-flex flex-wrap gap-2 align-items-center mb-3'
    ) .
    $bs->div(
        $bs->div(
            $bs->span('linkIcone (Ícone à direita com animação hover):', classe: 'small text-muted d-block mb-1') .
            $bs->linkIcone('Continuar Leitura', '#', 'arrow-right', hover: true, posicaoIcone: 'fim')
        ) .
        $bs->div(
            $bs->span('linkIcone (Ícone à esquerda):', classe: 'small text-muted d-block mb-1') .
            $bs->linkIcone('Baixar Pacote', '#', 'download', hover: true, posicaoIcone: 'inicio', classe: 'text-success')
        ),
        classe: 'd-flex flex-wrap gap-4 align-items-center pt-2 border-top'
    ),
    classe: 'demo-box'
);

$boxBotoes1 = $bs->div(
    $bs->div(
        $bs->span('Botões Dinâmicos e Interativos') . PHP_EOL .
        $bs->span('buttonSpinner() buttonPlaceholder() buttonOffcanvas() buttonToast()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->buttonSpinner('Processando...', tipo: 'border', classe: 'primary') .
        $bs->buttonSpinner('Gravando...', tipo: 'grow', classe: 'success', contorno: true) .
        $bs->buttonPlaceholder(colunas: 4, classe: 'secondary', animacao: 'glow'),
        classe: 'd-flex flex-wrap gap-2 mb-3'
    ) .
    $bs->div(
        $bs->buttonOffcanvas('offcanvasDemo', 'Abrir Gaveta (Offcanvas)', classe: 'outline-primary') .
        $bs->buttonToast('toastDemo', 'Disparar Notificação (Toast)', classe: 'outline-success'),
        classe: 'd-flex flex-wrap gap-2'
    ),
    classe: 'demo-box'
);

$boxBotoes2 = $bs->div(
    $bs->div(
        $bs->span('Tooltips & Popovers em Botões') . PHP_EOL .
        $bs->span('buttonTooltip() buttonPopover()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->buttonTooltip('Passe o mouse (Tooltip Top)', 'Este é um tooltip interativo BS 5.3.8!', posicao: 'top', classe: 'secondary') .
        $bs->buttonTooltip('Tooltip à Direita', 'Tooltip posicionado à direita!', posicao: 'right', classe: 'info', contorno: true) .
        $bs->buttonPopover('Clique para Popover', 'Conteúdo rico exibido dentro de um popover nativo do Bootstrap 5!', titulo: 'Detalhes Adicionais', posicao: 'right', trigger: 'click', classe: 'danger'),
        classe: 'd-flex flex-wrap gap-2'
    ),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxBotoes1, classe: 'col-md-6') .
    $bs->div($boxBotoes2, classe: 'col-md-6'),
    classe: 'row'
);

$botoesGrupo = array(
    $bs->buttonButton('b1', '1', 'Esq', classe: 'secondary'),
    $bs->buttonButton('b2', '2', 'Centro', classe: 'secondary'),
    $bs->buttonButton('b3', '3', 'Dir', classe: 'secondary')
);
$colBtn1 = $bs->div(
    $bs->h(6, 'ButtonGroup Simples', classe: 'small text-muted') .
    $bs->geraButtonGroup($botoesGrupo),
    classe: 'col-md-4'
);

$opcoesToggle = array('op1' => 'Diário', 'op2' => 'Semanal', 'op3' => 'Mensal');
$colBtn2 = $bs->div(
    $bs->h(6, 'ButtonToggleGroup (Radio com btn-check)', classe: 'small text-muted') .
    $bs->geraButtonToggleGroup('frequencia', $opcoesToggle, tipo: 'radio', selecionados: 'op2', classe: 'primary'),
    classe: 'col-md-4'
);

$g1 = $bs->geraButtonGroup(array(
    $bs->buttonButton('', '', '1', classe: 'outline-secondary', tamanho: 'sm'),
    $bs->buttonButton('', '', '2', classe: 'outline-secondary', tamanho: 'sm'),
    $bs->buttonButton('', '', '3', classe: 'outline-secondary', tamanho: 'sm')
));
$g2 = $bs->geraButtonGroup(array(
    $bs->buttonButton('', '', '4', classe: 'outline-secondary', tamanho: 'sm'),
    $bs->buttonButton('', '', '5', classe: 'outline-secondary', tamanho: 'sm')
));
$colBtn3 = $bs->div(
    $bs->h(6, 'ButtonToolbar Completa', classe: 'small text-muted') .
    $bs->divButtonToolbar(array($g1, $g2)),
    classe: 'col-md-4'
);

echo $bs->div(
    $bs->div(
        $bs->span('Grupos de Botões, Toolbars e Toggle Groups (btn-check)') . PHP_EOL .
        $bs->span('geraButtonGroup() geraButtonToggleGroup() divButtonToolbar()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div($colBtn1 . $colBtn2 . $colBtn3, classe: 'row g-3'),
    classe: 'demo-box'
);

echo $bs->section(ob_get_clean(), id: 'sec-botoes', classe: 'demo-section');

// ==============================================================
// SEÇÃO 3: FORMULÁRIOS CLÁSSICOS & INPUTS BÁSICOS
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('edit') . ' 3. Formulários Clássicos & Inputs Básicos ' . $bs->span('36 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Campos de texto, e-mail, senha, textarea, switches, sliders, color picker, grupos de inputs com addons, uploads e feedbacks de validação.');

$formConteudo = $bs->inputOculto('csrf_token', 'token', 'a8f7b6c5d4e3') .
    $bs->divLinha(
        $bs->divColuna($bs->divFormGroup($bs->inputTexto('txtNome', 'nome', 'Daniel Oliveira', 30, 60, rotulo: 'Nome Completo', dica: 'Digite seu nome', requerido: true)), tamanho: 'md', colspan: 4) .
        $bs->divColuna($bs->divFormGroup($bs->inputEmail('txtEmail', 'email', 'daniel@exemplo.com', 30, rotulo: 'E-mail Comercial', dica: 'nome@empresa.com', requerido: true)), tamanho: 'md', colspan: 4) .
        $bs->divColuna($bs->divFormGroup($bs->inputSenha('txtSenha', 'senha', '', 20, rotulo: 'Senha de Acesso', dica: 'Mínimo 8 caracteres')), tamanho: 'md', colspan: 4) .
        $bs->divColuna($bs->fieldsetFormGroup($bs->inputArea('txtObs', 'observacoes', 'Observações registradas através da classe Bootstrap.', 3, 50, rotulo: 'Mensagem/Observações'), legenda: 'Informações Adicionais'), tamanho: 'xs', colspan: 12),
        classe: 'g-3'
    );
echo $bs->div(
    $bs->div(
        $bs->span('Formulário Completo e Campos de Texto') . PHP_EOL .
        $bs->span('generalForm() form() fieldset() legend() textarea() input() divFormGroup() fieldsetFormGroup() inputTexto() inputEmail() inputSenha() inputArea() inputOculto()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->generalForm($formConteudo, acao: '#', id: 'form-exemplo-1') .
    $bs->div(
        $bs->h(6, 'Formulário Nativo Genérico ($bs->form):', classe: 'small text-muted') .
        $bs->form(
            $bs->div(
                $bs->inputTexto('txtBuscaRapida', 'q', '', 20, 50, dica: 'Pesquisa rápida...') .
                $bs->buttonButton('btnBusca', '1', 'Buscar', classe: 'primary', tamanho: 'sm'),
                classe: 'd-flex gap-2'
            ),
            action: '#busca',
            classe: 'mt-2'
        ),
        classe: 'pt-2 border-top mt-3'
    ) .
    $bs->div(
        $bs->h(6, 'Fieldset com Legenda e Textarea Nativos ($bs->fieldset, legend, textarea):', classe: 'small text-muted') .
        $bs->fieldset(
            $bs->legend('Notas Rápidas do Operador', classe: 'w-auto px-2 fs-6 fw-bold') .
            $bs->textarea('txtObservacoesNativo', 'Exemplo de texto digitado no textarea nativo do Bootstrap.', linhas: 2, placeholder: 'Digite notas adicionais...'),
            classe: 'p-2 border rounded bg-body-tertiary mt-2'
        ),
        classe: 'pt-2 border-top mt-3'
    ),
    classe: 'demo-box'
);

$boxForm1 = $bs->div(
    $bs->div(
        $bs->span('Input Groups Simplificados & Addons') . PHP_EOL .
        $bs->span('inputTextoGroup() inputGroupAddon() inputGroupTexto() divInputGroup()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div($bs->inputTextoGroup('igUsuario', 'usuario', 'usuario_admin', prefixo: '@', rotulo: 'Nome de Usuário'), classe: 'mb-3') .
    $bs->div($bs->inputTextoGroup('igPreco', 'preco', '149.90', prefixo: 'R$', sufixo: ',00', rotulo: 'Valor do Produto'), classe: 'mb-3') .
    $bs->div(
        $bs->label('Input Group com Addon Avulso ($bs->inputGroupAddon):', classe: 'form-label') . PHP_EOL .
        $bs->inputGroupAddon($bs->input('text', 'url_artigo', placeholder: 'https://exemplo.com/artigo/'), prefixo: $bs->obtemGlyphicon('star'), sufixo: '.html'),
        classe: 'mb-3'
    ) .
    $bs->div($bs->inputGroupTexto('igTexto', 'texto_group', 'Valor do Campo', 20, 50, rotulo: 'Input Group Estruturado', addon1: '[Pre]', addon2: '[Pos]'), classe: 'mb-3') .
    $bs->div(
        $bs->label('Div Input Group Genérico ($bs->divInputGroup):', classe: 'form-label') . PHP_EOL .
        $bs->divInputGroup($bs->span($bs->obtemGlyphicon('search'), classe: 'input-group-text') . $bs->input('text', 'pesquisa', placeholder: 'Pesquisar catálogo...'))
    ),
    classe: 'demo-box'
);

$boxForm2 = $bs->div(
    $bs->div(
        $bs->span('Uploads, Sliders, Cores, Autocomplete, Saída & Validação') . PHP_EOL .
        $bs->span('inputFile() inputRange() inputColor() output() geraFeedback() label() datalist()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div($bs->inputFile('arqDocumento', 'documento', rotulo: 'Enviar Documento (PDF/DOC)', ajuda: 'Tamanho máximo permitido: 10MB.', aceita: '.pdf,.doc,.docx'), classe: 'mb-3') .
    $bs->div($bs->inputRange('rngVolume', 'volume', valor: 75, minimo: 0, maximo: 100, passo: 5, rotulo: 'Nível de Volume', exibeValor: true), classe: 'mb-3') .
    $bs->div($bs->inputColor('corDestaque', 'cor_destaque', valor: '#0d6efd', rotulo: 'Cor Predominante do Tema', comHex: true), classe: 'mb-3') .
    $bs->div(
        $bs->label('Controle Deslizante com Saída Dinâmica ($bs->input e output):', for: 'rngExemplo', classe: 'form-label') . PHP_EOL .
        $bs->div(
            $bs->input('range', 'faixaValor', '75', 'rngExemplo', 'form-range w-75') . ' ' .
            $bs->output('75%', for: 'rngExemplo', classe: 'badge bg-primary fs-6'),
            classe: 'd-flex align-items-center gap-3'
        ),
        classe: 'mb-3'
    ) .
    $bs->div(
        $bs->label('Entrada com Autocompletar ($bs->datalist e input):', for: 'inputCidadesDatalist', classe: 'form-label') . PHP_EOL .
        $bs->input('text', 'cidade', id: 'inputCidadesDatalist', placeholder: 'Digite para buscar cidade...', atributos: 'list="datalistCidadesExemplo"') . PHP_EOL .
        $bs->datalist('datalistCidadesExemplo', array('São Paulo', 'Rio de Janeiro', 'Belo Horizonte', 'Curitiba', 'Porto Alegre')),
        classe: 'mb-3'
    ) .
    $bs->div(
        $bs->label('Exemplos de Feedback de Validação:', classe: 'form-label') . PHP_EOL .
        $bs->input('text', 'campoValido', 'Valor válido preenchido', classe: 'form-control is-valid mb-1') . PHP_EOL .
        $bs->geraFeedback('Excelente! O campo foi validado com sucesso.', tipo: 'valid') . PHP_EOL .
        $bs->input('text', 'campoInvalido', 'Valor incorreto', classe: 'form-control is-invalid mt-2 mb-1') . PHP_EOL .
        $bs->geraFeedback('Por favor, corrija o formato do dado informado.', tipo: 'invalid', tooltip: false),
        classe: 'mb-3'
    ),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxForm1, classe: 'col-md-6') .
    $bs->div($boxForm2, classe: 'col-md-6'),
    classe: 'row'
);

$conteudoChecksRadios = $bs->div(
    $bs->div(
        $bs->h(6, 'Checkbox & Radio Simples', classe: 'small text-muted') .
        $bs->inputCheckbox('chkTermos', 'termos', '1', rotulo: 'Aceito os Termos', classe: 'mb-2') .
        $bs->inputRadio('radSim', 'resposta', 'sim', rotulo: 'Sim, concordo', checked: true) .
        $bs->inputRadio('radNao', 'resposta', 'nao', rotulo: 'Não concordo'),
        classe: 'col-6'
    ) .
    $bs->div(
        $bs->h(6, 'Radio Array', classe: 'small text-muted') .
        $bs->inputRadioArray('radPlano', 'plano', array('free' => 'Gratuito', 'pro' => 'Profissional', 'enterprise' => 'Empresarial'), padrao: 'pro'),
        classe: 'col-6'
    ),
    classe: 'row g-2 pt-2 border-top'
);

$boxForm3 = $bs->div(
    $bs->div(
        $bs->span('Switches, Checkboxes & Radios') . PHP_EOL .
        $bs->span('inputSwitch() inputSwitchArray() inputCheckbox() inputRadio() inputRadioArray()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->h(6, 'Switches Individuais e em Array', classe: 'small text-muted') . PHP_EOL .
        $bs->inputSwitch('swNotif', 'notif', '1', rotulo: 'Ativar Notificações por E-mail', ligado: true) . PHP_EOL .
        $bs->inputSwitch('swSms', 'sms', '1', rotulo: 'Ativar Alertas via SMS', ligado: false) . PHP_EOL .
        $bs->div(
            $bs->inputSwitchArray('swArray', array('optA' => 'Opção Automática A', 'optB' => 'Opção Automática B'), selecionados: array('optA')),
            classe: 'mt-2 pt-2 border-top'
        ),
        classe: 'mb-3'
    ) .
    $conteudoChecksRadios,
    classe: 'demo-box'
);

$boxForm4 = $bs->div(
    $bs->div(
        $bs->span('Seleções, Data Nativa & Botões de Input') . PHP_EOL .
        $bs->span('selectArray() select() option() optgroup() inputData() inputButton() inputSubmit() inputReset()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div($bs->selectArray('selCategoria', 'categoria', array('tec' => 'Tecnologia', 'sau' => 'Saúde', 'edu' => 'Educação'), padrao: 'tec', rotulo: 'Categoria Profissional (Simples)'), classe: 'mb-3') .
    $bs->div($bs->selectArray('selTags', 'tags[]', array('php' => 'PHP 8.x', 'bs5' => 'Bootstrap 5.3.8', 'css' => 'CSS3 Moderno', 'html' => 'HTML5'), padrao: array('php', 'bs5'), rotulo: 'Habilidades (Múltipla Seleção)', multiplo: true), classe: 'mb-3') .
    $bs->div(
        $bs->label('Seleção Direta ($bs->select):', for: 'selPlanoNativo', classe: 'form-label') .
        $bs->select('selPlanoNativo', array('starter' => 'Plano Starter', 'business' => 'Plano Business', 'enterprise' => 'Plano Enterprise'), selecionado: 'business'),
        classe: 'mb-3'
    ) .
    $bs->div(
        $bs->label('Seleção Agrupada ($bs->select com optgroup e option):', for: 'selRegioesOptgroup', classe: 'form-label') .
        $bs->select('selRegioesOptgroup',
            $bs->option('', 'Selecione uma região...') .
            $bs->optgroup('Região Sudeste', array('sp' => 'São Paulo', 'rj' => 'Rio de Janeiro')) .
            $bs->optgroup('Região Sul', array('pr' => 'Paraná', 'rs' => 'Rio Grande do Sul')),
            id: 'selRegioesOptgroup'
        ),
        classe: 'mb-3'
    ) .
    $bs->div($bs->inputData('dtNasc', 'nascimento', '1995-05-15', rotulo: 'Data de Nascimento (HTML5 Nativo)'), classe: 'mb-3') .
    $bs->div(
        $bs->inputButton('btnInp', 'Input Button', classe: 'primary', tamanho: 'sm') .
        $bs->inputSubmit('btnInpSub', 'Input Submit', classe: 'success', tamanho: 'sm') .
        $bs->inputReset('btnInpRes', 'Input Reset', classe: 'secondary', tamanho: 'sm'),
        classe: 'd-flex flex-wrap gap-2 pt-2 border-top'
    ),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxForm3, classe: 'col-md-6') .
    $bs->div($boxForm4, classe: 'col-md-6'),
    classe: 'row'
);

echo $bs->section(ob_get_clean(), id: 'sec-forms', classe: 'demo-section');

// ==============================================================
// SEÇÃO 4: FLOATING LABELS (RÓTULOS FLUTUANTES)
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('edit') . ' 4. Floating Labels (Bootstrap 5) ' . $bs->span('3 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Campos modernos onde o rótulo (label) flutua elegantemente para o topo durante a digitação e preenchimento.');

echo $bs->div(
    $bs->div(
        $bs->span('Inputs Flutuantes, Textarea Flutuante e Select Flutuante') . PHP_EOL .
        $bs->span('inputFloating() inputAreaFloating() selectFloating()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->div($bs->inputFloating('fltEmail', 'flt_email', 'Endereço de E-mail', valor: 'usuario@exemplo.com', tipo: 'email'), classe: 'col-md-4') .
        $bs->div($bs->inputFloating('fltSenha', 'flt_senha', 'Senha Segura', tipo: 'password', requerido: true), classe: 'col-md-4') .
        $bs->div($bs->selectFloating('fltPais', 'flt_pais', 'País de Origem', array('BR' => 'Brasil', 'PT' => 'Portugal', 'US' => 'Estados Unidos'), padrao: 'BR'), classe: 'col-md-4') .
        $bs->div($bs->inputAreaFloating('fltMsg', 'flt_msg', 'Digite seus comentários detalhados aqui...', texto: 'Excelente integração com a nova arquitetura do Bootstrap 5.3.8!', altura: '90px'), classe: 'col-12'),
        classe: 'row g-3'
    ),
    classe: 'demo-box'
);
echo $bs->section(ob_get_clean(), id: 'sec-floating', classe: 'demo-section');

// ==============================================================
// SEÇÃO 5: NAVEGAÇÃO, ABAS, BREADCRUMB & PAGINAÇÃO
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('flag') . ' 5. Navegação, Abas, Breadcrumbs & Paginação ' . $bs->span('7 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Componentes de navegação estruturada: breadcrumbs, list groups interativos, nav tabs/pills com painéis funcionais e sistemas completos de paginação.');

$caminhoBreadcrumb = array(
    array('linkurl' => '#inicio', 'linktxt' => 'Início'),
    array('linkurl' => '#sec-nav', 'linktxt' => 'Navegação'),
    array('linkurl' => '#', 'linktxt' => 'Exemplo Atual')
);
$itensNav = array(
    array('rotulo' => 'Visão Geral', 'ativo' => true, 'icone' => 'eye-open'),
    array('rotulo' => 'Recursos', 'badge' => 'Novo', 'badgeClasse' => 'text-bg-primary'),
    array('rotulo' => 'Configurações', 'icone' => 'wrench'),
    array('rotulo' => 'Desativado', 'desativado' => true)
);
$boxNav1 = $bs->div(
    $bs->div(
        $bs->span('Breadcrumbs & Nav Underline / Pills') . PHP_EOL .
        $bs->span('geraBreadcrumb() geraNav()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div($bs->geraBreadcrumb($caminhoBreadcrumb), classe: 'mb-3') .
    $bs->div(
        $bs->h(6, 'Estilo Moderno: Nav Underline (BS 5.3)', classe: 'small text-muted') . PHP_EOL .
        $bs->geraNav($itensNav, estilo: 'underline'),
        classe: 'mb-3'
    ) .
    $bs->div(
        $bs->h(6, 'Estilo: Nav Pills', classe: 'small text-muted') . PHP_EOL .
        $bs->geraNav(array(
            array('rotulo' => 'Pill Ativo', 'ativo' => true),
            array('rotulo' => 'Segundo Item'),
            array('rotulo' => 'Terceiro Item')
        ), estilo: 'pills')
    ),
    classe: 'demo-box'
);

$abasInterativas = array(
    array(
        'rotulo' => 'Aba Dados',
        'ativo' => true,
        'conteudo' => $bs->div($bs->h(6, 'Painel de Dados', classe: 'fw-bold') . $bs->par('Conteúdo dinâmico da primeira aba navegável carregado com sucesso.', classe: 'mb-0 small'), classe: 'p-3 border rounded bg-body-tertiary')
    ),
    array(
        'rotulo' => 'Aba Relatórios',
        'conteudo' => $bs->div($bs->h(6, 'Painel de Relatórios', classe: 'fw-bold') . $bs->par('Estatísticas, métricas e análises detalhadas do sistema.', classe: 'mb-0 small'), classe: 'p-3 border rounded bg-body-tertiary')
    ),
    array(
        'rotulo' => 'Aba Suporte',
        'conteudo' => $bs->div($bs->h(6, 'Central de Suporte', classe: 'fw-bold') . $bs->par('Canais de atendimento ao desenvolvedor e suporte técnico.', classe: 'mb-0 small'), classe: 'p-3 border rounded bg-body-tertiary')
    )
);
$boxNav2 = $bs->div(
    $bs->div(
        $bs->span('Abas Interativas com Conteúdo (NavTab)') . PHP_EOL .
        $bs->span('geraNavTab()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->geraNavTab($abasInterativas, id: 'demoTabInterativa', desvanecer: true),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxNav1, classe: 'col-md-6') .
    $bs->div($boxNav2, classe: 'col-md-6'),
    classe: 'row'
);

$itensListGroup = array(
    array('texto' => 'Item Principal Ativo', 'ativo' => true, 'badge' => '14', 'badgeClasse' => 'text-bg-light'),
    array('texto' => 'Item com Link Clicável', 'url' => '#sec-nav', 'badge' => 'Link', 'badgeClasse' => 'text-bg-info'),
    array('titulo' => 'Item Rico com Título', 'texto' => 'Descrição complementar detalhada do registro selecionado.'),
    array('texto' => 'Opção com Checkbox Selecionável', 'checkbox' => true, 'nomeCheck' => 'chkLG1', 'checado' => true),
    array('texto' => 'Item Desativado', 'desativado' => true)
);
$boxNav3 = $bs->div(
    $bs->div(
        $bs->span('List Groups Completos') . PHP_EOL .
        $bs->span('geraListGroup()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->geraListGroup($itensListGroup, numerada: false),
    classe: 'demo-box'
);

$paginasDemo = array(
    array('numero' => 1, 'url' => '#', 'atual' => false),
    array('numero' => 2, 'url' => '#', 'atual' => true),
    array('numero' => 3, 'url' => '#', 'atual' => false),
    array('numero' => 4, 'url' => '#', 'atual' => false),
    array('numero' => 5, 'url' => '#', 'atual' => false),
);
$boxNav4 = $bs->div(
    $bs->div(
        $bs->span('Sistemas de Paginação') . PHP_EOL .
        $bs->span('geraPaginacao() geraPaginacaoComHref() geraPaginacaoTapeDeck()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->h(6, '1. Paginação Padrão ($bs->geraPaginacao):', classe: 'small text-muted') .
    $bs->geraPaginacao($paginasDemo, simbolo: true, tamanho: 'sm') .
    $bs->h(6, '2. Paginação com Href Direto ($bs->geraPaginacaoComHref):', classe: 'small text-muted mt-3') .
    $bs->geraPaginacaoComHref($paginasDemo, simbolo: true, tamanho: 'sm') .
    $bs->h(6, '3. Paginação TapeDeck (Primeira / Última):', classe: 'small text-muted mt-3') .
    $bs->geraPaginacaoTapeDeck($paginasDemo, simbolo: true, tamanho: 'sm'),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxNav3, classe: 'col-md-6') .
    $bs->div($boxNav4, classe: 'col-md-6'),
    classe: 'row'
);

echo $bs->section(ob_get_clean(), id: 'sec-nav', classe: 'demo-section');

// ==============================================================
// SEÇÃO 6: CARDS, GRIDS & PAINÉIS
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('th') . ' 6. Cards, Grids & Painéis ' . $bs->span('5 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Organização visual através do sistema moderno de Cards do Bootstrap 5, Card Groups contínuos, Card Grids responsivas com altura alinhada (.h-100), painéis e caixas de destaque.');

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

echo $bs->div(
    $bs->div(
        $bs->span('Card Grid Responsiva (row-cols com nivelamento h-100)') . PHP_EOL .
        $bs->span('geraCard() divCardGrid()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->divCardGrid(array($card1, $card2, $card3), colunas: array('xs' => 1, 'md' => 3), gap: 3),
    classe: 'demo-box'
);

$cg1 = $bs->geraCard('Módulo Alpha', texto: 'Conectado ao grupo.', largura: '100%', h: 6);
$cg2 = $bs->geraCard('Módulo Beta', texto: 'Compartilha mesma linha.', largura: '100%', h: 6);
$cg3 = $bs->geraCard('Módulo Gamma', texto: 'Bordas integradas.', largura: '100%', h: 6);
$boxCards1 = $bs->div(
    $bs->div(
        $bs->span('Card Group Contínuo') . PHP_EOL .
        $bs->span('divCardGroup()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->divCardGroup(array($cg1, $cg2, $cg3)),
    classe: 'demo-box'
);

$boxCards2 = $bs->div(
    $bs->div(
        $bs->span('Painéis & Caixas de Destaque') . PHP_EOL .
        $bs->span('geraPainel() geraWell()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->geraPainel(
        conteudo: $bs->par('Este painel foi gerado através de ' . $bs->code('geraPainel()') . ', mapeado nativamente para a classe Card do Bootstrap 5.', classe: 'small mb-0'),
        classe: 'primary',
        cabecalho: 'Cabeçalho do Painel',
        rodape: 'Rodapé do Painel'
    ) .
    $bs->div($bs->geraWell('Exemplo de caixa estilizada gerada por ' . $bs->code('geraWell()') . ' (utilizando bg-body-tertiary do BS 5.3).'), classe: 'mt-2'),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxCards1, classe: 'col-md-6') .
    $bs->div($boxCards2, classe: 'col-md-6'),
    classe: 'row'
);

echo $bs->section(ob_get_clean(), id: 'sec-cards', classe: 'demo-section');

// ==============================================================
// SEÇÃO 7: OVERLAYS, MODAIS, DRAWER & NOTIFICAÇÕES
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('eye-open') . ' 7. Overlays, Modais, Offcanvas & Notificações ' . $bs->span('7 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Componentes dinâmicos de interface: janelas modais, gaveta lateral (Offcanvas), alertas dispensáveis, dropdowns independentes, diálogos nativos e notificações Toast.');

$boxOverlay1 = $bs->div(
    $bs->div(
        $bs->span('Alertas Contextuais') . PHP_EOL .
        $bs->span('geraAlerta()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->geraAlerta('success', 'Operação Concluída!', 'O registro foi salvo no banco de dados com êxito.', dispensar: true, linktxt: 'Ver lista', linkurl: '#') .
    $bs->geraAlerta('warning', 'Atenção Necessária:', 'Sua chave de API expirará nos próximos 5 dias úteis.', dispensar: true) .
    $bs->geraAlerta('danger', 'Erro Detectado:', 'Não foi possível estabelecer conexão com o servidor remoto.', dispensar: false),
    classe: 'demo-box'
);

$itensDropdown = array(
    array('tipo' => 'cabecalho', 'nome' => 'Ações do Sistema'),
    array('nome' => 'Editar Dados', 'icone' => 'edit', 'url' => '#'),
    array('nome' => 'Baixar Cópia', 'icone' => 'save', 'url' => '#'),
    '-',
    array('nome' => 'Excluir Item', 'icone' => 'erase', 'url' => '#', 'desativado' => true)
);
$boxOverlay2 = $bs->div(
    $bs->div(
        $bs->span('Dropdowns Independentes & Dialog') . PHP_EOL .
        $bs->span('geraDropdown() dialog()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->geraDropdown('Ações Rápidas', $itensDropdown, classe: 'primary') .
        $bs->geraDropdown(array('rotulo' => 'Salvar Registro', 'url' => '#'), $itensDropdown, classe: 'success', split: true) .
        $bs->geraDropdown('Tema Dark', $itensDropdown, classe: 'dark', escuro: true),
        classe: 'd-flex flex-wrap gap-2 mb-3'
    ) .
    $bs->div(
        $bs->h(6, 'Gatilhos dos Componentes Dinâmicos:', classe: 'small text-muted mb-2') . PHP_EOL .
        $bs->div(
            $bs->button(
                $bs->obtemGlyphicon('eye-open') . ' Abrir Modal',
                tipo: 'button',
                classe: 'btn btn-primary btn-sm',
                atributos: 'data-bs-toggle="modal" data-bs-target="#modalExemplo"'
            ) . PHP_EOL .
            $bs->button(
                $bs->obtemGlyphicon('new-window') . ' Abrir Dialog Nativo',
                tipo: 'button',
                classe: 'btn btn-outline-primary btn-sm',
                atributos: 'onclick="document.getElementById(\'dialogExemplo\').showModal()"'
            ) . PHP_EOL .
            $bs->buttonOffcanvas('offcanvasDemo', 'Abrir Gaveta (Offcanvas)', classe: 'info', tamanho: 'sm') . PHP_EOL .
            $bs->buttonToast('toastDemo', 'Exibir Notificação Toast', classe: 'success', tamanho: 'sm'),
            classe: 'd-flex flex-wrap gap-2'
        ),
        classe: 'p-3 border rounded bg-body-tertiary'
    ),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxOverlay1, classe: 'col-md-6') .
    $bs->div($boxOverlay2, classe: 'col-md-6'),
    classe: 'row'
);

// Definição da Modal (geraModal)
echo $bs->geraModal(
    id: 'modalExemplo',
    classe: '',
    tamanho: 'md',
    titulo: 'Confirmação de Procedimento',
    corpo: $bs->par('Esta janela modal é gerada pelo método ' . $bs->code('geraModal()') . ' com estrutura 100% nativa do Bootstrap 5.3.8, incluindo botão de fechar moderno e controles de acessibilidade.'),
    rodape: $bs->buttonButton('btnFechar', '0', 'Fechar', classe: 'secondary', modaldis: true) .
            $bs->buttonButton('btnSalvar', '1', 'Salvar Alterações', classe: 'primary'),
    script: ''
);

// Definição do Dialog Nativo HTML5 (dialog)
echo $bs->dialog(
    $bs->div(
        $bs->h(5, 'Caixa de Diálogo Nativa ($bs->dialog)', classe: 'modal-title mb-2') .
        $bs->par('Este elemento ' . $bs->code('&lt;dialog&gt;') . ' utiliza o método JavaScript nativo .showModal() com backdrop nativo do navegador e classes de modal do Bootstrap.', classe: 'small text-muted mb-3') .
        $bs->button('Fechar Diálogo', tipo: 'button', classe: 'btn btn-sm btn-secondary', atributos: 'onclick="document.getElementById(\'dialogExemplo\').close()"'),
        classe: 'p-3'
    ),
    id: 'dialogExemplo',
    classe: 'border rounded-3 shadow p-0'
);

// Definição da Offcanvas (geraOffcanvas)
echo $bs->geraOffcanvas(
    id: 'offcanvasDemo',
    titulo: 'Menu Lateral (Offcanvas)',
    corpo: $bs->par('A gaveta Offcanvas é ideal para navegações secundárias, filtros laterais em e-commerces e painéis de configuração rápida.') .
           $bs->geraNav(array(
               array('rotulo' => 'Meu Perfil', 'icone' => 'eye-open'),
               array('rotulo' => 'Segurança & Chaves', 'icone' => 'wrench'),
               array('rotulo' => 'Notificações', 'icone' => 'flag')
           ), vertical: true),
    posicao: 'end'
);

// Definição do Toast e Toast Container (geraToast, divToastContainer)
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
echo $bs->section(ob_get_clean(), id: 'sec-overlays', classe: 'demo-section');

// ==============================================================
// SEÇÃO 8: LOADERS, SKELETONS & INDICADORES
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('refresh') . ' 8. Loaders, Placeholders (Skeletons) & Indicadores ' . $bs->span('10 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Barras de progresso animadas, spinners modernos de espera, skeletons (placeholders) para efeito de pré-carregamento e badges contextuais.');

$boxLoaders1 = $bs->div(
    $bs->div(
        $bs->span('Barras de Progresso & Spinners') . PHP_EOL .
        $bs->span('geraProgressBar() progress() meter() geraSpinner()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->label('Progresso Padrão (65%):', classe: 'form-label small text-muted') . PHP_EOL .
        $bs->geraProgressBar(65, legenda: '65% Completo', tema: 'primary'),
        classe: 'mb-3'
    ) .
    $bs->div(
        $bs->label('Barra de Progresso Nativa HTML5 ($bs->progress):', classe: 'form-label small text-muted') . PHP_EOL .
        $bs->progress(70, 100, classe: 'w-100 mb-1') . PHP_EOL .
        $bs->label('Medidor Escalar Nativo HTML5 ($bs->meter):', classe: 'form-label small text-muted mt-2') . PHP_EOL .
        $bs->meter(60, 0, 100, baixo: 25, alto: 75, otimo: 80, classe: 'w-100'),
        classe: 'mb-3'
    ) .
    $bs->div(
        $bs->label('Progresso Listrado (85%):', classe: 'form-label small text-muted') . PHP_EOL .
        $bs->geraProgressBar(85, legenda: '85% Listrado', tema: 'success', listrado: true),
        classe: 'mb-3'
    ) .
    $bs->div(
        $bs->span('Spinners:', classe: 'small text-muted') .
        $bs->geraSpinner(tipo: 'border', tema: 'primary') .
        $bs->geraSpinner(tipo: 'border', tema: 'success', tamanho: 'sm') .
        $bs->geraSpinner(tipo: 'grow', tema: 'warning') .
        $bs->geraSpinner(tipo: 'grow', tema: 'danger', tamanho: 'sm'),
        classe: 'd-flex flex-wrap align-items-center gap-3 pt-2 border-top'
    ),
    classe: 'demo-box'
);

$conteudoSkeletons = $bs->div(
    $bs->div(
        $bs->h(6, 'Linhas com Efeito Glow:', classe: 'small text-muted') .
        $bs->geraPlaceholderLinhas(array(12, 8, 10, 6), animacao: 'glow', tema: 'secondary') .
        $bs->div(
            $bs->divPlaceholder(
                $bs->geraPlaceholder(colunas: 5, tema: 'primary') . ' ' .
                $bs->geraPlaceholder(colunas: 3, tema: 'info'),
                animacao: 'wave'
            ),
            classe: 'mt-2'
        ),
        classe: 'col-6'
    ) .
    $bs->div(
        $bs->h(6, 'Card Placeholder:', classe: 'small text-muted') .
        $bs->geraCardPlaceholder(largura: '100%', imgAltura: '80px', animacao: 'glow'),
        classe: 'col-6'
    ),
    classe: 'row g-3'
);

$boxLoaders2 = $bs->div(
    $bs->div(
        $bs->span('Placeholders (Skeletons para Carregamento)') . PHP_EOL .
        $bs->span('geraPlaceholder() divPlaceholder() geraPlaceholderLinhas() geraCardPlaceholder()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $conteudoSkeletons,
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxLoaders1, classe: 'col-md-6') .
    $bs->div($boxLoaders2, classe: 'col-md-6'),
    classe: 'row'
);

echo $bs->div(
    $bs->div(
        $bs->span('Badges Contextuais & Ícones Mapeados') . PHP_EOL .
        $bs->span('obtemBadge() obtemGlyphicon()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->obtemBadge('Primary', 'text-bg-primary') .
        $bs->obtemBadge('Secondary', 'text-bg-secondary') .
        $bs->obtemBadge('Success', 'text-bg-success') .
        $bs->obtemBadge('Danger', 'text-bg-danger') .
        $bs->obtemBadge('Warning', 'text-bg-warning') .
        $bs->obtemBadge('Info', 'text-bg-info') .
        $bs->obtemBadge('Dark', 'text-bg-dark') .
        $bs->obtemBadge('Pill Arredondado', 'text-bg-primary rounded-pill'),
        classe: 'd-flex flex-wrap gap-2 align-items-center'
    ) .
    $bs->div(
        $bs->span('Exemplos de ícones mapeados para Bootstrap Icons:') .
        $bs->span($bs->obtemGlyphicon('star') . ' star') .
        $bs->span($bs->obtemGlyphicon('save') . ' save') .
        $bs->span($bs->obtemGlyphicon('edit') . ' edit') .
        $bs->span($bs->obtemGlyphicon('erase') . ' erase') .
        $bs->span($bs->obtemGlyphicon('refresh') . ' refresh') .
        $bs->span($bs->obtemGlyphicon('wrench') . ' wrench'),
        classe: 'mt-3 pt-2 border-top d-flex flex-wrap gap-3 align-items-center small text-muted'
    ),
    classe: 'demo-box'
);
echo $bs->section(ob_get_clean(), id: 'sec-loaders', classe: 'demo-section');

// ==============================================================
// SEÇÃO 9: MÍDIA, IMAGENS, FIGURES & VÍDEO EMBED
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('file') . ' 9. Mídia, Imagens, Figures & Vídeo Embed ' . $bs->span('16 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Imagens responsivas (.img-fluid), miniaturas (.img-thumbnail), figures com legendas alinhadas, carrossel de imagens e incorporação responsiva de vídeos.');

$boxMidia1 = $bs->div(
    $bs->div(
        $bs->span('Imagens Estilizadas, Gráficos & Figures') . PHP_EOL .
        $bs->span('geraImagem() geraFigure() img() figure() picture() source() svg() canvas()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->div(
            $bs->geraImagem('https://picsum.photos/120/120?random=1', 'Imagem Thumbnail', responsiva: false, miniatura: true) .
            $bs->small('Thumbnail', classe: 'd-block text-muted mt-1'),
            classe: 'text-center'
        ) .
        $bs->div(
            $bs->geraImagem('https://picsum.photos/120/120?random=2', 'Imagem Círculo', responsiva: false, formato: 'circle') .
            $bs->small('Rounded Circle', classe: 'd-block text-muted mt-1'),
            classe: 'text-center'
        ),
        classe: 'd-flex flex-wrap gap-3 align-items-center mb-3'
    ) .
    $bs->div(
        $bs->geraFigure('https://picsum.photos/400/140?random=3', 'Legenda informativa da figura alinhada à direita.', alt: 'Figura Exemplo', alinhamentoLegenda: 'end'),
        classe: 'pt-2 border-top'
    ) .
    $bs->div(
        $bs->figure(
            $bs->img('https://picsum.photos/400/120?random=4', 'Exemplo de Imagem', classe: 'figure-img img-fluid rounded') .
            $bs->figcaption('Legenda de figura nativa renderizada com $bs->figure(), $bs->img() e $bs->figcaption()', classe: 'figure-caption text-end')
        ),
        classe: 'pt-2 border-top'
    ) .
    $bs->div(
        $bs->h(6, 'Imagem com Art Direction ($bs->picture e source):', classe: 'small text-muted') .
        $bs->picture(
            $bs->source(media: '(min-width: 768px)', srcset: 'https://picsum.photos/400/100?random=5') .
            $bs->img('https://picsum.photos/200/100?random=5', 'Imagem Responsiva Picture', classe: 'img-fluid rounded border')
        ),
        classe: 'pt-2 border-top'
    ) .
    $bs->div(
        $bs->h(6, 'Gráfico Vetorial Inline ($bs->svg):', classe: 'small text-muted') .
        $bs->div(
            $bs->svg('<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>', 24, 24, '0 0 16 16', classe: 'bi text-primary', atributos: 'fill="currentColor"') . ' ' .
            $bs->svg('<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>', 24, 24, '0 0 16 16', classe: 'bi text-success', atributos: 'fill="currentColor"') . ' ' .
            $bs->span('Ícones SVG inline gerados nativamente com viewBox e fill="currentColor"', classe: 'small text-muted'),
            classe: 'd-flex align-items-center gap-2'
        ) .
        $bs->h(6, 'Superfície Gráfica HTML5 ($bs->canvas):', classe: 'small text-muted mt-3') .
        $bs->canvas('demoCanvasChart', 300, 60, classe: 'w-100 border rounded bg-body-tertiary', conteudo: 'Seu navegador não suporta canvas.'),
        classe: 'pt-2 border-top'
    ),
    classe: 'demo-box'
);

$urlOriginal = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
$urlConvertida = $bs->converteUrlEmbed($urlOriginal);
$vttLegenda = 'data:text/vtt;charset=utf-8,' . rawurlencode("WEBVTT\n\n00:00:00.000 --> 00:00:05.000\nDemonstração de legendas com \$bs->track()\n\n00:00:05.500 --> 00:00:10.000\nPHP Bootstrap Class v2.0");

$boxMidia2 = $bs->div(
    $bs->div(
        $bs->span('Vídeos e Embeds com Proporção (Ratio)') . PHP_EOL .
        $bs->span('geraRatioEmbed() geraVideoEmbed() converteUrlEmbed() iframe() video() audio() track()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->par('URL convertida automaticamente por ' . $bs->code('converteUrlEmbed()') . ':' . $bs->br() . $bs->code(htmlspecialchars($urlConvertida)), classe: 'small text-muted mb-2') .
    $bs->geraVideoEmbed($urlOriginal, proporcao: '16x9', titulo: 'Demonstração de Vídeo') .
    $bs->div(
        $bs->h(6, 'Embed Genérico com Ratio ($bs->geraRatioEmbed):', classe: 'small text-muted') . PHP_EOL .
        $bs->geraRatioEmbed($bs->div('Conteúdo Incorporado Ratio 21x9', classe: 'd-flex align-items-center justify-content-center bg-dark text-white fw-bold'), proporcao: '21x9'),
        classe: 'mt-3'
    ) .
    $bs->div(
        $bs->h(6, 'Iframe em Proporção Ratio ($bs->iframe):', classe: 'small text-muted') .
        $bs->geraRatioEmbed(
            $bs->iframe('https://example.com', 'Exemplo de Iframe Responsivo'),
            proporcao: '16x9'
        ) .
        $bs->h(6, 'Players Nativos de Vídeo e Áudio com Legenda ($bs->video, audio e track):', classe: 'small text-muted mt-3') .
        $bs->video('https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4', poster: 'https://picsum.photos/400/225?random=6', classe: 'w-100 rounded mb-2', conteudo: $bs->track($vttLegenda, 'subtitles', 'pt-BR', 'Português', padrao: true)) .
        $bs->audio('https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3', classe: 'w-100'),
        classe: 'mt-3 pt-2 border-top'
    ),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxMidia1, classe: 'col-md-6') .
    $bs->div($boxMidia2, classe: 'col-md-6'),
    classe: 'row'
);

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
echo $bs->div(
    $bs->div(
        $bs->span('Carrossel de Slides') . PHP_EOL .
        $bs->span('geraCarrossel()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->geraCarrossel('demoCarrosselPrincipal', $slidesCarrossel, indicador: true, controle: true, intervalo: 5000),
    classe: 'demo-box'
);
echo $bs->section(ob_get_clean(), id: 'sec-midia', classe: 'demo-section');

// ==============================================================
// SEÇÃO 10: CONTEÚDO, DADOS & TABELAS
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('calendar') . ' 10. Conteúdo, Dados & Tabelas ' . $bs->span('21 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Estruturação de artigos editoriais, painéis sanfonados colapsáveis (Accordion) e tabelas responsivas completas com zebra e hover.');

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

$boxConteudo1 = $bs->div(
    $bs->div(
        $bs->span('Accordion Colapsável & Revelação Nativa') . PHP_EOL .
        $bs->span('geraAccordion() geraAccordionPanel() details() summary()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->geraAccordion($conteudoAccordion, id: 'accordionDemoPrincipal') .
    $bs->div(
        $bs->h(6, 'Accordion Panel ($bs->geraAccordionPanel):', classe: 'small text-muted') .
        $bs->geraAccordionPanel(array(array('titulo' => 'Painel Sanfonado Integrado', 'texto' => 'Demonstração de chamada ao método geraAccordionPanel().', 'colapso' => true)), id: 'accPanelDemo'),
        classe: 'mt-3 pt-2 border-top'
    ) .
    $bs->div(
        $bs->h(6, 'Revelação Nativa sem JavaScript ($bs->details e summary):', classe: 'small text-muted') .
        $bs->details(
            $bs->summary('Clique para expandir ($bs->summary)', classe: 'fw-bold text-primary p-2 border rounded bg-body-tertiary') .
            $bs->par('Conteúdo revelado nativamente pelo navegador sem dependência de scripts JavaScript.', classe: 'small text-muted p-2 mb-0'),
            classe: 'mt-2 border rounded p-1'
        ),
        classe: 'mt-3 pt-2 border-top'
    ),
    classe: 'demo-box'
);

$boxConteudo2 = $bs->div(
    $bs->div(
        $bs->span('Artigo / Blog Post') . PHP_EOL .
        $bs->span('geraBlogPost() article() time()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->geraBlogPost(
        titulo: 'Modernização Completa para Bootstrap 5.3.8',
        meta: $bs->time('24 de Outubro de 2026', '2026-10-24', classe: 'text-muted small') . ' por ' . $bs->a('#', 'Equipe de Arquitetura'),
        conteudo: $bs->par('A biblioteca adota a especificação ' . $bs->code('data-bs-*') . ' nativa do Bootstrap 5.3.8, suporte a color modes (Dark/Light/Auto) e empacotamento completo em um único arquivo autônomo.')
    ) .
    $bs->div(
        $bs->h(6, 'Artigo Semântico Nativo ($bs->article):', classe: 'small text-muted') .
        $bs->article(
            $bs->h(5, 'Artigo Editorial com $bs->article()', classe: 'h6 text-primary mb-1') .
            $bs->par('Post editorial publicado em ' . $bs->time('24 de Outubro de 2026', '2026-10-24', classe: 'fw-bold') . ' demonstrando marcação semântica com time e article.', classe: 'small text-muted mb-0'),
            classe: 'p-2 border rounded bg-body-tertiary mt-2'
        ),
        classe: 'pt-2 border-top'
    ),
    classe: 'demo-box'
);

echo $bs->div(
    $bs->div($boxConteudo1, classe: 'col-md-6') .
    $bs->div($boxConteudo2, classe: 'col-md-6'),
    classe: 'row'
);

$dadosTabela = array(
    array('ID', 'Nome do Módulo', 'Versão', 'Status', 'Linguagem'),
    array('1', 'Offcanvas & Drawers', '5.3.8', $bs->span('Concluído', classe: 'badge text-bg-success'), 'PHP 8.x'),
    array('2', 'Theme Toggle Dark/Light', '5.3.8', $bs->span('Concluído', classe: 'badge text-bg-success'), 'PHP 8.x'),
    array('3', 'Floating Labels Form', '5.3.8', $bs->span('Concluído', classe: 'badge text-bg-success'), 'PHP 8.x'),
    array('4', 'Ratio Video Embeds', '5.3.8', $bs->span('Concluído', classe: 'badge text-bg-success'), 'PHP 8.x'),
);

$cabecalhoAtomo = $bs->thead(
    $bs->tr(
        $bs->th('#', 'col') .
        $bs->th('Componente', 'col') .
        $bs->th('Tags HTML5 Envolvidas', 'col') .
        $bs->th('Status', 'col', classe: 'text-end')
    ),
    classe: 'table-dark'
);
$corpoAtomo = $bs->tbody(
    $bs->tr(
        $bs->th('1', 'row') .
        $bs->td('Tabelas Atômicas') .
        $bs->td($bs->code('table, thead, tbody, tfoot, tr, th, td, caption')) .
        $bs->td($bs->obtemBadge('100% Nativo', 'text-bg-primary'), classe: 'text-end')
    ) .
    $bs->tr(
        $bs->th('2', 'row') .
        $bs->td('Colunas de Tabela') .
        $bs->td($bs->code('colgroup, col')) .
        $bs->td($bs->obtemBadge('100% Nativo', 'text-bg-info'), classe: 'text-end')
    ) .
    $bs->tr(
        $bs->th('3', 'row') .
        $bs->td('Listas de Descrição') .
        $bs->td($bs->code('dl, dt, dd')) .
        $bs->td($bs->obtemBadge('Grid BS5', 'text-bg-success'), classe: 'text-end'),
        classe: 'table-success'
    )
);
$rodapeAtomo = $bs->tfoot(
    $bs->tr($bs->td('Total de módulos de dados estruturados demonstrados: 3', colspan: 4, classe: 'text-muted small'))
);

echo $bs->div(
    $bs->div(
        $bs->span('Tabelas de Dados (Macro e Métodos Atômicos)') . PHP_EOL .
        $bs->span('geraTabela() table() thead() tbody() tfoot() tr() th() td() caption() colgroup() col()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->geraTabela(
        id: 'tabelaDemoPrincipal',
        conteudo: $dadosTabela,
        zebra: true,
        borda: true,
        hover: true,
        responsiva: true
    ) .
    $bs->div(
        $bs->h(6, 'Tabela Montada com Métodos Atômicos ($bs->table, thead, tbody, tfoot, tr, th, td, caption, colgroup, col):', classe: 'small text-muted') .
        $bs->table(
            $bs->caption('Resumo dos Componentes Atômicos da Biblioteca', classe: 'caption-top small text-muted') .
            $bs->colgroup(array(
                $bs->col(classe: 'table-active'),
                $bs->col(classe: 'w-25'),
                $bs->col(),
                $bs->col(classe: 'w-25 text-end')
            )) .
            $cabecalhoAtomo .
            $corpoAtomo .
            $rodapeAtomo,
            classe: 'table table-hover table-bordered table-sm'
        ),
        classe: 'mt-3 pt-2 border-top'
    ),
    classe: 'demo-box'
);
echo $bs->section(ob_get_clean(), id: 'sec-conteudo', classe: 'demo-section');

// ==============================================================
// SEÇÃO 11: HELPERS DE SCRIPT, INJEÇÃO & ASSETS
// ==============================================================
ob_start();
echo $bs->h(2, $bs->obtemGlyphicon('wrench') . ' 11. Helpers de Scripts, Injeção & Assets ' . $bs->span('9 métodos', classe: 'badge text-bg-secondary fs-7'), classe: 'h3 mb-3 d-flex align-items-center gap-2');
echo $bs->par('Helpers para injeção de atributos tooltip/popover em qualquer tag HTML pura, scripts oficiais de inicialização Vanilla JS e injeção de assets CSS/JS.');

$linkSimples = $bs->a('#', 'Link Puro com Tooltip', classe: 'btn btn-outline-info');
$spanSimples = $bs->button('Botão com Popover Injetado', tipo: 'button', classe: 'btn btn-outline-warning');
echo $bs->div(
    $bs->div(
        $bs->span('Injeção de Tooltip e Popover em HTML Arbitrário') . PHP_EOL .
        $bs->span('withTooltip() withPopover()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div(
        $bs->withTooltip($linkSimples, 'Tooltip injetado via $bs->withTooltip()!', posicao: 'top') .
        $bs->withPopover($spanSimples, 'Texto explicativo anexado dinamicamente com $bs->withPopover()', titulo: 'Informação Adicional'),
        classe: 'd-flex flex-wrap gap-3 align-items-center mb-3'
    ) .
    $bs->par('Estes métodos permitem enriquecer qualquer elemento HTML com os atributos ' . $bs->code('data-bs-*') . ' sem necessidade de recriar as tags.', classe: 'small text-muted mb-0'),
    classe: 'demo-box'
);

// Chamada demonstrativa aos geradores de scripts específicos
$scriptIndivTooltips = $bs->scriptTooltips('#tooltips-especificos');
$scriptIndivPopovers = $bs->scriptPopovers('#popovers-especificos');

$colScripts1 = $bs->div(
    $bs->h(6, 'Carregamento de Assets CSS e JS', classe: 'small text-muted') .
    $bs->pre(
        $bs->code('// Inclusão no &lt;head&gt; (padrão oficial CDN jsDelivr)' . PHP_EOL .
        'echo $bs-&gt;tagCss();' . PHP_EOL . PHP_EOL .
        '// Inclusão antes do fechamento de &lt;/body&gt; (padrão oficial CDN jsDelivr)' . PHP_EOL .
        'echo $bs-&gt;tagJs();'),
        classe: 'p-2 border rounded bg-body-tertiary small'
    ),
    classe: 'col-md-6'
);

$colScripts2 = $bs->div(
    $bs->h(6, 'Inicialização Vanilla JS', classe: 'small text-muted') .
    $bs->pre(
        $bs->code('// Inicialização unificada de Tooltips, Popovers e Toasts' . PHP_EOL .
        'echo $bs-&gt;scriptInicializaTodos();' . PHP_EOL . PHP_EOL .
        '// Ou scripts individuais específicos' . PHP_EOL .
        'echo $bs-&gt;scriptTooltips(\'#seletor\');' . PHP_EOL .
        'echo $bs-&gt;scriptPopovers(\'#seletor\');'),
        classe: 'p-2 border rounded bg-body-tertiary small'
    ),
    classe: 'col-md-6'
);

echo $bs->div(
    $bs->div(
        $bs->span('Scripts de Inicialização & Injeção de Assets') . PHP_EOL .
        $bs->span('tagCss() tagJs() scriptTooltips() scriptPopovers() scriptThemeToggle() scriptInicializaTodos()', classe: 'badge bg-light text-dark method-badge'),
        classe: 'demo-box-title'
    ) .
    $bs->div($colScripts1 . $colScripts2, classe: 'row g-3'),
    classe: 'demo-box'
);
echo $bs->section(ob_get_clean(), id: 'sec-scripts', classe: 'demo-section');

// Fechamento do Conteúdo Principal
$conteudoPrincipal = $bs->div(ob_get_clean(), classe: 'col-lg-10');

// main: Contêiner Estrutural Principal
echo $bs->main(
    $bs->div($sidebarMenu . $conteudoPrincipal, classe: 'row'),
    id: 'inicio',
    classe: 'container-fluid px-lg-5'
);

// geraFooter: Rodapé Oficial da Aplicação
$conteudoRodape = $bs->div(
    $bs->span('© ' . date('Y') . ' PHP Bootstrap Class. Desenvolvido para Bootstrap 5.3.8 e PHP 8.x.', classe: 'text-body-secondary small') .
    $bs->div(
        $bs->a('#inicio', 'Voltar ao Topo ↑', classe: 'text-body-secondary text-decoration-none small') .
        $bs->a('https://github.com/danmadeira/php-bootstrap-class', 'GitHub', classe: 'text-body-secondary text-decoration-none small'),
        classe: 'd-flex gap-3'
    ),
    classe: 'd-flex flex-wrap justify-content-between align-items-center'
);
echo $bs->geraFooter($conteudoRodape, id: 'rodape-demo');

// tagJs: Script Bundle do Bootstrap 5.3.8 via CDN jsDelivr (padrão)
echo $bs->tagJs();

// scriptInicializaTodos: Ativação dos Tooltips, Popovers e Toasts nativos do Bootstrap 5
echo $bs->scriptInicializaTodos();

// Fechamento do corpo e do documento HTML
$htmlBodyFim = '</body>' . PHP_EOL . '</html>';
echo $htmlBodyFim . PHP_EOL;
