<script>
	import randomBackground from './Background.js';
	import debugImage1 from '../../assets/images/1.png';
	import debugImage2 from '../../assets/images/2.png';
	import debugImage3 from '../../assets/images/3.png';
	import debugImage4 from '../../assets/images/4.png';
	import debugImage5 from '../../assets/images/5.png';
	import debugImage6 from '../../assets/images/6.png';
	import debugImage7 from '../../assets/images/7.png';
	import debugImage8 from '../../assets/images/8.png';
	// import debugImage9 from '../../assets/images/9.jpg';

	let images = [
		debugImage1,
		debugImage2,
		debugImage3,
		debugImage4,
		debugImage5,
		debugImage6,
		debugImage7,
		debugImage8,
		// debugImage9
	];
	let index = randomBackground(images);
	let image = images[index];
	
</script>

<section id="background">
	<img src={image} alt="Mixfuckedup" />
</section>

<style>
	#background {
		position: fixed;
		top: 0;
		left: 0;
		height: 100%;
		width: 100vw;
		z-index: 0;
	}
	img {
		object-fit: cover;
	}
</style>
