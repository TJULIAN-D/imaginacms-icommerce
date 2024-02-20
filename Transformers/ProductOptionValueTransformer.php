<?php

namespace Modules\Icommerce\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Icurrency\Support\Facades\Currency;
use Modules\Icommerce\Transformers\OptionValueTransformer;
use Modules\Icommerce\Transformers\OptionTransformer;

class ProductOptionValueTransformer extends JsonResource
{
  public function toArray($request)
  {
    $data = [
      'id' => $this->id,
      'fullName' => $this->full_name,
      'productOptionId' => $this->when($this->product_option_id,$this->product_option_id),
      'productId' => $this->when($this->product_id,$this->product_id),
      'parentId' => $this->parent_prod_opt_val_id ?? 0,
      'optionId' => $this->when($this->option_id,$this->option_id),
      'optionValueId' => $this->when($this->option_value_id,$this->option_value_id),
      'optionValue' => $this->when($this->option_value_id,$this->optionValue->description),
      'mainImage' => $this->when($this->option_value_id,$this->optionValue->mainImage),
      //'optionValue' => $this->when($this->optionValue->description,$this->optionValue->description),
      'parentOptionValueId' => $this->parent_option_value_id,
      'parentOptionValue' => $this->whenLoaded('parentOptionValue',$this->parentOptionValue ? $this->parentOptionValue->description : '-'),
      'quantity' => $this->when(isset($this->quantity), $this->quantity),
      'subtract' => $this->when(isset($this->subtract), $this->subtract),
      'price' => $this->when(isset($this->price), Currency::convert($this->price)),
      'pricePrefix' => $this->when($this->price_prefix, $this->price_prefix),
      'points' => $this->when(isset($this->points), $this->points),
      'pointsPrefix' => $this->when($this->points_prefix, $this->points_prefix),
      'weight' => $this->when(isset($this->weight), $this->weight),
      'weightPrefix' => $this->when($this->weight_prefix, $this->weight_prefix),
      'stockStatus' => $this->when(isset($this->stock_status), $this->stock_status),
      'available' => $this->available,
      'createdAt' => $this->when($this->created_at, $this->created_at),
      'updatedAt' => $this->when($this->updated_at, $this->updated_at),
      'children' => $this->when($this->children, ProductOptionValueTransformer::collection($this->children)),
      'optionValueEntity' => new OptionValueTransformer($this->whenLoaded('optionValue')),
      'option' => new OptionTransformer($this->whenLoaded('option')),
    ];

    return $data;
  }
}
