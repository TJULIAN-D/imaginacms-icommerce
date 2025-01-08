<div class="productRibbon {{$discountRibbonStyle}} {{$discountPosition}}">

  <!--Ribbon Sold out-->
  @if($product->is_sold_out)
    <div class="ribbonSoldOut ribbonContent">
      <div class="asideRibbon">
        <div class="ribbonLabel">{{trans('icommerce::products.alerts.sold out')}}</div>
      </div>
    </div>

    <!--Ribbon Product new-->
  @elseif($product->is_new)
    <div class="ribbonNewProduct ribbonContent">
      <div class="asideRibbon">
        <div class="ribbonLabel"><b>{{trans('icommerce::products.alerts.new')}}</b></div>
      </div>
    </div>
  @endif
<!--Ribbon discount-->
  @if(isset($discount) && $discount && !$product->is_sold_out)
    <div class="ribbonDiscount ribbonContent">
      <div class="asideRibbon">
        @if($discount && ($discount->criteria == 'fixed'))
          <b><i class="fa fa-tags"></i></b>
        @else
          <b>{{round($discount->discount) ?? 0}}%</b>
        @endif
        <div class="ribbonLabel">{{ trans('icommerce::products.alerts.withDiscount') }}</div>
      </div>
    </div>
  @endif
  @once
  <style>
    /*Discount Ribbon*/
    .productRibbon .ribbonDiscount .asideRibbon .ribbonLabel {
        font-size: {{$ribbonLabelSize}}px !important;
    }
    .productRibbon .ribbonDiscount .asideRibbon {
        font-size: {{$ribbonTextSize}}px !important;
        color: {{$ribbonTextColor}};
        background-color: {{$ribbonBackgroundColor}} !important;
    }
    .productRibbon.circle .ribbonDiscount .asideRibbon {
        background-color: {{$ribbonBackgroundColor}} !important;
    }
    .productRibbon.flag.top-left .ribbonDiscount .asideRibbon:after,
    .productRibbon.flag.top-right .ribbonDiscount .asideRibbon:after {
        content: none !important;
    }
    .productRibbon.flag.top-right .ribbonDiscount .asideRibbon {
        clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%);
        padding: 8px 10px 8px 18px !important;
    }
    .productRibbon.flag.top-left .ribbonDiscount .asideRibbon {
        clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
        padding: 8px 18px 8px 10px !important;
    }
  </style>
  @endonce
</div>
