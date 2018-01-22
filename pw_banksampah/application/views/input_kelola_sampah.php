<div class="page-header">
							<h1>
								Sampah
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Pengelolaan Sampah
								</small>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Input
								</small>
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form name="autoSumForm" class="form-horizontal" role="form" method="post" id="add_sampah" action="<?php echo base_url();?>index.php/sampah_admin/input_kelola_sampah">
							<fieldset>
							  	<div class="control-group">
								<label class="control-label" for="selectError3">Penyetor</label>
								<input type="hidden" name="id" value="<?php echo $key->id; ?>">
								<div class="controls">
								 <span><input type="text" name="nis" style="width: 300px" placeholder="NIS" value="<?php echo $key->penyetor; ?>" disabled="true" required /></span>		
								</div>
								</div>
								<div class="control-group">
								<label class="control-label" for="selectError3">Jenis Sampah</label>
								<div class="controls">
								 <span><input type="text" name="nis" style="width: 300px" placeholder="NIS" value="<?php echo $key->jenis_sampah; ?>" disabled="true" required /></span>		
								</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Detail Sampah </label>

									<div class="controls">
										<span><textarea disabled="true" type="text" name="detail_sampah" style="width: 300px" placeholder="Detail Sampah" value="<?php echo $key->detail_sampah; ?>"><?php echo $key->detail_sampah; ?></textarea></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Berat Sampah</label>

									<div class="controls">
										<span><input disabled="true" type="text" name="berat_sampah" id="berat_sampah"  style="width: 300px" value="<?php echo $key->berat_sampah; ?>"" placeholder="Berat Sampah" required /></span>	
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
									<input type="text"  style="width: 300px" class="input-xlarge datepicker" id="date01" placeholder="Tanggal Dikerjakan" name="tgl_dikerjakan">
							 	</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Deskripsi </label>

									<div class="controls">
										<span><textarea type="text" name="deskripsi" style="width: 300px" placeholder="Deskripsi" ></textarea></span>	
									</div>
								</div>
							  <div class="control-group">
										<label class="col-sm-3 control-label no-padding-right">Foto</label>

										<div class="controls">
										<input multiple="" type="file" id="id-input-file-3" name="foto" />
										
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