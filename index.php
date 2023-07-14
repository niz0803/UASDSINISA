<?php include 'header.php'; ?>
<section id="banner">

	<!-- Slider -->
	<div id="main-slider" class="flexslider">
		<ul class="slides">
			<li>
				<img src="assets2/img/slides/rs1.jpg" alt="" />
				<div class="flex-caption">
					<h3>Segar Bugar Malang</h3> 
					<p>Anda bisa mempercayai kami.</p> 

				</div>
			</li>
			<li>
				<img src="assets2/img/slides/rs2.jpg" alt="" />
				<div class="flex-caption">
					<h3>Pengaduan dan Saran</h3> 
					<p>Segala yang terbaik untuk anda.</p> 

				</div>
			</li>
		</ul>
	</div>
	<!-- end slider --> 
</section>  
<section id="content"> 
	<div class="container">

		<section class="services">
			<div class="row">
				<div class="col-md-12">
					<div class="aligncenter"><h2 class="aligncenter">SPESIALIS KAMI</h2></div>
					<br/>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 info-blocks"> 
					<i class="icon-info-blocks material-icons">track_changes</i>
					<div class="info-blocks-in">
						<h3>Bedah</h3>
						<p>Kami mengedepankan kolaborasi tim medis yang solid untuk memberikan perawatan terbaik kepada pasien kami. Spesialis bedah kami bekerja sama dengan ahli lain, termasuk anestesiologis dan perawat berpengalaman, untuk memastikan perawatan yang komprehensif dan hasil operasi yang optimal.</p>
					</div>
				</div>
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">settings_input_svideo</i>
					<div class="info-blocks-in">
						<h3>Umum</h3>
						<p>Spesialis umum kami memiliki keterampilan komunikasi yang baik dan mampu membantu pasien memahami kondisi mereka serta prosedur yang akan dilakukan. Mereka mengutamakan hubungan yang saling percaya dan memastikan pasien merasa didengar dan terlibat dalam perawatan mereka</p>
					</div>
				</div>
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">queue_music</i>
					<div class="info-blocks-in">
						<h3>Jantung</h3>
						<p>Kami berkomitmen untuk memberikan perawatan jantung yang holistik kepada pasien kami. Spesialis jantung kami tidak hanya fokus pada pengobatan kondisi jantung, tetapi juga memberikan perhatian khusus pada pencegahan, manajemen, dan mendukung perubahan gaya hidup sehat</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">my_location</i>
					<div class="info-blocks-in">
						<h3>Dermatology</h3>
						<p>Kami berkomitmen untuk memberikan diagnosis yang tepat dan pengobatan kulit yang efektif kepada pasien kami. Spesialis dermatologi kami menggunakan metode diagnostik terkini dan memiliki pengetahuan mendalam tentang perawatan kulit yang inovatif</p>
					</div>
				</div>
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">shuffle</i>
					<div class="info-blocks-in">
						<h3>Kandungan</h3>
						<p>Kami mengutamakan perawatan pranatal yang terkoordinasi dan memberikan perhatian penuh terhadap kesehatan ibu hamil dan bayi yang dikandungnya. Spesialis kandungan kami melibatkan pemantauan pertumbuhan janin, konseling nutrisi, serta memberikan dukungan pasca kelahiran untuk memastikan kesejahteraan ibu dan bayi</p>
					</div>
				</div>
				<div class="col-sm-4 info-blocks">
					<i class="icon-info-blocks material-icons">tab_unselected</i>
					<div class="info-blocks-in">
						<h3>Anak</h3>
						<p>kami menawarkan perawatan kesehatan yang komprehensif untuk anak-anak dari bayi hingga remaja. Mereka memiliki pengetahuan mendalam tentang perkembangan anak dan berkomitmen untuk memberikan perawatan yang sesuai dengan kebutuhan khusus anak-anak.</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>

<section class="dishes">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">ARTIKEL</h2></div>
				<br/>
			</div>
		</div>

		<div class="row service-v1 margin-bottom-40">

			<?php 
			$artikel = mysqli_query($koneksi,"select * from posting order by posting_id desc limit 3");
			while($a = mysqli_fetch_array($artikel)){
				?>
				<div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
						<div class="card-image">
							<img class="img-responsive" src="images/posting/<?php echo $a['posting_sampul']; ?>" alt="">  
							<span class="card-title"><a href="single.php?id=<?php echo $a['posting_id']; ?>"><?php echo $a['posting_judul']; ?></a></span>
						</div>
						<div class="card-content">
							<p>
								<?php echo substr($a['posting_konten'], 0,200) ?>	
							</p>
						</div>
					</div>        
				</div>
				<?php 
			}
			?>
		</div>
	</div>
</section>
<section class="section-padding gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>Tentang Kami</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="about-text">
					<p>Kami dengan bangga memperkenalkan Aplikasi Pengaduan Pasien, sebuah platform inovatif yang dirancang khusus untuk memastikan kepuasan dan kenyamanan Anda sebagai pasien. Dalam perjalanan Anda menuju pemulihan dan perawatan yang berkualitas, kami menghargai setiap masukan, saran, atau keluhan yang Anda miliki. Aplikasi ini memungkinkan Anda untuk mengungkapkan pengalaman Anda secara langsung kepada kami, memberikan peluang bagi kami untuk meningkatkan layanan kami secara berkelanjutan.</p>
					<p>Kami berkomitmen untuk memberikan pengalaman perawatan yang terbaik dan membangun hubungan yang erat dengan Anda sebagai pasien. Dengan Aplikasi Pengaduan Pasien, kami mengundang Anda untuk menjadi mitra dalam perjalanan perawatan Anda. Bersama-sama, kita dapat menciptakan lingkungan yang lebih baik, di mana suara Anda didengar, pengalaman Anda dihargai, dan kebutuhan Anda terpenuhi.</p>

				
					<a href="tentang.php" class="btn btn-primary waves-effect waves-dark">Learn More</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="about-image">
					<img src="assets2/img/tentang.jpeg" alt="About Images">
				</div>
			</div>
		</div>
	</div>
</section>	  

<?php include 'footer.php'; ?>