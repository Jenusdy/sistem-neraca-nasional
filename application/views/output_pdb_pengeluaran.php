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
					<div class="table-wrapper">
						<table id="pdb-table-pertama" class="display nowrap" style="width:100%">
							<h4>Tabel PDB Pengeluaran</h4>
							<thead>
								<tr>
									<th>Tahun</th>
									<th>Nilai Tambah</th> 
									<th>Pajak dikurangi subsidi atas produk</th>
									<th>Produk Domestik Bruto (PDB)</th>
									<!-- <th>Pertumbuhan Ekonomi</th> -->
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>A</th>
									<th>A</th>
									<th>A</th>
									<th>A</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
	    $('#pdb-table-pertama').DataTable( {
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