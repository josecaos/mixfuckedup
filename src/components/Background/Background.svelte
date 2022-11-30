<script>
	// import { Path } from 'path';
	import { paper, Raster, View } from 'paper';
	import { onMount} from 'svelte';
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

	export let images = [
		debugImage1,
		debugImage2,
		debugImage3,
		debugImage4,
		debugImage5,
		debugImage6,
		debugImage7,
		debugImage8
		// debugImage9
	];
	let index = randomBackground(images);
	let image = images[index];
	//
	let element;

	onMount(() => {
		//TODO: seguir debuggeando el objeto paper y checar si por ahi se puede lograr algo
		console.log(paper);
		// 	// Create a raster item:
		// let raster = Raster();
		// let raster = new Raster({
		// 	source: element.src,
		// 	// position: 'center'
		// });
		// let loaded = false;
		// 	//

		// raster.onLoad = function () {
		// 	loaded = true;
		// 	// onResize();
		// };
		// 	// Make the raster invisible:
		// 	raster.visible = true; //default: false
		// 	// let lastPos = view.center;

		// 	function moveHandler(event) {
		// 		if (!loaded) return;

		// 		if (lastPos.getDistance(event.point) < 1) return;
		// 		lastPos = event.point;

		// 		let size = this.bounds.size.clone();
		// 		let isLandscape = size.width > size.height;

		// 		// If the path is in landscape orientation, we're going to
		// 		// split the path horizontally, otherwise vertically:

		// 		size /= isLandscape ? [2, 1] : [1, 2];

		// 		let vector;
		// 		vector = new Path.Rectangle({
		// 			point: this.bounds.topLeft.floor(),
		// 			size: size.ceil(),
		// 			onMouseMove: moveHandler
		// 		});
		// 		vector.fillColor = raster.getAverageColor(vector);

		// 		vector = new Path.Rectangle({
		// 			point: isLandscape ? this.bounds.topCenter.ceil() : this.bounds.leftCenter.ceil(),
		// 			size: size.floor(),
		// 			onMouseMove: moveHandler
		// 		});
		// 		vector.fillColor = raster.getAverageColor(vector);

		// 		this.remove();
		// 	}
		// 	//
		// 	function onResize(event) {
		// 		if (!loaded) return;
		// 		project.activeLayer.removeChildren();

		// 		// Transform the raster so that it fills the bounding rectangle
		// 		// of the view:
		// 		raster.fitBounds(view.bounds, true);

		// 		// Create a path that fills the view, and fill it with
		// 		// the average color of the raster:
		// 		new Path.Rectangle({
		// 			rectangle: view.bounds,
		// 			fillColor: raster.getAverageColor(view.bounds),
		// 			onMouseMove: moveHandler
		// 		});
		// 	}
	});
</script>

<section id="background">
	<img src={image} alt="Mixfuckedup" bind:this={element} />
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
