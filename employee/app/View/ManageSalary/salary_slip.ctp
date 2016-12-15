<div class="container-fluid">
<?php echo $this->element("header"); ?>
<div class="col-lg-2">
</div>
<div class="wrapper">
<div class="col-lg-10">
    <h1 class="page-header">
    Manage Salary
    </h1>
    <form action="salary_slip" method="post" name="formname">
    <div class="col-lg-6">
        <!-- <div class="form-group">
	        <label>Select Employee</label>
	        <select required="" name="username" class="form-control">
	        <option value="">Select</option>
	        <?php
	        foreach ($userdata as $key => $value)
	        { ?>
	        <option value="<?php echo $key; ?>"><?php echo $value; ?></option><?php
	        }
	        ?>
	        </select>
        </div> -->

		<div class="form-group">
			<label>Select Month to generate salary slip of all employees.</label>
			<select id="month" class="form-control" name="month" style="width: 200px;">
			<option value="">Select</option>
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
			</select>
		</div>

		<button type="submit" name="generate" class="btn btn-default" id="btnsubmit" onclick="Validate();">Generate</button>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    </form>
</div>
</div>
</div>
<?php echo $this->element("footer"); ?>
<script type="text/javascript">
	function Validate()
{
    var e = document.getElementById("month");
    var strUser = e.options[e.selectedIndex].value;

    var strUser1 = e.options[e.selectedIndex].text;
    if(strUser=="")
    {
        alert("Please select a month");
        event.preventDefault();
    }
}
</script>