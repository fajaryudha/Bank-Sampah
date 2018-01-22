
								<?php 
							ini_set('error_reporting', 0);
							if ($this->session->flashdata('notif') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Staff Gagal !
								</div>
							<?php elseif ($this->session->flashdata('notif') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Staff Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Staff Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'gagal'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Staff Berhasil !
								</div>
							<?php endif ?>
						<div class="page-header">
							<h1>
								Staff
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Data Staff
								</small>
							</h1>
						</div>
								


						<div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/staff" class="btn btn-info"><i class="fa fa-user-plus" aria-hidden="true"></i>Input Staff</a>
              	</div>	
              	<br>
			<div class="row-fluid sortable center">	
				
				<div class="box span12">

					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Data Staff</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content center">
						<table class="table center table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							<tr>
								<th class="center">No.</th>
								<th class="center">NIS</th>
								<th class="center">Nama</th>
								<th class="center">Kelas</th>
								<th class="center">Posisi</th>
								<th class="center">Username</th>
								<th class="center">Password</th>
								<th class="center">Aksi</th>
								
							</tr>
						</thead> 
						 <tbody class="center">
												<?php $nomor=1; foreach($staff as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['nis']?>
													</td>

													<td class="center">
														<?php echo $data['nama']?>
													</td>

													<td class="center">
														<?php echo $data['kelas']?>
													</td>
													
													<td class="center">
														<?php echo $data['posisi']?>
													</td>
													<td class="center">
														<?php echo $data['username']?>
													</td>
													<td class="center">
														<?php echo $data['password']?>
													</td>
													<td class="center">
															

															<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/staff/tampil_edit_staff/<?php echo $data['id']; ?>">
																<i class="halflings-icon white edit"></i>  
															</a>
															<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/staff/hapus_staff/<?php echo $data['id']; ?>">
																<i class="halflings-icon white trash"></i> 
															</a>
														
													</td>
												</tr>

												<?php } ?>

											</tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->