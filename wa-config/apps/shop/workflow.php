<?php
return array (
  'states' => 
  array (
    'new' => 
    array (
      'name' => 'Новый / Не обработан',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#7d7a0a',
          'font-weight' => 'bold',
        ),
        'icon' => 'icon16 ss flag-yellow',
      ),
      'available_actions' => 
      array (
        0 => 'process',
        1 => 'comment',
        2 => 'edit',
        3 => 'message',
        4 => 'delete',
      ),
      'classname' => 'shopWorkflowState',
    ),
    'processing' => 
    array (
      'name' => 'Подтвержден',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#008800',
          'font-style' => 'italic',
        ),
        'icon' => 'icon16 ss new',
      ),
      'available_actions' => 
      array (
        0 => 'zayavka-s-zaprosom-tseny-obrabot',
        1 => 'pay',
        2 => 'delete',
        3 => 'comment',
        4 => 'edit',
        5 => 'message',
        6 => 'otmenen',
      ),
      'classname' => 'shopWorkflowState',
    ),
    'otmenen' => 
    array (
      'name' => 'Отменен',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#ff2121',
        ),
        'icon' => 'icon16 ss flag-red',
      ),
      'available_actions' => 
      array (
        0 => 'comment',
        1 => 'process',
        2 => 'delete',
      ),
      'classname' => 'shopWorkflowState',
    ),
    'paid' => 
    array (
      'name' => 'Оплачен',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#ff9900',
          'font-weight' => 'bold',
          'font-style' => 'italic',
        ),
        'icon' => 'icon16 ss flag-yellow',
      ),
      'available_actions' => 
      array (
        0 => 'otmenen',
        1 => 'edit',
        2 => 'peredan-na-otgruzku',
        3 => 'refund',
        4 => 'comment',
        5 => 'message',
      ),
      'classname' => 'shopWorkflowState',
    ),
    'peredan-na-otgru' => 
    array (
      'name' => 'Передан на отгрузку',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#668e3b',
        ),
        'icon' => 'icon16 ss new',
      ),
      'available_actions' => 
      array (
        0 => 'otmenen',
        1 => 'comment',
        2 => 'chastichnaya-otgruzka',
        3 => 'ship',
        4 => 'refund',
        5 => 'edit',
        6 => 'complete',
        7 => 'message',
      ),
    ),
    'chastichnoe-otpr' => 
    array (
      'name' => 'Частичная отгрузка',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#aabdf1',
          'font-weight' => 'bold',
        ),
        'icon' => 'icon16 ss sent',
      ),
      'available_actions' => 
      array (
        0 => 'ship',
        1 => 'edit',
        2 => 'complete',
        3 => 'message',
        4 => 'comment',
      ),
      'classname' => 'shopWorkflowState',
    ),
    'shipped' => 
    array (
      'name' => 'Отправлен',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#0000ff',
          'font-weight' => 'bold',
          'font-style' => 'italic',
        ),
        'icon' => 'icon16 ss sent',
      ),
      'available_actions' => 
      array (
        0 => 'edit',
        1 => 'complete',
        2 => 'comment',
        3 => 'delete',
        4 => 'message',
      ),
      'classname' => 'shopWorkflowState',
    ),
    'zayavka-s-zapros' => 
    array (
      'name' => 'Заявка с запросом цены (обработана)',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#800080',
        ),
        'icon' => 'icon16 ss flag-purple',
      ),
      'available_actions' => 
      array (
        0 => 'comment',
        1 => 'process',
        2 => 'pay',
        3 => 'delete',
        4 => 'message',
      ),
      'classname' => 'shopWorkflowState',
    ),
    'completed' => 
    array (
      'name' => 'Выполнен',
      'options' => 
      array (
        'icon' => 'icon16 ss completed',
        'style' => 
        array (
          'color' => '#800080',
        ),
      ),
      'available_actions' => 
      array (
        0 => 'comment',
        1 => 'refund',
        2 => 'message',
      ),
      'classname' => 'shopWorkflowState',
    ),
    'refunded' => 
    array (
      'name' => 'Возврат',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#cc0000',
        ),
        'icon' => 'icon16 ss refunded',
      ),
      'available_actions' => 
      array (
        0 => 'ship',
        1 => 'comment',
        2 => 'delete',
        3 => 'message',
      ),
      'classname' => 'shopWorkflowState',
    ),
    'deleted' => 
    array (
      'name' => 'Удален',
      'options' => 
      array (
        'style' => 
        array (
          'color' => '#aaaaaa',
        ),
        'icon' => 'icon16 ss trash',
      ),
      'available_actions' => 
      array (
        0 => 'comment',
        1 => 'restore',
        2 => 'message',
      ),
      'classname' => 'shopWorkflowState',
    ),
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'classname' => 'shopWorkflowCreateAction',
      'internal' => true,
      'name' => 'Создать',
      'options' => 
      array (
        'log_record' => 'Заказ оформлен',
      ),
      'state' => 'new',
    ),
    'process' => 
    array (
      'classname' => 'shopWorkflowProcessAction',
      'name' => 'В обработку',
      'options' => 
      array (
        'log_record' => 'Заказ подтвержден и принят в обработку',
        'button_class' => 'green',
      ),
      'state' => 'processing',
    ),
    'pay' => 
    array (
      'classname' => 'shopWorkflowPayAction',
      'name' => 'Оплачен',
      'options' => 
      array (
        'log_record' => 'Заказ оплачен',
        'button_class' => 'yellow',
      ),
      'state' => 'paid',
    ),
    'ship' => 
    array (
      'classname' => 'shopWorkflowShipAction',
      'name' => 'Отправлен',
      'options' => 
      array (
        'log_record' => 'Заказ отправлен',
        'button_class' => 'blue',
      ),
      'state' => 'shipped',
    ),
    'refund' => 
    array (
      'classname' => 'shopWorkflowRefundAction',
      'name' => 'Возврат',
      'options' => 
      array (
        'log_record' => 'Возврат',
        'button_class' => 'red',
      ),
      'state' => 'refunded',
    ),
    'edit' => 
    array (
      'classname' => 'shopWorkflowEditAction',
      'name' => 'Редактировать заказ',
      'options' => 
      array (
        'position' => 'top',
        'icon' => 'edit',
        'log_record' => 'Заказ отредактирован',
      ),
    ),
    'delete' => 
    array (
      'classname' => 'shopWorkflowDeleteAction',
      'name' => 'Удалить',
      'options' => 
      array (
        'log_record' => 'Заказ удален',
      ),
      'state' => 'deleted',
    ),
    'restore' => 
    array (
      'classname' => 'shopWorkflowRestoreAction',
      'name' => 'Восстановить',
      'options' => 
      array (
        'icon' => 'restore',
        'log_record' => 'Заказ восстановлен',
        'button_class' => 'green',
      ),
    ),
    'complete' => 
    array (
      'classname' => 'shopWorkflowCompleteAction',
      'name' => 'Выполнен',
      'options' => 
      array (
        'log_record' => 'Заказ выполнен',
        'button_class' => 'purple',
      ),
      'state' => 'completed',
    ),
    'message' => 
    array (
      'classname' => 'shopWorkflowMessageAction',
      'name' => 'Написать клиенту',
      'options' => 
      array (
        'position' => 'top',
        'icon' => 'email',
        'log_record' => 'Сообщение отправлено',
        'template' => 'Доброго часа, информация по заказу ****!



Спасибо за Ваш заказ в компании АльмаМед!',
      ),
    ),
    'comment' => 
    array (
      'classname' => 'shopWorkflowCommentAction',
      'name' => 'Добавить комментарий',
      'options' => 
      array (
        'position' => 'bottom',
        'icon' => 'add',
        'button_class' => 'inline-link',
        'log_record' => 'Добавлен комментарий к заказу',
      ),
    ),
    'callback' => 
    array (
      'classname' => 'shopWorkflowCallbackAction',
      'internal' => true,
      'name' => 'Ответ платежной системы (callback)',
      'options' => 
      array (
        'log_record' => 'Ответ платежной системы (callback)',
      ),
    ),
    'settle' => 
    array (
      'classname' => 'shopWorkflowSettleAction',
      'internal' => true,
      'name' => 'Объединить',
      'options' => 
      array (
        'head' => true,
        'log_record' => 'Заказ был объединен с другим',
      ),
    ),
    'peredan-na-otgruzku' => 
    array (
      'name' => 'Передан на отгрузку',
      'options' => 
      array (
        'position' => '',
        'button_class' => '',
        'border_color' => 'e6de4e',
      ),
      'state' => 'peredan-na-otgru',
      'classname' => 'shopWorkflowAction',
      'id' => 'peredan-na-otgruzku',
    ),
    'zayavka-s-zaprosom-tseny-obrabot' => 
    array (
      'name' => 'Заявка с запросом цены (обработана)',
      'options' => 
      array (
        'position' => '',
        'button_class' => '',
        'border_color' => 'ddd',
      ),
      'state' => 'zayavka-s-zapros',
      'classname' => 'shopWorkflowAction',
      'id' => 'zayavka-s-zaprosom-tseny-obrabot',
    ),
    'otmenen' => 
    array (
      'name' => 'Отменен',
      'options' => 
      array (
        'position' => '',
        'button_class' => '',
        'border_color' => 'f60000',
      ),
      'state' => 'otmenen',
      'classname' => 'shopWorkflowAction',
      'id' => 'otmenen',
    ),
    'chastichnaya-otgruzka' => 
    array (
      'name' => 'Частичная отгрузка',
      'options' => 
      array (
        'position' => '',
        'button_class' => '',
        'border_color' => '2b3ed5',
      ),
      'state' => 'chastichnoe-otpr',
      'classname' => 'shopWorkflowAction',
      'id' => 'chastichnaya-otgruzka',
    ),
  ),
);
