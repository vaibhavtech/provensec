<div class="container-fluid">
<?php echo $this->element("header"); ?>
<div class="col-lg-2">
</div>
<div class="wrapper">
<div class="col-lg-10">
    <h1 class="page-header">
    Home
    </h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Employee Details</h3>
            <!-- <a href="<?php echo Router::url("/", true); ?>home/add_new">
            <button type="button" class="btn btn-sm btn-info" style="margin-left: 900px; margin-top: -20px;">Add New</button>
            </a> -->
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>EMP CODE</th>
                    <th>EMP NAME</th>
                    <th>EMP EMAIL ID</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    <th>ADDRESS</th>
                    <th>EMP DESIG</th>
                    <th>LEAVE ENTITLED</th>
                    <th>LEAVE TAKEN</th>
                    <th>REMAINING LEAVE</th>
                    <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($emp as $value) { ?>
                    <tr>
                    <td><?php echo $value['Employee']['emp_code'] ?></td>
                    <td><?php echo $value['Employee']['name'] ?></td>
                    <td><?php echo $value['Employee']['email'] ?></td>
                    <td><?php echo $value['Employee']['start_date'] ?></td>
                    <td><?php echo $value['Employee']['end_date'] ?></td>
                    <td><?php echo $value['Employee']['address'] ?></td>
                    <td><?php echo $value['Employee']['designation'] ?></td>
                    <td><?php echo "7" ?></td>
                    <td><?php echo $value['0']['leave_taken'] ?></td>
                    <td><?php echo $value['0']['leave_remaining'] ?></td>
                    <td>
                        <a id="edit" href="<?php echo Router::url("/", true); ?>home/edit/<?php echo $value["Employee"]["id"]; ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a id="del" href="#" onclick='deleteattr("<?php echo Router::url("/", true); ?>home/delete/<?php echo $value["Employee"]["id"]; ?>")'>
                        <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
        <div class="alert alert-dismissible alert-info" style="width: 350px; margin-left: 370px;">
                <a href="<?php echo Router::url("/", true); ?>home/add_new" class="alert-link"><h2 style="text-align: center;"><strong>Add New</strong></h2></a>
        </div>
    </div>
</div>
</div>
</div>
<?php echo $this->element("footer"); ?>
<script type="text/javascript">
function deleteattr(id)
    {
        Lobibox.alert('error', {
            msg: 'Are you sure want to delete',
            buttons: {
                ok: {
                    'class': 'btn btn-info',
                    closeOnClick: true
                },
                cancel: {
                    'class': 'btn btn-danger',
                    closeOnClick: true
                }
            },
            callback: function(lobibox, type){
                var btnType;
                if (type === 'ok'){
                    window.location.href = id;
                }
            }
        });
    }
</script>