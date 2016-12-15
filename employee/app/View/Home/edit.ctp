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
        Edit Existing Employee Details
        </h1>
    <div class="row">
        <form action="edit" method="post" name="form1" onsubmit="return validate();">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Emp Name</label>
                    <input class="form-control" name="emp_name" value="<?php echo $name; ?>" style="width: 400px;">
                    <p class="help-block">Write your full name here.</p>
                </div>

                <div class="form-group">
                    <label>Emp Email ID</label>
                    <input class="form-control" name="emp_email" value="<?php echo $email; ?>" style="width: 400px;">
                    <p class="help-block">Enter your email id.</p>
                </div>

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
                    <label>Emp Designation</label>
                    <input class="form-control" name="emp_desig" value="<?php echo $designation; ?>" style="width: 400px;">
                    <p class="help-block">your position in the company.</p>
                </div>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="emp_address" value="<?php echo $address; ?>" style="width: 400px;"></textarea>
                <p class="help-block">your permanent address.</p>
            </div>

            <button type="submit" class="btn btn-lg btn-success" name="submit">Edit</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-lg btn-warning">Reset</button>
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
    var x = document.forms["form1"]["emp_name"].value;
    if (x == null || x == "") {
        // event.preventDefault();
        Lobibox.alert('error', { msg: "Please fill the name" });
        return false;
    }

    var y = document.forms["form1"]["emp_email"].value;
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        // event.preventDefault();
        Lobibox.alert('error', { msg: "Not a valid email address." });
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

    var b = document.forms["form1"]["emp_desig"].value;
    if (b == null || b == "") {
        Lobibox.alert('error', { msg: "Designation must be filled out" });
        return false;
    }

    var c = document.forms["form1"]["emp_address"].value;
    if (c == null || c == "") {
        Lobibox.alert('error', { msg: "Please fill the address" });
        return false;
    }
}
</script>