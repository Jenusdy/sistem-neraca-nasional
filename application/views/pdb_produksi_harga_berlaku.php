<style type="text/css">
	div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
</style>

<div class="container">
<div class="col s12 m7">
<h4 class="header">Data PDB Berdasarkan Kegiatan Ekonomi</h4>
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
         <h5>PDB Produksi Indonesia Atas Dasar Harga Berlaku (Rp Milyar) </h5>
         <div class="table-wrapper">
	      <table id="pdb-table" class="display nowrap" style="width:100%">
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
	          <?php foreach ($pdb_produksi_berlaku as $key => $value) {
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
        <div class="row">
        	<div class="col l12 left">
				<a href="<?php echo base_url('home/output_pdb_produksi_harga_berlaku');?>" class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Generate Output</a>   
				<a href="<?php echo base_url('home/input_data_pdb_produksi_harga_berlaku');?>" class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Tambah data</a>
			</div>
		</div>
        <div>
        	<h4>Keterangan</h4>
	        <span>A	-- Pertanian, Kehutanan, dan Perikanan</span><br>
			<span>B	-- Pertambangan dan Penggalian</span><br>
			<span>C	-- Industri Pengolahan</span><br>
			<span>D	-- Pengadaan Listrik dan Gas</span><br>
			<span>E	-- Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang</span><br>
			<span>F	-- Konstruksi </span><br>
			<span>G	-- Perdagangan Besar dan Eceran; Reparasi Mobil dan Sepeda Motor</span><br>
			<span>H	-- Transportasi dan Pergudangan</span><br>
			<span>I	-- Penyediaan Akomodasi dan Makan Minum</span><br>
			<span>J	-- Informasi dan Komunikasi</span><br>
			<span>K	-- Jasa Keuangan dan Asuransi</span><br>
			<span>L	-- Real Estat</span><br>
			<span>M,N -- Jasa Perusahaan </span><br>
			<span>O	-- Administrasi Pemerintahan, Pertahanan, dan Jaminan Sosial Wajib</span><br>
			<span>P	-- Jasa Pendidikan</span><br>
			<span>Q	-- Jasa Kesehatan dan Kegiatan Sosial</span><br>
			<span>R,S,T,U -- Jasa Lainnya</span><br>
		</div>
        </div>
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
	      "drawCallback": function( settings ) {
	        var id_table = this.attr('id');
	        var table = $('#'+id_table);
	        var wrapper_table = $('#'+id_table+'_wrapper');
	        var prev_btn_table = $('#'+id_table+'_previous');
	        prev_btn_table.addClass('btn-small waves-effect waves-light deep-orange lighten-2');
	        prev_btn_table.removeClass('paginate_button');
	        prev_btn_table.css('margin-right','3px');
	        prev_btn_table.css('margin-bottom','6px');
	        var next_btn_table = $('#'+id_table+'_next');
	        next_btn_table.addClass('btn-small waves-effect waves-light deep-orange lighten-2');
	        next_btn_table.removeClass('paginate_button');
	        next_btn_table.css('margin-left','3px');
	        next_btn_table.css('margin-bottom','6px');
	        var page_current_btn_table = wrapper_table.find('.paginate_button.current');
	        page_current_btn_table.addClass('btn-small waves-effect waves-light cyan darken-1');
	        page_current_btn_table.removeClass('paginate_button');
	        page_current_btn_table.css('margin','0 3px');
	        page_current_btn_table.css('margin-bottom','6px');
	        var page_btn_table = wrapper_table.find('.paginate_button');
	        page_btn_table.addClass('btn-small waves-effect waves-light brown lighten-3');
	        page_btn_table.removeClass('paginate_button');
	        page_btn_table.css('margin','0 3px');
	        page_btn_table.css('margin-bottom','6px');
	        var label_table = wrapper_table.find('label');
	        label_table.addClass('black-text');
	        var info_table = $('#'+id_table+'_info');
	        info_table.addClass('black-text');
	        var thead_th_table = table.find('thead').find('th');
	        thead_th_table.addClass('cyan darken-1');
	        thead_th_table.css('border-radius','0');
	        var tbody_td_table = table.find('tbody').find('td');
	        tbody_td_table.addClass('black-text');
	        tbody_td_table.css({'border-bottom':'1px #00e5ff solid','border-radius':'0'})
	        var tbody_tr_table = table.find('tbody').find('tr');
	        tbody_tr_table.hover(function(){
	          $(this).addClass('grey lighten-3');
	        })
	        tbody_tr_table.mouseout(function(){
	          $(this).removeClass('grey lighten-3');
	        })
	        wrapper_table.find('select').formSelect();
	        wrapper_table.find('.select-dropdown.dropdown-trigger').css({
	          'color' : 'black',
	          'border-bottom' : '1px solid white'
	        });
	        $('#'+id_table+'_filter').find('input').css({
	          'color' : 'black',
	          'margin' : '0',
	          'border-bottom' : '1px solid white'
	        });
	        $('#'+id_table+'_length').find('svg').css({
	          'fill' : 'black'
	        })
	        table.css('padding-top','20px');
	      }
	    });
	});
</script>