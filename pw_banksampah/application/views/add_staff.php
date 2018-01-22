

							<?php 
							ini_set('error_reporting', 0);
							if ($notif == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Data Staff Gagal !
								</div>
							<?php elseif ($notif == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Data Staff Berhasil !
								</div>
							<?php endif ?>

							<div class="page-header">
							<h1>
								Staff
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Input Staff
								</small>
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form class="form-horizontal" role="form" method="post" id="add_staff" action="<?php echo base_url();?>index.php/staff/add_staff">
							<fieldset>
							  	<div class="control-group">
									<label class=" control-label"> NIS </label>

									<div class="controls">
										<span><input type="text" name="nis" style="width: 300px" placeholder="NIS" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Nama </label>

									<div class="controls">
										<span><input type="text" name="nama" style="width: 300px" placeholder="Nama" required/></span>	
									</div>
								</div>
								<div class="control-group">
								<label class="control-label" for="selectError3">Kelas</label>
								<div class="controls">
								  <select required id="selectError3" name="kelas" style="width: 315px;">
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
								  <select id="selectError4" name="posisi" required style="width: 315px;">
									<option value="">Pilih Posisi</option>
									<option value="Petugas">Petugas</option>
									<option value="Pengelola">Pengelola</option>
								  </select>
								</div>
							 	</div>
								<div class="control-group">
									<label class=" control-label"> Username </label>

									<div class="controls">
										<span><input type="text" name="username"  style="width: 300px" placeholder="Username" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Password </label>

									<div class="controls">
										<span><input type="text"  name="password" style="width: 300px" placeholder="Password" required /></span>	
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