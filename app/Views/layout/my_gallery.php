<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">
    <base href="<?php echo base_url('assets') ?>/">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/daterangepicker.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-U7I4r7KKtbz3TGyyIe3PyEX69Fb8ziCrR8Ydg2fu4GN3dHlIxJLr6N6ckpvmiY8J" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6Vrj1QToadfQT7E/R5PYpSHk9xjI9em5A" crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/c0c79d4e21.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-CpM/2l2Q5I6dSZ9LcVl2pA5t/qTXz5XKfzj9IgK1AT5hvqysv21poiiAfbZhJ+6mrLFEso5O1GDMIf3w/ydEjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-+ItiZKDvLaW3OgJPIhB4mwzR5ypkEyr3Rc3Upz8JbF8vWnJJ5AC6CBnLWx5LzF4dlcXb0DvNepwQwvd8zyj27Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<title>E-Gallery</title>
</head>

<body>


	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav" style="background-color: #6998ab;">
		<div class="container">
			<div class="site-navigation">
				<a href="<?= base_url('Home/dashboard')?>" class="logo m-0" style="text-decoration: none;">E-Gallery <span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
<?php  if(session()->get('id')>0) { ?>
					<li><a href="<?= base_url('Home/dashboard')?>"><b>Home</b></a></li>
					<li class="active"><a href="<?= base_url('My_Gallery')?>"><b>My Gallery</b></a></li>
					<li><a href="<?= base_url('LogOut')?>"><b>Log-Out</b></a></li>
<?php }else{} ?>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>

	<div class="untree_co-section">
		<div class="container"><br>
		<h2 class="section-MyGallery text-center" data-aos="fade" data-aos-delay="50">My Gallery</h2>
		<style>
		  .section-MyGallery:before {
		    content: "";
		    position: absolute;
		    left: 50%; /* Center the line relative to the container */
		    bottom: 0;
		    width: 30px;
		    height: 2px;
		    background: #1A374D;
		    transform: translateX(-50%); /* Adjust to center the line properly */
		  }
		</style>
		<br>
		<!-- Add Images Modal -->
		<button class="btn btn-success custom-button float-right mr-2" style="cursor: pointer;" data-toggle="modal" data-target="#upload_image">
		  <i id="commentIcon" class="fa-solid fa-camera"></i> Add Images
		</button>

		<div class="modal fade" id="upload_image" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="commentModalLabel">Are you sure want to add image?</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form id="imageForm" class="form-horizontal form-label-left" novalidate enctype="multipart/form-data" action="<?= base_url('My_Gallery/image')?>" method="post">

		          <div class="row">
		            <div class="mb-3 col-md-6">
								    <label class="control-label col-12">Upload Images<span style="color: red;"> :</span></label>
								    <div class="input-group">
								        <div class="custom-file">
								            <input type="file" class="custom-file-input" id="gallery" name="gallery" accept="image/*" onchange="displayFileName()">
								            <label class="custom-file-label" for="gallery" id="fileLabel">Choose file</label>
								        </div>
								        <div class="input-group-append">
								            <span class="input-group-text" id="inputGroupFileAddon"><i class="fa-solid fa-upload"></i></span>
								        </div>
								    </div>
								    <small class="form-text text-muted">Select an image with a maximum size of 748 x 1023 pixels.</small>
								</div>

								<script>
								function displayFileName() {
								    var input = document.getElementById('gallery');
								    var label = document.getElementById('fileLabel');
								    
								    label.textContent = input.files[0].name;
								}
								</script>
		            <script>
		              function validateImage() {
		                var fileInput = document.getElementById('gallery');
		                var files = fileInput.files;

		                if (files.length > 0) {
		                  var img = new Image();
		                  img.src = window.URL.createObjectURL(files[0]);

		                  img.onload = function() {
		                    var maxWidth = 748;
		                    var maxHeight = 1023;

		                    if (img.width > maxWidth || img.height > maxHeight) {
		                      alert('Maximum image dimensions allowed: 748 x 1023');
		                      fileInput.value = ''; // Clear the file input
		                    }
		                  };
		                }
		              }
		            </script>
		            <div class="mb-3 col-md-6">
		              <label class="form-label">Category Images<span style="color: black;"> :</span></label>
		              <input type="text" id="kategori" name="kategori" class="form-control text-capitalize col-12" placeholder="Category Images" maxlength="15">
		            </div>
		            <div class="mb-3 col-md-6">
		              <label class="form-label">Images Name<span style="color: black;"> :</span></label>
		              <input type="text" id="nama_gallery" name="nama_gallery" class="form-control text-capitalize col-12" placeholder="Images Name" maxlength="15">
		            </div>
		            <div class="mb-3 col-md-6">
		              <label class="form-label">Chose Your Album<span style="color: black;"> :</span></label>
									<select name="id_album" class="form-control text-capitalize" id="id_album" required>
									    <option>Choose Your Album</option>
									    <?php foreach ($data as $album) {?>
									        <option class="text-capitalize" value="<?php echo $album->id_album ?>"><?php echo $album->nama_album ?></option>
									    <?php } ?>
									</select>
		            </div>
		          </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" id="submitButtonImages" class="btn btn-success">Yes, Add the Images</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>

		<!-- Add Album Modal -->
		<button class="btn btn-success custom-button float-right mr-2" style="cursor: pointer;" data-toggle="modal" data-target="#upload_album">
		  <i id="commentIcon" class="fa-solid fa-images"></i> Add Album
		</button>

		<div class="modal fade" id="upload_album" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-md" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="commentModalLabel">Are you sure want to add album?</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form id="albumForm" class="form-horizontal form-label-left" novalidate enctype="multipart/form-data" action="<?= base_url('My_Gallery/album')?>" method="post">

		          <div class="row">
		            <div class="mb-6 col-md-12">
		              <label class="form-label">Album Name<span style="color: black;"> :</span></label>
		              <input type="text" id="nama_album" name="nama_album" class="form-control text-capitalize" placeholder="Album Name" maxlength="15">
		            </div>
		          </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" id="submitButtonAlbum" class="btn btn-success">Yes, Add the album</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>

			<div class="row justify-content-center text-center mb-5">
			</div><br>

			<div class="row">

      <?php foreach ($data as $album): ?>		
			<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
			    <div class="media-1 position-relative">
			        <div class="dropdown position-absolute top-0 end-0">
			            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                <i class="fa-solid fa-compact-disc"></i>
			            </button>
			            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			                <a class="dropdown-item" href="<?= base_url('/My_Gallery/delete_album/'.$album->id_album)?>">Delete</a>
			            </div>
			        </div>
			        <a class="d-block mb-3" href="<?= base_url('My_Gallery/our_gallery/'.$album->id_album)?>">
			            <img src="images/cover_album.jpg" alt="Image" class="img-fluid">
			        </a>
			        <div class="d-flex align-items-center">
			            <div>
			                <h3 class="text-capitalize"><?php echo $album->nama_album ?></h3>
			            </div>
			        </div>
			    </div>
			</div>
      <?php endforeach; ?>

			</div><br>
			<style>
			.col-lg-3 {
			  flex: 0 0 25%;
			  max-width: 25%;
			}

			@media (max-width: 768px) {
			  .col-lg-3 {
			    flex: 0 0 100%;
			    max-width: 100%;
			  }
			}
			</style>

		</div>
	</div>

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>

	<script src="js/typed.js"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["To The Fullest."," Journey Together."," Relive The Memories.", " Experience."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="js/custom.js"></script>

</body>

</html>
<style>
	*::-webkit-scrollbar {
	display: none;
}        
</style>
<script>
  AOS.init();
</script>
