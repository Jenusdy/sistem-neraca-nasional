<style type="text/css">
	div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
</style>
<br><br>
<div class="container">
	<div class="col s12 m12">
		<div class="card horizontal">
			<div class="card-stacked">
				<div class="card-content">
					<h5>Prediksi Investasi Data</h5>
					<div class="row">
					    <form class="col s12" method="POST" action="<?php echo base_url('home/prediksi_pdb_pengeluaran');?>">
					    	<div class="input-field col s12">
								<input id="tahun" name="tahun" type="text" placeholder="2015" class="validate">
								<label for="tahun">Tahun</label>
							</div>
							<div class="input-field col s12">
								<input id="persentase_pdb" name="persentase_pdb" placeholder="misal 7.2" type="text" class="validate">
								<label for="persentase_pdb">Persentase Kenaikan PDB</label>
							</div>
							<div class="input-field col s12">
								<input id="inflasi" placeholder="5.3" name="inflasi" type="text" class="validate">
								<label for="inflasi">Inflasi</label>
							</div>
							<button class="waves-effect waves-light btn right"><i class="material-icons right">cloud</i>Hitung</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
