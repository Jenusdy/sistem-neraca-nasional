<br><br>
<div class="container">
	<div class="col s12 m12">
		<div class="card horizontal">
			<div class="card-stacked">
				<div class="card-content">
					<h5>Output Prediksi ICOR PDB Pengeluaran Tahun <?php echo $input['tahun']; ?></h5>
					<table id="pdb-table" class="display nowrap center" style="widtd:100%">
				        <tbody>
				        	<tr>
				        		<td>Delta PDB</td>
				        		<td><?php echo $delta_produk_domestik_bruto; ?></td>
				        	</tr>
				        	<tr>
				        		<td>ICOR</td>
				        		<td><?php echo $pembentukan_modal_tetap_bruto/$nilai_tambah_pdb; ?></td>
				        	</tr>
				        	<tr>
				        		<td>Investasi (Harga Konstan)</td>
				        		<td><?php echo $delta_produk_domestik_bruto*$pembentukan_modal_tetap_bruto/$nilai_tambah_pdb; ?></td>
				        	</tr>
				        	<tr>
				        		<td>IPI tanpa inflasi</td>
				        		<td><?php echo $implicit_price_index; ?></td>
				        	</tr>
				        	<tr>
				        		<td>IPI dengan pengaruh inflasi</td>
				        		<td><?php echo $implicit_price_index_inflasi; ?></td>
				        	</tr>
				        	<tr>
				        		<td>Investasi (Harga Berlaku)</td>
				        		<td><?php echo $delta_produk_domestik_bruto*$pembentukan_modal_tetap_bruto/$nilai_tambah_pdb*$implicit_price_index_inflasi; ?></td>
				        	</tr>
				        </tbody>
				    </table>
				    <br><br>
				    <h6>Berdasarkan hasil perhitungan diatas, agar pada tahun <?php echo $input['tahun']; ?> mengalami pertumbuhan ekonomi sebesar <?php echo $input['persentase_pdb'];?>% maka diperlukan investasi sebesar Rp. <?php echo round($delta_produk_domestik_bruto*$pembentukan_modal_tetap_bruto/$nilai_tambah_pdb*$implicit_price_index_inflasi,2); ?> dengan inflasi sebesar <?php echo $input['inflasi'];?>%</h6>
				</div>
			</div>
		</div>
	</div>
</div>