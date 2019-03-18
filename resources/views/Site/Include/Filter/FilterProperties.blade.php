<ul class="list-inline list-sort pull-left">
	@component('Site.Include.Filter.TypeOfProperties',[
		'data_type' => $data_filter['type_of_property']
	])
	@endcomponent
	@component('Site.Include.Filter.Sort.SortProperties',[
		'data_sort' => $data_filter['sortby']
	])
	@endcomponent
	@component('Site.Include.Filter.Order.OrderProperties',[
		'data_order' => $data_filter['orderby']
	])
	@endcomponent
</ul>