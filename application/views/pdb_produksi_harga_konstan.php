<div class="container" style="margin-top:30px;">
	<div class="col s12">
		<h4 class="grey-text text-darken-3">Data PDB Berdasarkan Kegiatan Ekonomi</h4>
	</div>
	<div class="col s12">
		<div class="card white">
			<div class="card-content">
				<span class="card-title light-green-text text-darken-3"><i class="fas fa-table"></i> PDB Produksi Indonesia Atas Dasar Harga Konstan (Rp Milyar)</span>
				<hr>
				<table id="pdb-table" style="width:100%">
	        <thead>
	          <tr>
              <th>Tahun</th>
              <th>A</th>
              <th>B</th>
              <th>C</th>
              <th>D</th>
              <th>E</th>
              <th>F</th>
              <th>G</th>
              <th>H</th>
              <th>I</th>
              <th>J</th>
              <th>K</th>
              <th>L</th>
              <th>M,N</th>
              <th>O</th>
              <th>P</th>
              <th>Q</th>
              <th>R,S,T,U</th>
            	<th>Pajak atas subsidi</th>
	          </tr>
	        </thead>
	        <tbody>
	          <?php foreach ($pdb_produksi_konstan as $key => $value) {
		     			echo "<tr><td>".$value->tahun."</td>";
		     			echo "<td>".$value->pertanian."</td>";
		     			echo "<td>".$value->pertambangan."</td>";
		     			echo "<td>".$value->industri_pengolahan."</td>";
		     			echo "<td>".$value->listrik_gas."</td>";
		     			echo "<td>".$value->air."</td>";
		     			echo "<td>".$value->konstruksi."</td>";
		     			echo "<td>".$value->perdagangan."</td>";
		     			echo "<td>".$value->transportasi_pergudangan."</td>";
		     			echo "<td>".$value->akomodasi_makanminum."</td>";
		     			echo "<td>".$value->informasi_komunikasi."</td>";
		     			echo "<td>".$value->jasa_keuangan."</td>";
		     			echo "<td>".$value->real_estate."</td>";
		     			echo "<td>".$value->jasa_perusahaan."</td>";
		     			echo "<td>".$value->administrasi_pemerintahan."</td>";
		     			echo "<td>".$value->jasa_pendidikan."</td>";
		     			echo "<td>".$value->jasa_kesehatan."</td>";
		     			echo "<td>".$value->jasa_lainnya."</td>";
		     			echo "<td>".$value->pajak_subsidi."</td></tr>";
			     	} ?>
	        </tbody>
	      </table>
			</div>
			<div>
				<div id='container'></div>
			</div>
			<div class="grey lighten-4 card-action">
				<a href="<?php echo base_url('home/output_pdb_produksi_harga_konstan');?>" class="light-green waves-effect waves-light btn"><i class="far fa-newspaper right"></i>Generate Output</a>
				<a href="<?php echo base_url('home/input_data_pdb_produksi_harga_konstan');?>" class="light-green waves-effect waves-light btn"><i class="fas fa-plus right"></i>Tambah data</a>
				<a href="#modal_keterangan" class="modal-trigger right light-green waves-effect waves-light btn"><i class="fas fa-info-circle right"></i>Keterangan</a>
			</div>
		</div>
	</div>
	<div id="modal_keterangan" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4 class="light-green-text text-darken-3"><i class="fas fa-info-circle"></i> Keterangan</h4>
			<table class="striped">
				<thead>
					<tr>
							<th>Kode</th>
							<th>Kegiatan Ekonomi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>A</td>
						<td>Pertanian, Kehutanan, dan Perikanan</td>
					</tr>
					<tr>
						<td>B</td>
						<td>Pertambangan dan Penggalian</td>
					</tr>
					<tr>
						<td>C</td>
						<td>Industri Pengolahan</td>
					</tr>
					<tr>
						<td>D</td>
						<td>Pengadaan Listrik dan Gas</td>
					</tr>
					<tr>
						<td>E</td>
						<td>Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang</td>
					</tr>
					<tr>
						<td>F</td>
						<td>Konstruksi</td>
					</tr>
					<tr>
						<td>G</td>
						<td>Perdagangan Besar dan Eceran; Reparasi Mobil dan Sepeda Motor</td>
					</tr>
					<tr>
						<td>H</td>
						<td>Transportasi dan Pergudangan</td>
					</tr>
					<tr>
						<td>I</td>
						<td>Penyediaan Akomodasi dan Makan Minum</td>
					</tr>
					<tr>
						<td>J</td>
						<td>Informasi dan Komunikasi</td>
					</tr>
					<tr>
						<td>K</td>
						<td>Jasa Keuangan dan Asuransi</td>
					</tr>
					<tr>
						<td>L</td>
						<td>Real Estat</td>
					</tr>
					<tr>
						<td>M,N</td>
						<td>Jasa Perusahaan</td>
					</tr>
					<tr>
						<td>O</td>
						<td>Administrasi Pemerintahan, Pertahanan, dan Jaminan Sosial Wajib</td>
					</tr>
					<tr>
						<td>P</td>
						<td>Jasa Pendidikan</td>
					</tr>
					<tr>
						<td>Q</td>
						<td>Jasa Kesehatan dan Kegiatan Sosial</td>
					</tr>
					<tr>
						<td>R,S,T,U</td>
						<td>Jasa Lainnya</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close waves-effect waves-white red btn">Tutup</a>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.modal').modal();
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

<script src="https://code.highcharts.com/modules/oldie.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script type="text/javascript">
	Highcharts.chart('container', {
  data: {
    table: 'pdb-table'
  },
  chart: {
    type: 'line'
  },
  title: {
    text: 'Grafik PDB Produksi Indonesia Atas Dasar Harga Konstan (Rp Milyar)'
  },
  xAxis: {
    type: 'category',
    labels: {
      rotation: -45,
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  },
  yAxis: {
    allowDecimals: true,
    title: {
      text: 'Units'
    }
  },
  tooltip: {
    formatter: function () {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});
</script>
