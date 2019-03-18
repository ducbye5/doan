$(function(){

	var typeOfProperties = '#typeofproperties',
		sortProperties = '#sortProperties',
		orderProperties = '#orderProperties';
	var formSearchIndex = '#formSearchIndex',
		formSearchPurchaseAndRent = '#formSearchPurchaseAndRent',
		formSearchSellAndRental = '#formSearchSellAndRental';

	$(typeOfProperties).change(function(){
		$(formSearchIndex).submit();
		$(formSearchPurchaseAndRent).submit();
		$(formSearchSellAndRental).submit();
	});

	$(sortProperties).change(function(){
		$(formSearchIndex).submit();
		$(formSearchPurchaseAndRent).submit();
		$(formSearchSellAndRental).submit();
	});

	$(orderProperties).change(function(){
		$(formSearchIndex).submit();
		$(formSearchPurchaseAndRent).submit();
		$(formSearchSellAndRental).submit();
	});

});