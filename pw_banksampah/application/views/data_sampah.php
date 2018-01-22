<?php 
							ini_set('error_reporting', 0);
							if ($this->session->flashdata('notif') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Sampah Gagal !
								</div>
							<?php elseif($this->session->flashdata('notif') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Sampah Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Sampah Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'gagal'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Sampah Berhasil !
								</div>
							<?php endif ?>
						<div class="page-header">
							<h1>
								Sampah
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Data Sampah
								</small>
							</h1>
						</div>
								



			<div class="row-fluid sortable center">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white leaf"></i><span class="break"></span>Sampah Yang Belum Dikelola</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content center">
						<table class="table center table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
													<th class="center">No.</th>
													<th class="center">Penyetor</th>
													<th class="center">Jenis Sampah</th>
													<th class="center">Detail</th>
													<th class="center">Berat (gr)</th>
													<th class="center">Poin</th>
													<th class="center">Aksi</th>
													
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($sampah_belum as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['penyetor']?>
													</td>

													<td class="center">
														<?php echo $data['jenis_sampah']?>
													</td>

													<td class="center">
														<?php echo $data['detail_sampah']?>
													</td>
													
													<td class="center">
														<?php echo $data['berat_sampah']?>
													</td>
													<td class="center">
														<?php echo $data['poin']?>
													</td>

													<td class="center">
														<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/sampah_admin/tampil_edit_sampah/<?php echo $data['id']; ?>">
																<i class="halflings-icon white edit"></i>  
															</a>
															<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/sampah_admin/hapus_sampah/<?php echo $data['id']; ?>">
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

				<div class="row-fluid sortable center">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white leaf"></i><span class="break"></span>Sampah Yang Sudah Dikelola Dikelola</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content center">
						<table class="table center table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
													<th class="center">No.</th>
													<th class="center">Penyetor</th>
													<th class="center">Jenis Sampah</th>
													<th class="center">Detail</th>
													<th class="center">Berat (gr)</th>
													<th class="center">Poin</th>
													<th class="center">Tanggal Dikerjakan</th>
													<th class="center">Deskripsi</th>
													<th class="center">Foto</th>
													<th class="center">Aksi</th>
													
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($sampah_sudah as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['penyetor']?>
													</td>

													<td class="center">
														<?php echo $data['jenis_sampah']?>
													</td>

													<td class="center">
														<?php echo $data['detail_sampah']?>
													</td>
													
													<td class="center">
														<?php echo $data['berat_sampah']?>
													</td>
													<td class="center">
														<?php echo $data['poin']?>
													</td>
													<td class="center">
														<?php echo $data['tgl_dikerjakan']?>
													</td>

													<td class="center">
														<?php echo $data['deskripsi']?>
													</td>
													
													<td class="center">
														<?php echo $data['foto']?>
													</td>
													<td class="center">
														<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/sampah_admin/tampil_sampah_done/<?php echo $data['id']; ?>">
																<i class="halflings-icon white edit"></i>  
															</a>
															<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/sampah_admin/hapus_sampah/<?php echo $data['id']; ?>">
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