
								<?php 
							ini_set('error_reporting', 0);
							if ($this->session->flashdata('notif') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Sampah Gagal !
								</div>
							<?php elseif($this->session->flashdata('notif') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Sampah Berhasil !
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
								Data Sampah
								
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
													<th class="center">Status</th>
													<th class="center">Aksi</th>
													
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($staff as $data){ ?>
												
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
														<?php 
													if($data['tgl_dikerjakan'] == NULL){ ?>
														<i class="ace-icon fa fa-times bigger-120"></i>	
													<?php }else{ ?> 
														<i class="ace-icon fa fa-check bigger-120"></i> <?php } ?>

													</td>

													<td class="center">
														<?php 
													if($data['tgl_dikerjakan'] == NULL){ ?>
														<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/sampah_petugas/tampil_edit_sampah/<?php echo $data['id']; ?>">
																<i class="halflings-icon white edit"></i>  
															</a>
															<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/sampah_petugas/hapus_sampah/<?php echo $data['id']; ?>">
																<i class="halflings-icon white trash"></i> 
													<?php }else{ ?> 
														<a type="button" disabled="true" class="btn btn-info" href="#">
																<i class="halflings-icon white edit"></i>  
															</a>
														<a disabled="true" class="btn btn-danger" href="#">
																<i class="halflings-icon white trash"></i> 
															</a> <?php } ?>
														
															
													</td>
												</tr>

												<?php } ?>

											</tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->