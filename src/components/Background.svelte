<script>
	import debugImage from '../assets/images/1.png';

	export let image = debugImage;
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
