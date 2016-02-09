<?php
/**
 * Created by PhpStorm.
 * User: kristjan
 * Date: 9.02.16
 * Time: 21:35
 */

namespace Halo\Helper;


class HeaderOrder {

    const ORDER_ASC = 'ASC';
    const ORDER_DESC = 'DESC';

    protected static $orders = array(
        self::ORDER_ASC,
        self::ORDER_DESC
    );

    protected $template = "<a href='{URL}'><i class='fa fa-fw fa-sort'></i></a>";

    protected $url;
    protected $field;
    protected $params = array();

    public function __construct($url, $getParams){
        $this->url = $url;
        $this->setParams($getParams);
    }

    protected function setParams(array $params){
        if(!isset($params['order']) || !in_array($params['order'], self::$orders)){
            $params['order'] = self::ORDER_ASC;
        }
        if($params['order'] == self::ORDER_ASC){
            $params['order'] = self::ORDER_DESC;
        } else if($params['order'] == self::ORDER_DESC){
            $params['order'] = self::ORDER_ASC;
        }
        $this->params = $params;
    }

    public function setTemplate($template){
        $this->template = $template;
        return $this;
    }

    public function setField($field){
        $this->field = $field;
        $this->params['field'] = $field;
        return $this;
    }

    public function getHtml(){
        return str_replace('{URL}', $this->url . '?' . http_build_query($this->params), $this->template);
    }


}