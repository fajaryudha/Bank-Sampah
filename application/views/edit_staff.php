
							<div class="page-header">
							<h1>
								Staff
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Data Staff
								</small>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Edit 
								</small>
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form class="form-horizontal" role="form" method="post" id="add_staff" action="<?php echo base_url();?>index.php/staff/updates_staff">
							<fieldset>
							  	<div class="control-group">
									<label class=" control-label"> NIS </label>

									<div class="controls">
										<input type="hidden" name="id" value="<?php echo $key->id; ?>">

										<span><input type="text" name="nis" style="width: 300px" placeholder="NIS" value="<?php echo $key->nis; ?>" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Nama </label>

									<div class="controls">
										<span><input type="text" name="nama" style="width: 300px" placeholder="Nama" value="<?php echo $key->nama; ?>" required/></span>	
									</div>
								</div>
								<div class="control-group">
								<label class="control-label" for="selectError3">Kelas</label>
								<div class="controls">
								  <select id="selectError3" name="kelas" style="width: 315px;" >
												<option value="<?php echo $key->kelas; ?>"><?php echo $key->kelas; ?></option>
												<?php foreach ($kelas as $tampil): ?>
													<option value="<?php echo $tampil['nama_kelas']; ?>"><?php echo $tampil['nama_kelas']; ?></option>
												<?php endforeach ?>
								  </select>
								</div>
							 	</div>
							 	<div class="control-group">
								<label class="control-label" for="selectError4">Posisi</label>
								<div class="controls">
								  <select id="selectError4" name="posisi" style="width: 315px;" >
									<option value="<?php echo $key->posisi; ?>"><?php echo $key->posisi; ?></option>
									<option value="Petugas">Petugas</option>
									<option value="Pengelola">Pengelola</option>
								  </select>
								</div>
							 	</div>
								<div class="control-group">
									<label class=" control-label"> Username </label>

									<div class="controls">
										<span><input type="text" name="username" value="<?php echo $key->username; ?>"  style="width: 300px" placeholder="Username" required /></span>	
									</div>
								</div>
								<div class="control-group">
									<label class=" control-label"> Password </label>

									<div class="controls">
										<span><input type="text"  name="password" value="<?php echo $key->password; ?>" style="width: 300px" placeholder="Password" required /></span>	
									</div>
								</div>
							  
							  <div class="form-actions">
								<button class="btn btn-info" type="submit" name="submit"><i class="ace-icon fa fa-check bigger-110"></i>Update</button>
											&nbsp;
								<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				
			</div><!--/row-->