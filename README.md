# PHP Bootstrap Class

[![Bootstrap Version](https://img.shields.io/badge/Bootstrap-5.3.8-7952b3.svg?style=flat-square&logo=bootstrap&logoColor=white)](https://getbootstrap.com/docs/5.3/)
[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-777bb4.svg?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![Bootstrap Icons](https://img.shields.io/badge/Bootstrap_Icons-1.11.3-blue.svg?style=flat-square)](https://icons.getbootstrap.com/)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=flat-square)](LICENSE)

Uma biblioteca PHP moderna, autônoma e de alto desempenho projetada para gerar marcação HTML semântica, elegante e em estrita conformidade com o **Bootstrap 5.3.8**.

Disponível no GitHub: **[https://github.com/danmadeira/php-bootstrap-class](https://github.com/danmadeira/php-bootstrap-class)**

---

## 🌟 Visão Geral

### O que é o Bootstrap?

O **Bootstrap** é o framework front-end de código aberto mais popular e amplamente utilizado no mundo para o desenvolvimento de aplicações web modernas, responsivas e orientadas a dispositivos móveis (*mobile-first*). Criado para padronizar e acelerar a criação de interfaces de usuário, ele oferece um conjunto completo e modular composto por:

* **Sistema de Grade Responsivo (Grid System):** Estrutura de 12 colunas baseada em Flexbox e CSS Grid para posicionamento fluido e adaptável a qualquer resolução de tela (de smartphones a monitores ultrawide).
* **Componentes de Interface Ricos:** Coleção completa de elementos prontos para uso, incluindo barras de navegação (*navbars*), menus suspensos (*dropdowns*), caixas de diálogo (*modals*), abas (*tabs*), painéis sanfonados (*accordions*), gavetas deslizantes (*offcanvas*), notificações flutuantes (*toasts*), cards e carrosséis.
* **Formulários e Tipografia Acessíveis:** Estilização padronizada para campos de entrada, seletores flutuantes (*floating labels*), switches, checkboxes e validação visual de formulários, em estrita conformidade com os padrões W3C WAI-ARIA.
* **Modos de Cor Nativos (Color Modes):** Suporte nativo à alternância dinâmica entre tema claro (*light*), tema escuro (*dark*) e automático baseado nas preferências do sistema operacional via atributos `data-bs-theme`.
* **Classes Utilitárias Avançadas:** Amplo conjunto de utilitários para controle fino de espaçamento (*margin/padding*), flexbox, alinhamentos, bordas, sombras e opacidade.

### O que é o PHP Bootstrap Class?

O **PHP Bootstrap Class** encapsula toda a complexidade da estrutura HTML e dos atributos do Bootstrap em chamadas de métodos PHP intuitivas, limpas e elegantes. A classe é modernizada para o **Bootstrap 5.3.8**, adotando as práticas mais recentes da web moderna:

* **Zero Dependências Externas em PHP:** Uma classe única, independente e autocontida (`Bootstrap.class.php`) sob o namespace `DMetibr`.
* **Zero jQuery:** Desenvolvido nativamente para a arquitetura do Bootstrap 5, utilizando atributos `data-bs-*` e JavaScript Vanilla.
* **Suporte Nativo a Color Modes:** Alternador de temas claro, escuro e automático (`light`, `dark`, `auto`) via atributo `data-bs-theme`.
* **CDN jsDelivr por Padrão:** Carregamento instantâneo dos assets oficiais de CSS, JS e Bootstrap Icons sem exigir arquivos locais.
* **Tipagem e Compatibilidade:** Desenvolvido e testado sob **PHP 8.0, 8.1, 8.2 e 8.3+** com suporte a argumentos nomeados (*named arguments*).

---

## 🚀 Instalação Rápida

Clone o repositório ou copie o arquivo [`Bootstrap.class.php`](Bootstrap.class.php) para o seu projeto:

```bash
git clone https://github.com/danmadeira/php-bootstrap-class.git
```

No seu script PHP:

```php
require_once __DIR__ . '/Bootstrap.class.php';

$bs = new \DMetibr\Bootstrap();
```

---

## 🖥️ Arquivo de Demonstração Interativo (`demo.php`)

O repositório inclui o arquivo **[`demo.php`](demo.php)**, um showroom interativo completo que renderiza visualmente **todos os 179 métodos públicos** da classe, organizados em 11 seções navegáveis com alternador dinâmico de tema, janelas modais, offcanvas, notificações toast e componentes em tempo real.

Para executar o showroom localmente:

```bash
php -S localhost:8000
```

Abra em seu navegador: `http://localhost:8000/demo.php`

---

## 💡 Exemplos Breves de Uso

### 1. Injeção Rápida de Assets (CSS e JS)

Por padrão, carrega os arquivos minificados oficiais do Bootstrap 5.3.8 e Bootstrap Icons via CDN jsDelivr:

```php
<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <title>Minha Aplicação</title>
    <!-- Injeta CSS do Bootstrap 5.3.8 e Bootstrap Icons -->
    <?= $bs->tagCss() ?>
    <!-- Script de prevenção de tela branca ao carregar temas -->
    <?= $bs->scriptThemeToggle() ?>
</head>
<body>
    <!-- Conteúdo da Aplicação -->

    <!-- Injeta Script Bundle oficial do Bootstrap 5.3.8 -->
    <?= $bs->tagJs() ?>
    <!-- Inicializa automaticamente Tooltips, Popovers e Toasts -->
    <?= $bs->scriptInicializaTodos() ?>
</body>
</html>
```

---

### 2. Layout, Containers e Stacks Flexbox

```php
// Pilha Vertical (VStack) com espaçamento
echo $bs->divVStack(
    '<div class="p-2 border rounded">Painel 1</div>' .
    '<div class="p-2 border rounded">Painel 2</div>',
    gap: 2
);

// Pilha Horizontal (HStack) com separador vertical (VR)
echo $bs->divHStack(
    '<span>Esquerda</span>' .
    $bs->divVr() .
    '<span class="ms-auto">Direita</span>',
    gap: 3
);
```

---

### 3. Formulários Modernos e Floating Labels

```php
// Floating Label de Texto
echo $bs->inputFloating('txtEmail', 'email', 'Endereço de E-mail', tipo: 'email', requerido: true);

// Floating Label de Seleção
echo $bs->selectFloating('selPais', 'pais', 'Selecione o País', [
    'BR' => 'Brasil',
    'PT' => 'Portugal',
    'US' => 'Estados Unidos'
], padrao: 'BR');

// Switch (Toggle liga/desliga)
echo $bs->inputSwitch('swDark', 'notificacoes', rotulo: 'Receber Alertas por E-mail', ligado: true);

// Slider com Badge Dinâmico
echo $bs->inputRange('rngVolume', 'volume', valor: 80, minimo: 0, maximo: 100, rotulo: 'Volume', exibeValor: true);
```

---

### 4. Cards e Card Grids Responsivas

```php
$card1 = $bs->geraCard(
    titulo: 'Plano Básico',
    subtitulo: 'R$ 29/mês',
    texto: 'Ideal para profissionais autônomos.',
    botaolink1: $bs->buttonlink('#', 'Assinar', classe: 'primary', tamanho: 'sm')
);

$card2 = $bs->geraCard(
    titulo: 'Plano Pro',
    subtitulo: 'R$ 79/mês',
    texto: 'Ideal para equipes em crescimento.',
    botaolink1: $bs->buttonlink('#', 'Assinar', classe: 'success', tamanho: 'sm')
);

// Grade responsiva com 1 coluna no mobile e 2 em telas médias/grandes, com mesma altura (h-100)
echo $bs->divCardGrid([$card1, $card2], colunas: ['xs' => 1, 'md' => 2], gap: 3);
```

---

### 5. Overlays: Modais, Offcanvas e Toasts

```php
// Botão gatilho para Offcanvas
echo $bs->buttonOffcanvas('menuLateral', 'Abrir Menu', classe: 'primary');

// Gaveta Lateral (Offcanvas)
echo $bs->geraOffcanvas(
    id: 'menuLateral',
    titulo: 'Configurações da Conta',
    corpo: '<p>Opções de preferências e segurança.</p>',
    posicao: 'end'
);

// Botão gatilho e Notificação Toast
echo $bs->buttonToast('toastSucesso', 'Salvar Alterações', classe: 'success');
echo $bs->divToastContainer(
    $bs->geraToast('toastSucesso', 'Sucesso', 'Registro gravado com êxito!', horario: 'agora'),
    posicao: 'bottom-end'
);
```

---

### 6. Alternador de Modo Escuro / Claro (Theme Toggle)

Insere o seletor visual oficial do Bootstrap 5 para alternância entre temas Claro, Escuro e Automático (baseado no sistema operacional):

```php
// Dropdown fixo no canto inferior direito
echo $bs->geraThemeToggle(tipo: 'dropdown', posicao: 'bottom-end');
```

---

## 📋 Lista Completa de Implementações (179 Métodos)

Abaixo está o índice exaustivo de todos os **179 métodos públicos** disponíveis na classe `\DMetibr\Bootstrap`:

### 1. Injeção de Assets & Scripts (2 métodos)
| Método | Descrição |
| :--- | :--- |
| `tagCss($local, $comIcones, $caminhoPersonalizado, $versao)` | Gera as tags `<link>` para o CSS do Bootstrap 5.3.8 e Bootstrap Icons (CDN por padrão). |
| `tagJs($local, $caminhoPersonalizado, $versao)` | Gera a tag `<script>` do bundle oficial do Bootstrap (`bootstrap.bundle.min.js`). |

### 2. Layout, Contêineres, Grade & Stacks (56 métodos)
| Método | Descrição |
| :--- | :--- |
| `par($conteudo, $id, $classe)` | Gera parágrafo semântico `<p>`. |
| `span($conteudo, $id, $classe)` | Gera elemento inline `<span>`. |
| `div($conteudo, $id, $classe)` | Gera elemento de bloco `<div>` com classes e identificador opcionais. |
| `section($conteudo, $id, $classe)` | Gera elemento semântico de seção `<section>` com classes e identificador opcionais. |
| `h($nivel, $conteudo, $id, $classe)` | Gera cabeçalhos semânticos `<h1>` a `<h6>` conforme o nível numérico (1 a 6) informado. |
| `hr($classe, $id)` | Gera régua horizontal divisória semântica `<hr>` com classes e identificador opcionais. |
| `nav($conteudo, $id, $classe, $ariaLabel)` | Gera elemento semântico de navegação `<nav>` com classes, identificador e acessibilidade (aria-label). |
| `main($conteudo, $id, $classe)` | Gera elemento estrutural semântico `<main>` com classes e identificador opcionais. |
| `header($conteudo, $id, $classe)` | Gera elemento semântico de cabeçalho `<header>` com classes e identificador opcionais. |
| `footer($conteudo, $id, $classe)` | Gera elemento semântico de rodapé `<footer>` genérico com classes e identificador opcionais. |
| `aside($conteudo, $id, $classe, $ariaLabel)` | Gera elemento estrutural semântico lateral `<aside>` com classes, identificador e acessibilidade. |
| `code($conteudo, $id, $classe)` | Gera elemento de código inline `<code>` com classes e identificador opcionais. |
| `label($conteudo, $for, $id, $classe)` | Gera elemento `<label>` de formulário com vínculo de campo (`for`), classes e identificador opcionais. |
| `a($href, $conteudo, $id, $classe, $target, $atributos)` | Gera link de hipertexto `<a>` com classes, destino de navegação e atributos opcionais. |
| `small($conteudo, $id, $classe)` | Gera elemento de texto secundário `<small>` com classes e identificador opcionais. |
| `pre($conteudo, $id, $classe)` | Gera bloco de texto pré-formatado `<pre>` com classes e identificador opcionais. |
| `button($conteudo, $tipo, $id, $classe, $atributos)` | Gera botão HTML `<button>` genérico com tipo, classes e atributos adicionais. |
| `strong($conteudo, $id, $classe)` | Gera elemento de destaque em negrito `<strong>` com classes e identificador opcionais. |
| `b($conteudo, $id, $classe, $atributos)` | Gera elemento de destaque em negrito `<b>` editorial. |
| `em($conteudo, $id, $classe, $atributos)` | Gera elemento de ênfase tipográfica `<em>` com suporte a `.fst-italic`. |
| `del($conteudo, $id, $classe, $cite, $datetime, $atributos)` | Gera elemento semântico de texto removido/tachado `<del>`. |
| `s($conteudo, $id, $classe, $atributos)` | Gera elemento de texto tachado `<s>` (informação desatualizada). |
| `ins($conteudo, $id, $classe, $cite, $datetime, $atributos)` | Gera elemento semântico de texto inserido/adicionado `<ins>`. |
| `u($conteudo, $id, $classe, $atributos)` | Gera elemento de texto sublinhado semântico `<u>`. |
| `samp($conteudo, $id, $classe, $atributos)` | Gera elemento semântico de saída de amostra de programa `<samp>` (monospace). |
| `var($conteudo, $id, $classe, $atributos)` | Gera elemento semântico de variável matemática ou de programação `<var>`. |
| `br($quantidade, $classe, $id)` | Gera uma ou mais quebras de linha `<br>` com classes e identificador opcionais. |
| `i($conteudo, $id, $classe, $atributos)` | Gera elemento inline `<i>` com suporte nativo a ícones (Bootstrap Icons) e estilo em itálico. |
| `abbr($conteudo, $titulo, $id, $classe, $atributos)` | Gera elemento semântico de abreviação `<abbr>` com suporte a `title` e classe `.initialism`. |
| `address($conteudo, $id, $classe, $atributos)` | Gera elemento semântico de informações de contato `<address>` normalizado pelo Bootstrap Reboot. |
| `sub($conteudo, $id, $classe, $atributos)` | Gera elemento de texto subscrito `<sub>` com posicionamento relativo normalizado. |
| `sup($conteudo, $id, $classe, $atributos)` | Gera elemento de texto sobrescrito `<sup>` com posicionamento relativo normalizado. |
| `blockquote($conteudo, $id, $classe)` | Gera bloco de citação `<blockquote>` com suporte à classe `.blockquote`. |
| `figcaption($conteudo, $id, $classe)` | Gera legenda `<figcaption>` para figuras ou autoria de citações (`.blockquote-footer`). |
| `cite($conteudo, $titulo, $id, $classe)` | Gera elemento de referência/fonte citada `<cite>` com atributo `title`. |
| `mark($conteudo, $id, $classe)` | Gera elemento de texto destacado `<mark>` com estilo nativo do Bootstrap. |
| `kbd($conteudo, $id, $classe)` | Gera elemento de entrada de teclado/atalhos `<kbd>` estilizado. |
| `ul($conteudo, $id, $classe)` | Gera lista não ordenada `<ul>` com suporte automático a itens e classes do Bootstrap. |
| `ol($conteudo, $id, $classe)` | Gera lista ordenada `<ol>` com suporte automático a itens e classes do Bootstrap. |
| `li($conteudo, $id, $classe, $ativo, $desativado)` | Gera item de lista `<li>` com suporte a estados `.active` e `.disabled`. |
| `dl($conteudo, $id, $classe, $colDt, $colDd)` | Gera lista de descrição `<dl class="row">` para dados em grade chave-valor. |
| `dt($conteudo, $id, $classe)` | Gera termo de definição `<dt>` alinhado em grade responsiva. |
| `dd($conteudo, $id, $classe)` | Gera descrição/valor `<dd>` alinhado em grade responsiva. |
| `article($conteudo, $id, $classe)` | Gera elemento semântico `<article>` para matérias, posts de blog e cards editoriais. |
| `time($conteudo, $datetime, $id, $classe)` | Gera elemento de data e hora `<time>` com atributo padronizado `datetime`. |
| `figure($conteudo, $id, $classe)` | Gera contêiner de figura `<figure class="figure">` para imagens com legenda. |
| `img($src, $alt, $classe, $id, $largura, $altura, $atributos)` | Gera elemento de imagem `<img>` responsivo (`.img-fluid`, `.img-thumbnail`). |
| `divJumbotron($conteudo, $id, $central)` | Hero banner moderno com padding e cantos arredondados (`bg-body-tertiary`). |
| `divContainer($conteudo, $id, $classe)` | Contêiner de layout com largura responsiva fixa `.container`. |
| `divContainerFluid($conteudo, $id, $classe)` | Contêiner de largura total contínua `.container-fluid`. |
| `divCenterBlock($conteudo, $id, $classe)` | Centralização horizontal de bloco via utilitários Flexbox nativos. |
| `divLinha($conteudo, $id, $classe, $mesmaaltura, $flexivel)` | Linha da grade responsiva `.row`. |
| `divColuna($conteudo, $id, $classe, $tamanho, $colspan, ...)` | Colunas responsivas com controle detalhado de breakpoints (`col-*`). |
| `divVStack($conteudo, $gap, $id, $classe)` | Pilha flexbox vertical `.vstack` com espaçamentos nativos `gap-*`. |
| `divHStack($conteudo, $gap, $id, $classe)` | Pilha flexbox horizontal `.hstack` com espaçamentos nativos `gap-*`. |
| `divVr($classe)` | Separador de conteúdo vertical `.vr` (Vertical Rule). |

### 3. Botões, Ações & Barras de Ferramentas (14 métodos)
| Método | Descrição |
| :--- | :--- |
| `buttonButton($nome, $valor, $rotulo, ...)` | Botão padrão de interface `<button type="button">`. |
| `buttonSubmit($nome, $valor, $rotulo, ...)` | Botão de submissão de formulário `<button type="submit">`. |
| `buttonlink($link, $rotulo, ...)` | Hiperlink estilizado visualmente como botão `<a class="btn ...">`. |
| `buttonClose($dismiss, $branco, $desativado, ...)` | Botão de fechar nativo `.btn-close` (suporta modal, alert, offcanvas e toast). |
| `buttonOffcanvas($alvoid, $rotulo, ...)` | Botão pré-configurado como gatilho de abertura de gaveta Offcanvas. |
| `buttonToast($alvoid, $rotulo, ...)` | Botão pré-configurado para disparo de notificação Toast via Vanilla JS. |
| `buttonSpinner($rotulo, $tipo, ...)` | Botão interativo com spinner animado de espera embutido. |
| `buttonPlaceholder($colunas, $classe, ...)` | Botão skeleton para estados de pré-carregamento. |
| `buttonTooltip($rotulo, $tituloTooltip, ...)` | Botão com tooltip embutido (`data-bs-toggle="tooltip"`). |
| `buttonPopover($rotulo, $conteudo, $titulo, ...)` | Botão com popover interativo embutido (`data-bs-toggle="popover"`). |
| `linkIcone($rotulo, $url, $icone, $hover, ...)` | Link moderno com ícone e animação hover (`.icon-link`, `.icon-link-hover`). |
| `geraButtonGroup($botoes, $vertical, ...)` | Agrupamento de botões contíguos `.btn-group`. |
| `geraButtonToggleGroup($nome, $opcoes, $tipo, ...)` | Grupo alternador de botões (`btn-check`) para rádio ou checkbox. |
| `divButtonToolbar($grupos, $id, ...)` | Barra de ferramentas agregadora de grupos de botões `.btn-toolbar`. |

### 4. Formulários Clássicos & Campos de Entrada (29 métodos)
| Método | Descrição |
| :--- | :--- |
| `generalForm($conteudo, $acao, ...)` | Invólucro formal de formulário `<form method="POST">`. |
| `form($conteudo, $action, $method, $id, $classe, $enctype, $atributos)` | Formulário HTML `<form>` genérico com suporte a validação e atributos adicionais. |
| `fieldset($conteudo, $id, $classe, $desativado, $legenda)` | Agrupamento de campos `<fieldset>` com suporte nativo a desativação em lote (`disabled`). |
| `legend($conteudo, $id, $classe)` | Legenda descritiva `<legend>` para grupos de formulário. |
| `textarea($nome, $conteudo, $linhas, $id, $classe, ...)` | Área de texto multilinha `<textarea>` atômica com classe padrão `.form-control`. |
| `input($tipo, $nome, $valor, $id, $classe, $placeholder, $desativado, $somenteLeitura, $requerido, $atributos)` | Elemento genérico `<input>` flexível com suporte aos tipos e classes utilitárias do Bootstrap 5. |
| `output($conteudo, $for, $nome, $id, $classe, $atributos)` | Elemento de saída de formulário `<output>` para exibição de cálculos e valores dinâmicos. |
| `datalist($id, $opcoes, $classe)` | Lista de autocompletar `<datalist>` para campos `<input list="...">`. |
| `divFormGroup($conteudo, $legenda, ...)` | Grupo padrão de campo com rótulo associado `.form-label`. |
| `fieldsetFormGroup($conteudo, $legenda, ...)` | Agrupamento com `<fieldset>` semântico e `<legend>`. |
| `divInputGroup($conteudo, $id)` | Contêiner para agregação de campos e ícones `.input-group`. |
| `inputTexto($id, $nome, $valor, ...)` | Campo de entrada de texto `<input type="text">`. |
| `inputEmail($id, $nome, $valor, ...)` | Campo de e-mail com validação nativa `<input type="email">`. |
| `inputSenha($id, $nome, $valor, ...)` | Campo protegido de senha `<input type="password">`. |
| `inputArea($id, $nome, $texto, ...)` | Área de texto multilinha `<textarea>`. |
| `inputData($id, $nome, $valor, ...)` | Campo nativo de data HTML5 `<input type="date">`. |
| `inputOculto($id, $nome, $valor)` | Campo invisível de transporte de dados `<input type="hidden">`. |
| `inputButton($nome, $rotulo, ...)` | Input estilizado como botão `<input type="button">`. |
| `inputSubmit($nome, $rotulo, ...)` | Input de submissão `<input type="submit">`. |
| `inputReset($nome, $rotulo, ...)` | Input de redefinição de campos `<input type="reset">`. |
| `inputCheckbox($id, $nome, $valor, ...)` | Caixa de seleção individual `.form-check-input`. |
| `inputRadio($id, $nome, $valor, ...)` | Botão de opção individual `.form-check-input`. |
| `inputRadioArray($id, $nome, $opcoes, ...)` | Gerador automático de conjunto múltiplo de opções de rádio. |
| `inputGroupTexto($id, $nome, $valor, ...)` | Campo de texto estruturado com addons integrados. |
| `inputGroupAddon($conteudoInput, $prefixo, $sufixo, ...)` | Montador flexível de input group com suporte a prefixo e sufixo. |
| `inputTextoGroup($id, $nome, $valor, $prefixo, $sufixo, ...)` | Campo de texto com prefixos/sufixos simplificados. |
| `inputFile($id, $nome, $rotulo, ...)` | Seletor de upload de arquivos com controle de extensão e múltiplo. |
| `inputRange($id, $nome, $valor, ...)` | Controle deslizante de valores numéricos `.form-range` com badge ao vivo. |
| `inputColor($id, $nome, $valor, ...)` | Seletor de cores `.form-control-color` com código hex sincronizado. |

### 5. Chaves Seletoras & Menus Select (6 métodos)
| Método | Descrição |
| :--- | :--- |
| `inputSwitch($id, $nome, $valor, ...)` | Chave alternadora liga/desliga `.form-switch`. |
| `inputSwitchArray($id, $opcoes, ...)` | Conjunto múltiplo de chaves alternadoras alinhadas. |
| `selectArray($id, $nome, $opcoes, ...)` | Menu suspenso `<select class="form-select">` com suporte simples e múltiplo. |
| `select($nome, $opcoes, $selecionado, $id, $classe, $multiplo, $desativado, $atributos)` | Controle nativo `<select class="form-select">` genérico com opções e atributos. |
| `option($valor, $rotulo, $selecionado, $desativado, $classe, $atributos)` | Opção individual `<option>` para controles de seleção. |
| `optgroup($rotulo, $opcoes, $desativado, $classe, $selecionado)` | Agrupador de opções `<optgroup>` com título e suporte a desativação. |

### 6. Validação e Feedback (1 método)
| Método | Descrição |
| :--- | :--- |
| `geraFeedback($mensagem, $tipo, $tooltip, ...)` | Mensagens visuais contextuais (`.valid-feedback`, `.invalid-feedback`, `.valid-tooltip`). |

### 7. Floating Labels (Rótulos Flutuantes) (3 métodos)
| Método | Descrição |
| :--- | :--- |
| `inputFloating($id, $nome, $rotulo, ...)` | Campo de entrada com animação flutuante `.form-floating`. |
| `inputAreaFloating($id, $nome, $rotulo, ...)` | Textarea com rótulo flutuante animado. |
| `selectFloating($id, $nome, $rotulo, $opcoes, ...)` | Seletor dropdown com rótulo flutuante. |

### 8. Navegação, Abas, Breadcrumbs & Paginação (8 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraNavBar($posicao, $brand, $logo, ...)` | Barra de topo expansível `.navbar` com menus, ícones e temas. |
| `geraNav($itens, $estilo, ...)` | Navegações flexíveis (`.nav-underline`, `.nav-pills`, `.nav-tabs`). |
| `geraNavTab($abas, $id, ...)` | Conjunto completo de abas interativas navegáveis com painéis de conteúdo. |
| `geraBreadcrumb($caminho)` | Trilha hierárquica de navegação `<ol class="breadcrumb">`. |
| `geraListGroup($itens, $flush, $numerada, ...)` | Grupo de listas com links clicáveis, badges e checkboxes. |
| `geraPaginacao($paginas, $simbolo, ...)` | Paginação de dados responsiva. |
| `geraPaginacaoComHref($paginas, $simbolo, ...)` | Paginação com navegação por URLs diretas. |
| `geraPaginacaoTapeDeck($paginas, ...)` | Paginação estilo Tape-Deck (Primeira, Anterior, Atual, Próxima, Última). |

### 9. Cards, Agrupamentos & Painéis (5 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraCard($titulo, $subtitulo, $cabecalho, ...)` | Cartão de conteúdo completo do Bootstrap 5 com seções estruturadas. |
| `divCardGroup($cards, $id, ...)` | Agrupamento contínuo `.card-group` com bordas e alturas compartilhadas. |
| `divCardGrid($cards, $colunas, $gap, ...)` | Grade responsiva de cards (`.row-cols-*`) com nivelamento `.h-100`. |
| `geraPainel($conteudo, $id, ...)` | Painel em estilo card contextual com bordas e corpo formatados. |
| `geraWell($conteudo, $id, ...)` | Bloco de destaque com padding e fundo `bg-body-tertiary`. |

### 10. Overlays, Modais, Gavetas & Notificações (6 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraModal($id, $classe, $tamanho, ...)` | Janela modal nativa com cabeçalho, corpo e ações de rodapé. |
| `geraOffcanvas($id, $titulo, $corpo, ...)` | Painel gaveta deslizante lateral (`start`, `end`, `top`, `bottom`). |
| `geraAlerta($tipo, $rotulo, $mensagem, ...)` | Caixa de alerta contextual `.alert` com dismiss suave. |
| `geraToast($id, $titulo, $mensagem, ...)` | Notificação instantânea flutuante `.toast`. |
| `divToastContainer($toasts, $posicao, ...)` | Contêiner de posicionamento de múltiplos toasts `.toast-container`. |
| `dialog($conteudo, $aberto, $id, $classe, $atributos)` | Caixa de diálogo nativa `<dialog>` (HTML5 Dialog) compatível com `.showModal()`. |

### 11. Menus Dropdown (1 método)
| Método | Descrição |
| :--- | :--- |
| `geraDropdown($rotulo, $itens, ...)` | Menu dropdown independente (botão split, direções dropend/dropup, dark theme). |

### 12. Loaders, Skeletons & Indicadores (8 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraProgressBar($now, $min, $max, ...)` | Barra de progresso `.progress` com animações e listras. |
| `geraSpinner($tipo, $tema, $tamanho, ...)` | Indicador de carregamento giratório (`.spinner-border` ou `.spinner-grow`). |
| `geraPlaceholder($colunas, $tamanho, ...)` | Elemento skeleton individual `.placeholder`. |
| `divPlaceholder($conteudo, $animacao, ...)` | Invólucro de placeholders com animações `glow` ou `wave`. |
| `geraPlaceholderLinhas($linhas, ...)` | Gerador de linhas simuladas de parágrafo skeleton. |
| `geraCardPlaceholder($largura, $imgAltura, ...)` | Card skeleton completo para simulação de cards em carregamento. |
| `progress($valor, $maximo, $conteudo, $id, $classe, $atributos)` | Barra de progresso nativa `<progress>` compatível com utilitários de dimensões. |
| `meter($valor, $minimo, $maximo, $baixo, $alto, $otimo, $conteudo, $id, $classe, $atributos)` | Medidor escalar nativo `<meter>` para representação de valores fracionários. |

### 13. Mídia, Imagens, Figures & Vídeo Embed (14 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraImagem($src, $alt, $responsiva, ...)` | Imagem responsiva (`.img-fluid`, `.img-thumbnail`, formatos arredondados). |
| `geraFigure($src, $legenda, ...)` | Elemento semântico `<figure>` com `<figcaption>` alinhado. |
| `geraCarrossel($id, $imagems, ...)` | Carrossel rotativo de imagens com setas, indicadores e temporização. |
| `geraRatioEmbed($conteudo, $proporcao, ...)` | Incorporador com proporção de tela fixa `.ratio` (16x9, 4x3, 1x1, 21x9). |
| `geraVideoEmbed($url, $proporcao, ...)` | Incorporador otimizado para vídeos do YouTube e Vimeo. |
| `converteUrlEmbed($url)` | Parser utilitário que converte URLs comuns de vídeo em URLs de incorporação (`embed`). |
| `iframe($src, $titulo, $id, $classe, $largura, $altura, $atributos)` | Quadro incorporado `<iframe>` compatível com o sistema de proporções `.ratio`. |
| `video($src, $poster, $controles, $id, $classe, $atributos, $conteudo)` | Player de vídeo HTML5 `<video>` com controles e classes utilitárias. |
| `audio($src, $controles, $id, $classe, $atributos, $conteudo)` | Player de áudio HTML5 `<audio>` com controles nativos. |
| `picture($conteudo, $id, $classe)` | Contêiner de imagem responsiva `<picture>` para Art Direction. |
| `source($srcset, $media, $type, $src, $id, $classe)` | Elemento de fonte `<source>` para `<picture>`, `<video>` ou `<audio>`. |
| `track($src, $kind, $srclang, $label, $padrao, $id, $classe, $atributos)` | Elemento de faixa de texto e legendas `<track>` para mídias `<video>` e `<audio>`. |
| `svg($conteudo, $largura, $altura, $viewBox, $id, $classe, $atributos)` | Elemento de gráfico vetorial `<svg>` inline para ícones e ilustrações. |
| `canvas($id, $largura, $altura, $classe, $conteudo, $atributos)` | Elemento de tela gráfica `<canvas>` para gráficos interativos (Chart.js) e animações. |

### 14. Conteúdo, Tabelas & Artigos (16 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraAccordion($conteudo, $id)` | Painel sanfonado interativo com expansão/colapso exclusivo. |
| `geraAccordionPanel($conteudo, $id)` | Alias funcional para o gerador de acordeões. |
| `geraBlogPost($titulo, $meta, $conteudo, ...)` | Layout de artigo editorial semântico `.blog-post`. |
| `geraTabela($id, $conteudo, $contexto, ...)` | Tabela completa responsiva com listras, bordas, efeito hover e cabeçalho. |
| `table($conteudo, $id, $classe)` | Elemento `<table>` genérico com suporte a classes `.table-striped`, `.table-hover`, etc. |
| `thead($conteudo, $id, $classe)` | Cabeçalho `<thead>` de tabela com suporte a `.table-light`, `.table-dark`. |
| `tbody($conteudo, $id, $classe)` | Corpo `<tbody>` de tabela com suporte a `.table-group-divider`. |
| `tfoot($conteudo, $id, $classe)` | Rodapé `<tfoot>` de tabela para totais e sumários. |
| `tr($conteudo, $id, $classe)` | Linha `<tr>` com variantes contextuais de cor (`.table-primary`, `.table-active`). |
| `th($conteudo, $scope, $id, $classe, $colspan, $rowspan)` | Célula de cabeçalho `<th>` com suporte a `scope="col"`, `scope="row"` e mesclagem. |
| `td($conteudo, $id, $classe, $colspan, $rowspan)` | Célula de dados `<td>` com suporte a alinhamento, cores e mesclagem. |
| `caption($conteudo, $id, $classe)` | Título/legenda `<caption>` de tabela com suporte a `.caption-top`. |
| `colgroup($conteudo, $id, $classe, $span, $atributos)` | Grupo estrutural de colunas `<colgroup>` para tabelas HTML. |
| `col($span, $id, $classe, $atributos)` | Elemento de formatação e largura de coluna `<col>` para tabelas HTML. |
| `details($conteudo, $aberto, $id, $classe, $atributos)` | Contêiner nativo de revelação/expansão `<details>` (*disclosure widget* sem JS). |
| `summary($conteudo, $id, $classe, $atributos)` | Cabeçalho e rótulo clicável `<summary>` para contêineres `<details>`. |

### 15. Tema, Ícones, Helpers & Rodapé (10 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraThemeToggle($tipo, $posicao, ...)` | Componente visual para alternância dinâmica de tema Claro/Escuro/Auto. |
| `scriptThemeToggle($incluiTagsScript)` | Script JavaScript inline para manipulação imediata do tema via `localStorage`. |
| `obtemBadge($legenda, $classe, ...)` | Crachá indicador contextual `.badge` (`.text-bg-*`). |
| `obtemGlyphicon($nome, $classe, ...)` | Mapeador automático de nomes clássicos de ícones para Bootstrap Icons (`.bi`). |
| `withTooltip($elemento, $titulo, ...)` | Utilitário para anexar atributos nativos de Tooltip a qualquer tag HTML. |
| `withPopover($elemento, $conteudo, $titulo, ...)` | Utilitário para anexar atributos nativos de Popover a qualquer tag HTML. |
| `scriptTooltips($seletor)` | Script oficial de inicialização Vanilla JS para Tooltips. |
| `scriptPopovers($seletor)` | Script oficial de inicialização Vanilla JS para Popovers. |
| `scriptInicializaTodos()` | Script integrado para inicialização de Tooltips, Popovers e Toasts de uma só vez. |
| `geraFooter($conteudo, $id)` | Rodapé semântico `<footer>` com contêiner responsivo. |

---

## 🔮 Elementos HTML Suportados pelo Bootstrap 5.3.8 Pendentes de Implementação

Apesar de a classe cobrir **179 métodos públicos**, o ecossistema do **Bootstrap 5.3.8** (especialmente o seu módulo de normalização **Reboot**, a folha de estilo de **Tipografia**, as classes utilitárias de layout e os utilitários de proporção) reconhece, normaliza e estiliza outros elementos da especificação do HTML5 que ainda não possuem métodos geradores dedicados na biblioteca:

### 1. Embeds e Proporções Responsivas (Ratio)
* `<embed>`: Elemento de incorporação de mídias externas e plugins, estilizado nativamente com utilitários de proporção responsiva (`.ratio`, `.ratio-16x9`, etc.).
* `<object>`: Contêiner semântico para objetos multimídia externos (PDFs, SVGs interativos, miniaplicações), com suporte a redimensionamento em contêineres `.ratio`.

### 2. Tipografia Editorial & Módulo Reboot
* `<dfn>`: Marcação semântica para o termo que está sendo formalmente definido no texto.
* `<bdi>` e `<bdo>`: Isolamento e direção de texto bidirecional, indispensáveis para internacionalização e suporte a layouts RTL (Right-to-Left).
* `<q>`: Citação inline semântica com suporte tipográfico do Reboot para inserção automática de aspas conforme a localidade.
* `<hgroup>`: Agrupamento semântico de títulos e subtítulos (`<h1>`-`<h6>` com `<p>`), normalizado pelas regras de margem do Reboot.
* `<data>`: Associação de valor legível por máquina (`value="..."`) a conteúdo legível por humanos, compatível com badges e contadores.
* `<wbr>`: Oportunidade de quebra de palavra (*word break opportunity*), útil em conjunto com utilitários como `.text-break`.
* `<ruby>`, `<rt>` e `<rp>`: Notação fonética para caracteres de alfabetos do leste asiático (como Furigana em japonês), mantida sem quebras anômalas pelo Reboot.

### 3. Acessibilidade e Degradação Progressiva
* `<noscript>`: Conteúdo alternativo para navegadores com JavaScript desativado, crucial para exibir avisos e fallbacks em componentes que dependem do Bootstrap JS (Modais, Toasts, Dropdowns).

### 4. Templates e Componentes Dinâmicos
* `<template>`: Fragmento de documento HTML inerte para instanciação dinâmica e clonagem via JavaScript (duplicação de linhas de tabela, toasts, modais sob demanda).
* `<slot>`: Ponto de inserção de conteúdo para Web Components e Shadow DOM integrados ao ecossistema Bootstrap.

### 5. Metadados e Estrutura de Documento (`<head>`)
* `<meta>`: Declarações de charset, viewport responsivo (`width=device-width, initial-scale=1`) e compatibilidade.
* `<link>`: Inclusão de folhas de estilo CSS externas (Bootstrap CDN, Bootstrap Icons, fontes do Google) e favicons.
* `<style>`: Bloco para folhas de estilo CSS customizadas embutidas na página.
* `<script>`: Inclusão e execução de scripts JavaScript externos ou embutidos (Bootstrap Bundle JS, bibliotecas complementares).
* `<title>`: Definição do título semântico da página exibido na aba do navegador.
* `<base>`: Especificação de URL base para hiperlinks e recursos relativos do documento.

---

## ⚙️ Requisitos e Compatibilidade

* **PHP:** Versão `8.0` ou superior (testado em `8.0`, `8.1`, `8.2` e `8.3`).
* **Bootstrap:** Versão `5.3.8` (especificação nativa oficial).
* **Bootstrap Icons:** Versão `1.11.3` ou superior.
* **Navegadores Suportados:** Chrome, Firefox, Edge, Safari e Opera modernos (compatíveis com Flexbox, CSS Grid e atributos `data-bs-*`).

---

## 📚 Referências Técnicas

### Framework & Assets
* [Documentação Oficial do Bootstrap 5.3](https://getbootstrap.com/docs/5.3/)
* [Biblioteca de Ícones do Bootstrap (Bootstrap Icons)](https://icons.getbootstrap.com/)
* [Rede de Distribuição jsDelivr para Bootstrap](https://www.jsdelivr.com/package/npm/bootstrap)
* [Modos de Cor e Dark Mode no Bootstrap 5](https://getbootstrap.com/docs/5.3/customize/color-modes/)

### Linguagem & Especificações Web
* [Manual Oficial do PHP (php.net)](https://www.php.net/manual/pt_BR/)
* [MDN Web Docs - Referência de Elementos HTML5](https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element)
* [WHATWG HTML Living Standard](https://html.spec.whatwg.org/multipage/)
* [Especificação de Acessibilidade W3C WAI-ARIA](https://www.w3.org/WAI/standards-guidelines/aria/)

---

## 📄 Licença

Este projeto é distribuído sob os termos da licença **MIT**. Consulte o arquivo de licença ou sinta-se à vontade para utilizar, modificar e incorporar em projetos pessoais ou comerciais.

---

## 👨‍💻 Informações do Projeto

* **Autor:** Daniel Madeira
* **Versão:** 2.1
* **Data:** 2026-10-25
* **Licença:** MIT
* **Repositório:** [https://github.com/danmadeira/php-bootstrap-class](https://github.com/danmadeira/php-bootstrap-class)

