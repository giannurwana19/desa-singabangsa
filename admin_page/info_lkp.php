	<?php
		$query = mysqli_query($conn,"SELECT
  `informasi`.`id_info`,
  `informasi`.`id_kategori`,
  `informasi`.`judul`,
  `informasi`.`headline`,
  `informasi`.`tgl_post`,
  `informasi`.`isi`,
  `informasi`.`status`,
  `informasi`.`foto`,
  `informasi`.`id_pegawai`,
  `informasi`.`id_jurnalis`,
  `jurnalis`.`nm_jurnalis`,
  `kategori`.`nm_kategori`,
  `pegawai`.`nm_pegawai`
FROM
  `informasi`
  INNER JOIN `jurnalis` ON `jurnalis`.`id_jurnalis` = `informasi`.`id_jurnalis`
  INNER JOIN `kategori` ON `kategori`.`id_kategori` = `informasi`.`id_kategori`
  INNER JOIN `pegawai` ON `pegawai`.`id_pegawai` = `informasi`.`id_pegawai`
  WHERE id_info='".$_GET['id']."'");
		$result = mysqli_fetch_array($query);
	?>
	
	
	
	<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Berita Lengkap</h1>
				
			</div>
		</div><!--/.row-->
		
		
		<div class="panel panel-container">
		
			
			<div class="panel panel-default articles">
					<div class="panel-heading">
						ID Informasi <b><?php echo $_GET['id'];?></b>
						
						</div>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										
										
									</div>
									
									<div class="col-xs-2 col-md-10date">
										<?php echo "<img class='img-fluid rounded' width='700px' height='400px' src='../images/".$result['foto']."'";?>
										
									</div>							
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End-->
						
						
						<hr width="100%">
						
						
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<p>Judul:</p>
										
									</div>
									
									<div class="col-xs-2 col-md-10date">
										<p><?php echo $result['judul'];?></p>
										
									</div>									
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End-->
						
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<p>Kategori:</p>
										
									</div>
									
									<div class="col-xs-2 col-md-10date">
										<p>(<?php echo $result['id_kategori'];?>)</p>-<p>(<?php echo $result['nm_kategori'];?>)</p>
										
									</div>									
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End-->
						
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<p>Headline:</p>
										
									</div>
									
									<div class="col-xs-2 col-md-10date">
										<p><?php echo $result['headline'];?></p>
										
									</div>									
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End-->
						
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<p>Tanggal Posting:</p>
										
									</div>
									
									<div class="col-xs-10 col-md-10">
										<p><?php echo $result['tgl_post'];?></p>
										
									</div>									
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End-->
						
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<p>Isi:</p>
										
									</div>
									
									<div class="col-xs-10 col-md-10">
										<form>
											<p><?php echo $result['isi'];?></p>
										</form>
									</div>									
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End-->
						
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<p>Status:</p>
										
									</div>
									
									<div class="col-xs-2 col-md-10date">
										<p><b><?php echo $result['status'];?></b></p>
										
									</div>									
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End-->
						
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<p>Jurnalis:</p>
										
									</div>
									
									<div class="col-xs-2 col-md-10date">
										<p>(<?php echo $result['id_jurnalis'];?>)</p>-<p>(<?php echo $result['nm_jurnalis'];?>)</p>
										
									</div>									
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<p>Dipublish oleh:</p>
										
									</div>
									
									<div class="col-xs-2 col-md-10date">
										<p>(<?php echo $result['id_pegawai'];?>)</p>-<p>(<?php echo $result['nm_pegawai'];?>)</p>
										
									</div>									
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<!--End-->
						
					</div>
				</div><!--End .articles-->