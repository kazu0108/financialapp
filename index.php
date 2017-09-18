<!DOCTYPE html>
<html>
<head>
	<title>Financial App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row col-mid-12" style="margin-top: 50px;">
			<div class="table-responsive">
			<table class="table table-bordered table-hover"></div>
		<tr>
			<th class="text-center">Date</th>
			<th class="text-center">Time</th>
			<th class="text-center">Item</th>
			<th class="text-center">Cost</th>
		</tr>
		<tr>
			<td class="text-center"><?php echo $row['date'];?></td>
			<td class="text-center"><?php echo $row['time'];?></td>
			<td class="text-center"><?php echo $row['item'];?></td>
			<td class="text-center"><?php echo $row['cost'];?></td>
		</tr>
		<tr>
			<td colspan=3>Total cost</td>
			<td><?php echo $row['total'];?></td>
		</tr>
		</table>
		</div>
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add">Add</button>
  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#edit">Edit</button>
  <form method="post" action="add.php">
  <div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
                <div class="well">
          	<form method="post" action="index.php">
          		<div>
          		<label>Date:</label>
          		<input type="text" name="date" id="date">
          		</div>
          		<div>
          		<label>Time:</label>
          		<input type="text" name="time" id="time">
          		</div>
          		<div>
          		<label>Item:</label>
          		<input type="text" name="item" id="item">
          		</div>
          		<div>
          		<label>Cost:</label>
          		<input type="text" name="cost" id="cost">
          		</div>
          	</form>
          </div>
          
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-default" value="Add">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
  </form>

  <form method="post" action="edit.php">
    <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <div class="well">
          	<form method="post" action="index.php">
          		<div>
          		<label>Date:</label>
          		<input type="text" name="date" id="date">
          		</div>
          		<div>
          		<label>Time:</label>
          		<input type="text" name="time" id="time">
          		</div>
          		<div>
          		<label>Item:</label>
          		<input type="text" name="item" id="item">
          		</div>
          		<div>
          		<label>Cost:</label>
          		<input type="text" name="cost" id="cost">
          		</div>
          	</form>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-default" value="Edit">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </form>
  </div>
	</div>
</body>
</html>