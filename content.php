<?php
    truonghien_thumbnail('large');
    the_title();
    the_content();
    printf(get_the_author());
    printf(get_the_date());
    printf(get_the_category_list());