<div class="change-layout d-flex align-items-center">
	<label>
		{{trans('icommerce::frontend.index.views')}}:
	</label>
	<div class="types-columns ml-1">
<<<<<<< HEAD
		@foreach($this->configs['mainLayout']['options'] as  $layoutOption)
			@if(!empty($layoutOption) && $layoutOption['status'])
				<i wire:click="changeLayout('{{$layoutOption['name']}}')" class="{{$layoutOption['icon']}} mx-1 cursor-pointer {{$mainLayout==$layoutOption['name'] ? 'active text-primary' : $layoutOption['name']}}" aria-hidden="true"></i>
			@endif
=======
			@foreach($this->configs['mainLayout']['options'] as  $layoutOption)
			@if(!empty($layoutOption) && $layoutOption['status'])
				<i wire:click="changeLayout('{{$layoutOption['name']}}')" class="{{$layoutOption['icon']}} mx-1 cursor-pointer {{$mainLayout==$layoutOption['name'] ? 'active text-primary' : $layoutOption['name']}}" aria-hidden="true"></i>
		@endif
>>>>>>> v8.x
		@endforeach
	</div>
	
</div>