
								<?php 
							ini_set('error_reporting', 0);
							if ($this->session->flashdata('notif') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Input Pengelolaan Sampah Gagal !
								</div>
							<?php elseif($this->session->flashdata('notif') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Input Pengelolaan Sampah Berhasil !
								</div>
							
							<?php endif ?>
						<div class="page-header">
							<h1>
								Input Hasil Pengolaan
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
													<th class="center">Berat</th>
													<th class="center">Poin</th>
													<th class="center">Kelola</th>
													
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
														<div class="hidden-sm hidden-xs btn-group">
															<a class="btn btn-success" href="<?php echo base_url(); ?>index.php/sampah_pengelola/tampil_kelola_sampah/<?php echo $data['id']; ?>">
															<i class="halflings-icon white flag"></i>                              
															</a>
														
														</div>
													</td>
												</tr>

												<?php } ?>

											</tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->