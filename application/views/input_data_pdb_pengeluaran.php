<div class="container">
	<div class="col s12 m7">
	    <div class="card horizontal">
	      	<div class="card-stacked">
		        <div class="card-content">
		        	<h3>Input data PDB Pengeluaran</h3>
		        	  <div class="row">
					    <form class="col s12" method="POST" action="<?php echo base_url('home/proses_data_pdb_pengeluaran');?>">
					      	<div class="row">
					        	<div class="input-field col s12">
					          		<input placeholder="2015" id="tahun" name="tahun" type="text" class="validate">
					          		<label for="tahun">Tahun</label>
					        	</div>

					        	<div class="input-field col s6">
					          		<input placeholder="123456789" id="konsumsi_rumah_tangga" name="konsumsi_rumah_tangga" type="text" class="validate">
					          		<label for="konsumsi_rumah_tangga">Pengeluaran Konsumsi Rumah Tangga </label>
					        	</div>
					        	<div class="input-field col s6">
					          		<input placeholder="123456789" id="konsumsi_lnprt" name="konsumsi_lnprt" type="text" class="validate">
					          		<label for="konsumsi_lnprt">Pengeluaran Konsumsi LNPRT</label>
					        	</div>
					        	<div class="input-field col s6">
					          		<input placeholder="123456789" id="konsumsi_pemerintah" name="konsumsi_pemerintah" type="text" class="validate">
					          		<label for="konsumsi_pemerintah">Pengeluaran Konsumsi Pemerintahan  </label>
					        	</div>
					        	<div class="input-field col s6">
					          		<input placeholder="123456789" id="pmtb" name="pmtb" type="text" class="validate">
					          		<label for="pmtb">Pembentukan Modal Tetap Domestik Bruto </label>
					        	</div>
					        	<div class="input-field col s6">
					          		<input placeholder="123456789" id="perubahan_inventori" name="perubahan_inventori" type="text" class="validate">
					          		<label for="perubahan_inventori">Perubahan Inventori</label>
					        	</div>
					        	<div class="input-field col s6">
					          		<input placeholder="123456789" id="eskpor_barang_jasa" name="eskpor_barang_jasa" type="text" class="validate">
					          		<label for="eskpor_barang_jasa">Ekspor Barang dan Jasa </label>
					        	</div>
					        	<div class="input-field col s6">
					          		<input placeholder="123456789" id="impor_barang_jasa" name="impor_barang_jasa" type="text" class="validate">
					          		<label for="impor_barang_jasa">Dikurangi Impor Barang dan Jasa</label>
					        	</div>
					        	<div class="input-field col s6">
					          		<input placeholder="123456789" id="diskrepansi_statistik" name="diskrepansi_statistik" type="text" class="validate">
					          		<label for="diskrepansi_statistik">Diskrepansi Statistik</label>
					        	</div>
					        	<div class="input-field col s12">
					        		<button class="waves-effect waves-light btn right"><i class="material-icons right">send</i>Submit</button>
					        	</div>
					      	</div>
					    </form>
					  </div>
		        </div>
		    </div>
		</div>
	</div>
</div>