<?php include "header.php"; ?>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Payment Table</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Card No</th>
							<th>Card Type</th>
							<th>Expiry Date</th>
							<th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
						
						<?php 
							include "connection.php";
							$qry="Select * from payment";
							$res=mysql_query($qry);
							while($row=mysql_fetch_array($res))
							{							
						?>
						<tr>
                            <td><?php echo $row['id']; ?></td>
							<td class="center"><?php echo $row['card_no']; ?></td>
							<td class="center"><?php echo $row['card_type']; ?></td>
							<td class="center"><?php echo $row['e_date']; ?></td>
							<td class="center">
                                <a class="btn btn-danger" href="del_payment.php?id=<?php echo $row['id']; ?>">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
						</tr>
						<?php }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
<?php include "footer.php"; ?>