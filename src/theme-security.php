<?php
/**
 * Implementação de Filtros de Segurança e Otimização
 */

// Adiciona classes específicas ao body para controle de layout via CSS
function custom_body_classes( $classes ) {
    if ( is_multi_author() ) { $classes[] = 'group-blog'; }
    if ( ! is_singular() ) { $classes[] = 'hfeed'; }
    return $classes;
}
add_filter( 'body_class', 'custom_body_classes' );

// Controle de tamanho de resumo para performance e UX
function get_custom_excerpt_length($count){
    $permalink = get_permalink( get_the_ID() );
    $excerpt   = strip_tags(get_the_content());   
    $excerpt   = substr($excerpt, 0, $count);

    if($count){
        $excerpt = '<div class="custom-excerpt">' . $excerpt . '...</div>';
        $excerpt .= '<a href="'.esc_url($permalink).'" class="read-more">Leia Mais</a>';
    }
    return $excerpt;
}