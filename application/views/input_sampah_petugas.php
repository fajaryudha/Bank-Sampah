

							<?php 
							ini_set('error_reporting', 0);
							if ($notif == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Sampah Gagal !
								</div>
							<?php elseif ($notif == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Sampah Berhasil !
								</div>
							<?php endif ?>

							<div class="page-header">
							<h1>
								Input Pengumpulan Sampah
								
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form name="autoSumForm" class="form-horizontal" role="form" method="post" id="add_sampah" action="<?php echo base_url();?>index.php/sampah_petugas/simpan_sampah">
							<fieldset>
							  	<div class="control-group">
								<label class="control-label" for="selectError3">Penyetor</label>
								<div class="controls">
								  <select required id="selectError3" name="penyetor" style="width: 315px;">
												<option value="">Pilih Kelas</option>
												<?php foreach ($kelas as $key): ?>
													<option value="<?php echo $key['nama_kelas']; ?>"><?php echo $key['nama_kelas']; ?></option>
												<?php endforeach ?>
								  </select>
								</div>
								</div>
								<div class="control-group">
								<label class="control-label" for="selectError4">Posisi</label>
								<div class="controls">
								  <select id="selectError4" name="jenis_sampah" required style="width: 315px;">
									<option value="">Pilih Jenis Sampah</option>
									<option value="Organik">Organik</option>
									<option value="An-organik">An-organik</option>
								  </select>
								</div>
							 	</div>
								<div class="control-group">
									<label class=" control-label"> Detail Sampah </label>

									<div class="controls">
										<span><textarea type="text" name="detail_sampah" style="width: 300px" placeholder="Detail Sampah" required></textarea></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Berat Sampah <small>(gr)</small></label>

									<div class="controls">
										<span><input type="text" name="berat_sampah" id="berat_sampah"  style="width: 300px" onfocus="startCalc();" onblur="stopCalc();" placeholder="Berat Sampah" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Poin </label>

									<div class="controls">
										<span><input readonly type="text" value="0" name="poin"  style="width: 300px" placeholder="Poin" id="poin"/></span>	
									</div>
								</div>
							  
							  <div class="form-actions">
								<button class="btn btn-info" type="submit" name="submit"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
											&nbsp;
								<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				
			</div><!--/row-->