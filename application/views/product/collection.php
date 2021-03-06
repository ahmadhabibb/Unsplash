<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/collection.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/styleAccount.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<div class="row">
            <div class="col-md-12 fixed-top" style="display: -webkit-inline-box; padding-top: 10px; background-color: white;">
                    <img class="logo-header" src="<?php echo base_url(); ?>/assets/img/logo-black.svg" alt="logo" style="padding-top:5px;"/>
                <div class="col-lg-8">
                    <input type="text" placeholder="Search free high-resolution photos" class="form-control" name="search"
                    style=" padding-left:30px; 
                            margin: 0; 
                            padding-top: 10px;
                            padding-bottom: 10px; 
                            padding-right: 0; 
                            border-radius:25px;
                            font-size: 14px;
                            height: 40px;
                            width: 1270px;">
                </div>
                <div class="col-sm-2" style="margin:0; padding:0; max-width: 350px;">
                    <ul style="padding-left:15px; display: inline-flex;" class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="<?= site_url('c_explorer/collection')?>">Collections</a></li>
                        <li><a href="<?= site_url('c_explorer/index')?>">Explore</a></li>
                    </ul>
                    <button class="fas fa-ellipsis-h btn" type="button" data-toggle="dropdown" style="margin-left:10px;"></button>
                    <ul class="dropdown-menu" style="background-color: black;">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Wallpapers</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Made with Unsplash</a></li>
                        <li><a href="#">API/Developers</a></li>
                        <li><a href="#">Hiring</a></li>
                        <li><a href="#">Licence</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>

	<!-- bagian tulisan -->
<div class="collect">
	<div>
		<h1 class="tcoll"> Collections</h1>
		<div class="tcoll2">
			<h2 class="tcoll3"> 
				Explore the world through 	collections of beautiful photos free to use under the
				<a href="<?= site_url('c_explorer/license')?>" class="lisensi">
					<br>Unsplash License
				</a>
				.
			</h2>
	</div>
</div>
<br><br>

<!-- end tulisan -->

<!-- gambar -->


<div class="kolomgambar">

 <div class="gcoll">
 	<?php foreach ($foto as $f) { ?>
 	<div class="gcoll2">
 		<div class="gcoll3">
 			<div class="gcoll4">
 				<a href="#" class="gcoll5">
 					<div class="gcoll6">
 						<!-- gambar besar -->
 						<div class="gbrcoll">
 							<img class="gbrcoll2" src="<?= base_url('assets/photoUser/') . $f['photo']?>" style="">
 						</div>
 						<!-- end gambar besar -->
 						<div class="gbkcoll">
 							<div class="gbkcoll2">
 								<img src="78161.jpg" class="gbk">
 							</div>
 							<div class="gbkcoll2">
 								<img src="78161.jpg" class="gbk">
 							</div>
 							<!-- end gambar kecil -->
 						</div>
 					</div>
 					<br>	
 					<!-- mulai judul -->
 					<div class="jgbr" >
 						<div class="jgbr2">
 							<?= $f['keyword']?>
 						</div>
 						<!-- end judul -->
 					</div>
 				</a>
 			</div>

 		</div>
 		
 	</div>
 	<?php }?>
 </div>

</div>
</div>

	 
</body>
