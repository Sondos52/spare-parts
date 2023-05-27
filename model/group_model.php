<?php
class GroupModel
{
    public $id;
    public $name;
    public $category_id;
    public $image_url;
    function __construct(array $arr)
    {
        $this->id = $arr['g_id'];
        $this->name = $arr['name'];
        $this->category_id = $arr['c_id'];
        $this->image_url = $arr['img_url'];
    }
}
