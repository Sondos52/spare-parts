<?php
class ProductModel
{
    public $id;
    public $name;
    public $price;
    public $details;
    public $image_url;
    public $is_favorite;
    public $category_id;
    public $group_id;
    public $company_id;
    function __construct(
        array $arr
    ) {
        $this->id = $arr['pr_id'];
        $this->name = $arr['pname'];
        $this->price = $arr['price'];
        $this->details = $arr['details'];
        $this->image_url = $arr['img_url'];
        // $this->is_favorite = $arr['is_favorite'];
        $this->group_id = $arr['g_id'];
        $this->category_id = $arr['ca_id'];
        $this->company_id = $arr['camp_id'];
    }
}
