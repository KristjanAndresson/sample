<?php
/**
 * Created by PhpStorm.
 * User: kristjan
 * Date: 9.02.16
 * Time: 21:51
 */

namespace Halo\Service;


class UserService {

    public function getUsers(array $params){
        $sql = "SELECT * FROM users WHERE deleted=0";
        if(isset($params['order']) && isset($params['field'])){
            $sql .= " ORDER BY {$params['field']} {$params['order']}";
        }

        return get_all($sql);
    }
} 