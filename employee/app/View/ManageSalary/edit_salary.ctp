<div class="container-fluid">
<?php echo $this->element("header"); ?>
<div class="col-lg-2">
</div>
<div class="wrapper">
<div class="col-lg-10">
    <h1 class="page-header">
    Edit Salary Details
    </h1>
    <form action="edit_salary" method="post" name="form1" onsubmit="return validate();">
    <div class="col-lg-4">
    	<div class="form-group">
			<label>Salary Advance</label>
			<input value="<?php echo $sa ?>" class="form-control" name="sa" id="sa">
			<p class="help-block">Salary Advance.</p>
		</div>

		<div class="form-group">
			<label>Expense Reimbursement</label>
			<input class="form-control" name="expense" id="exp">
			<p class="help-block">This field can be left blank in case of no reimbursement.</p>
		</div>

		<div class="form-group">
			<label>Basic Salary</label>
			<input value="<?php echo $base ?>" type="text" class="form-control" id="base" name="base" onchange="basic(this.value);">
			<p class="help-block">Salary in-hand.</p>
		</div>

		<div class="form-group">
			<label>HRA</label>
			<input value="<?php echo $hra ?>" class="form-control" name="hra" id="hra">
			<p class="help-block">House rent allowance.</p>
		</div>
    </div>

    <div class="col-lg-4">

		<div class="form-group">
			<label>DA</label>
			<input value="<?php echo $da ?>" class="form-control" name="da" id="da">
			<p class="help-block">Dearness allowance.</p>
		</div>

		<div class="form-group">
			<label for="disabledSelect">Mob/Telephone Reimbursement</label>
			<input class="form-control" id="reimb" name="reimb" type="text" placeholder="₹. 1,000" disabled="">
		</div>

		<div class="form-group">
			<label>Total Salary</label>
			<input value="<?php echo $ts ?>" class="form-control" name="ts" id="ts">
			<p class="help-block">Total Salary with allowances.</p>
		</div>
		<button type="submit" class="btn btn-default" id="btnsubmit">Edit</button>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    </form>
</div>
</div>
</div>
<?php echo $this->element("footer"); ?>
<script type="text/javascript">
function basic(x)
{
	if(x > 20000)
	{
		alert("Amount should be less than 20,000");
		$("#btnsubmit").hide();
		return false;
	}
	else
	{
			if(document.getElementById("exp").value != "")
		{
			var y = document.getElementById("sa").value;
			var z = document.getElementById("exp").value;
			x = parseInt(x);
			$("#btnsubmit").show();
			$("#sa").val(y);
			$("#exp").val(z);
			$("#hra").val(x*0.10);
			$("#da").val(x*0.25);
			$("#ts").val(x*0.10 + x*0.25 + 1000 + x + parseInt(y) + parseInt(z));
		}
		else
		{
			var y = document.getElementById("sa").value;
			x = parseInt(x);
			$("#btnsubmit").show();
			$("#sa").val(y);
			$("#exp").val(z);
			$("#hra").val(x*0.10);
			$("#da").val(x*0.25);
			$("#ts").val(x*0.10 + x*0.25 + 1000 + x + parseInt(y));
		}
	}

}

function validate() {

var e = document.getElementById("username");
// var strUser = e.options[e.selectedIndex].value;
if(e.value=="")
{
    Lobibox.alert('error', { msg: "Please select an employee." });
    return false;
}

var z = document.forms["form1"]["base"].value;
if (z == null || z == "") {
    Lobibox.alert('error', { msg: "Please fill in the basic salary" });
    return false;
}

var a = document.forms["form1"]["hra"].value;
if (a == null || a == "") {
    Lobibox.alert('error', { msg: "Please fill in the hra" });
    return false;
}

var a = document.forms["form1"]["da"].value;
if (a == null || a == "") {
    Lobibox.alert('error', { msg: "Please fill in the da" });
    return false;
}
}
</script>