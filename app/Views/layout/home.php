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

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="<?= base_url('Home/dashboard')?>" class="logo m-0" style="text-decoration: none;">E-Gallery <span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
<?php  if(session()->get('id')>0) { ?>
					<li class="active"><a href="<?= base_url('Home/dashboard')?>"><b>Home</b></a></li>
					<li><a href="<?= base_url('My_Gallery')?>"><b>My Gallery</b></a></li>
					<li><a href="<?= base_url('LogOut')?>"><b>Log-Out</b></a></li>
<?php }else{} ?>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5"><span class="d-block">Let's Enjoy Your</span> E-Gallery, <span class="typed-words"></span></h1>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="slides">
						<img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid active">
						<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
						<img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid">
						<img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid">
						<img src="images/hero-slider-5.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="untree_co-section">
		<div class="container">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7"><h2 class="section-title text-center">Popular Image</h2></div>
			</div>

			<div class="owl-carousel owl-3-slider">

				<div class="item">
					<a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Pragser Wildsee</h3>
							<span class="location">Italy</span>
						</div>
						<img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" href="images/hero-slider-2.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Oia</h3>
							<span class="location">Greece</span>
						</div>
						<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" href="images/hero-slider-3.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Perhentian Islands</h3>
							<span class="location">Malaysia</span>
						</div>
						<img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>


				<div class="item">
					<a class="media-thumb" href="images/hero-slider-4.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Rialto Bridge</h3>
							<span class="location">Italy</span>
						</div>
						<img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" href="images/hero-slider-5.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>San Francisco, United States</h3>
							<span class="location">United States</span>
						</div>
						<img src="images/hero-slider-5.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Lake Thun</h3>
							<span class="location">Switzerland</span>
						</div>
						<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

			</div>

		</div>
	</div>

	<div class="untree_co-section" id="All_Images">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-6">
					<h2 class="section-title text-center mb-3" data-aos="fade" data-aos-delay="50">All Images</h2>
					<p data-aos="fade" data-aos-delay="100">E-Gallery is an application that allows users to upload images with their community. By facilitating users to share photos, E-Gallery creates a platform rich in creativity and visual experiences from various points of view.</p>
				</div>
			</div>
			<div class="row">

				<?php foreach ($data as $gallery): ?>
			    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
			        <div class="media-1">
			            <a class="d-block mb-3"><img class="img-gallery" src="<?= base_url('gallery/' . $gallery->gallery) ?>" alt="Image"></a>
			            <span class="d-flex align-items-center loc mb-2">
			                <span class="icon-room mr-3"></span>
			                <span class="text-capitalize"><?php echo $gallery->kategori ?></span>
			            </span>
			            <div class="d-flex align-items-center">
			                <div>
			                    <h3 class="text-capitalize"><?php echo $gallery->nama_gallery ?></h3>
			                    <div class="price ml-auto">
			                        <a href="<?= base_url('Home/like/'.$gallery->id_gallery)?>"><i class="fa-regular fa-heart" style="margin-right: 10px;"></i></a>
			                        <i id="commentIcon_<?= $gallery->id_gallery ?>" class="fa-regular fa-comment" style="margin-right: 10px; cursor: pointer;" data-toggle="modal" data-target="#commentModal_<?= $gallery->id_gallery ?>" ></i>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>

			    <form id="commentForm_<?= $gallery->id_gallery ?>" action="<?= base_url('Home/comments/'.$gallery->id_gallery)?>" method="post">
			        <div class="modal fade" id="commentModal_<?= $gallery->id_gallery ?>" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
			            <div class="modal-dialog modal-lg" role="document">
			                <div class="modal-content">
			                    <div class="modal-header">
			                        <h5 class="modal-title" id="commentModalLabel">Comment Here</h5>
			                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                            <span aria-hidden="true">&times;</span>
			                        </button>
			                    </div>
			                    <div class="modal-body chat-modal-body text-capitalize" id="chatModalBody_<?= $gallery->id_gallery ?>">

			                    </div>
			                    <div class="modal-footer">
			                        <div class="input-group">
			                            <input type="text" name="comment" id="chatInput_<?= $gallery->id_gallery ?>" class="form-control text-capitalize" placeholder="Write your message here....">
			                            <div class="input-group-append">
			                                <button type="button" class="btn btn-success" onclick="sendMessage(<?= $gallery->id_gallery ?>)">
			                                    <i class="fas fa-paper-plane"></i> 
			                                </button>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </form>
			<?php endforeach; ?>

			<style>
			    .img-gallery {
			        width: 100%;
			        height: 350px;
			        object-fit: cover;
			        display: block;
			    }

			    .chat-modal-body {
			        max-height: 300px;
			        overflow-y: auto;
			    }

			    .message {
			        margin-bottom: 15px;
			    }

			    .sender {
			        font-weight: bold;
			        color: #007bff;
			    }

			    .text {
			        margin-left: 10px;
			    }
			</style>

			<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
			<script>
			    function sendMessage() {
			        var commentText = $('#chatInput').val().trim();

			        if (commentText !== '') {
			            var userId = 'YOUR_USER_ID'; // Ganti dengan logika sebenarnya untuk mendapatkan ID pengguna dari sesi
			            var galleryId = 'YOUR_GALLERY_ID'; // Ganti dengan logika sebenarnya untuk mendapatkan ID galeri

			            var data = {
			                id_gallery_comment: galleryId,
			                comment: commentText,
			                maker_comment: userId
			            };

			            $.ajax({
			                type: 'POST',
			                url: '<?= base_url('Home/comments')?>',
			                data: data,
			                success: function (response) {
			                    // Handle the response from the server
			                    console.log(response.message);

			                    if (response.status === 'success') {
			                        // Manipulasi tampilan halaman dengan menggunakan data baru
			                        var newData = response.newData; // Gantilah ini dengan properti yang sebenarnya dari data baru

			                        // Contoh manipulasi tampilan
			                        $('#All_Images').html('Data baru: ' + newData);
			                    }
			                },
			                error: function (error) {
			                    console.error('Error menyimpan komentar:', error);
			                }
			            });
			        }
			    }
			</script>
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
