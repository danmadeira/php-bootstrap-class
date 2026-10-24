<?php
/**
 * @file Bootstrap.class.php
 * @brief Classe PHP autônoma para geração de componentes e layouts em Bootstrap 5.3.8.
 *
 * @details
 * O PHP Bootstrap Class fornece uma interface orientada a objetos para construção
 * ágil e padronizada de interfaces web em conformidade estrita com o Bootstrap 5.3.8.
 * Inclui suporte nativo a atributos data-bs-*, Color Modes (Dark/Light/Auto),
 * Flexbox, Grid e CDN jsDelivr, sem dependências externas em PHP ou jQuery.
 *
 * @author Daniel Madeira
 * @version 1.0
 * @date 2026-10-24
 * @license MIT License (https://opensource.org/licenses/MIT)
 * @link https://github.com/danmadeira/php-bootstrap-class
 */

namespace DMetibr;

class Bootstrap
{
    /**
     * Gera um parágrafo HTML estilizado com classes do Bootstrap.
     *
     * @param string $conteudo Conteúdo textual ou HTML interno do parágrafo.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Marcação HTML da tag <p> formatada.
     */
    public function par($conteudo, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' class="' . $classe . '"';
        }
        $span = '<p' . $id . $classe . '>' . $conteudo . '</p>';
        return $span;
    }

    /**
     * Gera um elemento inline <span> com classes estilizadas.
     *
     * @param string $conteudo Conteúdo textual ou HTML interno do elemento.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Marcação HTML da tag <span> formatada.
     */
    public function span($conteudo, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' class="' . $classe . '"';
        }
        $span = '<span' . $id . $classe . '>' . $conteudo . '</span>';
        return $span;
    }

    /**
     * Gera um painel de destaque (Hero Banner) adaptado para Bootstrap 5 (.bg-body-tertiary, .rounded-3).
     *
     * @param string $conteudo Conteúdo HTML interno do jumbotron.
     * @param string $id Atributo ID opcional do elemento.
     * @param bool $central Se true, centraliza o texto com a classe .text-center.
     * @return string Contêiner de destaque estilizado em HTML.
     */
    public function divJumbotron($conteudo, $id = '', $central = false)
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if ($central) {
            $classe = ' text-center';
        } else {
            $classe = '';
        }
        $jumbo = '<div class="p-5 mb-4 bg-body-tertiary rounded-3 jumbotron' . $classe . '"' . $id . '>' . PHP_EOL . $conteudo . '</div>' . PHP_EOL;
        return $jumbo;
    }

    /**
     * Gera um contêiner de largura responsiva fixa (.container).
     *
     * @param string $conteudo Conteúdo HTML interno do contêiner.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Elemento <div class="container"> formatado.
     */
    public function divContainer($conteudo, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        $divisor = '<div class="container' . $classe . '"' . $id . '>' . PHP_EOL . $conteudo . '</div>' . PHP_EOL;
        return $divisor;
    }

    /**
     * Gera um contêiner de largura total contínua (.container-fluid).
     *
     * @param string $conteudo Conteúdo HTML interno do contêiner.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Elemento <div class="container-fluid"> formatado.
     */
    public function divContainerFluid($conteudo, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        $divisor = '<div class="container-fluid' . $classe . '"' . $id . '>' . PHP_EOL . $conteudo . '</div>' . PHP_EOL;
        return $divisor;
    }

    /**
     * Centraliza um bloco de conteúdo horizontalmente usando utilitários Flexbox nativos (.d-flex, .justify-content-center).
     *
     * @param string $conteudo Conteúdo HTML a ser centralizado.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Contêiner flexbox centralizador formatado.
     */
    public function divCenterBlock($conteudo, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        $divisor = '<div class="d-block mx-auto' . $classe . '"' . $id . '>' . PHP_EOL . $conteudo . '</div>' . PHP_EOL;
        return $divisor;
    }

    /**
     * Gera um grupo de formulário (.mb-3) com rótulo opcional (.form-label).
     *
     * @param string $conteudo Campo de formulário HTML interno.
     * @param string $legenda Texto do rótulo/legenda do campo.
     * @param string $id Atributo ID opcional do contêiner.
     * @return string Bloco de formulário formatado com espaçamento inferior.
     */
    public function divFormGroup($conteudo, $legenda = '', $id = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($legenda)) {
            $legenda = '<legend class="form-label">' . $legenda . '</legend>' . PHP_EOL;
        }
        $divisor = '<div class="mb-3"' . $id . '>' . PHP_EOL . $legenda . $conteudo . '</div>' . PHP_EOL;
        return $divisor;
    }

    /**
     * Gera um agrupamento semântico com <fieldset> e <legend> para campos de formulário.
     *
     * @param string $conteudo Conteúdo HTML interno do fieldset.
     * @param string $legenda Texto descritivo da legenda (<legend>).
     * @param string $id Atributo ID opcional do fieldset.
     * @return string Elemento <fieldset> semântico formatado.
     */
    public function fieldsetFormGroup($conteudo, $legenda = '', $id = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($legenda)) {
            $legenda = '<legend class="form-label">' . $legenda . '</legend>' . PHP_EOL;
        }
        $divisor = '<fieldset class="mb-3"' . $id . '>' . PHP_EOL . $legenda . $conteudo . '</fieldset>' . PHP_EOL;
        return $divisor;
    }

    /**
     * Gera um contêiner de grupo de entrada (.input-group) para agregação de ícones, botões e campos.
     *
     * @param string $conteudo Campos e elementos internos do grupo.
     * @param string $id Atributo ID opcional do contêiner.
     * @return string Contêiner <div class="input-group"> formatado.
     */
    public function divInputGroup($conteudo, $id = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $divisor = '<div class="input-group"' . $id . '>' . PHP_EOL . $conteudo . '</div>' . PHP_EOL;
        return $divisor;
    }

    /**
     * Gera uma linha da grade responsiva do Bootstrap (.row).
     *
     * @param string $conteudo Colunas ou conteúdo interno da linha.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais (ex: g-3, align-items-center).
     * @param bool $mesmaaltura Se true, força as colunas a terem altura uniforme.
     * @param bool $flexivel Se true, adiciona classes utilitárias flexíveis.
     * @return string Elemento <div class="row"> formatado.
     */
    public function divLinha($conteudo, $id = '', $classe = '', $mesmaaltura = false, $flexivel = false)
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if ($flexivel) {
            $flex = ' flex-row';
        } else {
            $flex = '';
        }
        $divisor = '<div class="row' . $flex . $classe . '"' . $id . '>' . PHP_EOL . $conteudo . '</div>' . PHP_EOL;
        return $divisor;
    }

    /**
     * Gera uma coluna da grade responsiva com suporte a múltiplos breakpoints e deslocamentos.
     *
     * @param string $conteudo Conteúdo interno da coluna.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @param string $tamanho Breakpoint principal (ex: 'sm', 'md', 'lg', 'xl').
     * @param int|string $colspan Quantidade de colunas ocupadas (1 a 12).
     * @param int|string $mover Deslocamento de colunas (offset).
     * @param string $tamanho2 Segundo breakpoint responsivo.
     * @param int|string $colspan2 Quantidade de colunas no segundo breakpoint.
     * @param int|string $mover2 Deslocamento no segundo breakpoint.
     * @param string $tamanho3 Terceiro breakpoint responsivo.
     * @param int|string $colspan3 Quantidade de colunas no terceiro breakpoint.
     * @param int|string $mover3 Deslocamento no terceiro breakpoint.
     * @param bool $direita Se true, alinha o conteúdo à direita com .float-end.
     * @return string Elemento de coluna formatado.
     */
    public function divColuna($conteudo, $id = '', $classe = '', $tamanho = 'sm', $colspan = '', $mover = '', $tamanho2 = '', $colspan2 = '', $mover2 = '', $tamanho3 = '', $colspan3 = '', $mover3 = '', $direita = false)
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $formataCol = function($tam, $span, $mov) {
            if (empty($tam) && empty($span)) {
                return 'col';
            }
            if ($tam === 'xs' || empty($tam)) {
                $prefixo = 'col';
            } else {
                $prefixo = 'col-' . $tam;
            }

            $col = !empty($span) ? ($prefixo . '-' . $span) : $prefixo;

            if (!empty($mov)) {
                if ($tam === 'xs' || empty($tam)) {
                    $col .= ' offset-' . $mov;
                } else {
                    $col .= ' offset-' . $tam . '-' . $mov;
                }
            }
            return $col;
        };

        $um = $formataCol($tamanho, $colspan, $mover);
        $dois = !empty($tamanho2) ? (' ' . $formataCol($tamanho2, $colspan2, $mover2)) : '';
        $tres = !empty($tamanho3) ? (' ' . $formataCol($tamanho3, $colspan3, $mover3)) : '';

        if ($direita) {
            $alinha = ' text-end';
        } else {
            $alinha = '';
        }
        $divisor = '<div class="' . $um . $dois . $tres . $alinha . $classe . '"' . $id . '>' . PHP_EOL . $conteudo . '</div>' . PHP_EOL;
        return $divisor;
    }

    /**
     * Gera uma pilha vertical (.vstack) para empilhamento automático de itens com espaçamento flexível.
     *
     * @param string $conteudo Itens ou elementos HTML a serem empilhados.
     * @param int $gap Espaçamento vertical entre os itens (de 0 a 5).
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Contêiner <div class="vstack gap-..."> formatado.
     */
    public function divVStack($conteudo, $gap = 3, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $gapClasse = ($gap !== '' && $gap !== null) ? (' gap-' . (int)$gap) : '';
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $html = '';
        if (is_array($conteudo)) {
            foreach ($conteudo as $item) {
                $html .= $item . PHP_EOL;
            }
        } else {
            $html = $conteudo . PHP_EOL;
        }

        return '<div class="vstack' . $gapClasse . $classe . '"' . $id . '>' . PHP_EOL .
               $html .
               '</div>' . PHP_EOL;
    }

    /**
     * Gera uma pilha horizontal (.hstack) para disposição em linha de itens com espaçamento flexível.
     *
     * @param string $conteudo Itens ou elementos HTML alinhados horizontalmente.
     * @param int $gap Espaçamento horizontal entre os itens (de 0 a 5).
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Contêiner <div class="hstack gap-..."> formatado.
     */
    public function divHStack($conteudo, $gap = 3, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $gapClasse = ($gap !== '' && $gap !== null) ? (' gap-' . (int)$gap) : '';
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $html = '';
        if (is_array($conteudo)) {
            foreach ($conteudo as $item) {
                $html .= $item . PHP_EOL;
            }
        } else {
            $html = $conteudo . PHP_EOL;
        }

        return '<div class="hstack' . $gapClasse . $classe . '"' . $id . '>' . PHP_EOL .
               $html .
               '</div>' . PHP_EOL;
    }

    /**
     * Gera um separador vertical visual (.vr - Vertical Rule) para pilhas ou barras de ferramentas.
     *
     * @param string $classe Classes CSS adicionais para altura, cor ou margem.
     * @return string Elemento <div class="vr"> formatado.
     */
    public function divVr($classe = '')
    {
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        return '<div class="vr' . $classe . '"></div>' . PHP_EOL;
    }

    /**
     * Gera a estrutura formal de um formulário HTML <form> com método POST.
     *
     * @param string $conteudo Campos e elementos internos do formulário.
     * @param string $acao URL de destino para submissão dos dados.
     * @param string $id Atributo ID opcional do formulário.
     * @param string $classe Classes CSS adicionais.
     * @param string $nome Atributo name opcional do formulário.
     * @param string $aoenviar Código JavaScript para o evento onsubmit.
     * @return string Tag <form> completa formatada.
     */
    public function generalForm($conteudo, $acao, $id = '', $classe = '', $nome = '', $aoenviar = '')
    {
        if (empty($id)) {
            $id = strtoupper(md5(uniqid(rand(), true)));
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if (!empty($nome)) {
            $nome = ' name="' . $nome . '"';
        }
        if (!empty($aoenviar)) {
            $aoenviar = ' onsubmit="' . $aoenviar . '"';
        }
        $form = '<form action="' . $acao . '" method="POST" class="form' . $classe . '" enctype="multipart/form-data" id="' . $id . '"' . $nome . $aoenviar . '>' . PHP_EOL .
                '<fieldset>' . PHP_EOL .
                $conteudo . 
                '</fieldset>' . PHP_EOL . '</form>' . PHP_EOL;
        return $form;
    }

    /**
     * Gera um botão padrão de interface (<button type="button">) com suporte a temas e estados.
     *
     * @param string $nome Atributo name do botão.
     * @param string $valor Atributo value do botão.
     * @param string $rotulo Texto ou conteúdo visível do botão.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Contexto de cor do Bootstrap (ex: 'primary', 'secondary', 'danger').
     * @param string $tamanho Tamanho do botão ('lg' para grande ou 'sm' para pequeno).
     * @param bool $contorno Se true, aplica a variante outline (.btn-outline-*).
     * @param bool $bloco Se true, expande em largura total com .w-100.
     * @param bool $desativado Se true, desativa o botão com o atributo disabled.
     * @param bool $onclick Se true, habilita a execução da função informada em $funcao.
     * @param string $funcao Código JavaScript executado no clique (onclick).
     * @param bool $modaldis Se true, adiciona o atributo data-bs-dismiss="modal".
     * @return string Elemento <button type="button"> formatado.
     */
    public function buttonButton($nome = '', $valor = '', $rotulo = 'Enviar', $id = '', $classe = 'primary', $tamanho = '', $contorno = false, $bloco = false, $desativado = false, $onclick = false, $funcao = '', $modaldis = false)
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($nome)) { $nome = ' name="' . $nome . '"';}
        if (!empty($valor)) { $valor = ' value="' . $valor . '"';}
        if (!empty($id)) { $id = ' id="' . $id . '"'; }
        if ($desativado) { $off = ' disabled'; }
        else { $off = ''; }
        if ($bloco) { $largura = ' w-100'; }
        else { $largura = ''; }
        if ($contorno) { $linha = 'outline-'; }
        else { $linha = ''; }
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') { $tamanho = ' btn-lg'; }
            elseif ($tamanho == 'S' || $tamanho == 'sm') { $tamanho = ' btn-sm'; }
        }
        if ($onclick and !empty($funcao)) { $clique = ' onclick="' . $funcao . '"'; }
        else { $clique = ''; }
        if ($modaldis) { $dispensar = ' data-bs-dismiss="modal" data-dismiss="modal"'; }
        else { $dispensar = ''; }
        return '<button type="button"' . $id . ' class="btn btn-' . $linha . $classe . $tamanho . $largura . '"' . $nome . $valor . $clique . $dispensar . $off . '>' . $rotulo . '</button>';
    }

    /**
     * Gera um botão de envio de formulário (<button type="submit">).
     *
     * @param string $nome Atributo name do botão.
     * @param string $valor Atributo value do botão.
     * @param string $rotulo Texto ou conteúdo visível do botão.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Contexto de cor do Bootstrap (ex: 'primary', 'success').
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param bool $contorno Se true, aplica a variante outline (.btn-outline-*).
     * @param bool $bloco Se true, expande em largura total com .w-100.
     * @param bool $desativado Se true, desativa o botão.
     * @param bool $onclick Se true, habilita a execução do código onclick.
     * @param string $funcao Código JavaScript executado no clique.
     * @return string Elemento <button type="submit"> formatado.
     */
    public function buttonSubmit($nome, $valor, $rotulo = 'Enviar', $id = '', $classe = 'primary', $tamanho = '', $contorno = false, $bloco = false, $desativado = false, $onclick = false, $funcao = '')
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) { $id = ' id="' . $id . '"'; }
        if ($desativado) { $off = ' disabled'; }
        else { $off = ''; }
        if ($bloco) { $largura = ' w-100'; }
        else { $largura = ''; }
        if ($contorno) { $linha = 'outline-'; }
        else { $linha = ''; }
        if ($tamanho == 'L' || $tamanho == 'lg') { $tamanho = ' btn-lg'; }
        elseif ($tamanho == 'S' || $tamanho == 'sm') { $tamanho = ' btn-sm'; }
        if ($onclick and !empty($funcao)) { $clique = ' onclick="' . $funcao . '"'; }
        else { $clique = ''; }
        return '<button type="submit"' . $id . ' class="btn btn-' . $linha . $classe . $tamanho . $largura . '" name="' . $nome . '" value="' . $valor . '"' . $clique . $off . '>' . $rotulo . '</button>';
    }

    /**
     * Gera um hiperlink estilizado visualmente como botão do Bootstrap (<a class="btn ..." role="button">).
     *
     * @param string $link URL de destino do link.
     * @param string $rotulo Texto ou conteúdo visível do link.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Contexto de cor do Bootstrap (ex: 'primary', 'warning').
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param bool $contorno Se true, aplica a variante outline.
     * @param bool $bloco Se true, expande em largura total.
     * @param bool $desativado Se true, desativa visualmente o link com a classe .disabled.
     * @param bool $onclick Se true, habilita código onclick.
     * @param string $funcao Código JavaScript executado no clique.
     * @return string Elemento <a> estilizado como botão.
     */
    public function buttonlink($link = '#', $rotulo = 'Link', $id = '', $classe = 'warning', $tamanho = '', $contorno = false, $bloco = false, $desativado = false, $onclick = false, $funcao = '')
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) { $id = ' id="' . $id . '"'; }
        if ($desativado) { $off = ' disabled'; $aria = ' aria-disabled="true"'; }
        else { $off = ''; $aria = ''; }
        if ($bloco) { $largura = ' w-100'; }
        else { $largura = ''; }
        if ($contorno) { $linha = 'outline-'; }
        else { $linha = ''; }
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') { $tamanho = ' btn-lg'; }
            elseif ($tamanho == 'S' || $tamanho == 'sm') { $tamanho = ' btn-sm'; }
        }
        if (empty($link) or $link == '#') { $href = ''; }
        else { $href = ' href="' . $link . '"'; }
        if ($onclick and !empty($funcao)) { $clique = ' onclick="' . $funcao . '"'; }
        else { $clique = ''; }
        return '<a' . $href . $id . ' class="btn btn-' . $linha . $classe . $tamanho . $largura . $off . '" role="button"' . $clique . $aria . '>' . $rotulo . '</a>';
    }

    /**
     * Gera um botão de fechar nativo do Bootstrap 5 (.btn-close).
     *
     * @param string $dismiss Componente a dispensar ('modal', 'alert', 'offcanvas' ou 'toast').
     * @param bool $branco Se true, aplica a variante branca .btn-close-white.
     * @param bool $desativado Se true, desativa o botão de fechar.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Elemento <button class="btn-close"> formatado.
     */
    public function buttonClose($dismiss = '', $branco = false, $desativado = false, $id = '', $classe = '')
    {
        $classes = 'btn-close';
        if ($branco) {
            $classes .= ' btn-close-white';
        }
        if (!empty($classe)) {
            $classes .= ' ' . $classe;
        }

        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        $dismissAttr = !empty($dismiss) ? (' data-bs-dismiss="' . $dismiss . '"') : '';
        $disAttr = $desativado ? ' disabled' : '';

        return '<button type="button" class="' . $classes . '" aria-label="Close"' . $dismissAttr . $disAttr . $id . '></button>';
    }

    /**
     * Gera um botão configurado para disparar a abertura de uma gaveta lateral (Offcanvas).
     *
     * @param string $alvoid ID do elemento Offcanvas de destino (sem o caractere #).
     * @param string $rotulo Texto do botão.
     * @param string $id Atributo ID opcional do botão.
     * @param string $classe Contexto de cor do botão.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param bool $contorno Se true, aplica variante outline.
     * @param bool $bloco Se true, expande em largura total.
     * @param bool $desativado Se true, desativa o botão.
     * @return string Botão configurado com atributos data-bs-toggle="offcanvas".
     */
    public function buttonOffcanvas($alvoid, $rotulo = 'Abrir', $id = '', $classe = 'primary', $tamanho = '', $contorno = false, $bloco = false, $desativado = false)
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if ($desativado) {
            $off = ' disabled';
        } else {
            $off = '';
        }
        if ($bloco) {
            $largura = ' w-100';
        } else {
            $largura = '';
        }
        if ($contorno) {
            $linha = 'outline-';
        } else {
            $linha = '';
        }
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $tamanho = ' btn-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $tamanho = ' btn-sm';
            }
        }
        $target = (strpos($alvoid, '#') === 0) ? $alvoid : ('#' . $alvoid);
        $controls = ltrim($target, '#');

        return '<button type="button"' . $id . ' class="btn btn-' . $linha . $classe . $tamanho . $largura . '" data-bs-toggle="offcanvas" data-bs-target="' . $target . '" aria-controls="' . $controls . '"' . $off . '>' . $rotulo . '</button>';
    }

    /**
     * Gera um botão com indicador giratório de carregamento (spinner) integrado.
     *
     * @param string $rotulo Texto exibido junto ao spinner.
     * @param string $tipo Tipo do spinner ('border' para borda ou 'grow' para pulso).
     * @param string $classe Contexto de cor do botão.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param string $id Atributo ID opcional do elemento.
     * @param bool $desativado Se true, mantém o botão desabilitado durante o carregamento.
     * @param string $posicao Posição do spinner ('inicio' para esquerda ou 'fim' para direita).
     * @param bool $contorno Se true, aplica variante outline.
     * @param bool $bloco Se true, expande em largura total.
     * @return string Botão com animação de spinner embutida.
     */
    public function buttonSpinner($rotulo = 'Carregando...', $tipo = 'border', $classe = 'primary', $tamanho = '', $id = '', $desativado = true, $posicao = 'inicio', $contorno = false, $bloco = false)
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if ($desativado) {
            $off = ' disabled';
            $aria = ' aria-disabled="true"';
        } else {
            $off = '';
            $aria = '';
        }
        if ($bloco) {
            $largura = ' w-100';
        } else {
            $largura = '';
        }
        if ($contorno) {
            $linha = 'outline-';
        } else {
            $linha = '';
        }
        $classeTam = '';
        $spinnerSm = ' spinner-' . $tipo . '-sm';
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $classeTam = ' btn-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $classeTam = ' btn-sm';
            }
        }

        $spinnerHtml = '<span class="spinner-' . $tipo . $spinnerSm . '" aria-hidden="true"></span>';
        
        if (empty($rotulo)) {
            $conteudo = $spinnerHtml . '<span class="visually-hidden">Carregando...</span>';
        } else {
            if ($posicao == 'fim') {
                $conteudo = $rotulo . ' ' . $spinnerHtml;
            } else {
                $conteudo = $spinnerHtml . ' ' . $rotulo;
            }
        }

        return '<button type="button"' . $id . ' class="btn btn-' . $linha . $classe . $classeTam . $largura . '"' . $off . $aria . '>' . $conteudo . '</button>';
    }

    /**
     * Gera um botão configurado para acionar e exibir uma notificação Toast via Vanilla JS.
     *
     * @param string $alvoid ID do elemento Toast de destino (sem o caractere #).
     * @param string $rotulo Texto do botão.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Contexto de cor do botão.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param bool $contorno Se true, aplica variante outline.
     * @param bool $bloco Se true, expande em largura total.
     * @param bool $desativado Se true, desativa o botão.
     * @return string Botão com manipulador de clique para exibição de Toast.
     */
    public function buttonToast($alvoid, $rotulo = 'Notificação', $id = '', $classe = 'primary', $tamanho = '', $contorno = false, $bloco = false, $desativado = false)
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $off = $desativado ? ' disabled' : '';
        $largura = $bloco ? ' w-100' : '';
        $linha = $contorno ? 'outline-' : '';
        $classeTam = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $classeTam = ' btn-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $classeTam = ' btn-sm';
            }
        }
        $target = ltrim($alvoid, '#');
        $clique = ' onclick="var t=document.getElementById(\'' . $target . '\');if(t){bootstrap.Toast.getOrCreateInstance(t).show();}"';

        return '<button type="button"' . $id . ' class="btn btn-' . $linha . $classe . $classeTam . $largura . '"' . $clique . $off . '>' . $rotulo . '</button>';
    }

    /**
     * Gera um botão skeleton (placeholder) para simulação de estados de carregamento.
     *
     * @param int $colunas Largura do botão em colunas da grade (1 a 12).
     * @param string $classe Contexto de cor do botão.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param string $animacao Animação de carregamento ('glow' ou 'wave').
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classeExtra Classes CSS adicionais.
     * @return string Botão skeleton formatado.
     */
    public function buttonPlaceholder($colunas = 4, $classe = 'primary', $tamanho = '', $animacao = '', $id = '', $classeExtra = '')
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $classeTam = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $classeTam = ' btn-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $classeTam = ' btn-sm';
            }
        }
        $colClasse = '';
        if (is_numeric($colunas)) {
            $colClasse = ' col-' . (int)$colunas;
        } elseif (!empty($colunas)) {
            $colClasse = ' ' . $colunas;
        }
        if (!empty($classeExtra)) {
            $classeExtra = ' ' . $classeExtra;
        }

        $btn = '<a class="btn btn-' . $classe . $classeTam . ' disabled placeholder' . $colClasse . $classeExtra . '" aria-disabled="true"' . $id . '></a>';

        if (!empty($animacao)) {
            $btn = '<span class="placeholder-' . $animacao . '">' . $btn . '</span>';
        }

        return $btn;
    }

    /**
     * Gera um link com ícone e suporte à animação nativa de hover do Bootstrap 5.3 (.icon-link-hover).
     *
     * @param string $rotulo Texto do link.
     * @param string $url URL de destino.
     * @param string $icone Nome do ícone do Bootstrap Icons (sem o prefixo bi-).
     * @param bool $hover Se true, adiciona o efeito de animação ao passar o mouse (.icon-link-hover).
     * @param string $posicaoIcone Posição do ícone ('inicio' para esquerda ou 'fim' para direita).
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @param string $target Atributo target do link (ex: '_blank').
     * @return string Elemento <a> formatado com ícone e classes .icon-link.
     */
    public function linkIcone($rotulo, $url = '#', $icone = 'arrow-right', $hover = true, $posicaoIcone = 'fim', $id = '', $classe = '', $target = '')
    {
        $classeLink = 'icon-link';
        if ($hover) {
            $classeLink .= ' icon-link-hover';
        }
        if (!empty($classe)) {
            $classeLink .= ' ' . $classe;
        }

        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        $targetAttr = !empty($target) ? (' target="' . $target . '"') : '';
        if ($target == '_blank') {
            $targetAttr .= ' rel="noopener noreferrer"';
        }

        $iconeHtml = !empty($icone) ? $this->obtemGlyphicon($icone) : '';

        if ($posicaoIcone == 'inicio' || $posicaoIcone == 'start') {
            $conteudo = $iconeHtml . ' ' . $rotulo;
        } else {
            $conteudo = $rotulo . ' ' . $iconeHtml;
        }

        return '<a href="' . $url . '" class="' . $classeLink . '"' . $id . $targetAttr . '>' . $conteudo . '</a>';
    }

    /**
     * Gera um botão com tooltip nativo do Bootstrap 5 integrado.
     *
     * @param string $rotulo Texto visível do botão.
     * @param string $tituloTooltip Texto explicativo exibido no tooltip.
     * @param string $posicao Posicionamento do tooltip ('top', 'bottom', 'left'/'start', 'right'/'end').
     * @param string $classe Contexto de cor do botão.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param bool $contorno Se true, aplica variante outline.
     * @param string $onclick Código JavaScript opcional para o evento onclick.
     * @return string Botão configurado com atributos data-bs-toggle="tooltip".
     */
    public function buttonTooltip($rotulo, $tituloTooltip, $posicao = 'top', $classe = 'secondary', $id = '', $tamanho = '', $contorno = false, $onclick = '')
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $linha = $contorno ? 'outline-' : '';
        $classeTam = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $classeTam = ' btn-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $classeTam = ' btn-sm';
            }
        }
        $clique = !empty($onclick) ? (' onclick="' . $onclick . '"') : '';

        if ($posicao == 'left') {
            $posicao = 'start';
        } elseif ($posicao == 'right') {
            $posicao = 'end';
        }

        $tooltipAttr = ' data-bs-toggle="tooltip" data-bs-placement="' . $posicao . '" data-bs-title="' . htmlspecialchars($tituloTooltip, ENT_QUOTES, 'UTF-8') . '"';

        return '<button type="button"' . $id . ' class="btn btn-' . $linha . $classe . $classeTam . '"' . $tooltipAttr . $clique . '>' . $rotulo . '</button>';
    }

    /**
     * Gera um botão com popover interativo do Bootstrap 5 integrado.
     *
     * @param string $rotulo Texto visível do botão.
     * @param string $conteudo Conteúdo principal exibido no corpo do popover.
     * @param string $titulo Título superior do popover (opcional).
     * @param string $posicao Posicionamento ('top', 'bottom', 'left'/'start', 'right'/'end').
     * @param string $trigger Gatilho de ativação ('click', 'hover' ou 'focus').
     * @param string $classe Contexto de cor do botão.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @return string Botão configurado com atributos data-bs-toggle="popover".
     */
    public function buttonPopover($rotulo, $conteudo, $titulo = '', $posicao = 'right', $trigger = 'click', $classe = 'danger', $id = '', $tamanho = '')
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $classeTam = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $classeTam = ' btn-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $classeTam = ' btn-sm';
            }
        }

        if ($posicao == 'left') {
            $posicao = 'start';
        } elseif ($posicao == 'right') {
            $posicao = 'end';
        }

        $popAttr = ' data-bs-toggle="popover" data-bs-placement="' . $posicao . '" data-bs-content="' . htmlspecialchars($conteudo, ENT_QUOTES, 'UTF-8') . '"';

        if (!empty($titulo)) {
            $popAttr .= ' data-bs-title="' . htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') . '"';
        }
        if ($trigger == 'hover') {
            $popAttr .= ' data-bs-trigger="hover focus"';
        } elseif ($trigger == 'focus') {
            $popAttr .= ' data-bs-trigger="focus"';
        }

        return '<button type="button"' . $id . ' class="btn btn-' . $classe . $classeTam . '"' . $popAttr . '>' . $rotulo . '</button>';
    }

    /**
     * Gera um agrupamento contíguo de botões (.btn-group).
     *
     * @param array $botoes Lista de strings contendo marcação HTML dos botões.
     * @param bool $vertical Se true, empilha verticalmente com .btn-group-vertical.
     * @param string $tamanho Tamanho do grupo ('lg' ou 'sm').
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @param string $ariaLabel Rótulo de acessibilidade (aria-label).
     * @return string Contêiner de grupo de botões formatado.
     */
    public function geraButtonGroup($botoes, $vertical = false, $tamanho = '', $id = '', $classe = '', $ariaLabel = 'Grupo de botões')
    {
        $classeGroup = $vertical ? 'btn-group-vertical' : 'btn-group';
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $classeGroup .= ' btn-group-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $classeGroup .= ' btn-group-sm';
            }
        }
        if (!empty($classe)) {
            $classeGroup .= ' ' . $classe;
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        $htmlBotoes = '';
        if (is_array($botoes)) {
            foreach ($botoes as $btn) {
                if (is_string($btn)) {
                    $htmlBotoes .= $btn . PHP_EOL;
                    continue;
                }
                if (!is_array($btn)) {
                    continue;
                }

                $rotulo = isset($btn['rotulo']) ? $btn['rotulo'] : (isset($btn['nome']) ? $btn['nome'] : '');
                $btnClasse = isset($btn['classe']) ? $btn['classe'] : 'primary';
                if ($btnClasse == 'default') {
                    $btnClasse = 'secondary';
                }
                $linha = !empty($btn['contorno']) ? 'outline-' : '';
                $icone = !empty($btn['icone']) ? ($this->obtemGlyphicon($btn['icone']) . ' ') : '';
                $ativo = !empty($btn['ativo']) ? ' active' : '';
                $ariaCurrent = !empty($btn['ativo']) ? ' aria-current="true"' : '';
                $desativado = !empty($btn['desativado']);
                $clique = !empty($btn['clique']) ? (' onclick="' . $btn['clique'] . '"') : '';
                $btnId = !empty($btn['id']) ? (' id="' . $btn['id'] . '"') : '';

                if (!empty($btn['url'])) {
                    $off = $desativado ? ' disabled aria-disabled="true"' : '';
                    $htmlBotoes .= '<a href="' . $btn['url'] . '" class="btn btn-' . $linha . $btnClasse . $ativo . '" role="button"' . $btnId . $clique . $off . $ariaCurrent . '>' . $icone . $rotulo . '</a>' . PHP_EOL;
                } else {
                    $off = $desativado ? ' disabled' : '';
                    $tipo = isset($btn['tipo']) ? $btn['tipo'] : 'button';
                    $htmlBotoes .= '<button type="' . $tipo . '" class="btn btn-' . $linha . $btnClasse . $ativo . '"' . $btnId . $clique . $off . $ariaCurrent . '>' . $icone . $rotulo . '</button>' . PHP_EOL;
                }
            }
        } else {
            $htmlBotoes = $botoes . PHP_EOL;
        }

        $grupo = '<div class="' . $classeGroup . '"' . $id . ' role="group" aria-label="' . $ariaLabel . '">' . PHP_EOL .
                 $htmlBotoes .
                 '</div>' . PHP_EOL;
        return $grupo;
    }

    /**
     * Gera um grupo de botões alternadores modernos baseados em inputs .btn-check.
     *
     * @param string $nome Atributo name compartilhado pelos inputs.
     * @param array $opcoes Array associativo de opções [valor => rotulo].
     * @param string $tipo Tipo de seleção ('radio' para exclusiva ou 'checkbox' para múltipla).
     * @param string $classe Contexto de cor dos botões.
     * @param bool $contorno Se true, aplica variante outline.
     * @param string $tamanho Tamanho dos botões ('lg' ou 'sm').
     * @param string $id Prefixo para geração dos IDs dos inputs.
     * @param bool $vertical Se true, dispõe verticalmente.
     * @param array|string $selecionados Valor ou lista de valores previamente marcados.
     * @return string Conjunto de botões alternadores .btn-check formatados.
     */
    public function geraButtonToggleGroup($nome, $opcoes, $tipo = 'radio', $classe = 'primary', $contorno = true, $tamanho = '', $id = '', $vertical = false, $selecionados = array())
    {
        if (empty($id)) {
            $id = 'btngrp-' . substr(md5(uniqid(rand(), true)), 0, 8);
        }
        $classeGroup = $vertical ? 'btn-group-vertical' : 'btn-group';
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $classeGroup .= ' btn-group-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $classeGroup .= ' btn-group-sm';
            }
        }
        $linha = $contorno ? 'outline-' : '';
        if ($classe == 'default') {
            $classe = 'secondary';
        }

        $html = '<div class="' . $classeGroup . '" id="' . $id . '" role="group">' . PHP_EOL;
        $i = 0;
        foreach ($opcoes as $valor => $dados) {
            $i++;
            $btnId = $id . '-opt' . $i;

            if (is_array($dados)) {
                $rotulo = isset($dados['rotulo']) ? $dados['rotulo'] : '';
                $icone = !empty($dados['icone']) ? ($this->obtemGlyphicon($dados['icone']) . ' ') : '';
                $desativado = !empty($dados['desativado']) ? ' disabled' : '';
                $itemClasse = isset($dados['classe']) ? $dados['classe'] : $classe;
                if ($itemClasse == 'default') { $itemClasse = 'secondary'; }
            } else {
                $rotulo = $dados;
                $icone = '';
                $desativado = '';
                $itemClasse = $classe;
            }

            $ckd = '';
            if (is_array($selecionados)) {
                if (in_array($valor, $selecionados) || (isset($selecionados[$nome]) && $selecionados[$nome] == $valor)) {
                    $ckd = ' checked';
                }
            } elseif ($selecionados == $valor) {
                $ckd = ' checked';
            }

            $inputName = ($tipo == 'checkbox' && substr($nome, -2) != '[]') ? ($nome . '[]') : $nome;

            $html .= '<input type="' . $tipo . '" class="btn-check" name="' . $inputName . '" id="' . $btnId . '" value="' . $valor . '" autocomplete="off"' . $ckd . $desativado . '>' . PHP_EOL .
                     '<label class="btn btn-' . $linha . $itemClasse . '" for="' . $btnId . '">' . $icone . $rotulo . '</label>' . PHP_EOL;
        }
        $html .= '</div>' . PHP_EOL;
        return $html;
    }

    /**
     * Gera uma barra de ferramentas (.btn-toolbar) para combinar múltiplos grupos de botões.
     *
     * @param array $grupos Lista de grupos de botões em HTML a serem agregados.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @param string $ariaLabel Rótulo de acessibilidade (aria-label).
     * @return string Elemento <div class="btn-toolbar"> formatado.
     */
    public function divButtonToolbar($grupos, $id = '', $classe = '', $ariaLabel = 'Barra de ferramentas')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $htmlGrupos = '';
        if (is_array($grupos)) {
            foreach ($grupos as $grp) {
                $htmlGrupos .= $grp . PHP_EOL;
            }
        } else {
            $htmlGrupos = $grupos . PHP_EOL;
        }

        $toolbar = '<div class="btn-toolbar' . $classe . '"' . $id . ' role="toolbar" aria-label="' . $ariaLabel . '">' . PHP_EOL .
                   $htmlGrupos .
                   '</div>' . PHP_EOL;
        return $toolbar;
    }

    /**
     * Gera um campo de entrada do tipo botão (<input type="button">).
     *
     * @param string $nome Atributo name do campo.
     * @param string $rotulo Texto exibido no botão (atributo value).
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Contexto de cor do botão.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param bool $contorno Se true, aplica variante outline.
     * @param bool $bloco Se true, expande em largura total.
     * @param bool $desativado Se true, desativa o campo com disabled.
     * @param bool $onclick Se true, habilita execução de código onclick.
     * @param string $funcao Código JavaScript executado no clique.
     * @return string Elemento <input type="button"> formatado.
     */
    public function inputButton($nome, $rotulo = 'Input', $id = '', $classe = 'primary', $tamanho = '', $contorno = false, $bloco = false, $desativado = false, $onclick = false, $funcao = '')
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) { $id = ' id="' . $id . '"'; }
        if ($desativado) { $off = ' disabled'; }
        else { $off = ''; }
        if ($bloco) { $largura = ' w-100'; }
        else { $largura = ''; }
        if ($contorno) { $linha = 'outline-'; }
        else { $linha = ''; }
        if ($tamanho == 'L' || $tamanho == 'lg') { $tamanho = ' btn-lg'; }
        elseif ($tamanho == 'S' || $tamanho == 'sm') { $tamanho = ' btn-sm'; }
        if ($onclick and !empty($funcao)) { $clique = ' onclick="' . $funcao . '"'; }
        else { $clique = ''; }
        return '<input type="button"' . $id . ' class="btn btn-' . $linha . $classe . $tamanho . $largura . '" name="' . $nome . '" value="' . $rotulo . '"' . $clique . $off . '>';
    }

    /**
     * Gera um campo de entrada do tipo envio (<input type="submit">).
     *
     * @param string $nome Atributo name do campo.
     * @param string $rotulo Texto exibido no botão (atributo value).
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Contexto de cor do botão.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param bool $contorno Se true, aplica variante outline.
     * @param bool $bloco Se true, expande em largura total.
     * @param bool $desativado Se true, desativa o campo.
     * @param bool $onclick Se true, habilita execução de código onclick.
     * @param string $funcao Código JavaScript executado no clique.
     * @return string Elemento <input type="submit"> formatado.
     */
    public function inputSubmit($nome, $rotulo = 'Submit', $id = '', $classe = 'success', $tamanho = '', $contorno = false, $bloco = false, $desativado = false, $onclick = false, $funcao = '')
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) { $id = ' id="' . $id . '"'; }
        if ($desativado) { $off = ' disabled'; }
        else { $off = ''; }
        if ($bloco) { $largura = ' w-100'; }
        else { $largura = ''; }
        if ($contorno) { $linha = 'outline-'; }
        else { $linha = ''; }
        if ($tamanho == 'L' || $tamanho == 'lg') { $tamanho = ' btn-lg'; }
        elseif ($tamanho == 'S' || $tamanho == 'sm') { $tamanho = ' btn-sm'; }
        if ($onclick and !empty($funcao)) { $clique = ' onclick="' . $funcao . '"'; }
        else { $clique = ''; }
        return '<input type="submit"' . $id . ' class="btn btn-' . $linha . $classe . $tamanho . $largura . '" name="' . $nome . '" value="' . $rotulo . '"' . $clique . $off . '>';
    }

    /**
     * Gera um campo de entrada do tipo redefinição (<input type="reset">).
     *
     * @param string $nome Atributo name do campo.
     * @param string $rotulo Texto exibido no botão (atributo value).
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Contexto de cor do botão.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param bool $contorno Se true, aplica variante outline.
     * @param bool $bloco Se true, expande em largura total.
     * @param bool $desativado Se true, desativa o campo.
     * @param bool $onclick Se true, habilita execução de código onclick.
     * @param string $funcao Código JavaScript executado no clique.
     * @return string Elemento <input type="reset"> formatado.
     */
    public function inputReset($nome, $rotulo = 'Reset', $id = '', $classe = 'secondary', $tamanho = '', $contorno = false, $bloco = false, $desativado = false, $onclick = false, $funcao = '')
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) { $id = ' id="' . $id . '"'; }
        if ($desativado) { $off = ' disabled'; }
        else { $off = ''; }
        if ($bloco) { $largura = ' w-100'; }
        else { $largura = ''; }
        if ($contorno) { $linha = 'outline-'; }
        else { $linha = ''; }
        if ($tamanho == 'L' || $tamanho == 'lg') { $tamanho = ' btn-lg'; }
        elseif ($tamanho == 'S' || $tamanho == 'sm') { $tamanho = ' btn-sm'; }
        if ($onclick and !empty($funcao)) { $clique = ' onclick="' . $funcao . '"'; }
        else { $clique = ''; }
        return '<input type="reset"' . $id . ' class="btn btn-' . $linha . $classe . $tamanho . $largura . '" name="' . $nome . '" value="' . $rotulo . '"' . $clique . $off . '>';
    }

    /**
     * Gera um campo oculto para transporte de dados em formulários (<input type="hidden">).
     *
     * @param string $id Atributo ID do elemento.
     * @param string $nome Atributo name do campo.
     * @param string|int $valor Valor associado ao campo.
     * @return string Elemento <input type="hidden"> formatado.
     */
    public function inputOculto($id, $nome, $valor)
    {
        return '<input type="hidden" name="' . $nome . '" id="' . $id . '" value="' . $valor . '">' . PHP_EOL;
    }

    /**
     * Gera um campo de texto integrado a um grupo com addons prefixo e sufixo (.input-group-text).
     *
     * @param string $id Atributo ID do campo de texto.
     * @param string $nome Atributo name do campo.
     * @param string $valor Valor inicial do campo.
     * @param int|string $tamanho Tamanho do campo (atributo size).
     * @param int|string $maximo Quantidade máxima de caracteres permitida (maxlength).
     * @param string $rotulo Rótulo superior do campo (<label>).
     * @param string $addon1 Primeiro elemento addon antes do campo.
     * @param string $addon2 Segundo elemento addon antes do campo.
     * @param string $addon3 Primeiro elemento addon após o campo.
     * @param string $addon4 Segundo elemento addon após o campo.
     * @param string $dica Texto de ajuda/placeholder do campo.
     * @param bool $requerido Se true, marca o campo como obrigatório.
     * @param bool $foco Se true, adiciona o atributo autofocus.
     * @return string Grupo de entrada de texto formatado.
     */
    public function inputGroupTexto($id, $nome, $valor, $tamanho, $maximo, $rotulo = '',
                                    $addon1 = '', $addon2 = '', $addon3 = '', $addon4 = '', $dica = '', $requerido = false, $foco = false)
    {
        if (!empty($rotulo)) {
            if ($requerido) {
                $asterisco = '<abbr title="required"> *</abbr>';
            } else {
                $asterisco = '';
            }
            $rotulo = '<label for="' . $id . '" class="form-label">' . $rotulo . $asterisco . '</label>' . PHP_EOL;
        }
        if (!empty($dica)) {
            $dica = ' placeholder="' . $dica . '"';
        }
        if ($foco) {
            $afc = ' autofocus';
        } else {
            $afc = '';
        }
        $texto = $rotulo .
                 '<div class="input-group">' . PHP_EOL;
        if (!empty($addon1)) {
            $texto .= '<span class="input-group-text" id="basic-addon1">'.$addon1.'</span>' . PHP_EOL;
        }
        if (!empty($addon2)) {
            $texto .= '<span class="input-group-text" id="basic-addon2">'.$addon2.'</span>' . PHP_EOL;
        }
        $texto .= '<input type="text" name="' . $nome . '" id="' . $id . '" class="form-control"' . $dica .
                  ' value="' . $valor . '" size="' . $tamanho . '" maxlength="' . $maximo . '"' . $afc . '>' . PHP_EOL;
        if (!empty($addon3)) {
            $texto .= '<span class="input-group-text" id="basic-addon3">'.$addon3.'</span>' . PHP_EOL;
        }
        if (!empty($addon4)) {
            $texto .= '<span class="input-group-text" id="basic-addon4">'.$addon4.'</span>' . PHP_EOL;
        }
        $texto .= '</div>' . PHP_EOL;
        return $texto;
    }

    /**
     * Gera um invólucro de grupo de entrada com addons flexíveis de texto ou ícones (.input-group-text).
     *
     * @param string $conteudoInput Campo de formulário HTML a ser envolvido.
     * @param string $prefixo Conteúdo textual ou ícone posicionado antes do campo.
     * @param string $sufixo Conteúdo textual ou ícone posicionado após o campo.
     * @param string $tamanho Tamanho do grupo ('lg' ou 'sm').
     * @param string $id Atributo ID opcional do contêiner.
     * @param string $classe Classes CSS adicionais.
     * @return string Contêiner .input-group formatado com addons.
     */
    public function inputGroupAddon($conteudoInput, $prefixo = '', $sufixo = '', $tamanho = '', $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        $classeTam = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'sm' || $tamanho == 'S') {
                $classeTam = ' input-group-sm';
            } elseif ($tamanho == 'lg' || $tamanho == 'L') {
                $classeTam = ' input-group-lg';
            }
        }

        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $formataAddon = function ($addon) {
            if (empty($addon)) {
                return '';
            }
            $res = '';
            $itens = is_array($addon) ? $addon : array($addon);
            foreach ($itens as $item) {
                $trimmed = trim($item);
                if (strpos($trimmed, '<button') === 0 || strpos($trimmed, '<a ') === 0 || strpos($trimmed, '<div class="dropdown') === 0) {
                    $res .= $item . PHP_EOL;
                } else {
                    $res .= '<span class="input-group-text">' . $item . '</span>' . PHP_EOL;
                }
            }
            return $res;
        };

        $prefixoHtml = $formataAddon($prefixo);
        $sufixoHtml = $formataAddon($sufixo);

        return '<div class="input-group' . $classeTam . $classe . '"' . $id . '>' . PHP_EOL .
               $prefixoHtml .
               $conteudoInput . PHP_EOL .
               $sufixoHtml .
               '</div>' . PHP_EOL;
    }

    /**
     * Gera um campo de texto completo integrado em grupo com suporte a prefixo, sufixo e rótulo.
     *
     * @param string $id Atributo ID do campo.
     * @param string $nome Atributo name do campo.
     * @param string $valor Valor inicial do campo.
     * @param string $prefixo Texto ou ícone exibido antes do campo.
     * @param string $sufixo Texto ou ícone exibido após o campo.
     * @param string $rotulo Rótulo superior associado ao campo.
     * @param string $dica Placeholder do campo.
     * @param string $tamanho Tamanho do grupo ('lg' ou 'sm').
     * @param bool $requerido Se true, marca como campo obrigatório.
     * @param bool $desativado Se true, desativa o campo com disabled.
     * @param bool $foco Se true, adiciona autofocus.
     * @param string $classe Classes CSS adicionais.
     * @return string Campo de texto formatado com addons e rótulo.
     */
    public function inputTextoGroup($id, $nome, $valor = '', $prefixo = '', $sufixo = '', $rotulo = '', $dica = '', $tamanho = '', $requerido = false, $desativado = false, $foco = false, $classe = '')
    {
        $rotuloHtml = '';
        if (!empty($rotulo)) {
            $asterisco = $requerido ? '<abbr title="required"> *</abbr>' : '';
            $rotuloHtml = '<label for="' . $id . '" class="form-label">' . $rotulo . $asterisco . '</label>' . PHP_EOL;
        }

        $dicaAttr = !empty($dica) ? (' placeholder="' . htmlspecialchars($dica, ENT_QUOTES, 'UTF-8') . '"') : '';
        $disAttr = $desativado ? ' disabled' : '';
        $focoAttr = $foco ? ' autofocus' : '';
        $reqAttr = $requerido ? ' required' : '';

        $inputHtml = '<input type="text" class="form-control" name="' . $nome . '" id="' . $id . '" value="' . htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') . '"' . $dicaAttr . $disAttr . $focoAttr . $reqAttr . '>';

        return $rotuloHtml . $this->inputGroupAddon($inputHtml, $prefixo, $sufixo, $tamanho, '', $classe);
    }

    /**
     * Gera um campo de entrada de texto convencional (<input type="text">).
     *
     * @param string $id Atributo ID do elemento.
     * @param string $nome Atributo name do campo.
     * @param string $valor Valor inicial do campo.
     * @param int|string $tamanho Tamanho do campo (atributo size).
     * @param int|string $maximo Comprimento máximo permitido (maxlength).
     * @param string $rotulo Rótulo superior (<label>).
     * @param string $dica Placeholder do campo.
     * @param bool $requerido Se true, marca como campo obrigatório.
     * @param bool $desativado Se true, desativa o campo.
     * @param bool $foco Se true, aplica autofocus.
     * @return string Elemento <input type="text"> formatado com rótulo opcional.
     */
    public function inputTexto($id, $nome, $valor, $tamanho, $maximo, $rotulo = '', $dica = '', $requerido = false, $desativado = false, $foco = false)
    {
        if (!empty($rotulo)) {
            if ($requerido) {
                $asterisco = '<abbr title="required"> *</abbr>';
            } else {
                $asterisco = '';
            }
            $rotulo = '<label for="' . $id . '" class="form-label">' . $rotulo . $asterisco . '</label>' . PHP_EOL;
        }
        if (!empty($dica)) {
            $dica = ' placeholder="' . $dica . '"';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        if ($foco) {
            $afc = ' autofocus';
        } else {
            $afc = '';
        }
        $tamAttr = (!empty($tamanho) || $tamanho === '0' || $tamanho === 0) ? (' size="' . $tamanho . '"') : '';
        $maxAttr = (!empty($maximo) || $maximo === '0' || $maximo === 0) ? (' maxlength="' . $maximo . '"') : '';
        $texto = $rotulo .
                 '<input type="text" name="' . $nome . '" id="' . $id . '" class="form-control"' . $dica .
                 ' value="' . $valor . '"' . $tamAttr . $maxAttr . $d . $afc . '>' . PHP_EOL;
        return $texto;
    }

    /**
     * Gera um campo de entrada para endereços de e-mail (<input type="email">).
     *
     * @param string $id Atributo ID do elemento.
     * @param string $nome Atributo name do campo.
     * @param string $valor Valor inicial do campo.
     * @param int|string $tamanho Tamanho do campo (atributo size).
     * @param string $rotulo Rótulo superior (<label>).
     * @param string $dica Placeholder do campo.
     * @param bool $requerido Se true, marca como obrigatório.
     * @param bool $desativado Se true, desativa o campo.
     * @param bool $foco Se true, aplica autofocus.
     * @return string Elemento <input type="email"> formatado com rótulo opcional.
     */
    public function inputEmail($id, $nome, $valor, $tamanho, $rotulo = '', $dica = '', $requerido = false, $desativado = false, $foco = false)
    {
        if (!empty($rotulo)) {
            if ($requerido) {
                $asterisco = '<abbr title="required"> *</abbr>';
            } else {
                $asterisco = '';
            }
            $rotulo = '<label for="' . $id . '" class="form-label">' . $rotulo . $asterisco . '</label>' . PHP_EOL;
        }
        if (!empty($dica)) {
            $dica = ' placeholder="' . $dica . '"';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        if ($foco) {
            $afc = ' autofocus';
        } else {
            $afc = '';
        }
        $tamAttr = (!empty($tamanho) || $tamanho === '0' || $tamanho === 0) ? (' size="' . $tamanho . '"') : '';
        $email = $rotulo .
                 '<input type="email" name="' . $nome . '" id="' . $id . '" class="form-control"' . $dica .
                 ' value="' . $valor . '"' . $tamAttr . $d . $afc . '>' . PHP_EOL;
        return $email;
    }

    /**
     * Gera um campo de entrada de senha protegida (<input type="password">).
     *
     * @param string $id Atributo ID do elemento.
     * @param string $nome Atributo name do campo.
     * @param string $valor Valor inicial do campo.
     * @param int|string $tamanho Tamanho do campo (atributo size).
     * @param string $rotulo Rótulo superior (<label>).
     * @param string $dica Placeholder do campo.
     * @param bool $requerido Se true, marca como obrigatório.
     * @param bool $desativado Se true, desativa o campo.
     * @param bool $foco Se true, aplica autofocus.
     * @return string Elemento <input type="password"> formatado com rótulo opcional.
     */
    public function inputSenha($id, $nome, $valor, $tamanho, $rotulo = '', $dica = '', $requerido = false, $desativado = false, $foco = false)
    {
        if (!empty($rotulo)) {
            if ($requerido) {
                $asterisco = '<abbr title="required"> *</abbr>';
            } else {
                $asterisco = '';
            }
            $rotulo = '<label for="' . $id . '" class="form-label">' . $rotulo . $asterisco . '</label>' . PHP_EOL;
        }
        if (!empty($dica)) {
            $dica = ' placeholder="' . $dica . '"';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        if ($foco) {
            $afc = ' autofocus';
        } else {
            $afc = '';
        }
        $tamAttr = (!empty($tamanho) || $tamanho === '0' || $tamanho === 0) ? (' size="' . $tamanho . '"') : '';
        $senha = $rotulo .
                 '<input type="password" name="' . $nome . '" id="' . $id . '" class="form-control"' . $dica .
                 ' value="' . $valor . '"' . $tamAttr . $d . $afc . '>' . PHP_EOL;
        return $senha;
    }

    /**
     * Gera uma caixa de texto multilinha (<textarea>).
     *
     * @param string $id Atributo ID do elemento.
     * @param string $nome Atributo name do campo.
     * @param string $texto Conteúdo textual inicial.
     * @param int $linhas Quantidade de linhas visíveis (rows).
     * @param int $colunas Quantidade de colunas visíveis (cols).
     * @param int|string $maximo Comprimento máximo permitido (maxlength).
     * @param string $rotulo Rótulo superior (<label>).
     * @param bool $requerido Se true, marca como obrigatório.
     * @param bool $foco Se true, aplica autofocus.
     * @param bool $desativado Se true, desativa a área de texto.
     * @return string Elemento <textarea> formatado com rótulo opcional.
     */
    public function inputArea($id, $nome, $texto, $linhas, $colunas, $maximo = '', $rotulo = '', $requerido = false, $foco = false, $desativado = false)
    {
        if (!empty($maximo)) {
            $max = ' maxlength="' . $maximo . '"';
        } else {
            $max = '';
        }
        if (!empty($rotulo)) {
            if ($requerido) {
                $asterisco = '<abbr title="required"> *</abbr>';
            } else {
                $asterisco = '';
            }
            $rotulo = '<label for="' . $id . '" class="form-label">' . $rotulo . $asterisco . '</label>' . PHP_EOL;
        }
        if ($foco) {
            $afc = ' autofocus';
        } else {
            $afc = '';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        $area = $rotulo .
                '<textarea name="' . $nome . '" id="' . $id . '" class="form-control"' .
                ' rows="' . $linhas . '" cols="' . $colunas . '"' . $max . $afc . $d . '>' . $texto . '</textarea>' . PHP_EOL;
        return $area;
    }

    /**
     * Gera um campo de entrada com rótulo flutuante animado (.form-floating).
     *
     * @param string $id Atributo ID do campo.
     * @param string $nome Atributo name do campo.
     * @param string $rotulo Texto do rótulo flutuante.
     * @param string $valor Valor inicial do campo.
     * @param string $tipo Tipo do campo (ex: 'text', 'email', 'password').
     * @param string $dica Placeholder auxiliar do campo.
     * @param bool $requerido Se true, marca como campo obrigatório.
     * @param bool $desativado Se true, desativa o campo.
     * @param bool $foco Se true, aplica autofocus.
     * @param string $classe Classes CSS adicionais do contêiner (padrão 'mb-3').
     * @return string Contêiner .form-floating formatado.
     */
    public function inputFloating($id, $nome, $rotulo, $valor = '', $tipo = 'text', $dica = '', $requerido = false, $desativado = false, $foco = false, $classe = 'mb-3')
    {
        if (empty($tipo)) {
            $tipo = 'text';
        }
        if (empty($dica)) {
            $dica = $rotulo;
        }
        if ($requerido) {
            $req = ' required';
            $asterisco = '<abbr title="required"> *</abbr>';
        } else {
            $req = '';
            $asterisco = '';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        if ($foco) {
            $afc = ' autofocus';
        } else {
            $afc = '';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $input = '<div class="form-floating' . $classe . '">' . PHP_EOL .
                 '<input type="' . $tipo . '" name="' . $nome . '" id="' . $id . '" class="form-control" placeholder="' . $dica . '" value="' . $valor . '"' . $req . $d . $afc . '>' . PHP_EOL .
                 '<label for="' . $id . '">' . $rotulo . $asterisco . '</label>' . PHP_EOL .
                 '</div>' . PHP_EOL;
        return $input;
    }

    /**
     * Gera uma caixa de texto multilinha com rótulo flutuante animado (.form-floating).
     *
     * @param string $id Atributo ID do textarea.
     * @param string $nome Atributo name do campo.
     * @param string $rotulo Texto do rótulo flutuante.
     * @param string $texto Conteúdo textual inicial.
     * @param string $altura Altura CSS do textarea (ex: '100px').
     * @param bool $requerido Se true, marca como obrigatório.
     * @param bool $desativado Se true, desativa o campo.
     * @param bool $foco Se true, aplica autofocus.
     * @param string $classe Classes CSS adicionais do contêiner (padrão 'mb-3').
     * @return string Contêiner .form-floating com textarea formatado.
     */
    public function inputAreaFloating($id, $nome, $rotulo, $texto = '', $altura = '100px', $requerido = false, $desativado = false, $foco = false, $classe = 'mb-3')
    {
        if ($requerido) {
            $req = ' required';
            $asterisco = '<abbr title="required"> *</abbr>';
        } else {
            $req = '';
            $asterisco = '';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        if ($foco) {
            $afc = ' autofocus';
        } else {
            $afc = '';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if (!empty($altura)) {
            $estilo = ' style="height: ' . $altura . ';"';
        } else {
            $estilo = '';
        }

        $area = '<div class="form-floating' . $classe . '">' . PHP_EOL .
                '<textarea name="' . $nome . '" id="' . $id . '" class="form-control" placeholder="' . $rotulo . '"' . $estilo . $req . $d . $afc . '>' . $texto . '</textarea>' . PHP_EOL .
                '<label for="' . $id . '">' . $rotulo . $asterisco . '</label>' . PHP_EOL .
                '</div>' . PHP_EOL;
        return $area;
    }

    /**
     * Gera um menu suspenso de seleção com rótulo flutuante animado (.form-floating).
     *
     * @param string $id Atributo ID do select.
     * @param string $nome Atributo name do campo.
     * @param string $rotulo Texto do rótulo flutuante.
     * @param array $opcoes Array associativo de opções [valor => texto].
     * @param string $padrao Valor da opção previamente selecionada.
     * @param bool $requerido Se true, marca como obrigatório.
     * @param bool $desativado Se true, desativa o campo.
     * @param string $classe Classes CSS adicionais do contêiner (padrão 'mb-3').
     * @return string Contêiner .form-floating com elemento <select> formatado.
     */
    public function selectFloating($id, $nome, $rotulo, $opcoes, $padrao = '', $requerido = false, $desativado = false, $classe = 'mb-3')
    {
        if ($requerido) {
            $req = ' required';
            $asterisco = '<abbr title="required"> *</abbr>';
        } else {
            $req = '';
            $asterisco = '';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $selecao = '<div class="form-floating' . $classe . '">' . PHP_EOL .
                   '<select name="' . $nome . '" id="' . $id . '" class="form-select"' . $req . $d . '>' . PHP_EOL;
        foreach ($opcoes as $valor => $legenda) {
            if (!empty($padrao) and $valor == $padrao) {
                $selected = ' selected';
            } else {
                $selected = '';
            }
            $selecao .= '<option value="' . $valor . '"' . $selected . '>' . $legenda . '</option>' . PHP_EOL;
        }
        $selecao .= '</select>' . PHP_EOL .
                    '<label for="' . $id . '">' . $rotulo . $asterisco . '</label>' . PHP_EOL .
                    '</div>' . PHP_EOL;
        return $selecao;
    }

    /**
     * Gera uma caixa de seleção individual (.form-check-input).
     *
     * @param string $id Atributo ID do checkbox.
     * @param string $nome Atributo name do campo.
     * @param string $valor Atributo value do checkbox.
     * @param string $rotulo Texto do rótulo (<label>).
     * @param string $classe Classes CSS adicionais do contêiner .form-check.
     * @param bool $desativado Se true, desativa a seleção.
     * @param string $datatoggle Atributo data-bs-toggle opcional.
     * @param string $datatarget Atributo data-bs-target opcional.
     * @return string Caixa de seleção formatada em HTML.
     */
    public function inputCheckbox($id, $nome, $valor, $rotulo = '', $classe = '', $desativado = false, $datatoggle = '', $datatarget = '')
    {
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        $dataAttrs = '';
        if (!empty($datatoggle)) {
            $dataAttrs .= ' data-bs-toggle="' . $datatoggle . '" data-toggle="' . $datatoggle . '"';
        }
        if (!empty($datatarget)) {
            $dataAttrs .= ' data-bs-target="' . $datatarget . '" data-target="' . $datatarget . '"';
        }
        $checkbox = '<div class="form-check' . $classe . '">' . PHP_EOL .
                    '<input type="checkbox" name="' . $nome . '" id="' . $id . '" class="form-check-input" value="' . $valor . '"' . $dataAttrs . $d . '>' . PHP_EOL .
                    '<label class="form-check-label" for="' . $id . '">' . $rotulo . '</label>' . PHP_EOL .
                    '</div>' . PHP_EOL;
        return $checkbox;
    }

    /**
     * Gera uma chave seletora liga/desliga moderna (.form-switch).
     *
     * @param string $id Atributo ID do switch.
     * @param string $nome Atributo name do campo.
     * @param string $valor Atributo value enviado no formulário (padrão '1').
     * @param string $rotulo Texto do rótulo descritivo.
     * @param bool $ligado Se true, inicia marcado (checked).
     * @param bool $desativado Se true, desativa o switch.
     * @param string $classe Classes CSS adicionais.
     * @param bool $reverso Se true, inverte a ordem do botão e rótulo (.form-check-reverse).
     * @return string Chave seletora .form-switch formatada.
     */
    public function inputSwitch($id, $nome, $valor = '1', $rotulo = '', $ligado = false, $desativado = false, $classe = '', $reverso = false)
    {
        $classeSwitch = 'form-check form-switch';
        if ($reverso) {
            $classeSwitch .= ' form-check-reverse';
        }
        if (!empty($classe)) {
            $classeSwitch .= ' ' . $classe;
        }
        if ($ligado) {
            $ckd = ' checked';
        } else {
            $ckd = '';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }

        $switch = '<div class="' . $classeSwitch . '">' . PHP_EOL .
                  '<input type="checkbox" name="' . $nome . '" id="' . $id . '" class="form-check-input" role="switch" value="' . $valor . '"' . $ckd . $d . '>' . PHP_EOL;
        if (!empty($rotulo)) {
            $switch .= '<label class="form-check-label" for="' . $id . '">' . $rotulo . '</label>' . PHP_EOL;
        }
        $switch .= '</div>' . PHP_EOL;
        return $switch;
    }

    /**
     * Gera um conjunto sequencial de chaves seletoras (switches) alinhadas.
     *
     * @param string $id Prefixo para geração dos identificadores únicos.
     * @param array $opcoes Array de opções [nome => rotulo ou array com dados].
     * @param array $selecionados Lista de nomes ou valores previamente marcados.
     * @param string $classe Classes CSS aplicadas a cada item (padrão 'mb-2').
     * @param bool $reverso Se true, inverte a posição do controle.
     * @return string Conjunto de switches formatados.
     */
    public function inputSwitchArray($id, $opcoes, $selecionados = array(), $classe = 'mb-2', $reverso = false)
    {
        $i = 0;
        $switches = '';
        foreach ($opcoes as $nome => $dados) {
            $i++;
            $switchId = $id . $i;
            if (is_array($dados)) {
                $rotulo = isset($dados['rotulo']) ? $dados['rotulo'] : '';
                $valor = isset($dados['valor']) ? $dados['valor'] : '1';
                $desativado = !empty($dados['desativado']);
            } else {
                $rotulo = $dados;
                $valor = '1';
                $desativado = false;
            }

            $ligado = false;
            if (is_array($selecionados)) {
                if (in_array($nome, $selecionados) || (isset($selecionados[$nome]) && $selecionados[$nome] == $valor)) {
                    $ligado = true;
                }
            } elseif ($selecionados == $nome) {
                $ligado = true;
            }

            $switches .= $this->inputSwitch($switchId, $nome, $valor, $rotulo, $ligado, $desativado, $classe, $reverso);
        }
        return $switches;
    }

    /**
     * Gera um botão de opção individual (.form-check-input com type="radio").
     *
     * @param string $id Atributo ID do elemento.
     * @param string $nome Atributo name compartilhado do grupo de opções.
     * @param string $valor Atributo value desta opção.
     * @param string $rotulo Texto do rótulo (<label>).
     * @param string $classe Classes CSS adicionais.
     * @param bool $checked Se true, inicia marcado.
     * @param bool $desativado Se true, desativa a opção.
     * @return string Botão de rádio formatado em HTML.
     */
    public function inputRadio($id, $nome, $valor, $rotulo = '', $classe = '', $checked = false, $desativado = false)
    {
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if ($checked) {
            $ckd = ' checked';
        } else {
            $ckd = '';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        $radio = '<div class="form-check' . $classe . '">' . PHP_EOL .
                 '<input type="radio" name="' . $nome . '" id="' . $id . '" class="form-check-input" value="' . $valor . '"' . $d . $ckd . '>' . PHP_EOL .
                 '<label class="form-check-label" for="' . $id . '">' . $rotulo . '</label>' . PHP_EOL .
                 '</div>' . PHP_EOL;
        return $radio;
    }

    /**
     * Gera uma lista de múltiplos botões de rádio agrupados sob o mesmo nome.
     *
     * @param string $id Prefixo para geração dos identificadores únicos.
     * @param string $nome Atributo name compartilhado do grupo.
     * @param array $opcoes Array associativo de opções [valor => rotulo].
     * @param string $padrao Valor da opção previamente selecionada.
     * @return string Grupo de botões de rádio formatado.
     */
    public function inputRadioArray($id, $nome, $opcoes, $padrao = '')
    {
        $i = 0;
        $radio = '';
        foreach ($opcoes as $valor => $rotulo) {
            if (!empty($padrao) and $valor == $padrao) {
                $ckd = ' checked';
            } else {
                $ckd = '';
            }
            $i++;
            $radioId = $id . $i;
            $radio .= '<div class="form-check">' . PHP_EOL .
                      '<input type="radio" name="' . $nome . '" id="' . $radioId . '" class="form-check-input" value="' . $valor . '"' . $ckd . '>' . PHP_EOL .
                      '<label class="form-check-label" for="' . $radioId . '">' . $rotulo . '</label>' . PHP_EOL .
                      '</div>' . PHP_EOL;
        }
        return $radio;
    }

    /**
     * Gera um menu suspenso de seleção (<select class="form-select">) com suporte a seleção simples ou múltipla.
     *
     * @param string $id Atributo ID do select.
     * @param string $nome Atributo name do campo.
     * @param array $opcoes Array associativo de opções [valor => texto].
     * @param string|array $padrao Valor ou lista de valores previamente selecionados.
     * @param string $tamanho Tamanho do select ('lg' ou 'sm').
     * @param string $rotulo Rótulo superior opcional (<label>).
     * @param bool $multiplo Se true, habilita seleção múltipla (atributo multiple).
     * @param bool $desativado Se true, desativa o campo.
     * @return string Elemento <select> formatado.
     */
    public function selectArray($id, $nome, $opcoes, $padrao = '', $tamanho = '', $rotulo = '', $multiplo = false, $desativado = false)
    {
        if (!empty($rotulo)) {
            $rotulo = '<label for="' . $id . '" class="form-label">' . $rotulo . '</label>' . PHP_EOL;
        }
        $classeTam = '';
        $tamAttr = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $classeTam = ' form-select-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $classeTam = ' form-select-sm';
            } else {
                $tamAttr = ' size="' . $tamanho . '"';
            }
        }
        if ($multiplo) {
            $mult = ' multiple';
        } else {
            $mult = '';
        }
        if ($desativado) {
            $d = ' disabled';
        } else {
            $d = '';
        }
        $selecao = $rotulo .
                   '<select name="' . $nome . '" id="' . $id . '" class="form-select' . $classeTam . '"' . $tamAttr . $mult . $d . '>' . PHP_EOL;
        foreach ($opcoes as $valor => $legenda) {
            if (!empty($padrao) and $valor == $padrao) {
                $selected = ' selected';
            } else {
                $selected = '';
            }
            $selecao .= '<option value="' . $valor . '"' . $selected . '>' . $legenda . '</option>' . PHP_EOL;
        }
        $selecao .= '</select>' . PHP_EOL;
        return $selecao;
    }

    /**
     * Gera um campo nativo de seleção de data HTML5 (<input type="date">).
     *
     * @param string $id Atributo ID do elemento.
     * @param string $nome Atributo name do campo.
     * @param string $valor Data inicial no formato YYYY-MM-DD.
     * @param string $maximo Data máxima permitida (atributo max).
     * @param string $minimo Data mínima permitida (atributo min).
     * @param string $rotulo Rótulo superior (<label>).
     * @param string $dica Placeholder auxiliar.
     * @param bool $requerido Se true, marca como campo obrigatório.
     * @return string Campo de data formatado com rótulo opcional.
     */
    public function inputData($id, $nome, $valor, $maximo = '', $minimo = '', $rotulo = '', $dica = '', $requerido = false)
    {
        if (!empty($maximo)) {
            $maximo = ' max="' . $maximo . '"';
        }
        if (!empty($minimo)) {
            $minimo = ' min="' . $minimo . '"';
        }
        if (!empty($rotulo)) {
            if ($requerido) {
                $asterisco = '<abbr title="required"> *</abbr>';
            } else {
                $asterisco = '';
            }
            $rotulo = '<label for="' . $id . '" class="form-label">' . $rotulo . $asterisco . '</label>' . PHP_EOL;
        }
        if (!empty($dica)) {
            $dica = ' placeholder="' . $dica . '"';
        }
        $d = $rotulo . '<input type="date" name="' . $nome . '" id="' . $id . '" class="form-control"' . $dica .
             $maximo . $minimo . ' value="' . $valor . '">' . PHP_EOL;
        return $d;
    }

    /**
     * Gera um controle deslizante numérico (.form-range) com suporte a badge de valor dinâmico.
     *
     * @param string $id Atributo ID do controle.
     * @param string $nome Atributo name do campo.
     * @param float|int $valor Valor numérico inicial.
     * @param float|int $minimo Valor mínimo permitido (min).
     * @param float|int $maximo Valor máximo permitido (max).
     * @param float|int $passo Incremento por passo (step).
     * @param string $rotulo Rótulo superior (<label>).
     * @param bool $desativado Se true, desativa o controle.
     * @param bool $exibeValor Se true, exibe um badge com o valor atual sincronizado em tempo real.
     * @param string $classe Classes CSS adicionais.
     * @return string Controle deslizante .form-range formatado.
     */
    public function inputRange($id, $nome, $valor = 50, $minimo = 0, $maximo = 100, $passo = 1, $rotulo = '', $desativado = false, $exibeValor = false, $classe = '')
    {
        $minAttr = ($minimo !== '' && $minimo !== null) ? (' min="' . $minimo . '"') : '';
        $maxAttr = ($maximo !== '' && $maximo !== null) ? (' max="' . $maximo . '"') : '';
        $stepAttr = ($passo !== '' && $passo !== null) ? (' step="' . $passo . '"') : '';
        $disAttr = $desativado ? ' disabled' : '';

        $badgeHtml = '';
        $oninput = '';
        if ($exibeValor) {
            $badgeId = $id . '_val';
            $badgeHtml = ' <span id="' . $badgeId . '" class="badge text-bg-primary ms-2">' . $valor . '</span>';
            $oninput = ' oninput="document.getElementById(\'' . $badgeId . '\').textContent = this.value"';
        }

        $rotuloHtml = '';
        if (!empty($rotulo)) {
            $rotuloHtml = '<label for="' . $id . '" class="form-label d-flex align-items-center">' . $rotulo . $badgeHtml . '</label>' . PHP_EOL;
        }

        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $input = $rotuloHtml .
                 '<input type="range" class="form-range' . $classe . '" name="' . $nome . '" id="' . $id . '"' .
                 $minAttr . $maxAttr . $stepAttr . ' value="' . $valor . '"' . $disAttr . $oninput . '>' . PHP_EOL;

        return $input;
    }

    /**
     * Gera um seletor visual de cores (.form-control-color) com sincronização em tempo real do código hexadecimal.
     *
     * @param string $id Atributo ID do campo.
     * @param string $nome Atributo name do campo.
     * @param string $valor Código de cor hexadecimal inicial (ex: '#0d6efd').
     * @param string $rotulo Rótulo superior (<label>).
     * @param string $dica Texto auxiliar abaixo do seletor.
     * @param string $tamanho Tamanho do campo ('lg' ou 'sm').
     * @param bool $desativado Se true, desativa o campo.
     * @param bool $comHex Se true, inclui campo de texto sincronizado exibindo o código hex.
     * @param string $classe Classes CSS adicionais.
     * @return string Seletor de cores formatado.
     */
    public function inputColor($id, $nome, $valor = '#0d6efd', $rotulo = '', $dica = 'Escolha sua cor', $tamanho = '', $desativado = false, $comHex = false, $classe = '')
    {
        $disAttr = $desativado ? ' disabled' : '';
        $titleAttr = !empty($dica) ? (' title="' . htmlspecialchars($dica, ENT_QUOTES, 'UTF-8') . '"') : '';

        $classeTam = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'sm' || $tamanho == 'S') {
                $classeTam = ' form-control-sm';
            } elseif ($tamanho == 'lg' || $tamanho == 'L') {
                $classeTam = ' form-control-lg';
            }
        }

        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $rotuloHtml = '';
        if (!empty($rotulo)) {
            $rotuloHtml = '<label for="' . $id . '" class="form-label">' . $rotulo . '</label>' . PHP_EOL;
        }

        if ($comHex) {
            $hexId = $id . '_hex';
            $oninputColor = ' oninput="document.getElementById(\'' . $hexId . '\').value = this.value"';
            $oninputText = ' oninput="if(/^#[0-9A-Fa-f]{6}$/.test(this.value)){document.getElementById(\'' . $id . '\').value = this.value;}"';

            $input = $rotuloHtml .
                     '<div class="input-group' . $classeTam . '">' . PHP_EOL .
                     '    <input type="color" class="form-control form-control-color' . $classeTam . $classe . '" name="' . $nome . '" id="' . $id . '" value="' . $valor . '"' . $titleAttr . $disAttr . $oninputColor . '>' . PHP_EOL .
                     '    <input type="text" class="form-control font-monospace' . $classeTam . '" id="' . $hexId . '" value="' . $valor . '" maxlength="7"' . $disAttr . $oninputText . ' aria-label="Código Hexadecimal">' . PHP_EOL .
                     '</div>' . PHP_EOL;
        } else {
            $input = $rotuloHtml .
                     '<input type="color" class="form-control form-control-color' . $classeTam . $classe . '" name="' . $nome . '" id="' . $id . '" value="' . $valor . '"' . $titleAttr . $disAttr . '>' . PHP_EOL;
        }

        return $input;
    }

    /**
     * Gera um campo de upload de arquivos do Bootstrap 5 (<input type="file">).
     *
     * @param string $id Atributo ID do elemento.
     * @param string $nome Atributo name do campo.
     * @param string $rotulo Rótulo superior (<label>).
     * @param string $aceita Tipos e extensões aceitos (ex: '.pdf,.png,.jpg').
     * @param bool $multiplo Se true, permite seleção de múltiplos arquivos.
     * @param string $tamanho Tamanho do campo ('lg' ou 'sm').
     * @param bool $desativado Se true, desativa o campo.
     * @param bool $requerido Se true, marca como campo obrigatório.
     * @param string $ajuda Texto informativo auxiliar (.form-text).
     * @param string $classe Classes CSS adicionais.
     * @return string Campo de upload de arquivos formatado.
     */
    public function inputFile($id, $nome, $rotulo = '', $aceita = '', $multiplo = false, $tamanho = '', $desativado = false, $requerido = false, $ajuda = '', $classe = '')
    {
        $rotuloHtml = '';
        if (!empty($rotulo)) {
            $asterisco = $requerido ? '<abbr title="required"> *</abbr>' : '';
            $rotuloHtml = '<label for="' . $id . '" class="form-label">' . $rotulo . $asterisco . '</label>' . PHP_EOL;
        }

        $classeTam = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'sm' || $tamanho == 'S') {
                $classeTam = ' form-control-sm';
            } elseif ($tamanho == 'lg' || $tamanho == 'L') {
                $classeTam = ' form-control-lg';
            }
        }

        $nomeAttr = $nome;
        if ($multiplo && substr($nome, -2) !== '[]') {
            $nomeAttr .= '[]';
        }

        $acceptAttr = !empty($aceita) ? (' accept="' . $aceita . '"') : '';
        $multAttr = $multiplo ? ' multiple' : '';
        $disAttr = $desativado ? ' disabled' : '';
        $reqAttr = $requerido ? ' required' : '';

        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $ajudaHtml = '';
        if (!empty($ajuda)) {
            $ajudaHtml = '<div class="form-text">' . $ajuda . '</div>' . PHP_EOL;
        }

        return $rotuloHtml .
               '<input class="form-control' . $classeTam . $classe . '" type="file" id="' . $id . '" name="' . $nomeAttr . '"' .
               $acceptAttr . $multAttr . $disAttr . $reqAttr . '>' . PHP_EOL .
               $ajudaHtml;
    }

    /**
     * Gera mensagens visuais contextuais de validação de formulários (.valid-feedback ou .invalid-feedback).
     *
     * @param string $mensagem Texto explicativo de feedback exibido ao usuário.
     * @param string $tipo Tipo de validação ('valid' para sucesso ou 'invalid' para erro).
     * @param bool $tooltip Se true, renderiza no estilo balão de dica (.valid-tooltip / .invalid-tooltip).
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Elemento de feedback de validação formatado.
     */
    public function geraFeedback($mensagem, $tipo = 'invalid', $tooltip = false, $id = '', $classe = '')
    {
        if ($tipo != 'valid') {
            $tipo = 'invalid';
        }

        $classeBase = $tooltip ? ($tipo . '-tooltip') : ($tipo . '-feedback');

        if (!empty($classe)) {
            $classeBase .= ' ' . $classe;
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        return '<div class="' . $classeBase . '"' . $id . '>' . $mensagem . '</div>' . PHP_EOL;
    }

    /**
     * Gera a barra de navegação principal da aplicação (.navbar) com menus responsivos, dropdowns e suporte a temas.
     *
     * @param string $posicao Posicionamento ('F' para fixed-top, 'S' para sticky-top ou 'D' para padrão).
     * @param string $brand Nome textual da marca/aplicação.
     * @param string $logo URL da imagem da logomarca (opcional).
     * @param string $link URL de destino ao clicar na marca (padrão '#').
     * @param array $menuesq Lista estruturada de itens de navegação alinhados à esquerda.
     * @param array $menudir Lista estruturada de itens de navegação alinhados à direita.
     * @param string $tema Tema visual da barra ('default', 'light' ou 'inverse'/'dark').
     * @param string $bg Contexto de cor de fundo (ex: 'primary', 'dark', 'light').
     * @param string $bgcor Cor hexadecimal personalizada para o background.
     * @param string $texto Texto informativo auxiliar exibido na barra (.navbar-text).
     * @return string Estrutura completa da barra de navegação <nav class="navbar ...">.
     */
    public function geraNavBar($posicao, $brand, $logo, $link, $menuesq, $menudir, $tema = 'default', $bg = 'primary', $bgcor = '', $texto = '')
    {
        if (!empty($logo)) {
            $brand = '<img alt="' . $brand . '" src="' . $logo . '" class="d-inline-block align-text-top">';
        }
        if (empty($link)) {
            $link = '#';
        }
        if (!empty($bgcor)) {
            $cor = ' style="background-color: ' . $bgcor . ';"';
            $bgClass = '';
        } else {
            $cor = '';
            if ($bg == 'inverse') {
                $bgClass = ' bg-dark';
            } elseif (!empty($bg)) {
                $bgClass = ' bg-' . $bg;
            } else {
                $bgClass = ' bg-primary';
            }
        }
        if (!empty($texto)) {
            $texto = '<span class="navbar-text">' . $texto . '</span>';
        }
        
        $posClass = '';
        if ($posicao == 'F') {
            $posClass = ' fixed-top';
            $containerClass = 'container';
        } elseif ($posicao == 'S') {
            $posClass = ' sticky-top';
            $containerClass = 'container';
        } else {
            $containerClass = 'container-fluid';
        }

        $themeAttr = '';
        if ($tema == 'inverse' || $bg == 'dark' || $bg == 'inverse') {
            $themeAttr = ' data-bs-theme="dark"';
            $navbarTheme = ' navbar-dark';
        } elseif ($tema == 'light') {
            $themeAttr = ' data-bs-theme="light"';
            $navbarTheme = ' navbar-light';
        } else {
            $navbarTheme = '';
        }
        
        $menu = '<nav class="navbar navbar-expand-lg' . $navbarTheme . $bgClass . $posClass . '"' . $themeAttr . $cor . '>' . PHP_EOL .
                '<div class="' . $containerClass . '">' . PHP_EOL .
                '<a class="navbar-brand" href="' . $link . '">' . $brand . '</a>' . $texto . PHP_EOL .
                '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">' . PHP_EOL .
                '<span class="navbar-toggler-icon"></span>' . PHP_EOL .
                '</button>' . PHP_EOL .
                '<div class="collapse navbar-collapse" id="navbar">' . PHP_EOL;
        
        if (!empty($menuesq) and is_array($menuesq)) {
            $menu .= $this->geraListaNavBar($menuesq, 'E');
        }
        if (!empty($menudir) and is_array($menudir)) {
            $menu .= $this->geraListaNavBar($menudir, 'D');
        }
        
        $menu .= '</div>' . PHP_EOL .
                 '</div>' . PHP_EOL .
                 '</nav>' . PHP_EOL;
        return $menu;
    }

    /**
     * Método auxiliar privado para geração recursiva de listas e submenus dropdown da barra de navegação.
     *
     * @param array $itens Estrutura de links, botões e submenus dropdown.
     * @param string $posicao Alinhamento ('E' para esquerda com me-auto ou 'D' para direita com ms-auto).
     * @param bool $sub Indica se está gerando um submenu dropdown (classe .dropdown-menu).
     * @return string Lista <ul> formatada com os itens de navegação.
     */
    private function geraListaNavBar($itens, $posicao = 'E', $sub = false)
    {
        $menu = '';
        
        if ($sub === false) {
            if ($posicao == 'D') {
                $menu .= '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">' . PHP_EOL;
            } else {
                $menu .= '<ul class="navbar-nav me-auto mb-2 mb-lg-0">' . PHP_EOL;
            }
        } else {
            $menu .= '<ul class="dropdown-menu">' . PHP_EOL;
        }
        
        foreach ($itens as $item) {
            if (!empty($item['icone'])) {
                $icone = $this->obtemGlyphicon($item['icone']);
                if (!empty($item['nome'])) {
                    $icone = $icone . ' ';
                }
            } else {
                $icone = '';
            }
            if (isset($item['sub']) && is_array($item['sub'])) {
                $menu .= '<li class="nav-item dropdown">' . PHP_EOL .
                         '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">' . $icone . $item['nome'] . '</a>' . PHP_EOL;
                $menu .= $this->geraListaNavBar($item['sub'], $posicao, true);
                $menu .= '</li>' . PHP_EOL;
            } else {
                if (!empty($item['nome']) or !empty($item['icone'])) {
                    $url = isset($item['url']) ? $item['url'] : '#';
                    $classea = (isset($item['classea']) && !empty($item['classea'])) ? (' ' . $item['classea']) : '';

                    if ($sub === true) {
                        $menu .= '<li><a class="dropdown-item' . $classea . '" href="' . $url . '">' . $icone . $item['nome'] . '</a></li>' . PHP_EOL;
                    } else {
                        if (!empty($item['atual'])) {
                            $menu .= '<li class="nav-item"><a class="nav-link active' . $classea . '" aria-current="page" href="' . $url . '">' . $icone . $item['nome'] . '</a></li>' . PHP_EOL;
                        } else {
                            if (!empty($item['botao'])) {
                                $btnClasse = !empty($item['classe']) ? $item['classe'] : 'primary';
                                if ($btnClasse == 'default') { $btnClasse = 'secondary'; }
                                $menu .= '<li class="nav-item d-flex align-items-center"><a href="' . $url . '" class="btn btn-' . $btnClasse . $classea . '" role="button">' . $icone . $item['nome'] . '</a></li>' . PHP_EOL;
                            } else {
                                $menu .= '<li class="nav-item"><a class="nav-link' . $classea . '" href="' . $url . '">' . $icone . $item['nome'] . '</a></li>' . PHP_EOL;
                            }
                        }
                    }
                }
            }
        }
        
        $menu .= '</ul>' . PHP_EOL;
        return $menu;
    }

    /**
     * Gera um componente de menu suspenso independente (Dropdown) com suporte a botões simples ou split, direções e temas.
     *
     * @param string|array $rotulo Texto do botão ou array com configurações para botão split.
     * @param array $itens Lista de opções, divisores ('-') e cabeçalhos.
     * @param string $classe Contexto de cor do botão (padrão 'primary').
     * @param bool $split Se true, divide o botão principal da seta de abertura.
     * @param string $direcao Direção de abertura ('down', 'up', 'end' ou 'start').
     * @param string $alinhamentoMenu Alinhamento do menu ('end' para alinhar à direita).
     * @param bool $escuro Se true, aplica a variante escura .dropdown-menu-dark.
     * @param string $tamanho Tamanho do botão ('lg' ou 'sm').
     * @param bool $contorno Se true, aplica variante outline (.btn-outline-*).
     * @param string $id Atributo ID opcional do contêiner.
     * @param string $classeExtra Classes CSS adicionais.
     * @return string Componente Dropdown completo formatado.
     */
    public function geraDropdown($rotulo, $itens, $classe = 'primary', $split = false, $direcao = 'down', $alinhamentoMenu = '', $escuro = false, $tamanho = '', $contorno = false, $id = '', $classeExtra = '')
    {
        if ($classe == 'default') {
            $classe = 'secondary';
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $linha = $contorno ? 'outline-' : '';
        $classeTam = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $classeTam = ' btn-lg';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $classeTam = ' btn-sm';
            }
        }

        // Direção
        $dirClass = '';
        if ($direcao == 'up') {
            $dirClass = ' dropup';
        } elseif ($direcao == 'end' || $direcao == 'right') {
            $dirClass = ' dropend';
        } elseif ($direcao == 'start' || $direcao == 'left') {
            $dirClass = ' dropstart';
        }

        // Container
        if (!empty($classeExtra)) {
            $classeExtra = ' ' . $classeExtra;
        }
        if ($split || !empty($dirClass)) {
            $container = '<div class="btn-group' . $dirClass . $classeExtra . '"' . $id . ' role="group">' . PHP_EOL;
        } else {
            $container = '<div class="dropdown' . $classeExtra . '"' . $id . '>' . PHP_EOL;
        }

        // Botão(ões)
        if ($split) {
            if (is_array($rotulo)) {
                $btnLabel = isset($rotulo['rotulo']) ? $rotulo['rotulo'] : (isset($rotulo['nome']) ? $rotulo['nome'] : 'Ação');
                $btnHref = isset($rotulo['url']) ? (' href="' . $rotulo['url'] . '"') : '';
                $btnClique = isset($rotulo['clique']) ? (' onclick="' . $rotulo['clique'] . '"') : '';
                if (!empty($btnHref)) {
                    $botoes = '<a' . $btnHref . ' class="btn btn-' . $linha . $classe . $classeTam . '" role="button"' . $btnClique . '>' . $btnLabel . '</a>' . PHP_EOL;
                } else {
                    $botoes = '<button type="button" class="btn btn-' . $linha . $classe . $classeTam . '"' . $btnClique . '>' . $btnLabel . '</button>' . PHP_EOL;
                }
            } else {
                $botoes = '<button type="button" class="btn btn-' . $linha . $classe . $classeTam . '">' . $rotulo . '</button>' . PHP_EOL;
            }
            $botoes .= '<button type="button" class="btn btn-' . $linha . $classe . $classeTam . ' dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL .
                       '<span class="visually-hidden">Toggle Dropdown</span>' . PHP_EOL .
                       '</button>' . PHP_EOL;
        } else {
            $botoes = '<button class="btn btn-' . $linha . $classe . $classeTam . ' dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">' . PHP_EOL .
                      $rotulo . PHP_EOL .
                      '</button>' . PHP_EOL;
        }

        // Menu Dropdown
        $menuClasses = 'dropdown-menu';
        if ($escuro) {
            $menuClasses .= ' dropdown-menu-dark';
        }
        if ($alinhamentoMenu == 'end' || $alinhamentoMenu == 'dir') {
            $menuClasses .= ' dropdown-menu-end';
        }

        $lista = '<ul class="' . $menuClasses . '">' . PHP_EOL;
        foreach ($itens as $item) {
            if ($item === '-' || $item === 'divisor' || (is_array($item) && isset($item['tipo']) && $item['tipo'] == 'divisor')) {
                $lista .= '<li><hr class="dropdown-divider"></li>' . PHP_EOL;
            } elseif (is_array($item) && isset($item['tipo']) && $item['tipo'] == 'cabecalho') {
                $lista .= '<li><h6 class="dropdown-header">' . $item['nome'] . '</h6></li>' . PHP_EOL;
            } elseif (is_array($item) && isset($item['tipo']) && $item['tipo'] == 'texto') {
                $lista .= '<li><span class="dropdown-item-text">' . $item['nome'] . '</span></li>' . PHP_EOL;
            } elseif (is_string($item)) {
                $lista .= '<li><a class="dropdown-item" href="#">' . $item . '</a></li>' . PHP_EOL;
            } elseif (is_array($item)) {
                $nome = isset($item['nome']) ? $item['nome'] : (isset($item['rotulo']) ? $item['rotulo'] : '');
                $url = isset($item['url']) ? $item['url'] : '#';
                $icone = !empty($item['icone']) ? ($this->obtemGlyphicon($item['icone']) . ' ') : '';
                $ativo = !empty($item['ativo']) ? ' active' : '';
                $ariaCurrent = !empty($item['ativo']) ? ' aria-current="true"' : '';
                $desativado = !empty($item['desativado']) ? ' disabled' : '';
                $ariaDisabled = !empty($item['desativado']) ? ' aria-disabled="true"' : '';
                $clique = !empty($item['clique']) ? (' onclick="' . $item['clique'] . '"') : '';

                $lista .= '<li><a class="dropdown-item' . $ativo . $desativado . '" href="' . $url . '"' . $clique . $ariaCurrent . $ariaDisabled . '>' . $icone . $nome . '</a></li>' . PHP_EOL;
            }
        }
        $lista .= '</ul>' . PHP_EOL;

        $dropdown = $container .
                    $botoes .
                    $lista .
                    '</div>' . PHP_EOL;
        return $dropdown;
    }

    /**
     * Gera um conjunto completo de abas (.nav-tabs) interativas com alternância funcional de painéis de conteúdo.
     *
     * @param array $abas Array de abas contendo 'rotulo', 'conteudo' e 'ativo' (bool).
     * @param string $id Identificador base único para os painéis e botões.
     * @param string $classe Classes CSS adicionais da lista de abas.
     * @param bool $desvanecer Se true, aplica efeito de fade nas transições de abas.
     * @return string Estrutura completa de abas e painéis (.tab-content) em HTML.
     */
    public function geraNavTab($abas, $id = '', $classe = 'default', $desvanecer = false)
    {
        $navId = !empty($id) ? $id : ('tab-' . substr(md5(uniqid(rand(), true)), 0, 8));
        $rotulos = '';
        $conteudos = '';
        $n = 1;
        foreach ($abas as $aba) {
            $hrefid = 'aba' . $n . $id;
            $tabBtnId = 'tab-btn-' . $n . $id;
            if (!empty($aba['ativo'])) {
                $btnAtivo = ' active';
                $ariaSelected = 'true';
                $paneAtivo = ' show active';
            } else {
                $btnAtivo = '';
                $ariaSelected = 'false';
                $paneAtivo = '';
            }
            $fade = $desvanecer ? ' fade' : '';
            $rotulos .= '<li class="nav-item" role="presentation">' . PHP_EOL .
                        '<button class="nav-link' . $btnAtivo . '" id="' . $tabBtnId . '" data-bs-toggle="tab" data-bs-target="#' . $hrefid . '" type="button" role="tab" aria-controls="' . $hrefid . '" aria-selected="' . $ariaSelected . '">' . $aba['rotulo'] . '</button>' . PHP_EOL .
                        '</li>' . PHP_EOL;

            $conteudos .= '<div class="tab-pane' . $fade . $paneAtivo . '" id="' . $hrefid . '" role="tabpanel" aria-labelledby="' . $tabBtnId . '">' . PHP_EOL .
                          $aba['conteudo'] . PHP_EOL .
                          '</div>' . PHP_EOL;
            $n++;
        }

        $navtab = '<div class="nav-tabs-wrapper">' . PHP_EOL .
                  '<ul class="nav nav-tabs mb-3" id="' . $navId . '" role="tablist">' . PHP_EOL .
                  $rotulos .
                  '</ul>' . PHP_EOL .
                  '<div class="tab-content" id="' . $navId . 'Content">' . PHP_EOL .
                  $conteudos .
                  '</div>' . PHP_EOL .
                  '</div>' . PHP_EOL;
        return $navtab;
    }

    /**
     * Gera navegações modernas com suporte aos estilos .nav-underline, .nav-pills ou .nav-tabs e painéis associados.
     *
     * @param array $itens Lista de itens com rotulo, url, icone, badge e conteudo opcional.
     * @param string $estilo Estilo visual da navegação ('underline', 'pills' ou 'tabs').
     * @param string $alinhamento Alinhamento dos itens ('center' ou 'end').
     * @param bool $justificado Se true, aplica proporção uniforme com .nav-justified.
     * @param bool $preenchido Se true, ocupa toda a largura disponível com .nav-fill.
     * @param bool $vertical Se true, empilha verticalmente com .flex-column.
     * @param string $id Atributo ID opcional da navegação.
     * @param string $classe Classes CSS adicionais.
     * @return string Navegação estruturada formatada em HTML.
     */
    public function geraNav($itens, $estilo = 'underline', $alinhamento = '', $justificado = false, $preenchido = false, $vertical = false, $id = '', $classe = '')
    {
        $classesNav = 'nav';

        if ($estilo == 'underline') {
            $classesNav .= ' nav-underline';
        } elseif ($estilo == 'pills') {
            $classesNav .= ' nav-pills';
        } elseif ($estilo == 'tabs') {
            $classesNav .= ' nav-tabs';
        }

        if ($vertical) {
            $classesNav .= ' flex-column';
        }
        if ($justificado) {
            $classesNav .= ' nav-justified';
        } elseif ($preenchido) {
            $classesNav .= ' nav-fill';
        }

        if ($alinhamento == 'center') {
            $classesNav .= ' justify-content-center';
        } elseif ($alinhamento == 'end' || $alinhamento == 'right') {
            $classesNav .= ' justify-content-end';
        }

        if (!empty($classe)) {
            $classesNav .= ' ' . $classe;
        }

        $navId = !empty($id) ? $id : ('nav-' . substr(md5(uniqid(rand(), true)), 0, 8));
        $temConteudoAbas = false;

        $htmlItens = '';
        $htmlPanes = '';
        $n = 1;

        foreach ($itens as $item) {
            if (!is_array($item)) {
                $item = array('rotulo' => (string)$item, 'url' => '#');
            }

            $rotulo = isset($item['rotulo']) ? $item['rotulo'] : (isset($item['nome']) ? $item['nome'] : 'Item');
            $url = isset($item['url']) ? $item['url'] : '#';
            $ativo = !empty($item['ativo']);
            $desativado = !empty($item['desativado']);
            $icone = !empty($item['icone']) ? ($this->obtemGlyphicon($item['icone']) . ' ') : '';
            $badge = !empty($item['badge']) ? (' ' . $this->obtemBadge($item['badge'], 'ms-1')) : '';
            $conteudo = isset($item['conteudo']) ? $item['conteudo'] : null;

            $classeLink = 'nav-link';
            if ($ativo) {
                $classeLink .= ' active';
            }
            if ($desativado) {
                $classeLink .= ' disabled';
            }

            if (!empty($item['dropdown']) && is_array($item['dropdown'])) {
                $htmlItens .= '<li class="nav-item dropdown">' . PHP_EOL .
                              '    <a class="' . $classeLink . ' dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">' . $icone . $rotulo . $badge . '</a>' . PHP_EOL .
                              '    <ul class="dropdown-menu">' . PHP_EOL;
                foreach ($item['dropdown'] as $sub) {
                    if (is_array($sub)) {
                        $subRotulo = isset($sub['rotulo']) ? $sub['rotulo'] : (isset($sub['nome']) ? $sub['nome'] : '');
                        $subUrl = isset($sub['url']) ? $sub['url'] : '#';
                        $subAtivo = !empty($sub['ativo']) ? ' active' : '';
                        $subDis = !empty($sub['desativado']) ? ' disabled' : '';
                        $htmlItens .= '        <li><a class="dropdown-item' . $subAtivo . $subDis . '" href="' . $subUrl . '">' . $subRotulo . '</a></li>' . PHP_EOL;
                    } elseif ($sub == 'divisor' || $sub == '-') {
                        $htmlItens .= '        <li><hr class="dropdown-divider"></li>' . PHP_EOL;
                    } else {
                        $htmlItens .= '        <li><a class="dropdown-item" href="#">' . $sub . '</a></li>' . PHP_EOL;
                    }
                }
                $htmlItens .= '    </ul>' . PHP_EOL .
                              '</li>' . PHP_EOL;
                continue;
            }

            if ($conteudo !== null) {
                $temConteudoAbas = true;
                $tabId = $navId . '-tab-' . $n;
                $paneId = $navId . '-pane-' . $n;
                $selected = $ativo ? 'true' : 'false';
                $toggleType = ($estilo == 'pills') ? 'pill' : 'tab';

                $htmlItens .= '<li class="nav-item" role="presentation">' . PHP_EOL .
                              '    <button class="' . $classeLink . '" id="' . $tabId . '" data-bs-toggle="' . $toggleType . '" data-bs-target="#' . $paneId . '" type="button" role="tab" aria-controls="' . $paneId . '" aria-selected="' . $selected . '"' . ($desativado ? ' disabled' : '') . '>' .
                              $icone . $rotulo . $badge . '</button>' . PHP_EOL .
                              '</li>' . PHP_EOL;

                $paneShow = $ativo ? ' show active' : '';
                $htmlPanes .= '<div class="tab-pane fade' . $paneShow . '" id="' . $paneId . '" role="tabpanel" aria-labelledby="' . $tabId . '" tabindex="0">' . PHP_EOL .
                              $conteudo . PHP_EOL .
                              '</div>' . PHP_EOL;
            } else {
                $ariaCurrent = $ativo ? ' aria-current="page"' : '';
                $ariaDisabled = $desativado ? ' aria-disabled="true" tabindex="-1"' : '';

                $htmlItens .= '<li class="nav-item">' . PHP_EOL .
                              '    <a class="' . $classeLink . '" href="' . $url . '"' . $ariaCurrent . $ariaDisabled . '>' .
                              $icone . $rotulo . $badge . '</a>' . PHP_EOL .
                              '</li>' . PHP_EOL;
            }

            $n++;
        }

        $idAttr = !empty($id) ? (' id="' . $id . '"') : '';
        $roleAttr = $temConteudoAbas ? ' role="tablist"' : '';

        $saida = '<ul class="' . $classesNav . '"' . $idAttr . $roleAttr . '>' . PHP_EOL .
                 $htmlItens .
                 '</ul>' . PHP_EOL;

        if ($temConteudoAbas) {
            $saida .= '<div class="tab-content pt-3" id="' . $navId . 'Content">' . PHP_EOL .
                      $htmlPanes .
                      '</div>' . PHP_EOL;
        }

        return $saida;
    }

    /**
     * Gera uma janela modal nativa do Bootstrap 5 (.modal) completa com cabeçalho, corpo e rodapé.
     *
     * @param string $id Identificador único da modal acionado por data-bs-target.
     * @param string $classe Classes CSS adicionais para o diálogo modal.
     * @param string $tamanho Tamanho da modal ('sm', 'md', 'lg' ou 'xl').
     * @param string $titulo Título exibido no cabeçalho da modal.
     * @param string $corpo Conteúdo HTML principal do corpo da modal.
     * @param string $rodape Botões de ação e conteúdo do rodapé.
     * @param string $script Script JavaScript auxiliar executado ao interagir com a modal.
     * @param string $classeh Classes CSS adicionais para o cabeçalho (.modal-header).
     * @param string $classet Classes CSS adicionais para o título (.modal-title).
     * @param string $classec Classes CSS adicionais para o corpo (.modal-body).
     * @param string $classer Classes CSS adicionais para o rodapé (.modal-footer).
     * @return string Estrutura completa da janela modal em HTML.
     */
    public function geraModal($id, $classe, $tamanho, $titulo, $corpo, $rodape, $script, $classeh = '', $classet = '', $classec = '', $classer = '')
    {
        if (!empty($tamanho)) {
            if ($tamanho == 'L' || $tamanho == 'lg') {
                $tamanho = ' modal-lg';
            } elseif ($tamanho == 'M' || $tamanho == 'md') {
                $tamanho = '';
            } elseif ($tamanho == 'S' || $tamanho == 'sm') {
                $tamanho = ' modal-sm';
            } elseif ($tamanho == 'XL' || $tamanho == 'xl') {
                $tamanho = ' modal-xl';
            }
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if (!empty($classeh)) {
            $classeh = ' ' . $classeh;
        }
        if (!empty($classet)) {
            $classet = ' ' . $classet;
        }
        if (!empty($classec)) {
            $classec = ' ' . $classec;
        }
        if (!empty($classer)) {
            $classer = ' ' . $classer;
        }
        $modal = '<div id="' . $id . '" class="modal fade' . $classe . '" tabindex="-1" aria-labelledby="' . $id . 'Label" aria-hidden="true">' . PHP_EOL .
                 '<div class="modal-dialog' . $tamanho . '">' . PHP_EOL .
                 '<div class="modal-content">' . PHP_EOL .
                 '<div class="modal-header' . $classeh . '">' . PHP_EOL .
                 '<h5 class="modal-title' . $classet . '" id="' . $id . 'Label">' . $titulo . '</h5>' . PHP_EOL .
                 '<button type="button" class="btn-close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close"></button>' . PHP_EOL .
                 '</div>' . PHP_EOL .
                 '<div class="modal-body' . $classec . '">' . PHP_EOL .
                 $corpo . PHP_EOL .
                 '</div>' . PHP_EOL .
                 '<div class="modal-footer' . $classer . '">' . PHP_EOL .
                 $rodape . PHP_EOL .
                 '</div>' . PHP_EOL .
                 '</div>' . PHP_EOL .
                 '</div>' . PHP_EOL .
                 '</div>' . PHP_EOL;
        $modal .= $script;
        return $modal;
    }

    /**
     * Gera uma gaveta lateral deslizante (Offcanvas) com suporte a direções, backdrop e rolagem de página.
     *
     * @param string $id Identificador único da gaveta acionado por data-bs-target.
     * @param string $titulo Título exibido no cabeçalho da gaveta.
     * @param string $corpo Conteúdo HTML principal do corpo da gaveta.
     * @param string $posicao Lado de abertura ('start' para esquerda, 'end' para direita, 'top' ou 'bottom').
     * @param bool $backdrop Se false, desativa o fundo escurecido estático.
     * @param bool $scroll Se true, permite rolagem do documento principal enquanto aberto.
     * @param string $classe Classes CSS adicionais da gaveta.
     * @param string $classeh Classes CSS adicionais para o cabeçalho.
     * @param string $classet Classes CSS adicionais para o título.
     * @param string $classec Classes CSS adicionais para o corpo.
     * @return string Estrutura completa do elemento Offcanvas formatada.
     */
    public function geraOffcanvas($id, $titulo, $corpo, $posicao = 'start', $backdrop = true, $scroll = false, $classe = '', $classeh = '', $classet = '', $classec = '')
    {
        if (empty($posicao)) {
            $posicao = 'start';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if (!empty($classeh)) {
            $classeh = ' ' . $classeh;
        }
        if (!empty($classet)) {
            $classet = ' ' . $classet;
        }
        if (!empty($classec)) {
            $classec = ' ' . $classec;
        }

        $attrs = '';
        if ($scroll === true) {
            $attrs .= ' data-bs-scroll="true"';
        }
        if ($backdrop === false) {
            $attrs .= ' data-bs-backdrop="false"';
        } elseif ($backdrop === 'static') {
            $attrs .= ' data-bs-backdrop="static"';
        }

        $closeBtnTheme = (strpos($classe, 'text-bg-dark') !== false || strpos($classe, 'bg-dark') !== false) ? ' btn-close-white' : '';

        $offcanvas = '<div class="offcanvas offcanvas-' . $posicao . $classe . '" tabindex="-1" id="' . $id . '" aria-labelledby="' . $id . 'Label"' . $attrs . '>' . PHP_EOL .
                     '<div class="offcanvas-header' . $classeh . '">' . PHP_EOL .
                     '<h5 class="offcanvas-title' . $classet . '" id="' . $id . 'Label">' . $titulo . '</h5>' . PHP_EOL .
                     '<button type="button" class="btn-close' . $closeBtnTheme . '" data-bs-dismiss="offcanvas" aria-label="Close"></button>' . PHP_EOL .
                     '</div>' . PHP_EOL .
                     '<div class="offcanvas-body' . $classec . '">' . PHP_EOL .
                     $corpo . PHP_EOL .
                     '</div>' . PHP_EOL .
                     '</div>' . PHP_EOL;
        return $offcanvas;
    }

    /**
     * Gera uma caixa de alerta contextual (.alert) com suporte a botão de dispensar suave e links internos.
     *
     * @param string $tipo Contexto de cor do alerta (ex: 'success', 'danger', 'warning', 'info').
     * @param string $rotulo Título em negrito ou prefixo de destaque.
     * @param string $mensagem Mensagem descritiva do alerta.
     * @param bool $dispensar Se true, inclui botão de fechar nativo .btn-close.
     * @param bool $murchar Se true, aplica transição suave de fade ao fechar.
     * @param string $linktxt Texto de um link interno destacado (.alert-link).
     * @param string $linkurl URL de destino do link interno.
     * @return string Caixa de alerta formatada em HTML.
     */
    public function geraAlerta($tipo, $rotulo, $mensagem, $dispensar = true, $murchar = true , $linktxt = '', $linkurl = '')
    {
        if ($tipo == 'default') {
            $tipo = 'secondary';
        }
        switch ($tipo) {
            case 'success':
            case 'info':
            case 'warning':
            case 'danger':
            case 'primary':
            case 'secondary':
            case 'light':
            case 'dark':
                if ($dispensar) {
                    $dis = ' alert-dismissible';
                    $xis = '<button type="button" class="btn-close" data-bs-dismiss="alert" data-dismiss="alert" aria-label="Close"></button>' . PHP_EOL;
                } else {
                    $dis = '';
                    $xis = '';
                }
                if ($murchar) {
                    $fade = ' fade show';
                } else {
                    $fade = '';
                }
                if (!empty($linktxt) and !empty($linkurl)) {
                    $link = '<a href="' . $linkurl . '" class="alert-link">' . $linktxt . '</a>';
                } else {
                    $link = '';
                }
                $rotuloHtml = !empty($rotulo) ? ('<strong>' . $rotulo . '</strong> ') : '';
                $alerta = '<div class="alert alert-' . $tipo . $dis . $fade . '" role="alert">' . PHP_EOL .
                          $rotuloHtml . $mensagem . ' ' . $link . PHP_EOL .
                          $xis .
                          '</div>' . PHP_EOL;
                break;
            default:
                $alerta = '';
        }
        return $alerta;
    }

    /**
     * Gera uma notificação flutuante instantânea (.toast) do Bootstrap 5.
     *
     * @param string $id Identificador único do elemento Toast.
     * @param string $titulo Título exibido no cabeçalho do toast.
     * @param string $mensagem Mensagem descritiva exibida no corpo do toast.
     * @param string $horario Texto indicativo de tempo (ex: 'agora', 'há 5 min').
     * @param string $icone Ícone exibido no cabeçalho.
     * @param bool $autohide Se true, fecha automaticamente após o tempo determinado.
     * @param int $delay Tempo de permanência em milissegundos (padrão 5000ms).
     * @param string $tema Contexto de cor do cabeçalho ou corpo.
     * @param string $classe Classes CSS adicionais.
     * @return string Elemento Toast formatado em HTML.
     */
    public function geraToast($id, $titulo, $mensagem, $horario = '', $icone = '', $autohide = true, $delay = 5000, $tema = '', $classe = '')
    {
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $autoHideAttr = $autohide ? ' data-bs-autohide="true"' : ' data-bs-autohide="false"';
        $delayAttr = !empty($delay) ? (' data-bs-delay="' . (int)$delay . '"') : '';
        
        $corTema = '';
        $isDark = false;
        if (!empty($tema)) {
            if ($tema == 'default') {
                $tema = 'secondary';
            }
            $corTema = ' text-bg-' . $tema;
            if (in_array($tema, ['primary', 'secondary', 'success', 'danger', 'dark'])) {
                $isDark = true;
            }
        }
        $closeBtnClass = $isDark ? ' btn-close-white' : '';

        if (!empty($titulo)) {
            $iconeHtml = !empty($icone) ? ($this->obtemGlyphicon($icone) . ' ') : '';
            $horarioHtml = !empty($horario) ? ('<small class="' . ($isDark ? 'text-white-50' : 'text-body-secondary') . '">' . $horario . '</small>' . PHP_EOL) : '';

            $headerClass = !empty($corTema) ? $corTema : '';
            $toast = '<div id="' . $id . '" class="toast' . $classe . '" role="alert" aria-live="assertive" aria-atomic="true"' . $autoHideAttr . $delayAttr . '>' . PHP_EOL .
                     '<div class="toast-header' . $headerClass . '">' . PHP_EOL .
                     $iconeHtml .
                     '<strong class="me-auto">' . $titulo . '</strong>' . PHP_EOL .
                     $horarioHtml .
                     '<button type="button" class="btn-close' . $closeBtnClass . '" data-bs-dismiss="toast" aria-label="Close"></button>' . PHP_EOL .
                     '</div>' . PHP_EOL .
                     '<div class="toast-body">' . PHP_EOL .
                     $mensagem . PHP_EOL .
                     '</div>' . PHP_EOL .
                     '</div>' . PHP_EOL;
        } else {
            $borderClass = !empty($tema) ? ' border-0' : '';
            $toast = '<div id="' . $id . '" class="toast align-items-center' . $corTema . $borderClass . $classe . '" role="alert" aria-live="assertive" aria-atomic="true"' . $autoHideAttr . $delayAttr . '>' . PHP_EOL .
                     '<div class="d-flex">' . PHP_EOL .
                     '<div class="toast-body">' . PHP_EOL .
                     $mensagem . PHP_EOL .
                     '</div>' . PHP_EOL .
                     '<button type="button" class="btn-close' . $closeBtnClass . ' me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>' . PHP_EOL .
                     '</div>' . PHP_EOL .
                     '</div>' . PHP_EOL;
        }

        return $toast;
    }

    /**
     * Gera um contêiner de posicionamento fixo para acomodar múltiplos toasts (.toast-container).
     *
     * @param string|array $toasts Conteúdo HTML de um ou mais toasts.
     * @param string $posicao Posicionamento na tela (ex: 'bottom-end', 'top-center', 'top-end').
     * @param string $id Atributo ID opcional do contêiner.
     * @param string $classe Classes CSS adicionais.
     * @return string Contêiner .toast-container formatado e posicionado.
     */
    public function divToastContainer($toasts, $posicao = 'bottom-end', $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        switch ($posicao) {
            case 'top-start':
            case 'top-left':
                $posClass = ' top-0 start-0';
                break;
            case 'top-center':
                $posClass = ' top-0 start-50 translate-middle-x';
                break;
            case 'top-end':
            case 'top-right':
                $posClass = ' top-0 end-0';
                break;
            case 'middle-start':
            case 'center-start':
                $posClass = ' top-50 start-0 translate-middle-y';
                break;
            case 'middle-center':
            case 'center':
                $posClass = ' top-50 start-50 translate-middle';
                break;
            case 'middle-end':
            case 'center-end':
                $posClass = ' top-50 end-0 translate-middle-y';
                break;
            case 'bottom-start':
            case 'bottom-left':
                $posClass = ' bottom-0 start-0';
                break;
            case 'bottom-center':
                $posClass = ' bottom-0 start-50 translate-middle-x';
                break;
            case 'bottom-end':
            case 'bottom-right':
            default:
                $posClass = ' bottom-0 end-0';
                break;
        }

        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $htmlToasts = '';
        if (is_array($toasts)) {
            foreach ($toasts as $t) {
                $htmlToasts .= $t . PHP_EOL;
            }
        } else {
            $htmlToasts = $toasts . PHP_EOL;
        }

        $container = '<div class="toast-container position-fixed' . $posClass . ' p-3' . $classe . '"' . $id . '>' . PHP_EOL .
                     $htmlToasts .
                     '</div>' . PHP_EOL;
        return $container;
    }

    /**
     * Gera uma trilha de navegação hierárquica (breadcrumb).
     *
     * @param array $caminho Array de links contendo 'linkurl' e 'linktxt'. O último item é renderizado como página ativa.
     * @return string Estrutura <nav aria-label="breadcrumb"> formatada.
     */
    public function geraBreadcrumb($caminho)
    {
        $breadcrumb = '<nav aria-label="breadcrumb">' . PHP_EOL .
                      '<ol class="breadcrumb">' . PHP_EOL;
        if (is_array($caminho)) {
            $ultimo = count($caminho) - 1;
            $n = 0;
            foreach ($caminho as $sub) {
                if ($n < $ultimo) {
                    $breadcrumb .= '<li class="breadcrumb-item"><a href="' . $sub['linkurl'] . '">' . $sub['linktxt'] . '</a></li>' . PHP_EOL;
                } else {
                    $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . $sub['linktxt'] . '</li>' . PHP_EOL;
                }
                $n++;
            }
        }
        $breadcrumb .= '</ol>' . PHP_EOL .
                       '</nav>' . PHP_EOL;
        return $breadcrumb;
    }

    /**
     * Gera um cartão de conteúdo (Card) completo do Bootstrap 5 com seções estruturadas.
     *
     * @param string $titulo Título principal do card.
     * @param string $subtitulo Subtítulo do card.
     * @param string $cabecalho Conteúdo do cabeçalho (.card-header).
     * @param string $rodape Conteúdo do rodapé (.card-footer).
     * @param string $imgsrc URL da imagem de topo do card.
     * @param string $imgalt Texto alternativo da imagem.
     * @param string $texto Texto principal do corpo do card.
     * @param string $lista Marcação de lista de itens adicionada ao card.
     * @param string $botaolink1 Primeiro botão ou link de ação.
     * @param string $botaolink2 Segundo botão ou link de ação.
     * @param string $largura Largura inline do card (ex: '20rem' ou '100%').
     * @param string $alinhamento Alinhamento do texto interno (ex: 'center').
     * @param string $alinbotao Alinhamento da área de botões.
     * @param int $h Nível hierárquico da tag de título (1 a 6 para h1 a h6).
     * @return string Card do Bootstrap formatado em HTML.
     */
    public function geraCard($titulo, $subtitulo = '', $cabecalho = '', $rodape = '', $imgsrc = '', $imgalt = '', $texto = '', $lista = '', $botaolink1 = '', $botaolink2 = '', $largura = '20rem', $alinhamento = '', $alinbotao = '', $h = 4)
    {
        if (!empty($subtitulo)) {
            $subtitulo = '<div class="card-subtitulo"><h6 class="card-subtitle mb-2 text-body-secondary">' . $subtitulo . '</h6></div>' . PHP_EOL;
        }
        if (!empty($cabecalho)) {
            $cabecalho = '<div class="card-header">' . $cabecalho . '</div>' . PHP_EOL;
        }
        if (!empty($rodape)) {
            $rodape = '<div class="card-footer text-body-secondary">' . $rodape . '</div>' . PHP_EOL;
        }
        if (!empty($texto)) {
            $texto = '<div class="card-texto"><p class="card-text">' . $texto . '</p></div>' . PHP_EOL;
        }
        if (!empty($imgsrc) and !empty($imgalt)) {
            $imagem = '<img class="card-img-top" src="' . $imgsrc . '" alt="' . $imgalt . '">' . PHP_EOL;
        } else {
            $imagem = '';
        }
        if (!empty($lista) and is_array($lista)) {
            $li = '<ul class="list-group list-group-flush">' . PHP_EOL;
            foreach ($lista as $item) {
                $li .= '<li class="list-group-item">' . $item . '</li>' . PHP_EOL;
            }
            $li .= '</ul>' . PHP_EOL;
        } else {
            $li = '';
        }
        if ($alinhamento == 'center') {
            $alinhamento = ' text-center';
        } elseif ($alinhamento == 'right') {
            $alinhamento = ' text-end';
        } else {
            $alinhamento = '';
        }
        if ($alinbotao == 'center') {
            $alinbotao = ' text-center';
        } elseif ($alinbotao == 'right') {
            $alinbotao = ' text-end';
        } else {
            $alinbotao = '';
        }
        
        $botoes = '';
        if (!empty($botaolink1) || !empty($botaolink2)) {
            $botoes = '<div class="card-body' . $alinbotao . '">' . $botaolink1 . ' ' . $botaolink2 . '</div>' . PHP_EOL;
        }
        
        $card = '<div class="card' . $alinhamento . '" style="width: ' . $largura . ';">' . PHP_EOL .
                $cabecalho .
                $imagem .
                '<div class="card-body">' . PHP_EOL .
                '<div class="card-titulo"><h' . $h . ' class="card-title">' . $titulo . '</h' . $h . '></div>' . PHP_EOL .
                $subtitulo .
                $texto .
                '</div>' . PHP_EOL .
                $li .
                $botoes .
                $rodape .
                '</div>' . PHP_EOL;
        return $card;
    }

    /**
     * Gera um grupo contínuo de cards (.card-group) com bordas e alturas uniformemente integradas.
     *
     * @param array $cards Array de strings contendo marcação HTML de cards.
     * @param string $id Atributo ID opcional do contêiner.
     * @param string $classe Classes CSS adicionais.
     * @return string Contêiner <div class="card-group"> formatado.
     */
    public function divCardGroup($cards, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $htmlCards = '';
        if (is_array($cards)) {
            foreach ($cards as $c) {
                $htmlCards .= $c . PHP_EOL;
            }
        } else {
            $htmlCards = $cards . PHP_EOL;
        }

        return '<div class="card-group' . $classe . '"' . $id . '>' . PHP_EOL .
               $htmlCards .
               '</div>' . PHP_EOL;
    }

    /**
     * Gera uma grade responsiva de cards com número configurável de colunas por breakpoint e nivelamento automático de altura (.h-100).
     *
     * @param array $cards Array de strings contendo marcação HTML de cards.
     * @param array $colunas Configuração de colunas por breakpoint (ex: ['xs' => 1, 'md' => 3]).
     * @param int $gap Espaçamento de grade de 0 a 5 (classe g-*).
     * @param bool $mesmaAltura Se true, garante que todos os cards preencham 100% da altura da coluna (.h-100).
     * @param string $id Atributo ID opcional da grade.
     * @param string $classe Classes CSS adicionais.
     * @return string Grade de cards responsiva formatada.
     */
    public function divCardGrid($cards, $colunas = array('xs' => 1, 'md' => 3), $gap = 4, $mesmaAltura = true, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        $colsClass = '';
        if (is_array($colunas)) {
            foreach ($colunas as $bp => $num) {
                if ($bp == 'xs') {
                    $colsClass .= ' row-cols-' . (int)$num;
                } else {
                    $colsClass .= ' row-cols-' . $bp . '-' . (int)$num;
                }
            }
        } elseif (is_numeric($colunas)) {
            $colsClass = ' row-cols-1 row-cols-md-' . (int)$colunas;
        }

        $gapClass = ($gap !== '' && $gap !== null) ? (' g-' . (int)$gap) : '';
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $htmlCols = '';
        if (is_array($cards)) {
            foreach ($cards as $c) {
                $cardHtml = $c;
                if ($mesmaAltura) {
                    if (strpos($cardHtml, 'h-100') === false) {
                        $cardHtml = preg_replace('/class="card([^"]*)"/', 'class="card$1 h-100"', $cardHtml, 1);
                    }
                }
                $htmlCols .= '<div class="col">' . PHP_EOL .
                             '    ' . $cardHtml . PHP_EOL .
                             '</div>' . PHP_EOL;
            }
        }

        return '<div class="row' . $colsClass . $gapClass . $classe . '"' . $id . '>' . PHP_EOL .
               $htmlCols .
               '</div>' . PHP_EOL;
    }

    /**
     * Gera uma tag de imagem responsiva com classes utilitárias de formato geométrico e miniatura.
     *
     * @param string $src Caminho ou URL da imagem.
     * @param string $alt Texto alternativo para acessibilidade (atributo alt).
     * @param bool $responsiva Se true, adiciona a classe .img-fluid para fluidez máxima.
     * @param bool $miniatura Se true, adiciona borda arredondada de miniatura (.img-thumbnail).
     * @param string $formato Formato visual geométrico ('rounded', 'circle', 'pill', 'top', 'bottom').
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Tag <img> formatada com as classes utilitárias correspondentes.
     */
    public function geraImagem($src, $alt = '', $responsiva = true, $miniatura = false, $formato = '', $id = '', $classe = '')
    {
        $classes = array();
        if ($responsiva) {
            $classes[] = 'img-fluid';
        }
        if ($miniatura) {
            $classes[] = 'img-thumbnail';
        }
        if (!empty($formato)) {
            if ($formato == 'circle') {
                $classes[] = 'rounded-circle';
            } elseif ($formato == 'pill') {
                $classes[] = 'rounded-pill';
            } elseif ($formato == 'top') {
                $classes[] = 'card-img-top';
            } elseif ($formato == 'bottom') {
                $classes[] = 'card-img-bottom';
            } elseif ($formato == 'rounded') {
                $classes[] = 'rounded';
            } else {
                $classes[] = $formato;
            }
        }
        if (!empty($classe)) {
            $classes[] = $classe;
        }

        $classeAttr = !empty($classes) ? (' class="' . implode(' ', $classes) . '"') : '';
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        return '<img src="' . $src . '" alt="' . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . '"' . $classeAttr . $id . '>';
    }

    /**
     * Gera um elemento semântico <figure> com imagem responsiva e legenda <figcaption> alinhada.
     *
     * @param string $src Caminho ou URL da imagem.
     * @param string $legenda Texto descritivo exibido na legenda da figura.
     * @param string $alt Texto alternativo da imagem.
     * @param string $alinhamentoLegenda Alinhamento do texto da legenda ('start', 'center' ou 'end').
     * @param bool $miniatura Se true, aplica estilo thumbnail na imagem.
     * @param string $id Atributo ID opcional da figura.
     * @param string $classe Classes CSS adicionais.
     * @return string Elemento semântico <figure> formatado.
     */
    public function geraFigure($src, $legenda, $alt = '', $alinhamentoLegenda = '', $miniatura = false, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $figureClasse = 'figure' . (!empty($classe) ? (' ' . $classe) : '');

        $imgClasse = 'figure-img img-fluid rounded' . ($miniatura ? ' img-thumbnail' : '');
        $imgHtml = '<img src="' . $src . '" class="' . $imgClasse . '" alt="' . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . '">';

        $captionClasse = 'figure-caption';
        if ($alinhamentoLegenda == 'end' || $alinhamentoLegenda == 'right') {
            $captionClasse .= ' text-end';
        } elseif ($alinhamentoLegenda == 'center') {
            $captionClasse .= ' text-center';
        }

        return '<figure class="' . $figureClasse . '"' . $id . '>' . PHP_EOL .
               '    ' . $imgHtml . PHP_EOL .
               '    <figcaption class="' . $captionClasse . '">' . $legenda . '</figcaption>' . PHP_EOL .
               '</figure>' . PHP_EOL;
    }

    /**
     * Gera um grupo de listas (.list-group) com suporte a itens clicáveis, badges, checkboxes e numeração.
     *
     * @param array $itens Array de strings ou arrays estruturados com texto, titulo, url, badge, checkbox, etc.
     * @param bool $flush Se true, remove bordas externas e cantos arredondados (.list-group-flush).
     * @param bool $numerada Se true, adiciona numeração sequencial aos itens (.list-group-numbered).
     * @param bool $horizontal Se true, renderiza os itens dispostos horizontalmente.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Lista .list-group formatada em HTML.
     */
    public function geraListGroup($itens, $flush = false, $numerada = false, $horizontal = false, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        
        $classesLista = 'list-group';
        if ($flush) {
            $classesLista .= ' list-group-flush';
        }
        if ($numerada) {
            $classesLista .= ' list-group-numbered';
        }
        if ($horizontal === true) {
            $classesLista .= ' list-group-horizontal';
        } elseif (!empty($horizontal)) {
            $classesLista .= ' list-group-horizontal-' . $horizontal;
        }
        if (!empty($classe)) {
            $classesLista .= ' ' . $classe;
        }

        $temLink = false;
        foreach ($itens as $item) {
            if (is_array($item) && (!empty($item['url']) || !empty($item['acao']))) {
                $temLink = true;
                break;
            }
        }

        if ($temLink) {
            $tagAbertura = '<div class="' . $classesLista . '"' . $id . '>' . PHP_EOL;
            $tagFechamento = '</div>' . PHP_EOL;
        } elseif ($numerada) {
            $tagAbertura = '<ol class="' . $classesLista . '"' . $id . '>' . PHP_EOL;
            $tagFechamento = '</ol>' . PHP_EOL;
        } else {
            $tagAbertura = '<ul class="' . $classesLista . '"' . $id . '>' . PHP_EOL;
            $tagFechamento = '</ul>' . PHP_EOL;
        }

        $itemTag = $temLink ? 'div' : 'li';
        $htmlItens = '';
        foreach ($itens as $item) {
            if (is_string($item)) {
                $htmlItens .= '<' . $itemTag . ' class="list-group-item">' . $item . '</' . $itemTag . '>' . PHP_EOL;
                continue;
            }

            if (!is_array($item)) {
                continue;
            }

            $texto = isset($item['texto']) ? $item['texto'] : (isset($item['nome']) ? $item['nome'] : (isset($item['conteudo']) ? $item['conteudo'] : ''));
            $titulo = isset($item['titulo']) ? $item['titulo'] : '';
            $url = isset($item['url']) ? $item['url'] : '';
            $ativo = !empty($item['ativo']);
            $desativado = !empty($item['desativado']);
            $contexto = !empty($item['contexto']) ? (' list-group-item-' . $item['contexto']) : (!empty($item['tema']) ? (' list-group-item-' . $item['tema']) : '');
            $icone = !empty($item['icone']) ? ($this->obtemGlyphicon($item['icone']) . ' ') : '';
            $clique = !empty($item['clique']) ? (' onclick="' . $item['clique'] . '"') : '';

            $badgeHtml = '';
            if (isset($item['badge'])) {
                if (is_array($item['badge'])) {
                    $bTexto = isset($item['badge']['texto']) ? $item['badge']['texto'] : '';
                    $bTema = isset($item['badge']['tema']) ? $item['badge']['tema'] : 'primary';
                    $bPill = !empty($item['badge']['pilula']) ? ' rounded-pill' : '';
                    $badgeHtml = '<span class="badge text-bg-' . $bTema . $bPill . '">' . $bTexto . '</span>';
                } else {
                    $badgeHtml = '<span class="badge text-bg-primary rounded-pill">' . $item['badge'] . '</span>';
                }
            }

            $inputControle = '';
            if (isset($item['check']) && is_array($item['check'])) {
                $cId = isset($item['check']['id']) ? $item['check']['id'] : '';
                $cNome = isset($item['check']['nome']) ? $item['check']['nome'] : '';
                $cValor = isset($item['check']['valor']) ? $item['check']['valor'] : '1';
                $cCkd = !empty($item['check']['checked']) ? ' checked' : '';
                $cDis = !empty($item['check']['disabled']) ? ' disabled' : '';
                $inputControle = '<input class="form-check-input me-2" type="checkbox" name="' . $cNome . '" id="' . $cId . '" value="' . $cValor . '"' . $cCkd . $cDis . '>';
            } elseif (isset($item['radio']) && is_array($item['radio'])) {
                $rId = isset($item['radio']['id']) ? $item['radio']['id'] : '';
                $rNome = isset($item['radio']['nome']) ? $item['radio']['nome'] : '';
                $rValor = isset($item['radio']['valor']) ? $item['radio']['valor'] : '1';
                $rCkd = !empty($item['radio']['checked']) ? ' checked' : '';
                $rDis = !empty($item['radio']['disabled']) ? ' disabled' : '';
                $inputControle = '<input class="form-check-input me-2" type="radio" name="' . $rNome . '" id="' . $rId . '" value="' . $rValor . '"' . $rCkd . $rDis . '>';
            }

            $itemClasses = 'list-group-item';
            if (!empty($url) || !empty($item['acao'])) {
                $itemClasses .= ' list-group-item-action';
            }
            if ($ativo) {
                $itemClasses .= ' active';
            }
            if ($desativado) {
                $itemClasses .= ' disabled';
            }
            $itemClasses .= $contexto;

            $aria = '';
            if ($ativo) {
                $aria .= ' aria-current="true"';
            }
            if ($desativado) {
                $aria .= ' aria-disabled="true"';
            }

            if (!empty($titulo)) {
                $itemClasses .= ' d-flex justify-content-between align-items-start';
                $corpoItem = '<div class="ms-2 me-auto">' .
                             '<div class="fw-bold">' . $icone . $titulo . '</div>' .
                             $texto .
                             '</div>' . $badgeHtml;
            } elseif (!empty($badgeHtml)) {
                $itemClasses .= ' d-flex justify-content-between align-items-center';
                $corpoItem = '<span>' . $inputControle . $icone . $texto . '</span>' . $badgeHtml;
            } else {
                $corpoItem = $inputControle . $icone . $texto;
            }

            if (!empty($url)) {
                $htmlItens .= '<a href="' . $url . '" class="' . $itemClasses . '"' . $clique . $aria . '>' . $corpoItem . '</a>' . PHP_EOL;
            } elseif (!empty($item['acao'])) {
                $htmlItens .= '<button type="button" class="' . $itemClasses . '"' . $clique . $aria . '>' . $corpoItem . '</button>' . PHP_EOL;
            } else {
                $htmlItens .= '<' . $itemTag . ' class="' . $itemClasses . '"' . $aria . '>' . $corpoItem . '</' . $itemTag . '>' . PHP_EOL;
            }
        }

        return $tagAbertura . $htmlItens . $tagFechamento;
    }

    /**
     * Gera a estrutura semântica para publicação editorial ou artigo de blog (.blog-post).
     *
     * @param string $titulo Título principal do artigo.
     * @param string $meta Informações de metadados do artigo (ex: data de publicação e autor).
     * @param string $conteudo Texto ou marcação HTML do corpo do artigo.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Artigo <article class="blog-post"> formatado.
     */
    public function geraBlogPost($titulo, $meta, $conteudo, $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if (!empty($meta)) {
            $meta = '<p class="blog-post-meta text-body-secondary">' . $meta . '</p>' . PHP_EOL;
        }
        $post = '<article class="blog-post mb-4' . $classe . '"' . $id . '>' . PHP_EOL .
                '<h2 class="blog-post-title mb-1">' . $titulo . '</h2>' . PHP_EOL .
                $meta . '<div>' . $conteudo . '</div>' . PHP_EOL .
                '</article>' . PHP_EOL;
        return $post;
    }

    /**
     * Gera um carrossel rotativo de imagens (.carousel) com suporte a indicadores, controles de navegação e temporização.
     *
     * @param string $id Identificador único do elemento carrossel.
     * @param array $imagems Array de slides contendo 'src', 'alt', 'titulo', 'texto' e 'ativo' (bool).
     * @param bool $indicador Se true, exibe barras de indicador de posição na base.
     * @param bool $controle Se true, exibe setas de avançar e retroceder.
     * @param string $rotulocontroleanterior Texto de acessibilidade para o controle anterior.
     * @param string $rotulocontroleproximo Texto de acessibilidade para o próximo controle.
     * @param int|bool $intervalo Tempo de exibição de cada slide em milissegundos.
     * @param bool $volta Se true, ativa rotação automática contínua.
     * @return string Carrossel interativo formatado em HTML.
     */
    public function geraCarrossel($id, $imagems, $indicador = false, $controle = true, $rotulocontroleanterior = 'previous', $rotulocontroleproximo = 'next', $intervalo = false, $volta = false)
    {
        if ($indicador) {
            $pos = '<div class="carousel-indicators">' . PHP_EOL;
            foreach ($imagems as $n => $img) {
                $ativo = !empty($img['ativo']) ? ' class="active" aria-current="true"' : '';
                $pos .= '<button type="button" data-bs-target="#' . $id . '" data-target="#' . $id . '" data-bs-slide-to="' . $n . '" data-slide-to="' . $n . '"' . $ativo . ' aria-label="Slide ' . ($n + 1) . '"></button>' . PHP_EOL;
            }
            $pos .= '</div>' . PHP_EOL;
        } else {
            $pos = '';
        }
        if ($controle) {
            $setas = '<button class="carousel-control-prev" type="button" data-bs-target="#' . $id . '" data-target="#' . $id . '" data-bs-slide="prev" data-slide="prev">' . PHP_EOL .
                     '<span class="carousel-control-prev-icon" aria-hidden="true"></span>' . PHP_EOL .
                     '<span class="visually-hidden">' . $rotulocontroleanterior . '</span>' . PHP_EOL .
                     '</button>' . PHP_EOL .
                     '<button class="carousel-control-next" type="button" data-bs-target="#' . $id . '" data-target="#' . $id . '" data-bs-slide="next" data-slide="next">' . PHP_EOL .
                     '<span class="carousel-control-next-icon" aria-hidden="true"></span>' . PHP_EOL .
                     '<span class="visually-hidden">' . $rotulocontroleproximo . '</span>' . PHP_EOL .
                     '</button>' . PHP_EOL;
        } else {
            $setas = '';
        }
        $rideAttr = ($volta !== false) ? ' data-bs-ride="carousel"' : '';
        $intervalAttr = ($intervalo !== false) ? (' data-bs-interval="' . $intervalo . '"') : '';

        $carrossel = '<div id="' . $id . '" class="carousel slide"' . $rideAttr . $intervalAttr . '>' . PHP_EOL .
                     $pos .
                     '<div class="carousel-inner">' . PHP_EOL;
        foreach ($imagems as $img) {
            $ativo = !empty($img['ativo']) ? ' active' : '';
            if (!empty($img['titulo']) or !empty($img['texto'])) {
                $legenda = '<div class="carousel-caption d-none d-md-block">' . PHP_EOL;
                if (!empty($img['titulo'])) { $legenda .= '<h5>' . $img['titulo'] . '</h5>' . PHP_EOL; }
                if (!empty($img['texto'])) { $legenda .= '<p>' . $img['texto'] . '</p>' . PHP_EOL; }
                $legenda .= '</div>' . PHP_EOL;
            } else {
                $legenda = '';
            }
            $carrossel .= '<div class="carousel-item' . $ativo . '">' . PHP_EOL .
                          '<img class="d-block w-100 img-fluid" src="' . $img['src'] . '" alt="' . $img['alt'] . '">' . PHP_EOL .
                          $legenda .
                          '</div>' . PHP_EOL;
        }
        $carrossel .= '</div>' . PHP_EOL .
                      $setas .
                      '</div>' . PHP_EOL;
        return $carrossel;
    }

    /**
     * Gera um painel sanfonado (.accordion) com itens expansíveis e colapsáveis.
     *
     * @param array $conteudo Array de itens contendo 'titulo', 'texto' e 'colapso' (bool).
     * @param string $id Identificador base único do acordeão (padrão 'accordion').
     * @return string Estrutura do acordeão colapsável formatada em HTML.
     */
    public function geraAccordion($conteudo, $id = 'accordion')
    {
        $accordion = '<div class="accordion" id="' . $id . '">' . PHP_EOL;
        foreach ($conteudo as $n => $item) {
            $isCollapsed = !empty($item['colapso']);
            $btnClass = $isCollapsed ? ' collapsed' : '';
            $ariaExpanded = $isCollapsed ? 'false' : 'true';
            $collapseShow = $isCollapsed ? '' : ' show';
            $headingId = $id . 'Heading' . $n;
            $collapseId = $id . 'Collapse' . $n;

            $accordion .= '<div class="accordion-item">' . PHP_EOL .
                          '<h2 class="accordion-header" id="' . $headingId . '">' . PHP_EOL .
                          '<button class="accordion-button' . $btnClass . '" type="button" data-bs-toggle="collapse" data-toggle="collapse" data-bs-target="#' . $collapseId . '" data-target="#' . $collapseId . '" aria-expanded="' . $ariaExpanded . '" aria-controls="' . $collapseId . '">' . PHP_EOL .
                          $item['titulo'] . PHP_EOL .
                          '</button>' . PHP_EOL .
                          '</h2>' . PHP_EOL .
                          '<div id="' . $collapseId . '" class="accordion-collapse collapse' . $collapseShow . '" aria-labelledby="' . $headingId . '" data-bs-parent="#' . $id . '" data-parent="#' . $id . '">' . PHP_EOL .
                          '<div class="accordion-body">' . PHP_EOL .
                          $item['texto'] . PHP_EOL .
                          '</div>' . PHP_EOL .
                          '</div>' . PHP_EOL .
                          '</div>' . PHP_EOL;
        }
        $accordion .= '</div>' . PHP_EOL;
        return $accordion;
    }

    /**
     * Alias funcional para o método geraAccordion().
     *
     * @param array $conteudo Array de itens contendo 'titulo', 'texto' e 'colapso'.
     * @param string $id Identificador base único do acordeão.
     * @return string Estrutura do acordeão colapsável formatada em HTML.
     */
    public function geraAccordionPanel($conteudo, $id = 'accordion')
    {
        return $this->geraAccordion($conteudo, $id);
    }

    /**
     * Gera uma barra de navegação de páginas responsiva (.pagination) com supressão de páginas intermediárias.
     *
     * @param array $paginas Array de páginas contendo 'numero', 'url', 'atual' (bool) e 'clique'.
     * @param bool $simbolo Se true, utiliza ícones para os botões anterior e próximo.
     * @param string $rotuloant Texto do botão anterior quando símbolos estão desativados.
     * @param string $rotuloprox Texto do botão próximo quando símbolos estão desativados.
     * @param string $tamanho Tamanho da paginação ('lg' ou 'sm').
     * @param string $alinhamento Alinhamento horizontal ('cen' para centralizado ou 'dir' para direita).
     * @param int $suprimir Limite máximo de páginas exibidas antes de suprimir com reticências.
     * @param bool $botaoap Se true, inclui os botões de avançar e voltar nas extremidades.
     * @return string Barra de paginação formatada em HTML.
     */
    public function geraPaginacao($paginas, $simbolo = true, $rotuloant = 'Previous', $rotuloprox = 'Next', $tamanho = '', $alinhamento = '', $suprimir = 7, $botaoap = true)
    {
        if ($tamanho == 'lg') {
            $classetam = ' pagination-lg';
        } elseif ($tamanho == 'sm') {
            $classetam = ' pagination-sm';
        } else {
            $classetam = '';
        }
        if ($alinhamento == 'dir') {
            $classeali = ' justify-content-end';
        } elseif ($alinhamento == 'cen') {
            $classeali = ' justify-content-center';
        } else {
            $classeali = '';
        }
        $paginacao = '<nav aria-label="Page navigation">' . PHP_EOL .
                     '<ul class="pagination' . $classetam . $classeali . '">' . PHP_EOL;
        $pgs = '';
        $anterior = '';
        $proxima = '';
        $qtdpag = count($paginas);
        $ultima = $qtdpag - 1;
        $atual = 0;
        foreach ($paginas as $key => $pagina) {
            if ($pagina['atual']) {
                $atual = $key;
            }
        }
        if ($atual >= 5) {
            $liminf = 2;
        } elseif ($atual == 4) {
            $liminf = 3;
        } elseif ($atual == 3) {
            $liminf = 2;
        } elseif ($atual == 2) {
            $liminf = 1;
        } else {
            $liminf = 0;
        }
        if ($atual <= $ultima-5) {
            $limsup = 2;
        } elseif ($atual == $ultima-4) {
            $limsup = 3;
        } elseif ($atual == $ultima-3) {
            $limsup = 2;
        } elseif ($atual == $ultima-2) {
            $limsup = 1;
        } else {
            $limsup = 0;
        }
        
        foreach ($paginas as $key => $pagina) {
            if ($pagina['atual']) {
                if ($botaoap) {
                    if ($key == 0) {
                        $classeant = ' disabled';
                        if ($simbolo) {
                            $linka = '<span class="page-link">' . $this->obtemGlyphicon('triangle-left') . '</span>';
                        } else {
                            $linka = '<span class="page-link">' . $rotuloant . '</span>';
                        }
                    } else {
                        $classeant = '';
                        if (isset($paginas[$key-1]['form']) and !empty($paginas[$key-1]['form'])) {
                            $form = $paginas[$key-1]['form'];
                        } else {
                            $form = '';
                        }
                        if (!empty($paginas[$key-1]['clique'])) {
                            $cliqueant = ' onclick="' . $paginas[$key-1]['clique'] . '"';
                        } else {
                            $cliqueant = '';
                        }
                        if (empty($paginas[$key-1]['url']) or $paginas[$key-1]['url'] == '#') {
                            $hrefa = '';
                        } else {
                            $hrefa = ' href="' . $paginas[$key-1]['url'] . '"';
                        }
                        if ($simbolo) {
                            $linka = $form . '<a class="page-link"' . $hrefa . $cliqueant . '>' . $this->obtemGlyphicon('triangle-left') . '</a>';
                        } else {
                            $linka = $form . '<a class="page-link"' . $hrefa . $cliqueant . '>' . $rotuloant . '</a>';
                        }
                    }
                    if ($key == $ultima) {
                        $classeprox = ' disabled';
                        if ($simbolo) {
                            $linkp = '<span class="page-link">' . $this->obtemGlyphicon('triangle-right') . '</span>';
                        } else {
                            $linkp = '<span class="page-link">' . $rotuloprox . '</span>';
                        }
                    } else {
                        $classeprox = '';
                        if (isset($paginas[$key+1]['form']) and !empty($paginas[$key+1]['form'])) {
                            $form = $paginas[$key+1]['form'];
                        } else {
                            $form = '';
                        }
                        if (!empty($paginas[$key+1]['clique'])) {
                            $cliqueprox = ' onclick="' . $paginas[$key+1]['clique'] . '"';
                        } else {
                            $cliqueprox = '';
                        }
                        if (empty($paginas[$key+1]['url']) or $paginas[$key+1]['url'] == '#') {
                            $hrefp = '';
                        } else {
                            $hrefp = ' href="' . $paginas[$key+1]['url'] . '"';
                        }
                        if ($simbolo) {
                            $linkp = $form . '<a class="page-link"' . $hrefp . $cliqueprox . '>' . $this->obtemGlyphicon('triangle-right') . '</a>';
                        } else {
                            $linkp = $form . '<a class="page-link"' . $hrefp . $cliqueprox . '>' . $rotuloprox . '</a>';
                        }
                    }
                    $anterior = '<li class="page-item' . $classeant . '">' . $linka . '</li>' . PHP_EOL;
                    $proxima = '<li class="page-item' . $classeprox . '">' . $linkp . '</li>' . PHP_EOL;
                }
                $classeatual = ' active';
                $link = '<span class="page-link">' . $pagina['numero'] . '</span>';
            } else {
                if (isset($pagina['form']) and !empty($pagina['form'])) {
                    $form = $pagina['form'];
                } else {
                    $form = '';
                }
                if (!empty($pagina['clique'])) {
                    $clique = ' onclick="' . $pagina['clique'] . '"';
                } else {
                    $clique = '';
                }
                if (empty($pagina['url']) or $pagina['url'] == '#') {
                    $href = '';
                } else {
                    $href = ' href="' . $pagina['url'] . '"';
                }
                $classeatual = '';
                $link = $form . '<a class="page-link"' . $href . $clique . '>' . $pagina['numero'] . '</a>';
            }
            if (($qtdpag <= $suprimir) or ($key >= $atual-$liminf and $key <= $atual+$limsup)) {
                $pgs .= '<li class="page-item' . $classeatual . '">' . $link . '</li>' . PHP_EOL;
            }
        }
        
        $trespa = '';
        $trespp = '';
        $primeira = '';
        $finalista = '';
        if ($qtdpag > $suprimir) {
            if ($atual > 3 and $atual != 4) {
                if ($simbolo) {
                    $trespa = '<li class="page-item disabled"><span class="page-link">' . $this->obtemGlyphicon('option-horizontal') . '</span></li>' . PHP_EOL;
                } else {
                    $trespa = '<li class="page-item disabled"><span class="page-link">&hellip;</span></li>' . PHP_EOL;
                }
            }
            if ($ultima > $atual+3 and $atual != $ultima-4) {
                if ($simbolo) {
                    $trespp = '<li class="page-item disabled"><span class="page-link">' . $this->obtemGlyphicon('option-horizontal') . '</span></li>' . PHP_EOL;
                } else {
                    $trespp = '<li class="page-item disabled"><span class="page-link">&hellip;</span></li>' . PHP_EOL;
                }
            }
            
            if ($atual > 0) {
                if (isset($paginas[0]['form']) and !empty($paginas[0]['form'])) {
                    $form = $paginas[0]['form'];
                } else {
                    $form = '';
                }
                if (!empty($paginas[0]['clique'])) {
                    $cliquepri = ' onclick="' . $paginas[0]['clique'] . '"';
                } else {
                    $cliquepri = '';
                }
                if (empty($paginas[0]['url']) or $paginas[0]['url'] == '#') {
                    $hrefi = '';
                } else {
                    $hrefi = ' href="' . $paginas[0]['url'] . '"';
                }
                $linki = $form . '<a class="page-link"' . $hrefi . $cliquepri . '>' . $paginas[0]['numero'] . '</a>';
                $primeira = '<li class="page-item">' . $linki . '</li>' . PHP_EOL;
            }
            if ($atual < $ultima) {
                if (isset($paginas[$ultima]['form']) and !empty($paginas[$ultima]['form'])) {
                    $form = $paginas[$ultima]['form'];
                } else {
                    $form = '';
                }
                if (!empty($paginas[$ultima]['clique'])) {
                    $cliqueult = ' onclick="' . $paginas[$ultima]['clique'] . '"';
                } else {
                    $cliqueult = '';
                }
                if (empty($paginas[$ultima]['url']) or $paginas[$ultima]['url'] == '#') {
                    $hrefu = '';
                } else {
                    $hrefu = ' href="' . $paginas[$ultima]['url'] . '"';
                }
                $linku = $form . '<a class="page-link"' . $hrefu . $cliqueult . '>' . $paginas[$ultima]['numero'] . '</a>';
                $finalista = '<li class="page-item">' . $linku . '</li>' . PHP_EOL;
            }
        }
        
        $paginacao .= $anterior . $primeira . $trespa . $pgs . $trespp . $finalista . $proxima;
        $paginacao .= '</ul>' . PHP_EOL .
                      '</nav>' . PHP_EOL;
        return $paginacao;
    }

    /**
     * Gera uma barra de paginação onde os links utilizam navegação direta pelo atributo href.
     *
     * @param array $paginas Array de páginas contendo 'numero', 'url' e 'atual'.
     * @param bool $simbolo Se true, utiliza ícones para anterior e próximo.
     * @param string $rotuloant Texto do botão anterior.
     * @param string $rotuloprox Texto do botão próximo.
     * @param string $tamanho Tamanho da paginação ('lg' ou 'sm').
     * @param string $alinhamento Alinhamento horizontal ('cen' ou 'dir').
     * @param int $suprimir Limite máximo de páginas visíveis antes de suprimir com reticências.
     * @return string Barra de paginação com links diretos formatada.
     */
    public function geraPaginacaoComHref($paginas, $simbolo = true, $rotuloant = 'Previous', $rotuloprox = 'Next', $tamanho = '', $alinhamento = '', $suprimir = 7)
    {
        if ($tamanho == 'lg') {
            $classetam = ' pagination-lg';
        } elseif ($tamanho == 'sm') {
            $classetam = ' pagination-sm';
        } else {
            $classetam = '';
        }
        if ($alinhamento == 'dir') {
            $classeali = ' justify-content-end';
        } elseif ($alinhamento == 'cen') {
            $classeali = ' justify-content-center';
        } else {
            $classeali = '';
        }
        $paginacao = '<nav aria-label="Page navigation">' . PHP_EOL .
                     '<ul class="pagination' . $classetam . $classeali . '">' . PHP_EOL;
        $pgs = '';
        $anterior = '';
        $proxima = '';
        $linki = '';
        $linka = '';
        $linku = '';
        $linkp = '';
        $qtdpag = count($paginas);
        $atual = 0;
        $ultima = $qtdpag - 1;
        foreach ($paginas as $key => $pagina) {
            if ($pagina['atual']) {
                $atual = $key;
            }
        }
        if ($atual >= 5) {
            $liminf = 2;
        } elseif ($atual == 4) {
            $liminf = 3;
        } elseif ($atual == 3) {
            $liminf = 2;
        } elseif ($atual == 2) {
            $liminf = 1;
        } else {
            $liminf = 0;
        }
        if ($atual <= $ultima-5) {
            $limsup = 2;
        } elseif ($atual == $ultima-4) {
            $limsup = 3;
        } elseif ($atual == $ultima-3) {
            $limsup = 2;
        } elseif ($atual == $ultima-2) {
            $limsup = 1;
        } else {
            $limsup = 0;
        }
        
        foreach ($paginas as $key => $pagina) {
            if ($pagina['atual']) {
                if ($key == 0) {
                    $classeant = ' disabled';
                    if ($simbolo) {
                        $linka = '<span class="page-link">' . $this->obtemGlyphicon('triangle-left') . '</span>';
                    } else {
                        $linka = '<span class="page-link">' . $rotuloant . '</span>';
                    }
                } else {
                    $classeant = '';
                    if (isset($paginas[0]['form']) and !empty($paginas[0]['form'])) {
                        $formi = $paginas[0]['form'];
                    } else {
                        $formi = '';
                    }
                    if (isset($paginas[$key-1]['form']) and !empty($paginas[$key-1]['form'])) {
                        $forma = $paginas[$key-1]['form'];
                    } else {
                        $forma = '';
                    }
                    if (!empty($paginas[0]['clique'])) {
                        $cliquepri = ' onclick="' . $paginas[0]['clique'] . '"';
                    } else {
                        $cliquepri = '';
                    }
                    if (!empty($paginas[$key-1]['clique'])) {
                        $cliqueant = ' onclick="' . $paginas[$key-1]['clique'] . '"';
                    } else {
                        $cliqueant = '';
                    }
                    if ($simbolo) {
                        $linki = $formi . '<a class="page-link" href="' . $paginas[0]['url'] . '"' . $cliquepri . '>' . $paginas[0]['numero'] . '</a>';
                        $linka = $forma . '<a class="page-link" href="' . $paginas[$key-1]['url'] . '"' . $cliqueant . '>' . $this->obtemGlyphicon('triangle-left') . '</a>';
                    } else {
                        $linki = $formi . '<a class="page-link" href="' . $paginas[0]['url'] . '"' . $cliquepri . '>' . $paginas[0]['numero'] . '</a>';
                        $linka = $forma . '<a class="page-link" href="' . $paginas[$key-1]['url'] . '"' . $cliqueant . '>' . $rotuloant . '</a>';
                    }
                }
                if ($key == $ultima) {
                    $classeprox = ' disabled';
                    if ($simbolo) {
                        $linkp = '<span class="page-link">' . $this->obtemGlyphicon('triangle-right') . '</span>';
                    } else {
                        $linkp = '<span class="page-link">' . $rotuloprox . '</span>';
                    }
                } else {
                    $classeprox = '';
                    if (isset($paginas[$ultima]['form']) and !empty($paginas[$ultima]['form'])) {
                        $formu = $paginas[$ultima]['form'];
                    } else {
                        $formu = '';
                    }
                    if (isset($paginas[$key+1]['form']) and !empty($paginas[$key+1]['form'])) {
                        $formp = $paginas[$key+1]['form'];
                    } else {
                        $formp = '';
                    }
                    if (!empty($paginas[$ultima]['clique'])) {
                        $cliqueult = ' onclick="' . $paginas[$ultima]['clique'] . '"';
                    } else {
                        $cliqueult = '';
                    }
                    if (!empty($paginas[$key+1]['clique'])) {
                        $cliqueprox = ' onclick="' . $paginas[$key+1]['clique'] . '"';
                    } else {
                        $cliqueprox = '';
                    }
                    if ($simbolo) {
                        $linku = $formu . '<a class="page-link" href="' . $paginas[$ultima]['url'] . '"' . $cliqueult . '>' . $paginas[$ultima]['numero'] . '</a>';
                        $linkp = $formp . '<a class="page-link" href="' . $paginas[$key+1]['url'] . '"' . $cliqueprox . '>' . $this->obtemGlyphicon('triangle-right') . '</a>';
                    } else {
                        $linku = $formu . '<a class="page-link" href="' . $paginas[$ultima]['url'] . '"' . $cliqueult . '>' . $paginas[$ultima]['numero'] . '</a>';
                        $linkp = $formp . '<a class="page-link" href="' . $paginas[$key+1]['url'] . '"' . $cliqueprox . '>' . $rotuloprox . '</a>';
                    }
                }
                $anterior = '<li class="page-item' . $classeant . '">' . $linka . '</li>' . PHP_EOL;
                $proxima = '<li class="page-item' . $classeprox . '">' . $linkp . '</li>' . PHP_EOL;
                $classeatual = ' active';
                $link = '<span class="page-link">' . $pagina['numero'] . '</span>';
            } else {
                if (isset($pagina['form']) and !empty($pagina['form'])) {
                    $form = $pagina['form'];
                } else {
                    $form = '';
                }
                if (!empty($pagina['clique'])) {
                    $clique = ' onclick="' . $pagina['clique'] . '"';
                } else {
                    $clique = '';
                }
                $classeatual = '';
                $link = $form . '<a class="page-link" href="' . $pagina['url'] . '"' . $clique . '>' . $pagina['numero'] . '</a>';
            }
            if ($qtdpag > $suprimir) {
                if ($key >= $atual-$liminf and $key <= $atual+$limsup) {
                    $pgs .= '<li class="page-item' . $classeatual . '">' . $link . '</li>' . PHP_EOL;
                }
            } else {
                $pgs .= '<li class="page-item' . $classeatual . '">' . $link . '</li>' . PHP_EOL;
            }
        }
        $trespa = '';
        $trespp = '';
        $primeira = '';
        $finalista = '';
        if ($qtdpag > $suprimir) {
            if ($atual > 3 and $atual != 4) {
                if ($simbolo) {
                    $trespa = '<li class="page-item disabled"><span class="page-link">' . $this->obtemGlyphicon('option-horizontal') . '</span></li>' . PHP_EOL;
                } else {
                    $trespa = '<li class="page-item disabled"><span class="page-link">&hellip;</span></li>' . PHP_EOL;
                }
            }
            if ($ultima > $atual+3 and $atual != $ultima-4) {
                if ($simbolo) {
                    $trespp = '<li class="page-item disabled"><span class="page-link">' . $this->obtemGlyphicon('option-horizontal') . '</span></li>' . PHP_EOL;
                } else {
                    $trespp = '<li class="page-item disabled"><span class="page-link">&hellip;</span></li>' . PHP_EOL;
                }
            }
            if ($atual > 0) {
                $primeira = '<li class="page-item">' . $linki . '</li>' . PHP_EOL;
            }
            if ($atual < $ultima) {
                $finalista = '<li class="page-item">' . $linku . '</li>' . PHP_EOL;
            }
        }
        $paginacao .= $anterior . $primeira . $trespa . $pgs . $trespp . $finalista . $proxima;
        $paginacao .= '</ul>' . PHP_EOL .
                      '</nav>' . PHP_EOL;
        return $paginacao;
    }

    /**
     * Gera uma paginação avançada no estilo Tape-Deck (Primeira, Anterior, Atual, Próxima, Última).
     *
     * @param array $paginas Array de páginas contendo 'numero', 'url' e 'atual'.
     * @param bool $simbolo Se true, utiliza ícones nos botões de navegação.
     * @param string $rotuloant Texto do botão Anterior.
     * @param string $rotuloprox Texto do botão Próxima.
     * @param string $rotuloatual Rótulo de acessibilidade para a página ativa.
     * @param string $tamanho Tamanho da paginação ('lg' ou 'sm').
     * @param string $alinhamento Alinhamento horizontal ('cen' ou 'dir').
     * @param int $suprimir Limite máximo de páginas antes da supressão.
     * @param string $rotulopri Texto ou ícone da Primeira página.
     * @param string $rotuloult Texto ou ícone da Última página.
     * @return string Paginação estilo tape-deck formatada em HTML.
     */
    public function geraPaginacaoTapeDeck($paginas, $simbolo = true, $rotuloant = 'Previous', $rotuloprox = 'Next', $rotuloatual = '(current)', $tamanho = '', $alinhamento = '', $suprimir = 7, $rotulopri = 'First', $rotuloult = 'Last')
    {
        if ($tamanho == 'lg') {
            $classetam = ' pagination-lg';
        } elseif ($tamanho == 'sm') {
            $classetam = ' pagination-sm';
        } else {
            $classetam = '';
        }
        if ($alinhamento == 'dir') {
            $classeali = ' justify-content-end';
        } elseif ($alinhamento == 'cen') {
            $classeali = ' justify-content-center';
        } else {
            $classeali = '';
        }
        $label = 'Search results pages';
        $paginacao = '<nav aria-label="' . $label . '">' . PHP_EOL .
                     '<ul class="pagination' . $classetam . $classeali . '">' . PHP_EOL;
        $pgs = '';
        $anterior = '';
        $proxima = '';
        $linki = '';
        $linka = '';
        $linku = '';
        $linkp = '';
        $qtdpag = count($paginas);
        $ultima = $qtdpag - 1;
        foreach ($paginas as $key => $pagina) {
            if ($pagina['atual']) {
                $atual = $key;
            }
        }
        foreach ($paginas as $key => $pagina) {
            if ($pagina['atual']) {
                if ($key == 0) {
                    $classepri = ' disabled';
                    $classeant = ' disabled';
                    if ($simbolo) {
                        $linki = '<span class="page-link" aria-label="' . $rotulopri . '"><span aria-hidden="true">' . $this->obtemGlyphicon('step-backward') . '</span><span class="visually-hidden">' . $rotulopri . '</span></span>';
                        $linka = '<span class="page-link" aria-label="' . $rotuloant . '"><span aria-hidden="true">' . $this->obtemGlyphicon('triangle-left') . '</span><span class="visually-hidden">' . $rotuloant . '</span></span>';
                    } else {
                        $linki = '<span class="page-link">' . $rotulopri . '</span>';
                        $linka = '<span class="page-link">' . $rotuloant . '</span>';
                    }
                } else {
                    $classepri = '';
                    $classeant = '';
                    if (isset($paginas[0]['form']) and !empty($paginas[0]['form'])) {
                        $formi = $paginas[0]['form'];
                    } else {
                        $formi = '';
                    }
                    if (isset($paginas[$key-1]['form']) and !empty($paginas[$key-1]['form'])) {
                        $forma = $paginas[$key-1]['form'];
                    } else {
                        $forma = '';
                    }
                    if (!empty($paginas[0]['clique'])) {
                        $cliquepri = ' onclick="' . $paginas[0]['clique'] . '"';
                    } else {
                        $cliquepri = '';
                    }
                    if (!empty($paginas[$key-1]['clique'])) {
                        $cliqueant = ' onclick="' . $paginas[$key-1]['clique'] . '"';
                    } else {
                        $cliqueant = '';
                    }
                    if ($simbolo) {
                        $linki = $formi . '<a class="page-link" href="' . $paginas[0]['url'] . '" aria-label="' . $rotulopri . '"' . $cliquepri . '><span aria-hidden="true">' . $this->obtemGlyphicon('step-backward') . '</span><span class="visually-hidden">' . $rotulopri . '</span></a>';
                        $linka = $forma . '<a class="page-link" href="' . $paginas[$key-1]['url'] . '" aria-label="' . $rotuloant . '"' . $cliqueant . '><span aria-hidden="true">' . $this->obtemGlyphicon('triangle-left') . '</span><span class="visually-hidden">' . $rotuloant . '</span></a>';
                    } else {
                        $linki = $formi . '<a class="page-link" href="' . $paginas[0]['url'] . '"' . $cliquepri . '>' . $rotulopri . '</a>';
                        $linka = $forma . '<a class="page-link" href="' . $paginas[$key-1]['url'] . '"' . $cliqueant . '>' . $rotuloant . '</a>';
                    }
                }
                if ($key == $ultima) {
                    $classeult = ' disabled';
                    $classeprox = ' disabled';
                    if ($simbolo) {
                        $linku = '<span class="page-link" aria-label="' . $rotuloult . '"><span aria-hidden="true">' . $this->obtemGlyphicon('step-forward') . '</span><span class="visually-hidden">' . $rotuloult . '</span></span>';
                        $linkp = '<span class="page-link" aria-label="' . $rotuloprox . '"><span aria-hidden="true">' . $this->obtemGlyphicon('triangle-right') . '</span><span class="visually-hidden">' . $rotuloprox . '</span></span>';
                    } else {
                        $linku = '<span class="page-link">' . $rotuloult . '</span>';
                        $linkp = '<span class="page-link">' . $rotuloprox . '</span>';
                    }
                } else {
                    $classeult = '';
                    $classeprox = '';
                    if (isset($paginas[$ultima]['form']) and !empty($paginas[$ultima]['form'])) {
                        $formu = $paginas[$ultima]['form'];
                    } else {
                        $formu = '';
                    }
                    if (isset($paginas[$key+1]['form']) and !empty($paginas[$key+1]['form'])) {
                        $formp = $paginas[$key+1]['form'];
                    } else {
                        $formp = '';
                    }
                    if (!empty($paginas[$ultima]['clique'])) {
                        $cliqueult = ' onclick="' . $paginas[$ultima]['clique'] . '"';
                    } else {
                        $cliqueult = '';
                    }
                    if (!empty($paginas[$key+1]['clique'])) {
                        $cliqueprox = ' onclick="' . $paginas[$key+1]['clique'] . '"';
                    } else {
                        $cliqueprox = '';
                    }
                    if ($simbolo) {
                        $linku = $formu . '<a class="page-link" href="' . $paginas[$ultima]['url'] . '" aria-label="' . $rotuloult . '"' . $cliqueult . '><span aria-hidden="true">' . $this->obtemGlyphicon('step-forward') . '</span><span class="visually-hidden">' . $rotuloult . '</span></a>';
                        $linkp = $formp . '<a class="page-link" href="' . $paginas[$key+1]['url'] . '" aria-label="' . $rotuloprox . '"' . $cliqueprox . '><span aria-hidden="true">' . $this->obtemGlyphicon('triangle-right') . '</span><span class="visually-hidden">' . $rotuloprox . '</span></a>';
                    } else {
                        $linku = $formu . '<a class="page-link" href="' . $paginas[$ultima]['url'] . '"' . $cliqueult . '>' . $rotuloult . '</a>';
                        $linkp = $formp . '<a class="page-link" href="' . $paginas[$key+1]['url'] . '"' . $cliqueprox . '>' . $rotuloprox . '</a>';
                    }
                }
                $anterior = '<li class="page-item' . $classeant . '">' . $linka . '</li>' . PHP_EOL;
                $proxima = '<li class="page-item' . $classeprox . '">' . $linkp . '</li>' . PHP_EOL;
                $classeatual = ' active';
                $link = '<span class="page-link">' . $pagina['numero'] . ' <span class="visually-hidden">' . $rotuloatual . '</span></span>';
            } else {
                if (isset($pagina['form']) and !empty($pagina['form'])) {
                    $form = $pagina['form'];
                } else {
                    $form = '';
                }
                if (!empty($pagina['clique'])) {
                    $clique = ' onclick="' . $pagina['clique'] . '"';
                } else {
                    $clique = '';
                }
                $classeatual = '';
                $link = $form . '<a class="page-link" href="' . $pagina['url'] . '"' . $clique . '>' . $pagina['numero'] . '</a>';
            }
            if ($qtdpag > $suprimir) {
                if ($key >= $atual-2 and $key <= $atual+2) {
                    $pgs .= '<li class="page-item' . $classeatual . '">' . $link . '</li>' . PHP_EOL;
                }
            } else {
                $pgs .= '<li class="page-item' . $classeatual . '">' . $link . '</li>' . PHP_EOL;
            }
        }
        $trespa = '';
        $trespp = '';
        $primeira = '';
        $finalista = '';
        if ($qtdpag > $suprimir) {
            if ($atual > 2) {
                if ($simbolo) {
                    $trespa = '<li class="page-item disabled"><span class="page-link" aria-label="..."><span aria-hidden="true">' . $this->obtemGlyphicon('option-horizontal') . '</span><span class="visually-hidden">...</span></span></li>' . PHP_EOL;
                } else {
                    $trespa = '<li class="page-item disabled"><span class="page-link">&hellip;</span></li>' . PHP_EOL;
                }
            }
            if ($ultima > $atual+2) {
                if ($simbolo) {
                    $trespp = '<li class="page-item disabled"><span class="page-link" aria-label="..."><span aria-hidden="true">' . $this->obtemGlyphicon('option-horizontal') . '</span><span class="visually-hidden">...</span></span></li>' . PHP_EOL;
                } else {
                    $trespp = '<li class="page-item disabled"><span class="page-link">&hellip;</span></li>' . PHP_EOL;
                }
            }
            $primeira = '<li class="page-item' . $classepri . '">' . $linki . '</li>' . PHP_EOL;
            $finalista = '<li class="page-item' . $classeult . '">' . $linku . '</li>' . PHP_EOL;
        }
        $paginacao .= $primeira . $anterior . $trespa . $pgs . $trespp . $proxima . $finalista;
        $paginacao .= '</ul>' . PHP_EOL .
                      '</nav>' . PHP_EOL;
        return $paginacao;
    }

    /**
     * Gera uma barra de progresso responsiva (.progress).
     *
     * @param int|float $now Valor numérico atual do progresso.
     * @param int|float $min Valor mínimo da escala (padrão 0).
     * @param int|float $max Valor máximo da escala (padrão 100).
     * @param string $legenda Texto informativo exibido internamente sobre a barra.
     * @param string $tema Contexto de cor da barra (ex: 'success', 'warning', 'danger').
     * @param bool $listrado Se true, adiciona listras diagonais animadas (.progress-bar-striped).
     * @return string Barra de progresso formatada em HTML.
     */
    public function geraProgressBar($now, $min = 0, $max = 100, $legenda = '', $tema = '', $listrado = false)
    {
        $bg = '';
        if (!empty($tema)) {
            $bg = ' bg-' . $tema;
        }
        $listra = $listrado ? ' progress-bar-striped progress-bar-animated' : '';
        $perc = ($max > $min) ? round((($now - $min) / ($max - $min)) * 100, 2) : $now;
        $barra = '<div class="progress" role="progressbar" aria-label="' . $legenda . '" aria-valuenow="' . $now . '" aria-valuemin="' . $min . '" aria-valuemax="' . $max . '">' . PHP_EOL .
                 '<div class="progress-bar' . $bg . $listra . '" style="width: ' . $perc . '%">' . $legenda . '</div>' . PHP_EOL .
                 '</div>' . PHP_EOL;
        return $barra;
    }

    /**
     * Gera um indicador giratório de carregamento (spinner) nos estilos border ou grow.
     *
     * @param string $tipo Tipo do spinner ('border' para borda giratória ou 'grow' para pulso crescente).
     * @param string $tema Contexto de cor do spinner (padrão 'primary').
     * @param string $tamanho Tamanho do spinner ('sm' para versão compacta).
     * @param string $legenda Texto de acessibilidade para leitores de tela.
     * @param bool $central Se true, centraliza na tela dentro de um contêiner flexbox.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Elemento de spinner formatado em HTML.
     */
    public function geraSpinner($tipo = 'border', $tema = 'primary', $tamanho = '', $legenda = 'Carregando...', $central = false, $id = '', $classe = '')
    {
        if ($tipo != 'grow') {
            $tipo = 'border';
        }
        $classeSpinner = 'spinner-' . $tipo;
        if (!empty($tema)) {
            $classeSpinner .= ' text-' . $tema;
        }
        $estilo = '';
        if (!empty($tamanho)) {
            if ($tamanho == 'sm' || $tamanho == 'S') {
                $classeSpinner .= ' spinner-' . $tipo . '-sm';
            } else {
                $estilo = ' style="width: ' . $tamanho . '; height: ' . $tamanho . ';"';
            }
        }
        if (!empty($classe)) {
            $classeSpinner .= ' ' . $classe;
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $spinner = '<div class="' . $classeSpinner . '" role="status"' . $id . $estilo . '>' . PHP_EOL .
                   '<span class="visually-hidden">' . $legenda . '</span>' . PHP_EOL .
                   '</div>' . PHP_EOL;

        if ($central) {
            $spinner = '<div class="d-flex justify-content-center my-3">' . PHP_EOL .
                       $spinner .
                       '</div>' . PHP_EOL;
        }
        return $spinner;
    }

    /**
     * Gera um elemento skeleton individual (.placeholder) para simular texto ou botões em carregamento.
     *
     * @param int $colunas Largura em colunas da grade (1 a 12).
     * @param string $tamanho Tamanho do placeholder ('xs', 'sm' ou 'lg').
     * @param string $tema Contexto de cor do placeholder (ex: 'primary', 'secondary').
     * @param string $animacao Animação de pré-carregamento ('glow' ou 'wave').
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @param string $tag Tag HTML a ser gerada ('span' ou 'p').
     * @return string Elemento placeholder formatado.
     */
    public function geraPlaceholder($colunas = 6, $tamanho = '', $tema = '', $animacao = '', $id = '', $classe = '', $tag = 'span')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        $colClasse = '';
        if (is_numeric($colunas)) {
            $colClasse = ' col-' . (int)$colunas;
        } elseif (!empty($colunas)) {
            $colClasse = ' ' . $colunas;
        }

        $tamClasse = '';
        if (!empty($tamanho)) {
            $t = strtolower($tamanho);
            if ($t == 's' || $t == 'sm') {
                $tamClasse = ' placeholder-sm';
            } elseif ($t == 'l' || $t == 'lg') {
                $tamClasse = ' placeholder-lg';
            } elseif ($t == 'xs') {
                $tamClasse = ' placeholder-xs';
            } else {
                $tamClasse = ' placeholder-' . $t;
            }
        }

        $temaClasse = '';
        if (!empty($tema)) {
            if ($tema == 'default') {
                $tema = 'secondary';
            }
            $temaClasse = ' bg-' . $tema;
        }

        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }

        $placeholder = '<' . $tag . $id . ' class="placeholder' . $colClasse . $tamClasse . $temaClasse . $classe . '" aria-hidden="true"></' . $tag . '>';

        if (!empty($animacao)) {
            $wrapperTag = ($tag == 'div' || $tag == 'p') ? 'div' : 'span';
            $placeholder = '<' . $wrapperTag . ' class="placeholder-' . $animacao . '">' . $placeholder . '</' . $wrapperTag . '>';
        }

        return $placeholder;
    }

    /**
     * Gera um invólucro animado para agrupamento de placeholders com efeito glow ou wave.
     *
     * @param string $conteudo Elementos de placeholder contidos no bloco.
     * @param string $animacao Tipo de animação ('glow' para pulsação ou 'wave' para onda).
     * @param string $tag Tag HTML do contêiner (padrão 'p').
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Classes CSS adicionais.
     * @return string Contêiner animado de placeholders formatado.
     */
    public function divPlaceholder($conteudo, $animacao = 'glow', $tag = 'p', $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if ($animacao != 'wave') {
            $animacao = 'glow';
        }

        return '<' . $tag . $id . ' class="placeholder-' . $animacao . $classe . '" aria-hidden="true">' . PHP_EOL .
               $conteudo . PHP_EOL .
               '</' . $tag . '>' . PHP_EOL;
    }

    /**
     * Gera múltiplas linhas sequenciais de placeholders simulando parágrafos de texto.
     *
     * @param array $linhas Array de larguras em colunas para cada linha (ex: [12, 9, 7]).
     * @param string $animacao Animação aplicada às linhas ('glow' ou 'wave').
     * @param string $tamanho Tamanho dos placeholders ('xs', 'sm' ou 'lg').
     * @param string $tema Contexto de cor dos placeholders.
     * @param string $id Atributo ID opcional do contêiner.
     * @param string $classe Classes CSS adicionais.
     * @param string $tag Tag HTML do invólucro (padrão 'p').
     * @return string Bloco com múltiplas linhas de placeholders formatado.
     */
    public function geraPlaceholderLinhas($linhas = array(12, 9, 7), $animacao = 'glow', $tamanho = '', $tema = '', $id = '', $classe = '', $tag = 'p')
    {
        $spans = '';
        if (is_array($linhas)) {
            foreach ($linhas as $linha) {
                if (is_array($linha)) {
                    $col = isset($linha['col']) ? $linha['col'] : 12;
                    $tam = isset($linha['tamanho']) ? $linha['tamanho'] : $tamanho;
                    $tem = isset($linha['tema']) ? $linha['tema'] : $tema;
                    $cls = isset($linha['classe']) ? $linha['classe'] : '';
                    $spans .= $this->geraPlaceholder($col, $tam, $tem, '', '', $cls, 'span') . ' ';
                } else {
                    $spans .= $this->geraPlaceholder($linha, $tamanho, $tema, '', '', '', 'span') . ' ';
                }
            }
        } elseif (is_numeric($linhas)) {
            $qtd = (int)$linhas;
            for ($i = 0; $i < $qtd; $i++) {
                $col = ($i == $qtd - 1) ? 6 : 12;
                $spans .= $this->geraPlaceholder($col, $tamanho, $tema, '', '', '', 'span') . ' ';
            }
        }

        $spans = rtrim($spans);

        if (!empty($animacao)) {
            return $this->divPlaceholder($spans, $animacao, $tag, $id, $classe);
        } else {
            if (!empty($id)) {
                $id = ' id="' . $id . '"';
            }
            if (!empty($classe)) {
                $classe = ' ' . $classe;
            }
            return '<' . $tag . $id . (!empty($classe) ? ' class="' . trim($classe) . '"' : '') . ' aria-hidden="true">' . PHP_EOL .
                   $spans . PHP_EOL .
                   '</' . $tag . '>' . PHP_EOL;
        }
    }

    /**
     * Gera um card skeleton completo simulando imagem de topo, título, linhas de texto e botão em carregamento.
     *
     * @param string $largura Largura inline do card (ex: '20rem' ou '100%').
     * @param string $imgAltura Altura da caixa cinza simulando a imagem (ex: '180px').
     * @param int $colunasTitulo Largura da linha de título em colunas.
     * @param array $linhasTexto Lista de larguras das linhas de texto simuladas.
     * @param int $colunaBotao Largura do botão simulado em colunas.
     * @param string $animacao Animação de pré-carregamento ('glow' ou 'wave').
     * @param string $id Atributo ID opcional do card.
     * @param string $classe Classes CSS adicionais.
     * @return string Card skeleton completo formatado em HTML.
     */
    public function geraCardPlaceholder($largura = '20rem', $imgAltura = '180px', $colunasTitulo = 6, $linhasTexto = array(7, 4, 4, 6, 8), $colunaBotao = 6, $animacao = 'glow', $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        $estilo = !empty($largura) ? ' style="width: ' . $largura . ';"' : '';

        $card = '<div class="card' . $classe . '" aria-hidden="true"' . $id . $estilo . '>' . PHP_EOL;

        if (!empty($imgAltura)) {
            $alturaStr = is_numeric($imgAltura) ? ($imgAltura . 'px') : $imgAltura;
            $card .= '    <svg class="bd-placeholder-img card-img-top" width="100%" height="' . $alturaStr . '" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">' . PHP_EOL .
                     '        <title>Placeholder</title>' . PHP_EOL .
                     '        <rect width="100%" height="100%" fill="#868e96"></rect>' . PHP_EOL .
                     '    </svg>' . PHP_EOL;
        }

        $card .= '    <div class="card-body">' . PHP_EOL;

        if (!empty($colunasTitulo)) {
            $card .= '        <h5 class="card-title placeholder-' . $animacao . '">' . PHP_EOL .
                     '            ' . $this->geraPlaceholder($colunasTitulo, '', '', '', '', '', 'span') . PHP_EOL .
                     '        </h5>' . PHP_EOL;
        }

        if (!empty($linhasTexto)) {
            $card .= '        ' . $this->geraPlaceholderLinhas($linhasTexto, $animacao, '', '', '', 'card-text', 'p');
        }

        if (!empty($colunaBotao)) {
            $card .= '        ' . $this->buttonPlaceholder($colunaBotao, 'primary', '', $animacao) . PHP_EOL;
        }

        $card .= '    </div>' . PHP_EOL .
                 '</div>' . PHP_EOL;

        return $card;
    }

    /**
     * Gera o script JavaScript inline essencial para leitura do localStorage e prevenção de tela branca antes do carregamento do DOM.
     *
     * @param bool $incluiTagsScript Se true, envolve o código JavaScript na tag <script>.
     * @return string Código JavaScript para manipulação imediata do tema via data-bs-theme.
     */
    public function scriptThemeToggle($incluiTagsScript = true)
    {
        $js = <<<'JAVASCRIPT'
(() => {
    'use strict';
    if (window.__bsThemeLoaded) return;
    window.__bsThemeLoaded = true;

    const getStoredTheme = () => localStorage.getItem('theme');
    const setStoredTheme = theme => localStorage.setItem('theme', theme);

    const getPreferredTheme = () => {
        const storedTheme = getStoredTheme();
        if (storedTheme) {
            return storedTheme;
        }
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    };

    const setTheme = theme => {
        if (theme === 'auto') {
            document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'));
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme);
        }
    };

    setTheme(getPreferredTheme());

    const showActiveTheme = (theme, focus = false) => {
        const themeSwitcher = document.querySelector('#bd-theme');
        const themeSwitcherText = document.querySelector('#bd-theme-text');
        const activeThemeIcon = document.querySelector('.theme-icon-active use');
        const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`);

        document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
            element.classList.remove('active');
            element.setAttribute('aria-pressed', 'false');
            const checkIcon = element.querySelector('.theme-check');
            if (checkIcon) {
                checkIcon.classList.add('d-none');
            }
        });

        if (btnToActive) {
            btnToActive.classList.add('active');
            btnToActive.setAttribute('aria-pressed', 'true');
            const checkActive = btnToActive.querySelector('.theme-check');
            if (checkActive) {
                checkActive.classList.remove('d-none');
            }
            if (activeThemeIcon) {
                const svgOfActiveBtn = btnToActive.querySelector('svg use');
                if (svgOfActiveBtn) {
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn.getAttribute('href'));
                }
            }
            if (themeSwitcher && themeSwitcherText) {
                const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
                themeSwitcher.setAttribute('aria-label', themeSwitcherLabel);
            }
        }

        const themeSwitchCheckbox = document.querySelector('[data-bs-theme-switch]');
        if (themeSwitchCheckbox) {
            const currentTheme = document.documentElement.getAttribute('data-bs-theme');
            themeSwitchCheckbox.checked = (currentTheme === 'dark');
        }

        if (focus && themeSwitcher) {
            themeSwitcher.focus();
        }
    };

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        const storedTheme = getStoredTheme();
        if (storedTheme !== 'light' && storedTheme !== 'dark') {
            setTheme(getPreferredTheme());
            showActiveTheme(getPreferredTheme());
        }
    });

    const initTheme = () => {
        showActiveTheme(getPreferredTheme());

        document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
            toggle.addEventListener('click', () => {
                const theme = toggle.getAttribute('data-bs-theme-value');
                setStoredTheme(theme);
                setTheme(theme);
                showActiveTheme(theme, true);
            });
        });

        const themeSwitchCheckbox = document.querySelector('[data-bs-theme-switch]');
        if (themeSwitchCheckbox) {
            themeSwitchCheckbox.addEventListener('change', (e) => {
                const newTheme = e.target.checked ? 'dark' : 'light';
                setStoredTheme(newTheme);
                setTheme(newTheme);
                showActiveTheme(newTheme, false);
            });
        }
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTheme);
    } else {
        initTheme();
    }
})();
JAVASCRIPT;

        if ($incluiTagsScript) {
            return '<script>' . PHP_EOL . $js . PHP_EOL . '</script>' . PHP_EOL;
        }
        return $js;
    }

    /**
     * Gera o componente visual para seleção e alternância dinâmica entre os modos de cor Claro, Escuro e Automático do Bootstrap 5.
     *
     * @param string $tipo Formato visual do seletor ('dropdown', 'switch' ou 'buttons').
     * @param string $posicao Posicionamento fixo na tela (ex: 'bottom-end', 'bottom-start').
     * @param bool $incluiScript Se true, inclui também o script JS gerenciador de tema.
     * @param string $id Atributo ID do seletor (padrão 'bd-theme').
     * @param string $classe Classes CSS adicionais do contêiner.
     * @param string $classeBotao Classes CSS aplicadas ao botão ativador.
     * @return string Componente seletor de tema formatado em HTML.
     */
    public function geraThemeToggle($tipo = 'dropdown', $posicao = 'bottom-end', $incluiScript = true, $id = 'bd-theme', $classe = '', $classeBotao = 'btn-outline-secondary')
    {
        $svgSymbols = '<svg xmlns="http://www.w3.org/2000/svg" class="d-none">' . PHP_EOL .
                      '  <symbol id="check2" viewBox="0 0 16 16">' . PHP_EOL .
                      '    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>' . PHP_EOL .
                      '  </symbol>' . PHP_EOL .
                      '  <symbol id="circle-half" viewBox="0 0 16 16">' . PHP_EOL .
                      '    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>' . PHP_EOL .
                      '  </symbol>' . PHP_EOL .
                      '  <symbol id="moon-stars-fill" viewBox="0 0 16 16">' . PHP_EOL .
                      '    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>' . PHP_EOL .
                      '    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.21 6.207l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>' . PHP_EOL .
                      '  </symbol>' . PHP_EOL .
                      '  <symbol id="sun-fill" viewBox="0 0 16 16">' . PHP_EOL .
                      '    <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1-.707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>' . PHP_EOL .
                      '  </symbol>' . PHP_EOL .
                      '</svg>' . PHP_EOL;

        $posClass = '';
        if ($posicao == 'bottom-end' || $posicao == 'bottom-right') {
            $posClass = ' position-fixed bottom-0 end-0 mb-3 me-3';
        } elseif ($posicao == 'bottom-start' || $posicao == 'bottom-left') {
            $posClass = ' position-fixed bottom-0 start-0 mb-3 ms-3';
        } elseif ($posicao == 'top-end' || $posicao == 'top-right') {
            $posClass = ' position-fixed top-0 end-0 mt-3 me-3';
        } elseif ($posicao == 'top-start' || $posicao == 'top-left') {
            $posClass = ' position-fixed top-0 start-0 mt-3 ms-3';
        }

        if ($tipo == 'switch') {
            $html = '<div class="form-check form-switch d-inline-flex align-items-center gap-2' . (!empty($classe) ? ' ' . $classe : '') . '">' . PHP_EOL .
                    '    <svg class="bi opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>' . PHP_EOL .
                    '    <input class="form-check-input my-0" type="checkbox" role="switch" id="' . $id . '" data-bs-theme-switch>' . PHP_EOL .
                    '    <svg class="bi opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>' . PHP_EOL .
                    '</div>' . PHP_EOL;
        } elseif ($tipo == 'botoes' || $tipo == 'buttons') {
            $html = '<div class="btn-group' . (!empty($classe) ? ' ' . $classe : '') . '" role="group" aria-label="Alternar tema">' . PHP_EOL .
                    '    <button type="button" class="btn ' . $classeBotao . ' btn-sm d-flex align-items-center" data-bs-theme-value="light" title="Claro" aria-pressed="false">' . PHP_EOL .
                    '        <svg class="bi" width="1em" height="1em"><use href="#sun-fill"></use></svg>' . PHP_EOL .
                    '    </button>' . PHP_EOL .
                    '    <button type="button" class="btn ' . $classeBotao . ' btn-sm d-flex align-items-center" data-bs-theme-value="dark" title="Escuro" aria-pressed="false">' . PHP_EOL .
                    '        <svg class="bi" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>' . PHP_EOL .
                    '    </button>' . PHP_EOL .
                    '    <button type="button" class="btn ' . $classeBotao . ' btn-sm d-flex align-items-center active" data-bs-theme-value="auto" title="Automático" aria-pressed="true">' . PHP_EOL .
                    '        <svg class="bi" width="1em" height="1em"><use href="#circle-half"></use></svg>' . PHP_EOL .
                    '    </button>' . PHP_EOL .
                    '</div>' . PHP_EOL;
        } else {
            $html = '<div class="dropdown' . $posClass . ' bd-mode-toggle' . (!empty($classe) ? ' ' . $classe : '') . '">' . PHP_EOL .
                    '    <button class="btn ' . $classeBotao . ' py-2 dropdown-toggle d-flex align-items-center" id="' . $id . '" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Alternar tema (auto)">' . PHP_EOL .
                    '        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>' . PHP_EOL .
                    '        <span class="visually-hidden" id="' . $id . '-text">Alternar tema</span>' . PHP_EOL .
                    '    </button>' . PHP_EOL .
                    '    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="' . $id . '-text">' . PHP_EOL .
                    '        <li>' . PHP_EOL .
                    '            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">' . PHP_EOL .
                    '                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>' . PHP_EOL .
                    '                Claro' . PHP_EOL .
                    '                <svg class="bi ms-auto d-none theme-check" width="1em" height="1em"><use href="#check2"></use></svg>' . PHP_EOL .
                    '            </button>' . PHP_EOL .
                    '        </li>' . PHP_EOL .
                    '        <li>' . PHP_EOL .
                    '            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">' . PHP_EOL .
                    '                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>' . PHP_EOL .
                    '                Escuro' . PHP_EOL .
                    '                <svg class="bi ms-auto d-none theme-check" width="1em" height="1em"><use href="#check2"></use></svg>' . PHP_EOL .
                    '            </button>' . PHP_EOL .
                    '        </li>' . PHP_EOL .
                    '        <li>' . PHP_EOL .
                    '            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">' . PHP_EOL .
                    '                <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>' . PHP_EOL .
                    '                Automático' . PHP_EOL .
                    '                <svg class="bi ms-auto theme-check" width="1em" height="1em"><use href="#check2"></use></svg>' . PHP_EOL .
                    '            </button>' . PHP_EOL .
                    '        </li>' . PHP_EOL .
                    '    </ul>' . PHP_EOL .
                    '</div>' . PHP_EOL;
        }

        $saida = $svgSymbols . $html;
        if ($incluiScript) {
            $saida .= $this->scriptThemeToggle(true);
        }

        return $saida;
    }

    /**
     * Gera um contêiner de incorporação responsivo (.ratio) com proporção de tela proporcional fixa.
     *
     * @param string $conteudo Tag <iframe>, <video> ou conteúdo incorporado.
     * @param string $proporcao Proporção de aspecto ('16x9', '4x3', '1x1' ou '21x9').
     * @param string $titulo Título de acessibilidade (atributo title do iframe).
     * @param string $id Atributo ID opcional do contêiner.
     * @param string $classe Classes CSS adicionais.
     * @return string Contêiner .ratio formatado com o elemento incorporado.
     */
    public function geraRatioEmbed($conteudo, $proporcao = '16x9', $titulo = 'Embed', $id = '', $classe = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }

        $classeRatio = 'ratio';
        $estilo = '';

        if (in_array($proporcao, array('1x1', '4x3', '16x9', '21x9'))) {
            $classeRatio .= ' ratio-' . $proporcao;
        } elseif (strpos($proporcao, '%') !== false) {
            $estilo = ' style="--bs-aspect-ratio: ' . $proporcao . ';"';
        } elseif (strpos($proporcao, 'x') !== false) {
            $partes = explode('x', $proporcao);
            if (count($partes) == 2 && is_numeric($partes[0]) && is_numeric($partes[1]) && $partes[0] > 0) {
                $pct = round(($partes[1] / $partes[0]) * 100, 4);
                $estilo = ' style="--bs-aspect-ratio: ' . $pct . '%;"';
            } else {
                $classeRatio .= ' ratio-16x9';
            }
        } else {
            $classeRatio .= ' ratio-16x9';
        }

        if (!empty($classe)) {
            $classeRatio .= ' ' . $classe;
        }

        $conteudoTrim = trim($conteudo);
        if (strpos($conteudoTrim, '<') === false) {
            $url = $this->converteUrlEmbed($conteudoTrim);
            $inner = '<iframe src="' . $url . '" title="' . htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') . '" allowfullscreen></iframe>';
        } else {
            $inner = $conteudo;
        }

        return '<div class="' . $classeRatio . '"' . $id . $estilo . '>' . PHP_EOL .
               '    ' . $inner . PHP_EOL .
               '</div>' . PHP_EOL;
    }

    /**
     * Gera um reprodutor de vídeo responsivo a partir de links diretos do YouTube ou Vimeo.
     *
     * @param string $url URL de exibição convencional do YouTube ou Vimeo.
     * @param string $proporcao Proporção de tela desejada (padrão '16x9').
     * @param string $titulo Título de acessibilidade do vídeo.
     * @param string $id Atributo ID opcional do contêiner.
     * @param string $classe Classes CSS adicionais.
     * @return string Contêiner .ratio com iframe do vídeo incorporado.
     */
    public function geraVideoEmbed($url, $proporcao = '16x9', $titulo = 'Vídeo', $id = '', $classe = '')
    {
        $urlEmbed = $this->converteUrlEmbed($url);
        $iframe = '<iframe src="' . $urlEmbed . '" title="' . htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') . '" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        return $this->geraRatioEmbed($iframe, $proporcao, $titulo, $id, $classe);
    }

    /**
     * Converte URLs convencionais de exibição do YouTube e Vimeo para seus respectivos formatos de incorporação (embed).
     *
     * @param string $url URL convencional do vídeo (ex: https://www.youtube.com/watch?v=...).
     * @return string URL convertida pronta para uso em tags iframe de incorporação.
     */
    public function converteUrlEmbed($url)
    {
        if (preg_match('#(?:youtube\.com/(?:watch\?v=|embed/)|youtu\.be/)([a-zA-Z0-9_-]+)#i', $url, $m)) {
            return 'https://www.youtube.com/embed/' . $m[1];
        }
        if (preg_match('#(?:vimeo\.com/(?:video/)?)([0-9]+)#i', $url, $m)) {
            return 'https://player.vimeo.com/video/' . $m[1];
        }
        return $url;
    }

    /**
     * Gera uma tabela de dados completa estilizada com suporte a listras, bordas, efeito hover, modo dark e responsividade.
     *
     * @param string $id Atributo ID da tabela.
     * @param array $conteudo Matriz bidimensional onde a linha 0 contém os títulos <th> e as demais os dados <td>.
     * @param array|string $contexto Contexto de cor das linhas (ex: 'primary', 'success', 'danger').
     * @param string $fundo Classe de cor de fundo contextual da tabela inteira.
     * @param bool $zebra Se true, aplica listras alternadas (.table-striped).
     * @param bool $borda Se true, adiciona bordas em todas as células (.table-bordered).
     * @param bool $invertida Se true, aplica tema escuro (.table-dark).
     * @param bool $hover Se true, ativa destaque ao passar o mouse sobre as linhas (.table-hover).
     * @param bool $pequena Se true, aplica espaçamento compacto (.table-sm).
     * @param bool $responsiva Se true, envolve a tabela em <div class="table-responsive">.
     * @param array $larguras Array com larguras percentuais ou fixas para cada coluna.
     * @return string Tabela HTML formatada.
     */
    public function geraTabela($id, $conteudo, $contexto = '', $fundo = '', $zebra = false, $borda = false, $invertida = false, $hover = false, $pequena = false, $responsiva = false, $larguras = array())
    {
        if (empty($conteudo) || !is_array($conteudo) || !isset($conteudo[0])) {
            return '';
        }
        if ($fundo) {
            $classef = ' table-' . $fundo;
        } else {
            $classef = '';
        }
        if ($zebra) {
            $classez = ' table-striped';
        } else {
            $classez = '';
        }
        if ($borda) {
            $classeb = ' table-bordered';
        } else {
            $classeb = '';
        }
        if ($invertida) {
            $classei = ' table-dark';
        } else {
            $classei = '';
        }
        if ($hover) {
            $classeh = ' table-hover';
        } else {
            $classeh = '';
        }
        if ($pequena) {
            $classep = ' table-sm';
        } else {
            $classep = '';
        }
        
        $tableHtml = '<table class="table' . $classef . $classez . $classeb . $classei . $classeh . $classep . '" id="' . $id . '">' . PHP_EOL .
                     '<thead>' . PHP_EOL .
                     '<tr>' . PHP_EOL;
        $ultimorotulo = count($conteudo[0]) - 1;
        for ($r = 0; $r <= $ultimorotulo; $r++) {
            if (isset($larguras[1]) && is_array($larguras[1]['cols']) and !empty($larguras[1]['cols'][$r]) and !empty($larguras[1]['tam'])) {
                $tamCol = ($larguras[1]['tam'] == 'xs') ? 'col' : ('col-' . $larguras[1]['tam']);
                $classel = ' class="' . $tamCol . '-' . $larguras[1]['cols'][$r];
                if (isset($larguras[2]) and is_array($larguras[2]['cols']) and !empty($larguras[2]['cols'][$r]) and !empty($larguras[2]['tam'])) {
                    $tamCol2 = ($larguras[2]['tam'] == 'xs') ? 'col' : ('col-' . $larguras[2]['tam']);
                    $classel .= ' ' . $tamCol2 . '-' . $larguras[2]['cols'][$r];
                }
                if (isset($larguras[3]) and is_array($larguras[3]['cols']) and !empty($larguras[3]['cols'][$r]) and !empty($larguras[3]['tam'])) {
                    $tamCol3 = ($larguras[3]['tam'] == 'xs') ? 'col' : ('col-' . $larguras[3]['tam']);
                    $classel .= ' ' . $tamCol3 . '-' . $larguras[3]['cols'][$r];
                }
                $classel .= '"';
            } else {
                $classel = '';
            }
            $tableHtml .= '<th' . $classel . '>' . $conteudo[0][$r] . '</th>' . PHP_EOL;
        }
        $tableHtml .= '</tr>' . PHP_EOL .
                      '</thead>' . PHP_EOL;
        
        $tableHtml .= '<tbody>' . PHP_EOL;
        $ultimalinha = count($conteudo) - 1;
        for ($i = 1; $i <= $ultimalinha; $i++) {
            if (is_array($contexto) and !empty($contexto[$i])) {
                $classec = ' class="table-' . $contexto[$i] . '"';
            } else {
                $classec = '';
            }
            $tableHtml .= '<tr' . $classec . '>' . PHP_EOL .
                          '<th scope="row">' . $conteudo[$i][0] . '</th>' . PHP_EOL;
            $ultimacoluna = count($conteudo[$i]) - 1;
            for ($j = 1; $j <= $ultimacoluna; $j++) {
                $tableHtml .= '<td>' . $conteudo[$i][$j] . '</td>' . PHP_EOL;
            }
            $tableHtml .= '</tr>' . PHP_EOL;
        }
        
        $tableHtml .= '</tbody>' . PHP_EOL .
                      '</table>' . PHP_EOL;
        if ($responsiva) {
            $tableHtml = '<div class="table-responsive">' . PHP_EOL . $tableHtml . '</div>' . PHP_EOL;
        }
        return $tableHtml;
    }

    /**
     * Gera um painel contextual formatado com a estrutura de Card do Bootstrap 5.
     *
     * @param string $conteudo Conteúdo principal exibido no corpo do painel.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $classe Contexto de cor da borda do painel (ex: 'primary', 'info').
     * @param string $cabecalho Conteúdo do cabeçalho do painel.
     * @param string $rodape Conteúdo do rodapé do painel.
     * @param bool $central Se true, centraliza o texto com a classe .text-center.
     * @return string Painel em formato card formatado em HTML.
     */
    public function geraPainel($conteudo, $id = '', $classe = 'default', $cabecalho = '', $rodape = '', $central = false)
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        if (!empty($cabecalho)) {
            $cabecalho = '<div class="card-header">' . $cabecalho . '</div>' . PHP_EOL;
        }
        if (!empty($rodape)) {
            $rodape = '<div class="card-footer">' . $rodape . '</div>' . PHP_EOL;
        }
        if ($central) {
            $alinhamento = ' text-center';
        } else {
            $alinhamento = '';
        }
        $corClasse = '';
        if (!empty($classe) && $classe != 'default') {
            $corClasse = ' border-' . $classe;
        }
        $painel = '<div class="card' . $corClasse . $alinhamento . '"' . $id . '>' . PHP_EOL .
                  $cabecalho .
                  '<div class="card-body">' . $conteudo . '</div>' . PHP_EOL .
                  $rodape .
                  '</div>' . PHP_EOL;
        return $painel;
    }

    /**
     * Gera uma caixa de destaque estilizada com cantos arredondados e fundo neutro (.bg-body-tertiary).
     *
     * @param string $conteudo Conteúdo textual ou HTML interno.
     * @param string $id Atributo ID opcional do elemento.
     * @param string $tamanho Tamanho do espaçamento interno ('lg' para p-4 ou 'sm' para p-2).
     * @param bool $central Se true, centraliza o texto.
     * @return string Caixa de destaque estilizada formatada em HTML.
     */
    public function geraWell($conteudo, $id = '', $tamanho = '', $central = false)
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $padding = ($tamanho == 'lg') ? ' p-4' : (($tamanho == 'sm') ? ' p-2' : ' p-3');
        $alinhamento = $central ? ' text-center' : '';
        $well = '<div class="card card-body bg-body-tertiary' . $padding . $alinhamento . '"' . $id . '>' . $conteudo . '</div>' . PHP_EOL;
        return $well;
    }

    /**
     * Gera o rodapé semântico da página (<footer>) com contêiner responsivo integrado.
     *
     * @param string $conteudo Conteúdo textual ou HTML exibido dentro do rodapé.
     * @param string $id Atributo ID opcional do contêiner interno.
     * @return string Elemento semântico <footer> formatado.
     */
    public function geraFooter($conteudo, $id = '')
    {
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $footer = '<footer class="footer mt-auto py-3 bg-body-tertiary">' . PHP_EOL .
                  '<div class="container"' . $id . '>' . PHP_EOL .
                  $conteudo .
                  '</div>' . PHP_EOL .
                  '</footer>' . PHP_EOL;
        return $footer;
    }

    /**
     * Mapeia nomes clássicos de ícones para seus equivalentes modernos na biblioteca Bootstrap Icons (.bi).
     *
     * @param string $nome Nome clássico do ícone (ex: 'star', 'save', 'edit', 'refresh', 'wrench').
     * @param string $classe Classes CSS adicionais aplicadas ao ícone.
     * @param string $id Atributo ID opcional do elemento.
     * @return string Tag <i> configurada com a classe do Bootstrap Icons correspondente.
     */
    public function obtemGlyphicon($nome, $classe = '', $id = '')
    {
        if (empty($nome)) {
            return '';
        }
        $trimmed = trim($nome);
        if (strpos($trimmed, '<') === 0) {
            return $nome;
        }
        $map = array(
            'star' => 'star-fill',
            'th' => 'grid-3x3-gap-fill',
            'save' => 'download',
            'wrench' => 'wrench',
            'eye-open' => 'eye',
            'edit' => 'pencil-square',
            'erase' => 'trash',
            'file' => 'file-earmark',
            'flag' => 'flag',
            'calendar' => 'calendar',
            'arrow-up' => 'arrow-up',
            'arrow-down' => 'arrow-down',
            'refresh' => 'arrow-repeat',
            'triangle-left' => 'caret-left-fill',
            'triangle-right' => 'caret-right-fill',
            'step-backward' => 'skip-backward-fill',
            'step-forward' => 'skip-forward-fill',
            'option-horizontal' => 'three-dots',
        );
        $biNome = isset($map[$nome]) ? $map[$nome] : $nome;
        if (!empty($classe)) {
            $classe = ' ' . $classe;
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        $icone = '<i' . $id . ' class="bi bi-' . $biNome . ' glyphicon glyphicon-' . $nome . $classe . '"></i>';
        return $icone;
    }

    /**
     * Gera um crachá de identificação contextual (.badge) com suporte a cores de contraste (.text-bg-*).
     *
     * @param string $legenda Texto exibido dentro do badge.
     * @param string $classe Classes CSS de cor e formato (padrão 'text-bg-secondary').
     * @param string $id Atributo ID opcional do elemento.
     * @return string Elemento <span class="badge ..."> formatado.
     */
    public function obtemBadge($legenda, $classe = '', $id = '')
    {
        if (empty($classe)) {
            $classe = ' text-bg-secondary';
        } else {
            if (strpos($classe, 'bg-') === false && strpos($classe, 'text-bg-') === false) {
                $classe = ' text-bg-secondary ' . $classe;
            } else {
                $classe = ' ' . $classe;
            }
        }
        if (!empty($id)) {
            $id = ' id="' . $id . '"';
        }
        return '<span' . $id . ' class="badge' . $classe . '">' . $legenda . '</span>';
    }

    /**
     * Anexa atributos nativos de Tooltip (data-bs-toggle="tooltip") a uma tag HTML existente ou retorna os atributos.
     *
     * @param string|bool $elemento Tag HTML a ser enriquecida com os atributos ou vazio/true para retornar apenas os atributos.
     * @param string $titulo Texto descritivo exibido no balão do tooltip.
     * @param string $posicao Posicionamento do tooltip ('top', 'bottom', 'start', 'end').
     * @param bool $html Se true, habilita renderização de HTML dentro do tooltip.
     * @param string $classeCustom Classe CSS personalizada para estilização do balão.
     * @return string Tag HTML enriquecida com atributos de tooltip ou string de atributos.
     */
    public function withTooltip($elemento, $titulo, $posicao = 'top', $html = false, $classeCustom = '')
    {
        if ($posicao == 'left') {
            $posicao = 'start';
        } elseif ($posicao == 'right') {
            $posicao = 'end';
        }

        $attrs = 'data-bs-toggle="tooltip" data-bs-placement="' . $posicao . '" data-bs-title="' . htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') . '"';
        if ($html) {
            $attrs .= ' data-bs-html="true"';
        }
        if (!empty($classeCustom)) {
            $attrs .= ' data-bs-custom-class="' . $classeCustom . '"';
        }

        if (empty($elemento) || $elemento === true) {
            return $attrs;
        }

        return preg_replace('/^\s*<([a-zA-Z0-9]+)/', '<$1 ' . $attrs, $elemento, 1);
    }

    /**
     * Anexa atributos nativos de Popover (data-bs-toggle="popover") a uma tag HTML existente ou retorna os atributos.
     *
     * @param string|bool $elemento Tag HTML a ser enriquecida com os atributos ou vazio/true para retornar apenas os atributos.
     * @param string $conteudo Conteúdo textual principal exibido no corpo do popover.
     * @param string $titulo Título superior do popover (opcional).
     * @param string $posicao Posicionamento ('top', 'bottom', 'start', 'end').
     * @param string $trigger Gatilho de ativação ('click', 'hover' ou 'focus').
     * @param bool $html Se true, habilita renderização de HTML dentro do popover.
     * @param string $classeCustom Classe CSS personalizada para estilização do balão.
     * @return string Tag HTML enriquecida com atributos de popover ou string de atributos.
     */
    public function withPopover($elemento, $conteudo, $titulo = '', $posicao = 'right', $trigger = 'click', $html = false, $classeCustom = '')
    {
        if ($posicao == 'left') {
            $posicao = 'start';
        } elseif ($posicao == 'right') {
            $posicao = 'end';
        }

        $attrs = 'data-bs-toggle="popover" data-bs-placement="' . $posicao . '" data-bs-content="' . htmlspecialchars($conteudo, ENT_QUOTES, 'UTF-8') . '"';
        if (!empty($titulo)) {
            $attrs .= ' data-bs-title="' . htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') . '"';
        }
        if ($trigger == 'hover') {
            $attrs .= ' data-bs-trigger="hover focus"';
        } elseif ($trigger == 'focus') {
            $attrs .= ' data-bs-trigger="focus"';
        }
        if ($html) {
            $attrs .= ' data-bs-html="true"';
        }
        if (!empty($classeCustom)) {
            $attrs .= ' data-bs-custom-class="' . $classeCustom . '"';
        }

        if (empty($elemento) || $elemento === true) {
            return $attrs;
        }

        return preg_replace('/^\s*<([a-zA-Z0-9]+)/', '<$1 ' . $attrs, $elemento, 1);
    }

    /**
     * Gera o script oficial Vanilla JS do Bootstrap 5 para inicialização de Tooltips no DOM.
     *
     * @param string $seletor Seletor CSS dos elementos a serem inicializados (padrão '[data-bs-toggle="tooltip"]').
     * @return string Tag <script> contendo o código de inicialização de Tooltips.
     */
    public function scriptTooltips($seletor = '[data-bs-toggle="tooltip"]')
    {
        return '<script>' . PHP_EOL .
               'document.addEventListener("DOMContentLoaded", function () {' . PHP_EOL .
               '    const tooltipTriggerList = document.querySelectorAll("' . $seletor . '");' . PHP_EOL .
               '    const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));' . PHP_EOL .
               '});' . PHP_EOL .
               '</script>' . PHP_EOL;
    }

    /**
     * Gera o script oficial Vanilla JS do Bootstrap 5 para inicialização de Popovers no DOM.
     *
     * @param string $seletor Seletor CSS dos elementos a serem inicializados (padrão '[data-bs-toggle="popover"]').
     * @return string Tag <script> contendo o código de inicialização de Popovers.
     */
    public function scriptPopovers($seletor = '[data-bs-toggle="popover"]')
    {
        return '<script>' . PHP_EOL .
               'document.addEventListener("DOMContentLoaded", function () {' . PHP_EOL .
               '    const popoverTriggerList = document.querySelectorAll("' . $seletor . '");' . PHP_EOL .
               '    const popoverList = [...popoverTriggerList].map(el => new bootstrap.Popover(el));' . PHP_EOL .
               '});' . PHP_EOL .
               '</script>' . PHP_EOL;
    }

    /**
     * Gera o script Vanilla JS unificado que inicializa simultaneamente todos os Tooltips, Popovers e Toasts presentes na página.
     *
     * @return string Tag <script> contendo a inicialização completa de componentes dinâmicos.
     */
    public function scriptInicializaTodos()
    {
        return '<script>' . PHP_EOL .
               'document.addEventListener("DOMContentLoaded", function () {' . PHP_EOL .
               '    [...document.querySelectorAll(\'[data-bs-toggle="tooltip"]\')].map(el => new bootstrap.Tooltip(el));' . PHP_EOL .
               '    [...document.querySelectorAll(\'[data-bs-toggle="popover"]\')].map(el => new bootstrap.Popover(el));' . PHP_EOL .
               '    [...document.querySelectorAll(\'.toast\')].map(el => bootstrap.Toast.getOrCreateInstance(el));' . PHP_EOL .
               '});' . PHP_EOL .
               '</script>' . PHP_EOL;
    }

    /**
     * Gera as tags <link rel="stylesheet"> para carregamento do Bootstrap 5.3.8 e Bootstrap Icons.
     *
     * @param bool $local Se false (padrão), utiliza a CDN oficial do jsDelivr; se true, utiliza caminho local.
     * @param bool $comIcones Se true, inclui também o CSS dos Bootstrap Icons.
     * @param string $caminhoPersonalizado Caminho alternativo para o arquivo CSS local do Bootstrap.
     * @param string $versao Versão do Bootstrap a ser requisitada na CDN (padrão '5.3.8').
     * @return string Tags <link> formatadas para inclusão no cabeçalho <head>.
     */
    public function tagCss($local = false, $comIcones = true, $caminhoPersonalizado = '', $versao = '5.3.8')
    {
        $html = '';
        if ($local && empty($caminhoPersonalizado)) {
            $caminhoPersonalizado = 'coloque/aqui/o/caminho/da/sua/instalacao/css/bootstrap.min.css';
        }

        if (!empty($caminhoPersonalizado)) {
            $html .= '<link rel="stylesheet" href="' . $caminhoPersonalizado . '">' . PHP_EOL;
        } else {
            $html .= '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@' . $versao . '/dist/css/bootstrap.min.css">' . PHP_EOL;
        }

        if ($comIcones) {
            $html .= '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">' . PHP_EOL;
        }

        return $html;
    }

    /**
     * Gera a tag <script src="..."> para carregamento do bundle JavaScript do Bootstrap 5.3.8 (bootstrap.bundle.min.js).
     *
     * @param bool $local Se false (padrão), utiliza a CDN oficial do jsDelivr; se true, utiliza caminho local.
     * @param string $caminhoPersonalizado Caminho alternativo para o arquivo JS local do Bootstrap.
     * @param string $versao Versão do Bootstrap a ser requisitada na CDN (padrão '5.3.8').
     * @return string Tag <script> formatada para inclusão na página.
     */
    public function tagJs($local = false, $caminhoPersonalizado = '', $versao = '5.3.8')
    {
        if ($local && empty($caminhoPersonalizado)) {
            $caminhoPersonalizado = 'coloque/aqui/o/caminho/da/sua/instalacao/js/bootstrap.bundle.min.js';
        }

        if (!empty($caminhoPersonalizado)) {
            return '<script src="' . $caminhoPersonalizado . '"></script>' . PHP_EOL;
        }

        return '<script src="https://cdn.jsdelivr.net/npm/bootstrap@' . $versao . '/dist/js/bootstrap.bundle.min.js"></script>' . PHP_EOL;
    }
    
}
