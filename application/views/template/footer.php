</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
				</div>
			</footer>
		</div>
		
		
	</div>
	<!--   Core JS Files   -->
	<script src="<?= base_url(); ?>assets/template/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/template/assets/js/core/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/template/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="<?= base_url(); ?>assets/template/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="<?= base_url(); ?>assets/template/assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="<?= base_url(); ?>assets/template/assets/js/setting-demo.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios@0.21.4/dist/axios.min.js"></script>
	<!-- <script src="<?= base_url(); ?>assets/template/assets/js/demo.js"></script> -->
	<script>const base_url= '<?= base_url(); ?>';</script>
	<script>
		$("#nik").change(function(){
			if($(this).val() != '--Pilih Nik--'){
				getHistoryNik($(this).val());
			}
		});

		function getHistoryNik(nik){
			axios.get(base_url+'Laporan/pengembalian?get=' + nik)
			.then(res=>{
				const data = res.data;
				$("#id").val(data.id);
				$("#nama_pegawai").text(data.nama_pegawai);
				$("#departement").text(data.departement);
				$("#nama_barang").text(data.kategori + ' - ' + '(' + data.kode + ') ' + data.nama_barang);
			})
			.catch(err=>{
				alert(JSON.stringify(err));
			});
		}
	</script>
</body>
</html>