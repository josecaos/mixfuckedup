<script>
	import favicon from '../assets/images/favicon.ico';
	import Background from '../components/Background.svelte';
	import Header from '../components/General/Header.svelte';
	import Footer from '../components/General/Footer.svelte';
	import './global.css';
</script>

<svelte:head>
	<title>Mixfuckedup</title>
	<meta name="description" content="Sitio ....." />
	<!--  -->
	<link rel="icon" type="image/ico" href={favicon} />
</svelte:head>

<div class="app">
	<Header />

	<main>
		<Background />
		<slot />
	</main>

	<Footer />
</div>

<style>
	.app {
		min-height: 100vh;
	}
	main {
		display: flex;
		flex-direction: column;
		height: 100%;
		width: 100%;
	}
</style>
