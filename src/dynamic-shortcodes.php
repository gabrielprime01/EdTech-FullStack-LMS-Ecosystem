<?php
/**
 * Lógica de Shortcodes Customizados para Gestão de Dados Escolares
 */

// Nome da instituição centralizado
function sc_nome_instituicao(){
    return 'Nome da Instituição Exemplo';
}
add_shortcode('sc_nome_instituicao', 'sc_nome_instituicao');

// Contatos anonimizados para portfólio
function sc_numero_contato(){
    return '(00) 00000-0000';
}
add_shortcode('sc_numero_contato', 'sc_numero_contato');

function sc_email_suporte(){
    return 'suporte@exemplo.com.br';
}
add_shortcode('sc_email_suporte', 'sc_email_suporte');

// Gestão de Preços Dinâmicos
function sc_curso_teologia_online(){
    return '500,00';
}
add_shortcode('sc_curso_teologia_online', 'sc_curso_teologia_online');

function sc_iframe_localizacao(){
    return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0658!2d-46.6333!3d-23.5505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDMzJzAyLjAiUyA0NsKwMzgnMDAuMCJX!5e0!3m2!1spt-BR!2sbr!4v1234567890" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
}
add_shortcode('sc_iframe_localizacao', 'sc_iframe_localizacao');