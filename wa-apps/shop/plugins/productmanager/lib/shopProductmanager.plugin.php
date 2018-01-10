<?php

Class shopProductmanagerPlugin extends shopPlugin {

    protected $field_user = array(
        "name",
        "email",
        "phone",
        "photo"
    );

    public function product_edit($data)
    {
        return array(
            'category_action_li' => $this->backend_user_html($data->data['manager']),
        );
    }

    public function front_product($params){

        if($params['manager']){

            $view = wa()->getView();
            $view->assign('user', $this->get_user($params['manager']));

            return array(
                'block'     => $view->fetch($this->path.'/templates/frontendManager.html'),
            );
        }
    }

    public function backend_user_html($id_user){

        $users = $this->get_users();

        $html = '<li>Менеджер товара</li>';
        $html .= '<select name="product[manager]">';
        $html .= '<option value="0">Не выбрано</option>';

        foreach($users as $id => $u){
            if($id_user == $id){
                $checked = "selected";
            }else{
                $checked = "";
            }

            $html .= "<option value='$id' $checked>$u[name]</option>";
        }
        $html .= '</select>';

        return $html;

    }


    public function get_users(){

        $user = new waUser();
        $arr_users = array();
        foreach($user->getUsers() as $id => $name){
            $contact = new waContact($id);
            foreach($this->field_user as $field){
                $arr_users[$id][$field] = $contact->get($field,"default");
                if($field == "photo")
                    $arr_users[$id][$field] = $contact->getPhoto();
            }
        }
        return $arr_users;
    }

    public function get_user($id){

        $contact = new waContact($id);
        foreach($this->field_user as $field){
            if($field == "phone" or $field == "email")
            $arr_users[$field] = $contact->get($field,"value");
            else
            $arr_users[$field] = $contact->get($field,"default");

            if($field == "photo")
                $arr_users[$field] = $contact->getPhoto(120,160);
        }
        return $arr_users;
    }


}