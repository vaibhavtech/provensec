<div class="container-fluid">
<?php echo $this->element("header"); ?>
<div class="col-lg-2">
</div>
<div class="wrapper">
<div class="col-lg-10">
    <h1 class="page-header">
    Manage Salary
    </h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Manage Salary</h3>
            <!-- <a href="<?php echo Router::url("/", true); ?>ManageSalary/add_salary">
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
                    <th>BASIC SALARY</th>
                    <th>HRA</th>
                    <th>DEARNESS ALLOWANCE</th>
                    <th>MOBILE/TELEPHONE REIMBURSEMENT</th>
                    <th>SALARY ADVANCE</th>
                    <th>EXPENSE RE-IMBURSEMENT</th>
                    <th>TOTAL MONTHLY SALARY</th>
                    <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($sal as $value) { ?>
                        <tr>
                        <td><?php echo $value['0']['code'] ?></td>
                        <td><?php echo $value["0"]["name"] ?></td>
                        <td><?php echo $value["Salary"]["basic_salary"] ?></td>
                        <td><?php echo $value["Salary"]["hra"] ?></td>
                        <td><?php echo $value["Salary"]["da"] ?></td>
                        <td>1000</td>
                        <td><?php echo $value["Salary"]["advance"]  ?></td>
                        <td><?php echo $value["Salary"]["expense"] ?></td>
                        <td><?php echo $value["Salary"]["total"] ?></td>
                        <td>
                            <a id="edit" href="<?php echo Router::url("/", true); ?>ManageSalary/edit_salary/<?php echo $value["Salary"]["id"]; ?>">
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
                <a href="<?php echo Router::url("/", true); ?>ManageSalary/add_salary" class="alert-link"><h2 style="text-align: center;"><strong>Add New</strong></h2></a>
        </div>
    </div>
</div>
</div>
</div>
<?php echo $this->element("footer"); ?>