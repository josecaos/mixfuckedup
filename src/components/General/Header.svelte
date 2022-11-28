<script>
	import { page } from '$app/stores';
	import randomBackground from '../Background/Background.js';

	let func = randomBackground; 
</script>

<header>
	<!-- <div class="logo">
		<a href="/">
			<img src={logo} alt="mixfuckedup" />
		</a>
	</div> -->

	<nav>

		<ul>
			<li aria-current={$page.url.pathname === '/' ? 'page' : undefined}>
				<a href="/">Home</a>
			</li>
			<!-- <li aria-current={$page.url.pathname === '/about' ? 'page' : undefined}>
				<a href="/about">About</a>
			</li>
			<li aria-current={$page.url.pathname.startsWith('/sverdle') ? 'page' : undefined}>
				<a href="/sverdle">Sverdle</a>
			</li> -->
		</ul>
	</nav>

</header>

<style>
	header  {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		z-index: 10;
	}

</style>
