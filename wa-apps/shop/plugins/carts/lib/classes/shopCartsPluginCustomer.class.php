<?php


class shopCartsPluginCustomer extends shopCustomer {

    /**
     * @param waContact $contact
     * @param waContact|null $old_contact
     * @return shopCartsPluginCustomer
     */
    public static function from($contact, $old_contact = null)
    {
        $new_contact = new self();

        if($old_contact) {
            if($old_contact->getId()) {
                $new_contact = $old_contact;
            } else {
                foreach ($old_contact as $field => $value) {
                    $new_contact->$field = $value;
                }
                $new_contact->data = $old_contact->load();
            }
            if(is_array($contact->data)) {
                foreach($contact->data as $key => $value) {
                    if($key == 'id') continue;
                    if(is_array($value)) {
                        if(empty($value[0]['value'])) continue;
                        $value[0]['value'] = trim($value[0]['value']);
                    } else {
                        $value = trim($value);
                    }
                    $new_contact->set($key, $value);
                }
            }
        } else {
            $new_contact->data = $contact->data;
        }

        return $new_contact;
    }

    public function serialize()
    {
        $str = @serialize($this);
        return $str;
    }

    public function hasOrders()
    {
        if($this->getId()) {
            $m = new shopOrderModel();

            $count = $m->select("COUNT(contact_id)")
                ->where('contact_id=?', $this->getId())
                ->fetchField();

            return $count > 0;
        } else {
            return false;
        }
    }

}