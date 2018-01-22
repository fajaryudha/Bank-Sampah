<div class="page-header">
							<h1>
								Sampah
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Data Sampah Yang Sudah Dikelola
								</small>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Edit 
								</small>
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form name="autoSumForm" class="form-horizontal" role="form" method="post" id="add_sampah" action="<?php echo base_url();?>index.php/sampah_admin/edit_sampah_done">
							<fieldset>
								<div class="control-group">
							  	<label class="control-label" for="selectError3">Penyetor</label>
								<input type="hidden" name="id" value="<?php echo $key->id; ?>">
								<div class="controls">
								  <select required id="selectError3" name="penyetor" style="width: 315px;">
													<option value="<?php echo $key->penyetor ?>"><?php echo $key->penyetor ?></option>
												<?php foreach ($kelas as $tampil): ?>
													<option value="<?php echo $tampil['nama_kelas']; ?>"><?php echo $tampil['nama_kelas']; ?></option>
												<?php endforeach ?>
								  </select>
								</div>
								</div>
								<div class="control-group">
								<label class="control-label" for="selectError4">Jenis Sampah</label>
								<div class="controls">
								  <select id="selectError4" name="jenis_sampah" required style="width: 315px;">
									<option value="<?php echo $key->jenis_sampah ?>"><?php echo $key->jenis_sampah ?></option>
									<option value="Organik">Organik</option>
									<option value="An-organik">An-organik</option>
								  </select>
								</div>
							 	</div>
								<div class="control-group">
									<label class=" control-label"> Detail Sampah </label>

									<div class="controls">
										<span><textarea  type="text" name="detail_sampah" style="width: 300px" placeholder="Detail Sampah" value="<?php echo $key->detail_sampah; ?>"><?php echo $key->detail_sampah; ?></textarea></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Berat Sampah</label>

									<div class="controls">
										<span><input type="text" name="berat_sampah" id="berat_sampah"  style="width: 300px" value="<?php echo $key->berat_sampah; ?>"" placeholder="Berat Sampah" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Poin </label>

									<div class="controls">
										<span><input readonly type="text" value="<?php echo $key->poin; ?>" name="poin"  style="width: 300px" placeholder="Poin" id="poin"/></span>	
									</div>
								</div>
								<div class="control-group">
							  		<label class="control-label" for="date01">Tanggal Dikerjakan</label>
							 	 <div class="controls">
									<input type="text" value="<?php echo $key->tgl_dikerjakan; ?>"  style="width: 300px" class="input-xlarge datepicker" id="date01" placeholder="Tanggal Dikerjakan" name="tgl_dikerjakan">
							 	</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Deskripsi </label>

									<div class="controls">
										<span><textarea type="text" name="deskripsi" style="width: 300px"  placeholder="Deskripsi" ><?php echo $key->deskripsi; ?></textarea></span>	
									</div>
								</div>
							  <div class="control-group">
										<label class="col-sm-3 control-label no-padding-right">Foto</label>

										<div class="controls">
										<input multiple="" type="file" id="id-input-file-3" value=""<?php echo $key->foto; ?>"" name="foto" />
										
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