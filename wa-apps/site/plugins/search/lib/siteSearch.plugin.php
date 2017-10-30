<?php

class siteSearchPlugin extends sitePlugin {


    public function backendSidebar()
    {
        $lang = array(
            'search' => 'Поиск'
        );

        $output = <<<HTML
<li id="s-link-search"><a href="#/search/"><i class="icon16 search"></i>{$lang['search']}</a>
<script>
$(function(){
    $.wa.site.searchAction = function() {
        $("#s-content").load('?plugin=search', function(){
            $.wa.site.active($("#s-link-search"));
        });
    }
});
</script>
</li>
HTML;
        return array(
            'menu_li' => $output,
        );
    }
}