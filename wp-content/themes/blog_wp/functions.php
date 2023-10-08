<?php
/* Görünüm -> Bileşenler kısmını açmak için:*/
register_sidebar(
    array(
        'name' => 'Udemy',
        'id' => 'udemy',
        'before_widget' => '<div class="bilesen">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="baslik">',
        'after_title' => '</h2>'
    )
);

?>