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
        Add New Leave Type
        </h1>
    <div class="row">
        <form action="add_type" method="post">
          <div class="form-group">
              <label>Name of Leave</label>
              <input required="" name="type" class="form-control" style="width: 400px;">
          </div>

          <div class="form-group">
              <label>Description of Leave</label>
              <input name="description" class="form-control" style="width: 400px;">
          </div>

          <button type="submit" class="btn btn-default">Add Type</button>
        </form>
    </div>
</div>
</div>
</div>
<?php echo $this->element("footer"); ?>