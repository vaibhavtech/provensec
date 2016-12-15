<div class="container-fluid">
<?php echo $this->element("header"); ?>
<div class="col-lg-2">
</div>
<div class="wrapper">
<div class="col-lg-10">
    <h1 class="page-header">
    Add Leave
    </h1>
    <form action="add_leave" method="post" name="form1" onsubmit="return validate();">
    <div class="col-lg-4">
        <div class="form-group">
        <label>Select Employee</label>
        <select name="username" id="username" class="form-control" onchange="datafetching(this.value);">
        <option value="">Select</option>
        <?php
        foreach ($userdata as $key => $value)
        { ?>
        <option value="<?php echo $key; ?>"><?php echo $value; ?></option><?php
        }
        ?>
        </select>
        </div>

        <div class="form-group">
            <label>Type of Leave</label>
            <select id="leave" class="form-control" name="type">
                <option value="">Select leave</option>
                <?php
                foreach ($userdata1 as $key1 => $value1)
                { ?>
                <option value="<?php echo $key1; ?>"><?php echo $value1 ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
        <label>Start Date</label>
        <input type="text" class="form-control datepicker" name="start_date" id="start">
        </div>

        <div class="form-group">
        <label>End Date</label>
        <input type="text" class="form-control datepicker" name="end_date" id="end">
        </div>

        <button type="submit" class="btn btn-lg btn-success" name="submit">Submit</button>
    </div>
    <div class="col-lg-6">
        <div id="leavedata">
            
        </div>
    </div>

    </form>
</div>
</div>
</div>
<?php echo $this->element("footer"); ?>
<script type="text/javascript">
$('.datepicker').datepicker({
  "autoclose": true,
  "format": 'yyyy-mm-dd'
 });
function datafetching(val)
{
   // alert(val);
    $.ajax({
        url:'ajax_data',
        type:'GET',
        data:'what='+val,
        // contentType: 'application/json',
        // dataType:'json',
        // cache:false,
        context: document.body,
        success:function(result){
            // var data = $.parseJSON(result);
            // var select = $(txt);
            // var options = select.attr('options');
            // $('option', select).remove();
            // options[options.length] = new Option("Select City", "");
            // if (JSON.stringify(result) != '""') {
            //     $.each(result, function(index, item) {
            //         options[options.length] = new Option(item['value'], item['id']);        
            //     });
            // }
            // $(txt + " option").each(function(){
            //     var a = $(this).val();
            //     //alert(hiddenval);
            //     if(a == hiddenval)
            //     {
            //         $(this).attr("selected","selected");
            //     }
            // });
            $("#leavedata").html(result);
            // alert(data);
        },  
        error:function(jqXHR){
            alert(jqXHR.responseText);
        }
    });
}

function validate() {

    var e = document.getElementById("username");
    // var strUser = e.options[e.selectedIndex].value;
    if(e.value=="")
    {
        Lobibox.alert('error', { msg: "Please select an employee." });
        return false;
    }

    var f = document.getElementById("leave");
    // var strUser = e.options[e.selectedIndex].value;
    if(f.value=="")
    {
        Lobibox.alert('error', { msg: "Please select a type of leave." });
        return false;
    }

    var z = document.forms["form1"]["start_date"].value;
    if (z == null || z == "") {
        Lobibox.alert('error', { msg: "Please mention the starting date" });
        return false;
    }

    var a = document.forms["form1"]["end_date"].value;
    if (a == null || a == "") {
        Lobibox.alert('error', { msg: "Please mention the end date" });
        return false;
    }
}
</script>