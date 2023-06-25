<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Youtube Thumbnail Downloader online - Download YouTube Thumbnail</title>
	<link rel="icon" href="<?=base_url('assets/images/website-logo.png')?>" size="16x16 32x32" type="image/png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<style>
	input[type=text]
	{
		font-size:20px;
		padding:20px;
		font-family:arial;
	}
	input[type=text]:focus
	{
		outline:none;
		box-shadow:none;
		border-color:lightgray;
	}
	
</style>
</head>
<body>
	<?php
	include('includes/header.php');
	?>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 my-4 text-center">
	<h1 class="font-weight-bold">Youtube Thumbnail Download</h1>
	<p class="">Download thumbnails from youtube for free</p>
<form action="" method="post" autocomplete="off" onsubmit="return fun()">
	<div class="input-group mb-3">
  <input type="url" class="search-box form-control form-control-lg small" id="search_box" name="url" placeholder="Paste your youtube video link here" style="border-right:0;">
  <div class="input-group-append">
  <span class="input-group-text bg-white"><i class="fa-solid fa-xmark text-primary exe" style="border-left:0;display:none;"></i></span>
    <input class="btn btn-success" name="get_thumbnail" type="submit" value="Get Thumbnail" id="g_t">
  </div>
</div>
</form>
<script type="text/javascript">
</script>
</div>
</div>
</div>
<div class="container">
<div class="row mt-3 mb-5">
<div class="col-md-8">
<?php
if(isset($image_loc))
{
	?>
	<img src="<?=$image_loc?>" style="width:100%;height:400px;" class="img-fluid">
	

</div>
<div class="col-md-4">
<p class=" text-justify font-weight-bold">
Click the Download button to save the YouTube thumbnail image on your device in .jpg format.
</p>
<a href="sddefault.jpg" download="youtube downloader <?=date('Y:m:d h:i:sa')?>"><img src="<?=base_url('assets/images/download.png')?>" class="img-fluid"></a>
</div>
</div>

</div>

<?php
}
?>
</div>
<div class="container" style="margin-top:250px;">
<div class="row my-5">
<div class="col-md-12 my-3">
	<h2 class="text-center font-weight-bold">How to Quickly Download a YouTube Thumbnail</h2>
	<p class="text-center my-3">A free programme that allows you to quickly download any YouTube thumbnail.</p>
</div>
<div class="col-md-4 p-3">
<center><i class="fa-solid fa-plus" style="font-size:35px;"></i>
<h5 class="font-weight-bold small">Add YouTube Video URL</h5>
<p class="small">Just add the YouTube video URL in the corresponding field.</p>
</center>
</div>

<div class="col-md-4 p-3">
<center><i class="fa-solid fa-arrow-right" style="font-size:35px;"></i>
<h6 class="font-weight-bold">Auto-Generate</h6>
<p class="small">The YouTube video thumbnail will be generated automatically as soon as you add the URL.</p>
</center>
</div>

<div class="col-md-4 p-3">
<center><i class="fa-solid fa-cloud-arrow-down" style="font-size:35px;"></i>
<h6 class="font-weight-bold">Download</h6>
<p class="small">Hit the Download button to store the YouTube thumbnail image on your device in .JPG format.</p>
</center>
</div>

</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p style='color:red;'>
			<?php if(isset($error)) { echo "<script>alert('$error');</script>"; } ?>
            </p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="my-5 text-center">About YouTube Thumbnail Downloader</h1>
		</div>
		<div class="col-md-6">
			<h5 class="font-weight-normal" style="word-spacing:5px;line-height:30px;">
			The video thumbnail that’s attached to the video on such platforms as YouTube is the face of the video and can play an important role in a user's decision to click on it Very often you might need the thumbnail of a video separately for a variety of uses: to make a collage of different video thumbnails for your blog post, design a cover image for your channel using various video thumbnails, use it in a social media post in case it’s not generated automatically, and so on.
            </h5>
        </div>
		<div class="col-md-6">
			<img src="<?=base_url('assets/images/youtube.png')?>" class="img-fluid">
		</div>
	</div>
</div>

</div>
</div>
<div class="text-white py-4 px-4 mt-5" style="background-color:black;">
<p class="mt-2">
Notice: This website is not officially associated with Youtube. It does not host or entertain any pirated or copyrighted content on its server and all uploaded videos are directly saved from their CDN servers.
</p>
</div>
<script type="text/javascript">
	$(document).ready(function(){
$(".search-box").keyup(function(){
if($(this).val()=="")
{
	$(".exe").css("display","none");
}
else
{
$(".exe").css("display","block");
}
});
$(".exe").click(function(){
$("#search_box").val("");
$(".exe").css("display","none");
});
	});
</script>
</body>
</html>
