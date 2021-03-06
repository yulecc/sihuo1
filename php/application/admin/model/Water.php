<?php

namespace app\admin\model;

use think\Model;


class Water extends BaseModel
{

    

    

    // 表名
    protected $name = 'water';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'water_category_text',
        'river_type_text',
        'river_attribute_text',
        'section_type_text',
        'people_text',
        'control_level_text'
    ];
    

    
    public function getWaterCategoryList()
    {
        return ['Ⅰ' => __('Ⅰ'), 'Ⅱ' => __('Ⅱ'), 'Ⅲ' => __('Ⅲ'), 'Ⅳ' => __('Ⅳ'), 'Ⅴ' => __('Ⅴ'), 'Ⅵ' => __('Ⅵ'), 'Ⅶ' => __('Ⅶ')];
    }


    public function getWaterCategoryTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['water_category']) ? $data['water_category'] : '');
        $list = $this->getWaterCategoryList();
        return isset($list[$value]) ? $list[$value] : '';
    }

    public function getRiverTypeTextAttr($value,$data){

        return $this->cache_normal[$data['river_type']]['value'];

    }

    public function getRiverAttributeTextAttr($value,$data){

        return $this->cache_normal[$data['river_attribute']]['value'];

    }

    public function getSectionTypeTextAttr($value,$data){

        return $this->cache_normal[$data['section_type']]['value'];

    }

    public function getPeopleTextAttr($value,$data){

        return $this->cache_normal[$data['people']]['value'];

    }
    public function getControlLevelTextAttr($value,$data){

        return $this->cache_normal[$data['control_level']]['value'];

    }



}
