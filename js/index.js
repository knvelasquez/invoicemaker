/**
	*Author:@Author
	*Date:@Date
	*Description:@Description
*/
var $invoice=[
	{id:1,amount:"10.00",date:"05/03/2019"},
	{id:2,amount:"20.56",date:"02/15/2018"},
	{id:3,amount:"30.89",date:"12/20/2017"}
];
function clear(){
	$("#txtamount").val("");
	$("#txtdate").val("");
}
function del(){
	$id=parseInt($("#txtid").val());
	$.each($invoice,function($index,$obj){
		if($obj.id===$id){
			$invoice.splice($index, 1);
			return false;
		}
	});			
	drawTable(".table",$invoice);
	clear();
}
function update(){
	$id=(parseInt($("#txtid").val())-1);
	$invoice[$id].amount=$("#txtamount").val();
	$invoice[$id].date=$("#txtdate").val();
	drawTable(".table",$invoice);
	clear();
}
function reload(){
	$invoice.push({
		id:($invoice.length+1),
		amount:$("#txtamount").val(),
		date:$("#txtdate").val()
	});
	drawTable(".table",$invoice);
	clear();
}
function drawTable(_rootelem,$object){
	$(_rootelem+" tbody tr").remove()
	$.each($object,function($index,$obj){
		var $tr=$("<tr/>")
		.attr($obj)
		.click($obj,function(event){
			$("#txtid").val(event.data.id);
			$("#txtamount").val(event.data.amount);
			$("#txtdate").val(event.data.date);			
		});				
		$tr.append($("<td/>").text($obj.amount));
		$tr.append($("<td/>").text($obj.date));											
		$(_rootelem).append($tr)
	});
}
$(function(){
	$("#txtdate").datepicker();
	drawTable(".table",$invoice);
});	