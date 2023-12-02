$(function () {
	var checkAll = $('input.all');
	var checkboxes = $('input.check');

	checkAll.on('ifChecked ifUnchecked', function(event) {        
		if (event.type == 'ifChecked') {
			checkboxes.iCheck('check');
		} else {
			checkboxes.iCheck('uncheck');
		}
	});

	checkboxes.on('ifChanged', function(event){
		if(checkboxes.filter(':checked').length == checkboxes.length) {
			checkAll.prop('checked', 'checked');
		} else {
			checkAll.prop('checked', '');
		}
		checkAll.iCheck('update');
	});
});

function edit(id, fl)
{
	document.frm.id.value = id;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submit();
}

function filldata(id, pid, fl)
{
	document.frm.id.value = id;
	document.frm.pid.value = pid;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submit();	
}

function report(id, fl)
{
	document.frm.id.value = id;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submit();
}

function cancel(_script)
{
	document.frm.action = _script;
	document.frm.submit();
}

function dochkall(frm)
{
	for (i=0; i<frm.elements.length; i++)
	{
		var e = frm.elements[i];
		if ( e.name == "removeid[]" ) { e.checked = frm.chkall.checked; }
	}
}

function dochkact(frm)
{
	for (i=0; i<frm.elements.length; i++)
	{
		var e = frm.elements[i];
		if ( e.name == "actvid[]" ) { e.checked = frm.chkact.checked; }
	}
}

function delconfirm(frm)
{
	delno = 0;
	for (i=0; i<frm.elements.length; i++)
	{
		var e = frm.elements[i];
		if ( e.name == "removeid[]" && e.checked ) { delno++; }
	}
	if ( delno == 0 ) { alert("You must select atleast one item to delete"); }
	else
	{
		if ( confirm("Are you sure delete selected item(s)") ) { frm.task.value = 'delete'; frm.submit(); }
	}
}
function undelconfirm(frm)
{
	delno = 0;
	for (i=0; i<frm.elements.length; i++)
	{
		var e = frm.elements[i];
		if ( e.name == "removeid[]" && e.checked ) { delno++; }
	}
	if ( delno == 0 ) { alert("You must select atleast one item to undelete"); }
	else
	{
		if ( confirm("Are you sure undelete selected item(s)") ) { frm.task.value = 'undelete'; frm.submit(); }
	}
}

function sortit(fld, seq)
{
	document.frm.ob.value = fld;
	document.frm.ot.value = seq;
	document.frm.submit();
}
/*function added on date 17-3-15 to link group members page from groups listing page*/
function list_group_members(id,company_id){
	document.frm.group_id.value = id;
	document.frm.company_id.value = company_id;
	document.frm.action = 'users.php';
	document.frm.target = '_self';
	document.frm.submit();
}
function edit_view(id, fl)
{
	if( document.getElementById("show_"+id) ){
		document.frm.show_type.value = $("#show_"+id).val();
	}
	document.frm.id.value = id;
	document.frm.action = fl;
	document.frm.target = '_self';
	document.frm.submit();
}
function doactive(tbl, id, active){	h = $(document).height();	t = (h - 250) / 2;	$('#loader-outer').css('height', h+'px' );	$('#loader').css('top', t+'px' );	$('#loader-outer').show();	formfields = 'tbl='+tbl;	formfields += '&id='+id;	formfields += '&active='+active;	theurl = 'doactive.php';	$.ajax({		type: "POST",		url: theurl,		data: formfields,		beforeSend: function( xhr ) {		}	}).done(function(data) {		$('#active'+id).html(data);		$('#loader-outer').hide();	});}

