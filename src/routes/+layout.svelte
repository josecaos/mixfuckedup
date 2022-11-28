<script>
	import Header from '../components/General/Header.svelte';
	import Footer from '../components/General/Footer.svelte';
	import './styles.css';
</script>

<div class="app">
	<Header />

	<main>
		<slot />
	</main>

	<Footer/>
</div>

<style>
	.app {
		display: flex;
		flex-direction: column;
	}

	main {
		display: flex;
		flex-direction: column;
		width: 100%;
	}

</style>
