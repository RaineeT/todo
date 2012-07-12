/* Author:

*/

$(function (){

	$('a.launch_modal').on('click', launch_modal);
	
	onfinalload();
});
function show_modal (data)
{
	$('div.modal').modal('hide');
	$('body').append(data);
	var modal = $('div.loaded_modal');
	//add this to REMOVE the modal, otherwise javascript will fail to rebind to elements on the new modal
	//modal.on('hide hidden', function(){ console.log(modal); modal.remove(); });
	modal.modal({keyboard:true,backdrop:true,show:true}).css({
		width: 'auto',
		'margin-left': function () {
			return -($(this).width() / 2);
		}
	});
	modal.removeClass('loaded_modal');
}
function launch_modal(event)
{
	$.get($(this).attr('href'), show_modal);

	event.preventDefault();
}
function next_modal(location, method)
{
	$.get(location, show_modal);
}
function clear_form_elements(ele)
{
	$(ele).find(':input').each(function() {
		switch(this.type) {
			case 'password':
			case 'select-multiple':
			case 'select-one':
			case 'text':
			case 'textarea':
				$(this).val('');
				break;
			
			case 'checkbox':
			case 'radio':
				this.checked = false;
				break;
		}
	});
}
function delete_item_browse(event)
{
	var collection = $(this).data('collection');
	var item_id = $(this).data('id');
	$.getJSON('nosql_admin_mongo/delete/'+collection+'/'+item_id, delete_item_browse_response);
	event.preventDefault();
}
function delete_item_browse_response(data)
{
	$('div.control-group').removeClass('error');

	if (data.status == 'success') {
		$('div#mongo-result-browse-item-'+data.item_name).remove();
	}
	else {
		alert(data.response);
	}
}
function delete_item(event)
{
	var collection = $(this).data('collection');
	var item_id = $(this).data('id');
	$.getJSON('nosql_admin_mongo/delete/'+collection+'/'+item_id, delete_item_response);
	event.preventDefault();
}
function delete_item_response(data)
{
	$('div.control-group').removeClass('error');

	if (data.status == 'success') {
		$('#mongo-result').empty();
	}
	else {
		alert(data.response);
	}
}
function create_collection(event)
{
	$.getJSON('nosql_admin_mongo/create_collection/'+$('#collection-new').val(), create_collection_response);
	$('#collection-new').val('');
	event.preventDefault();
}
function create_collection_response(data)
{
	$('div.control-group').removeClass('error');

	$('tbody#collection-listings').append('<tr id="'+data.name+'_row"><td>'+data.name+'</td><td>0</td><td><div class="btn-group"><button rel="'+data.name+'" class="btn btn-small btn-info browse-collection"><span class="icon icon-search"></span> browse</button><button class="btn btn-small btn-danger collection-delete" rel="'+data.name+'"><span class="icon icon-trash"></span> delete</button></div></td></tr>');
	$('select.collection-select-list').append('<option class="option-'+data.name+'">'+data.name+'</option>');
}
function submit_query(event)
{
	$.post('nosql_admin_mongo/query', $(this).serialize(), submit_query_response, 'json');
	event.preventDefault();
}
function submit_query_response(data)
{
	$('div.control-group').removeClass('error');

	if (data.status == 'error') {
		if (data.errors.collection != undefined) {
			$('#mongo-tab-query-form div.control-group[data-error=collection]').addClass('error');
		}
	}
	else if (data.status == 'success') {
		$('#mongo-result').empty();
		
		if (data.results != undefined) {
			for (result in data.results) {
				print_results(data.name, $('#mongo-result'), data.results[result]);
			}
			$('#item-result-'+data.results[0]._id.$id).collapse('toggle');
		}
		else if (data.result != undefined) {
			print_result(data.name, $('#mongo-result'), data.result);
		}
	}
	else {
		alert(data.response);
	}
}
function browse_collection(event)
{
	$.post('nosql_admin_mongo/query', {collection: $(this).attr('rel')}, browse_collection_response, 'json');
	event.preventDefault();
}
function browse_collection_response(data)
{
	$('div.control-group').removeClass('error');

	if (data.status == 'success') {
		$('#mongo-result').empty();
		for (result in data.results) {
			print_results(data.name, $('#mongo-result'), data.results[result]);
		}
		$('#item-result-'+data.results[0]._id.$id).collapse('toggle');
	}
	else {
		alert(data.response);
	}
}
function print_result(collection, elem, result)
{
	elem.append('<dl class="dl-horizontal" id="item-result-'+result._id.$id+'"></dl>');
	for (prop in result) {
		if (prop == '_id') {
			$('dl#item-result-'+result._id.$id).append('<dt>'+prop+'</dt><dd>'+result._id.$id+'&nbsp;</dd>');
		}
		else {
			$('dl#item-result-'+result._id.$id).append('<dt>'+prop+'</dt><dd>'+result[prop]+'&nbsp;</dd>');
		}
	}
	elem.append('<div class="form-actions"><a  href="nosql_admin_mongo/update_item/'+result._id.$id+'" class="launch_modal btn btn-small btn-info"><span class="icon icon-pencil"></span> update</a><button data-collection="'+collection+'" data-id="'+result._id.$id+'" class="delete_item btn btn-small btn-danger"><span class="icon icon-trash"></span> delete</button></div>');
}
function print_results(collection, elem, result)
{
	elem.append('<div class="row-fluid" id="mongo-result-browse-item-'+result._id.$id+'"><div class="span12"><div class="btn-group"><a class="btn span9" id="button-item-result-'+result._id.$id+'" data-target="#item-result-'+result._id.$id+'"" data-toggle="collapse">\
		'+result._id.$id+'\
	</a><a  href="nosql_admin_mongo/update_item/'+result._id.$id+'" class="launch_modal btn btn-small btn-info"><span class="icon icon-pencil"></span> update</a><button data-collection="'+collection+'" data-id="'+result._id.$id+'" class="delete_item_browse btn btn-small btn-danger"><span class="icon icon-trash"></span> delete</button></div>\
	<div class="collapse" id="item-result-'+result._id.$id+'"" data-parent="button-item-result-'+result._id.$id+'"> \
		<dl class="dl-horizontal"></dl> \
	</div></div></div>');
	for (prop in result) {
		if (prop == '_id') {
			$('div#item-result-'+result._id.$id+' dl').append('<dt>'+prop+'</dt><dd>'+result._id.$id+'&nbsp;</dd>');
		}
		else {
			$('div#item-result-'+result._id.$id+' dl').append('<dt>'+prop+'</dt><dd>'+result[prop]+'&nbsp;</dd>');
		}
	}
}
function clear_form(event)
{
	var form = $( 'form#'+$(this).attr('rel') );
	clear_form_elements(form);
	event.preventDefault();
}
function insert_object(event)
{
	$.post('nosql_admin_mongo/insert', $(this).serialize(), insert_object_response, 'json');
	event.preventDefault();
}
function insert_object_response(data)
{
	$('div.control-group').removeClass('error');

	if (data.status == 'error') {
		if (data.errors.collection != undefined) {
			$('#mongo-tab-insert-form div.control-group[data-error=collection]').addClass('error');
		}
	}
	else if (data.status == 'success') {
		$('#mongo-result').empty();
		for (result in data.results) {
			print_result(data.name, $('#mongo-result'), data.results[result]);
		}
	}
	else {
		alert(data.response);
	}
}
function delete_collection(event)
{
	$.getJSON('nosql_admin_mongo/delete_collection/'+$(this).attr('rel'), delete_collection_response);
	event.preventDefault();
}
function delete_collection_response(data)
{
	$('div.control-group').removeClass('error');

	if (data.status == 'success') {
		$('option.option-'+data.name).remove();
		$('#'+data.name+'_row').remove();
	}
	else {
		alert('An error has occurred');
	}
}