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
							<h4>Tabel Output PDB dan Pertumbuhan Ekonomi</h4>
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
								<?php foreach ($pdb_harga_konstan as $key => $value) {
									echo "<tr><td>".$value->tahun."</td>";
									echo "<td>".$value->nilai_tambah."</td>";
									echo "<td>".$value->pajak_subsidi."</td>";
									echo "<td>".$value->produk_domestik_bruto."</td>";
									// if($value->pertumbuhan_ekonomi){
									// 	echo "<td>".$value->pertumbuhan_ekonomi."%</td></tr>";	
									// }else{
									// 	echo "<td>".$value->pertumbuhan_ekonomi."</td></tr>";
									// }
									
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


		<div class="card horizontal">
      		<div class="card-stacked">
        		<div class="card-content">
         			<div class="table-wrapper">
	      				<table id="pdb-table-kedua" class="display nowrap" style="width:100%">
	      					<h4>Tabel Pertumbuhan Ekonomi Perlapangan Usaha Harga Konstan</h4>
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
					              <th>PDB</th>
					          </tr>
					        </thead>

	        				<tbody>
	        				  <?php for ($i=0; $i < sizeof($pdb_harga_konstan); $i++) { 
	        				  	if($i!=0){
	        				  		echo "<tr><td>".$pdb_harga_konstan[$i]->tahun."</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->pertanian/$pdb_harga_konstan[$i-1]->pertanian)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->pertambangan/$pdb_harga_konstan[$i-1]->pertambangan)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->industri_pengolahan/$pdb_harga_konstan[$i-1]->industri_pengolahan)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->listrik_gas/$pdb_harga_konstan[$i-1]->listrik_gas)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->air/$pdb_harga_konstan[$i-1]->air)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->konstruksi/$pdb_harga_konstan[$i-1]->konstruksi)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->perdagangan/$pdb_harga_konstan[$i-1]->perdagangan)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->transportasi_pergudangan/$pdb_harga_konstan[$i-1]->transportasi_pergudangan)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->akomodasi_makanminum/$pdb_harga_konstan[$i-1]->akomodasi_makanminum)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->informasi_komunikasi/$pdb_harga_konstan[$i-1]->informasi_komunikasi)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->jasa_keuangan/$pdb_harga_konstan[$i-1]->jasa_keuangan)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->real_estate/$pdb_harga_konstan[$i-1]->real_estate)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->jasa_perusahaan/$pdb_harga_konstan[$i-1]->jasa_perusahaan)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->administrasi_pemerintahan/$pdb_harga_konstan[$i-1]->administrasi_pemerintahan)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->jasa_pendidikan/$pdb_harga_konstan[$i-1]->jasa_pendidikan)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->jasa_kesehatan/$pdb_harga_konstan[$i-1]->jasa_kesehatan)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->jasa_lainnya/$pdb_harga_konstan[$i-1]->jasa_lainnya)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->pajak_subsidi/$pdb_harga_konstan[$i-1]->pajak_subsidi)-1)*100),2)."%</td>";
					     			echo "<td>".round(((($pdb_harga_konstan[$i]->produk_domestik_bruto/$pdb_harga_konstan[$i-1]->produk_domestik_bruto))),2)."%</td></tr>";
	        				  	}
	        				  } 
	        				  ?>
					          
	        				</tbody>
	      				</table>
       				</div>
				</div>
			</div>
		</div>

		<div class="card horizontal">
      		<div class="card-stacked">
        		<div class="card-content">
         			<div class="table-wrapper">
	      				<table id="pdb-table-ketiga" class="display nowrap" style="width:100%">
	      					<h4>Tabel Share Output Ekonomi Perlapangan Usaha Harga Konstan</h4>
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
				              	  <th>Nilai tambah</th>
				              	  <th>Pajak atas subsidi</th>
					              <th>PDB</th>
					          </tr>
					        </thead>

	        				<tbody>
	        				  <?php for ($i=0; $i < sizeof($pdb_harga_konstan); $i++) { 
	        				  	echo "<tr><td>".$pdb_harga_konstan[$i]->tahun."</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->pertanian/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->pertambangan/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->industri_pengolahan/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->listrik_gas/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->air/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->konstruksi/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->perdagangan/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->transportasi_pergudangan/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->akomodasi_makanminum/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->informasi_komunikasi/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->jasa_keuangan/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->real_estate/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->jasa_perusahaan/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->administrasi_pemerintahan/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->jasa_pendidikan/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->jasa_kesehatan/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->jasa_lainnya/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->nilai_tambah/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->pajak_subsidi/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td>";
				     			echo "<td>".round((($pdb_harga_konstan[$i]->produk_domestik_bruto/$pdb_harga_konstan[$i]->produk_domestik_bruto)*100),2)."%</td></tr>";
	        				  } 
	        				  ?>
					          
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

	    $('#pdb-table-kedua').DataTable( {
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

	    $('#pdb-table-ketiga').DataTable( {
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