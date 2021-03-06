<div class="container" style="margin-top:30px;">
	<div class="col s12">
		<div class="card white">
			<div class="card-content">
				<span class="card-title light-green-text text-darken-3"><i class="fas fa-table"></i> PDB Pengeluaran Indonesia Atas Dasar Harga Konstan (Rp Milyar)</span>
				<hr>
				<table id="pdb-table" class="display nowrap" style="width:100%">
	        <thead>
	          <tr>
							<th>Tahun</th>
							<th>Pengeluaran Konsumsi Rumah Tangga</th>
							<th>Pengeluaran Konsumsi LNPRT</th>
							<th>Pengeluaran Konsumsi Pemerintahan </th>
							<th>Pembentukan Modal Tetap Domestik Bruto </th>
							<th>Perubahan Inventori</th>
							<th>Ekspor Barang dan Jasa </th>
							<th>Dikurangi Impor Barang dan Jasa </th>
							<th>Diskrepansi Statistik</th>
	          </tr>
	        </thead>
	        <tbody>
	          <?php foreach ($pdb_pengeluaran as $key => $value) {
		     			echo "<tr><td>".$value->tahun."</td>";
		     			echo "<td>".$value->konsumsi_ruta."</td>";
		     			echo "<td>".$value->konsumsi_LNPRT ."</td>";
		     			echo "<td>".$value->konsumsi_pemerintahan."</td>";
		     			echo "<td>".$value->pmtb_bruto."</td>";
		     			echo "<td>".$value->perubahan_inventori."</td>";
		     			echo "<td>".$value->ekspor_barangjasa."</td>";
		     			echo "<td>".$value->impor_barangjasa."</td>";
		     			echo "<td>".$value->diskrepansi_statistik1."</td></tr>";
			     	} ?>
	        </tbody>
	      </table>
			</div>
			<div class="grey lighten-4 card-action">
				<a href="<?php echo base_url('home/input_pdb_pengeluaran_investasi');?>" class="light-green waves-effect waves-light btn"><i class="fas fa-chart-line right"></i>Prediksi Investasi/ICOR</a>
				<a href="<?php echo base_url('home/input_data_pdb_pengeluaran');?>" class="light-green waves-effect waves-light btn"><i class="fas fa-plus right"></i>Tambah data</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#pdb-table').DataTable( {
			"scrollX": true,
			"ordering": false,
			"searching": false,
			fixedColumns: {
				leftColumns: 1
			},
			"drawCallback": function( settings ) {
				var id_table = this.attr('id');
				var table = $('#'+id_table);
				var wrapper_table = $('#'+id_table+'_wrapper').css({margin:'0',width:'100%'});
				wrapper_table.find('.dataTables_scroll').css('padding-top','10px');
				var prev_btn_table = $('#'+id_table+'_previous');
				prev_btn_table.addClass('btn-small waves-effect waves-light green');
				prev_btn_table.removeClass('paginate_button');
				prev_btn_table.css('margin-right','3px');
				prev_btn_table.css('margin-bottom','6px');
				var next_btn_table = $('#'+id_table+'_next');
				next_btn_table.addClass('btn-small waves-effect waves-light green');
				next_btn_table.removeClass('paginate_button');
				next_btn_table.css('margin-left','3px');
				next_btn_table.css('margin-bottom','6px');
				var page_current_btn_table = wrapper_table.find('.paginate_button.current');
				page_current_btn_table.addClass('btn-small waves-effect waves-light green');
				page_current_btn_table.removeClass('paginate_button');
				page_current_btn_table.css('margin','0 3px');
				page_current_btn_table.css('margin-bottom','6px');
				var page_btn_table = wrapper_table.find('.paginate_button');
				page_btn_table.addClass('btn-small waves-effect waves-light green lighten-3');
				page_btn_table.removeClass('paginate_button');
				page_btn_table.css('margin','0 3px');
				page_btn_table.css('margin-bottom','6px');
				var label_table = wrapper_table.find('label');
				label_table.addClass('black-text');
				var info_table = $('#'+id_table+'_info');
				info_table.addClass('black-text');
				var thead_th_table = wrapper_table.find('thead').find('th');
				thead_th_table.addClass('light-green white-text center-align');
				thead_th_table.css('border-radius','0');
				var tbody_td_table = table.find('tbody').find('td');
				tbody_td_table.addClass('black-text center-align');
				tbody_td_table.css({'border-bottom':'1px black solid','border-radius':'0'})
				var tbody_tr_table = table.find('tbody').find('tr');
				wrapper_table.find('.DTFC_LeftBodyWrapper').css('top','8px');
				wrapper_table.find('.DTFC_LeftBodyLiner').css('top','1px');
				wrapper_table.find('.DTFC_LeftHeadWrapper').css('top','10px');
				wrapper_table.find('.odd').addClass('grey lighten-4');
				wrapper_table.find('select').formSelect();
				wrapper_table.find('.select-dropdown.dropdown-trigger').css({
					'color' : 'black',
					'border-bottom' : '1px solid #4caf50'
				});
				$('#'+id_table+'_filter').find('input').css({
					'color' : 'black',
					'margin' : '0',
					'border-bottom' : '1px solid #4caf50'
				});
				$('#'+id_table+'_length').find('svg').css({
					'fill' : 'black'
				})
			}
		});
	});
</script>
