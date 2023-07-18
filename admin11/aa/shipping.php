<?php include "header.php"; ?>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Shipping Table</h2>

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
                            <th>Name</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>Country</th>
							<th>Phone No</th>
							<th>Email</th>
							<th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
						
						<?php 
							include "connection.php";
							$qry="Select * from shipping";
							$res=mysql_query($qry);
							while($row=mysql_fetch_array($res))
							{							
						?>
						<tr>
                            <td><?php echo $row['id']; ?></td>
							<td class="center"><?php echo $row['name']; ?></td>
							<td class="center"><?php echo $row['address']; ?></td>
							<td class="center"><?php echo $row['city']; ?></td>
							<td class="center"><?php echo $row['state']; ?></td>
							<td class="center"><?php echo $row['country']; ?></td>
							<td class="center"><?php echo $row['phno']; ?></td>
							<td class="center"><?php echo $row['email']; ?></td>
                            <td class="center">
                                <a class="btn btn-danger" href="del_shipping.php?id=<?php echo $row['id']; ?>">
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