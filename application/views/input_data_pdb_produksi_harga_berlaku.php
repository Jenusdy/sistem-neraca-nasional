<div class="container" style="margin-top:30px;">
	<div class="row">
		<div class="col s12">
			<div class="card white">
				<div class="card-content">
					<span class="card-title light-green-text text-darken-3"><i class="fas fa-pen"></i> Input data PDB Produksi Harga Berlaku</span>
					<hr>
					<div class="row" style="margin:0">
						<form class="col s12" method="POST" action="<?php echo base_url('home/insert_data_pdb_produksi_harga_berlaku');?>" style="margin:0; padding:0;">
							<div class="row" style="margin:0">
								<div class="input-field col s12">
									<input placeholder="2015" id="tahun" name="tahun" type="text" class="validate">
									<label for="tahun">Tahun</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colA" name="colA" type="text" class="validate">
									<label for="colA">Pertanian, Kehutanan dan Perikanan</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colB" name="colB" type="text" class="validate">
									<label for="colB">Pertambangan dan Penggalian</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colC" name="colC" type="text" class="validate">
									<label for="colC">Industri Pengolahan</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colD" name="colD" type="text" class="validate">
									<label for="colD">Pengadaan listrik dan Gas</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colE" name="colE" type="text" class="validate">
									<label for="colE">Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colF" name="colF" type="text" class="validate">
									<label for="colF">Konstruksi</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colG" name="colG" type="text" class="validate">
									<label for="colG">Perdagangan Besar dan Eceran; Reparasi Mobil dan Sepeda Motor</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colH" name="colH" type="text" class="validate">
									<label for="colH">Transportasi dan Pergudangan</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colI" name="colI" type="text" class="validate">
									<label for="colI">Penyediaan Akomodasi dan Makan Minum</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colJ" name="colJ" type="text" class="validate">
									<label for="colJ">Informasi dan Komunikasi</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colK" name="colK" type="text" class="validate">
									<label for="colK">Jasa Keuangan dan Asuransi</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colL" name="colL" type="text" class="validate">
									<label for="colL">Real Estate</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colM" name="colM" type="text" class="validate">
									<label for="colM">Jasa Perusahaan</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colO" name="colO" type="text" class="validate">
									<label for="colO">Administrasi Pemerintah, Pertanahan, dan Jaminan Sosial Wajib</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colP" name="colP" type="text" class="validate">
									<label for="colP">Jasa Pendidikan</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colQ" name="colQ" type="text" class="validate">
									<label for="colQ">Jasa Kesehatan dan Kegiatan Sosial</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="colR" name="colR" type="text" class="validate">
									<label for="colR">Jasa Lainnya</label>
								</div>
								<div class="input-field col s6">
									<input placeholder="dalam Rp milyar, contoh: 72592.1" id="pajak_subsidi" name="pajak_subsidi" type="text" class="validate">
									<label for="pajak_subsidi">Pajak Subsidi</label>
								</div>
								<div class="input-field col s12">
									<button class="waves-effect waves-light btn right light-green"><i class="fas fa-check right"></i>submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
   		<?php
   		if($this->session->flashdata('status_insert_data_berhasil')){
   			echo 'swal("Berhasil!", "Input data berhasil dilakukan", "success")';
   		}
   		if($this->session->flashdata('status_insert_data_gagal')){
   			echo 'swal("Gagal!", "Terjadi kesalahan dalam input data", "error")';
   		}
   		if($this->session->flashdata('status_data_sudah_ada')){
   			echo 'swal("Gagal!", "Data pada tahun tersebut sudah ada didalam database","error")';
   		}
   		?>
	});
</script>
