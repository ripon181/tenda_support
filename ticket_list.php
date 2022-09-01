<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-info">
		<div class="card-body">
			<table class="table table-hover table-bordered" id="list">
				<colgroup>
					<col width="5%">
					<col width="15%">
					<col width="20%">
					<col width="15%">
					<col width="25%">
					<col width="10%">
					<col width="10%">
				</colgroup>
				<thead>
					<tr>
						<th>#</th>
						<th>Date Created</th>
						<th>Customer Name</th>
						<th>Contact No</th>
						<th>Address</th>
						<th>Model No</th>
						<th>Description</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$i = 1;
					$where = '';
					if($_SESSION['login_type'] == 3)
						$where .= " where t.department_id = {$_SESSION['login_department_id']} ";
					if($_SESSION['login_type'] == 3)
						$where .= " where t.customer_id = {$_SESSION['login_id']} ";
					$qry = $conn->query("SELECT t.*,concat(c.firstname,' ',c.middlename,' ',c.lastname) as cname FROM tickets t inner join customers c on c.id= t.customer_id $where order by unix_timestamp(t.date_created) desc");
					while($row= $qry->fetch_assoc()):
						$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
						unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
						$desc = strtr(html_entity_decode($row['description']),$trans);
						$desc=str_replace(array("<li>","</li>"), array("",", "), $desc);
					?>
					


					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo date("M d - Y",strtotime($row['date_created'])) ?></b></td>
						<td><b><?php echo ucwords($row['cname']) ?></b></td>
						<td><b><?php echo $row['contact'] ?></b></td>
						<td><b><?php echo $row['address'] ?></b></td>
						<td><b><?php echo $row['subject'] ?></b></td>
						
						<td><b class="truncate"><?php echo strip_tags($desc) ?></b></td>
						<td>
							<?php if($row['status'] == 0): ?>
								<span class="badge badge-primary" style="background-color:#03087B;">Pending/Open</span>
							<?php elseif($row['status'] == 1): ?>
								<span class="badge badge-Info" style="background-color:orange;">Processing</span>
							<?php elseif($row['status'] == 2): ?>
								<span class="badge badge-success">Done</span>
							<?php else: ?>
								<span class="badge badge-secondary" style="background-color:red;">Closed</span>
							<?php endif; ?>
						</td>
						<td class="text-center">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item view_ticket" href="./index.php?page=view_ticket&id=<?php echo $row['id'] ?>" data-id="<?php echo $row['id'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item" href="./index.php?page=edit_ticket&id=<?php echo $row['id'] ?>">Edit</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_ticket" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a>
		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('.delete_ticket').click(function(){
	_conf("Are you sure to delete this ticket?","delete_ticket",[$(this).attr('data-id')])
	})
	})
	function delete_ticket($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_ticket',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}

		$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: ['excel', 'pdf','print']
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>

<!------Export-Report------->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>







<style>
	.badge{
		padding:10px;
		width:100%;
	}
button.btn.btn-secondary.buttons-print {
	background-color: #060068;
}
button.btn.btn-secondary.buttons-pdf.buttons-html5{
	background-color: #060068;
}
button.btn.btn-secondary.buttons-excel.buttons-html5{
	background-color: #060068;
}
</style>