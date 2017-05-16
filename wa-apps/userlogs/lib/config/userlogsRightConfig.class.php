<?php
class userlogsRightConfig extends waRightConfig
{
    public function init()
    {
        // объявляем элементы настройки прав доступа
        $this->addItem('delete', 'Разрешить чистку логов', 'checkbox');
    }
}