<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="flexigrid.pack.js"></script>
<link rel="stylesheet" type="text/css" href="flexigrid.css">
<title>phpflow.com : Demo of flexi grid integration with PHP</title>

<div><h3>Demo : flexi grid integration with PHP</h1></div>
<div> 
<table id="flex1" style="display:none1"></table> 
</div>

<script>
jQuery(document).ready(function() {
var issueListingGrid = null;
       jQuery("#flex1").flexigrid({ 
        url: 'action.php', 
        dataType: 'json', 
        colModel : [ 
                {display: 'Name', name : 'name', width: 140 , sortable : true, align: 'left'}, 
                {display: 'Status', name : 'status',width: 140 , sortable : true, align: 'left'}, 
                {display: 'Priority', name : 'priority',width:180, sortable : true, align: 'left'}, 
                {display: 'Due Date', name : 'ddate',width:185, sortable : true, align: 'right'} 
                ], 
        searchitems : [ 
                {display: 'Name', name : 'name', isdefault: true} 
                ], 
        sortname: "name", 
        sortorder: "asc", 
        usepager: true, 
        title: 'Test List', 
		onSuccess:function(){
            },
        useRp: true, 
        rp: 5, 
        showTableToggleBtn: true, 
        width: 700, 
        //onSubmit: addFormData, 
        height: 200 
}); 
});
</script>