<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<div class="container-fluid">
<?php echo $this->element("header"); ?>
<div class="col-lg-2">
</div>
<div class="wrapper">
<div class="col-lg-10">
        <h1 class="page-header">
        Edit Leave Details
        </h1>
    <div class="row">
        <form action="edit" method="post" name="form1" onsubmit="return validate();">

                <div class="form-group">
                    <label>Start Date</label>
                    <input type="text" class="form-control datepicker" name="start_date" value="<?php echo $start_date; ?>" style="width: 400px;">
                    <p class="help-block">Date you joined the program.</p>
                </div>

                <div class="form-group">
                    <label>End Date</label>
                    <input type="text" class="form-control datepicker" name="end_date" value="<?php echo $end_date; ?>" style="width: 400px;">
                    <p class="help-block">Date you left the program.</p>
                </div>

                <div class="form-group">
                    <label>Type of Leave</label>
                    <select id="leave" class="form-control" name="type" style="width: 400px;">
                    <option value="">Select leave</option>
                    <?php
                    foreach ($userdata1 as $key1 => $value1)
                    { ?>
                        <option value="<?php echo $key1; ?>"><?php echo $value1; ?></option>
                    <?php } ?>
                    </select>
                </div>

                <input type="hidden" name="leave_taken" />

            <button type="submit" class="btn btn-lg btn-success" name="submit" onclick="Validate();">Edit</button>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
        </form>
    </div>
</div>
</div>
</div>
<?php echo $this->element("footer"); ?>
<script type="text/javascript">
    $('.datepicker').datepicker({
  "autoclose": true,
  "format": 'yyyy-mm-dd'
 });

function validate() {

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

    var f = document.getElementById("leave");
    // var strUser = e.options[e.selectedIndex].value;
    if(f.value=="")
    {
        Lobibox.alert('error', { msg: "Please select a type of leave." });
        return false;
    }
}
</script>