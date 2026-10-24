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

O repositório inclui o arquivo **[`demo.php`](demo.php)**, um showroom interativo completo que renderiza visualmente **todos os 101 métodos públicos** da classe, organizados em 11 seções navegáveis com alternador dinâmico de tema, janelas modais, offcanvas, notificações toast e componentes em tempo real.

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

## 📋 Lista Completa de Implementações (101 Métodos)

Abaixo está o índice exaustivo de todos os **101 métodos públicos** disponíveis na classe `\DMetibr\Bootstrap`:

### 1. Injeção de Assets & Scripts (2 métodos)
| Método | Descrição |
| :--- | :--- |
| `tagCss($local, $comIcones, $caminhoPersonalizado, $versao)` | Gera as tags `<link>` para o CSS do Bootstrap 5.3.8 e Bootstrap Icons (CDN por padrão). |
| `tagJs($local, $caminhoPersonalizado, $versao)` | Gera a tag `<script>` do bundle oficial do Bootstrap (`bootstrap.bundle.min.js`). |

### 2. Layout, Contêineres, Grade & Stacks (11 métodos)
| Método | Descrição |
| :--- | :--- |
| `par($conteudo, $id, $classe)` | Gera parágrafo semântico `<p>`. |
| `span($conteudo, $id, $classe)` | Gera elemento inline `<span>`. |
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

### 4. Formulários Clássicos & Campos de Entrada (22 métodos)
| Método | Descrição |
| :--- | :--- |
| `generalForm($conteudo, $acao, ...)` | Invólucro formal de formulário `<form method="POST">`. |
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

### 5. Chaves Seletoras & Menus Select (3 métodos)
| Método | Descrição |
| :--- | :--- |
| `inputSwitch($id, $nome, $valor, ...)` | Chave alternadora liga/desliga `.form-switch`. |
| `inputSwitchArray($id, $opcoes, ...)` | Conjunto múltiplo de chaves alternadoras alinhadas. |
| `selectArray($id, $nome, $opcoes, ...)` | Menu suspenso `<select class="form-select">` com suporte simples e múltiplo. |

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

### 10. Overlays, Modais, Gavetas & Notificações (5 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraModal($id, $classe, $tamanho, ...)` | Janela modal nativa com cabeçalho, corpo e ações de rodapé. |
| `geraOffcanvas($id, $titulo, $corpo, ...)` | Painel gaveta deslizante lateral (`start`, `end`, `top`, `bottom`). |
| `geraAlerta($tipo, $rotulo, $mensagem, ...)` | Caixa de alerta contextual `.alert` com dismiss suave. |
| `geraToast($id, $titulo, $mensagem, ...)` | Notificação instantânea flutuante `.toast`. |
| `divToastContainer($toasts, $posicao, ...)` | Contêiner de posicionamento de múltiplos toasts `.toast-container`. |

### 11. Menus Dropdown (1 método)
| Método | Descrição |
| :--- | :--- |
| `geraDropdown($rotulo, $itens, ...)` | Menu dropdown independente (botão split, direções dropend/dropup, dark theme). |

### 12. Loaders, Skeletons & Indicadores (6 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraProgressBar($now, $min, $max, ...)` | Barra de progresso `.progress` com animações e listras. |
| `geraSpinner($tipo, $tema, $tamanho, ...)` | Indicador de carregamento giratório (`.spinner-border` ou `.spinner-grow`). |
| `geraPlaceholder($colunas, $tamanho, ...)` | Elemento skeleton individual `.placeholder`. |
| `divPlaceholder($conteudo, $animacao, ...)` | Invólucro de placeholders com animações `glow` ou `wave`. |
| `geraPlaceholderLinhas($linhas, ...)` | Gerador de linhas simuladas de parágrafo skeleton. |
| `geraCardPlaceholder($largura, $imgAltura, ...)` | Card skeleton completo para simulação de cards em carregamento. |

### 13. Mídia, Imagens, Figures & Vídeo Embed (6 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraImagem($src, $alt, $responsiva, ...)` | Imagem responsiva (`.img-fluid`, `.img-thumbnail`, formatos arredondados). |
| `geraFigure($src, $legenda, ...)` | Elemento semântico `<figure>` com `<figcaption>` alinhado. |
| `geraCarrossel($id, $imagems, ...)` | Carrossel rotativo de imagens com setas, indicadores e temporização. |
| `geraRatioEmbed($conteudo, $proporcao, ...)` | Incorporador com proporção de tela fixa `.ratio` (16x9, 4x3, 1x1, 21x9). |
| `geraVideoEmbed($url, $proporcao, ...)` | Incorporador otimizado para vídeos do YouTube e Vimeo. |
| `converteUrlEmbed($url)` | Parser utilitário que converte URLs comuns de vídeo em URLs de incorporação (`embed`). |

### 14. Conteúdo, Tabelas & Artigos (4 métodos)
| Método | Descrição |
| :--- | :--- |
| `geraAccordion($conteudo, $id)` | Painel sanfonado interativo com expansão/colapso exclusivo. |
| `geraAccordionPanel($conteudo, $id)` | Alias funcional para o gerador de acordeões. |
| `geraBlogPost($titulo, $meta, $conteudo, ...)` | Layout de artigo editorial semântico `.blog-post`. |
| `geraTabela($id, $conteudo, $contexto, ...)` | Tabela completa responsiva com listras, bordas, efeito hover e cabeçalho. |

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

## ⚙️ Requisitos e Compatibilidade

* **PHP:** Versão `8.0` ou superior (testado em `8.0`, `8.1`, `8.2` e `8.3`).
* **Bootstrap:** Versão `5.3.8` (especificação nativa oficial).
* **Bootstrap Icons:** Versão `1.11.3` ou superior.
* **Navegadores Suportados:** Chrome, Firefox, Edge, Safari e Opera modernos (compatíveis com Flexbox, CSS Grid e atributos `data-bs-*`).

---

## 📚 Referências Técnicas

* [Documentação Oficial do Bootstrap 5.3](https://getbootstrap.com/docs/5.3/)
* [Biblioteca de Ícones do Bootstrap (Bootstrap Icons)](https://icons.getbootstrap.com/)
* [Rede de Distribuição jsDelivr para Bootstrap](https://www.jsdelivr.com/package/npm/bootstrap)
* [Modos de Cor e Dark Mode no Bootstrap 5](https://getbootstrap.com/docs/5.3/customize/color-modes/)
* [Especificação de Acessibilidade W3C WAI-ARIA](https://www.w3.org/WAI/standards-guidelines/aria/)

---

## 📄 Licença

Este projeto é distribuído sob os termos da licença **MIT**. Consulte o arquivo de licença ou sinta-se à vontade para utilizar, modificar e incorporar em projetos pessoais ou comerciais.

---

## 👨‍💻 Informações do Projeto

* **Autor:** Daniel Madeira
* **Versão:** 1.0
* **Data:** 2026-10-24
* **Licença:** MIT
* **Repositório:** [https://github.com/danmadeira/php-bootstrap-class](https://github.com/danmadeira/php-bootstrap-class)

