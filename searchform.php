<form class="p-search-form" action="<?php echo home_url('/'); ?>" method="get">
    <input type="search" class="p-search-form__box c-box fas fa-search" data-fa-transform="left-20" value="<?php the_search_query(); ?>" name="s" placeholder="&#xf002;" />
    <button class="p-search-form__button c-button">検索</button>