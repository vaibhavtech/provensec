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
        Manage Leave Type
        </h1>
    <div class="row">
        <form action="leave_type" method="post">
        <?php foreach ($types as $key => $value) { ?>
            <div class="alert alert-dismissible alert-info" style="width: 350px;">
            <strong><?php echo $value["Type"]["type"]; ?></strong> </br> <a href="#" class="alert-link"></a><?php echo $value["Type"]["description"]; ?> </br> <a id="edit" href="<?php echo Router::url("/", true); ?>ManageLeave/edit_type/<?php echo $value["Type"]["id"]; ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <!-- <a id="del" href="#" onclick='deleteattr("<?php echo Router::url("/", true); ?>ManageLeave/delete/<?php echo $value["Type"]["id"]; ?>")'>
                        <span class="glyphicon glyphicon-trash"></span>
                        </a> -->
            </div>
            <?php } ?>
            <div class="alert alert-dismissible alert-info" style="width: 350px;">
                <a href="<?php echo Router::url("/", true); ?>ManageLeave/add_type" class="alert-link"><h2 style="text-align: center;"><strong>Add New</strong></h2></a>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<?php echo $this->element("footer"); ?>