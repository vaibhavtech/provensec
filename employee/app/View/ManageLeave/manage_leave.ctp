<div class="container-fluid">
<?php echo $this->element("header"); ?>
<div class="col-lg-2">
</div>
<div class="wrapper">
<div class="col-lg-10">
    <h1 class="page-header">
    Manage Leave
    </h1>
    <p>All the calculations for leave are made with 7 entitled leaves.</p>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Manage Leave</h3>
            <!-- <a href="<?php echo Router::url("/", true); ?>ManageLeave/add_leave">
            <button type="button" class="btn btn-sm btn-info" style="margin-left: 900px; margin-top: -20px;">Add New</button>
            </a> -->
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>NAME OF EMPLOYEE</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    <th>TYPE OF LEAVE</th>
                    <th># OF DAYS</th>
                    <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($emp as $value) { ?>
                    <tr>
                    <td><?php echo $value["0"]["name"] ?></td>
                    <td><?php echo $value["Leave"]["leave_start"] ?></td>
                    <td><?php echo $value["Leave"]["leave_end"] ?></td>
                    <td><?php echo $value["0"]["leave_type"] ?></td>
                    <td><?php echo $value["Leave"]["leave_taken"] ?></td>
                    <td>
                        <a id="edit" href="<?php echo Router::url("/", true); ?>ManageLeave/edit/<?php echo $value["Leave"]["id"]; ?>">
                        <button type="button" class="btn btn-sm btn-info">Edit</button>
                        </a>
                    </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
        <div class="alert alert-dismissible alert-info" style="width: 350px; margin-left: 370px;">
                <a href="<?php echo Router::url("/", true); ?>ManageLeave/add_leave" class="alert-link"><h2 style="text-align: center;"><strong>Add New</strong></h2></a>
        </div>
    </div>
</div>
</div>
</div>
<?php echo $this->element("footer"); ?>