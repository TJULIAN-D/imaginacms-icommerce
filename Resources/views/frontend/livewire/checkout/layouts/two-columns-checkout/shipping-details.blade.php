<div class="card card-block p-3 mb-3">
  <div class="row m-0 card-number-text">
    <div class="number-check"> {{$step}} </div>
    <h3 class="d-flex align-items-center my-1 h5">
      {{ trans('icommerce::delivery_details.title') }}
    </h3>
  
    @if($errors->has('shippingAddress'))
      <br/>
      <span class="alert alert-danger" role="alert">{{ $errors->first('shippingAddress') }}</span>
    @endif
  </div>
  
  <hr class="my-2"/>

  @include("icommerce::frontend.livewire.checkout.partials.shipping-details")
</div>
