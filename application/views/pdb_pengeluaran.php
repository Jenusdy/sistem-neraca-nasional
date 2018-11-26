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
         <h5>PDB Pengeluaran Indonesia Atas Dasar Harga Konstan (Rp Milyar) </h5>
         <div class="table-wrapper">
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
     			echo "<td>".$value->impor_barangjasa."</td></tr>";
		     	} ?>
	        </tbody>
	      </table>
        </div>
        <div class="row">
        	<div class="col l12 left">
				<a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Generate Output</a>   
				<a href="<?php echo base_url('home/input_data_pdb_pengeluaran');?>" class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Tambah data</a>
			</div>
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