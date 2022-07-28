<footer class="footer">

<!-- WIDGETS ZONE START -->

	<div class="columns">
		<div class="column is-centered">
			<?php include "widgets/footer_left.widget"; ?>
		</div>
		<div class="column is-centered">
			<?php include "widgets/footer_center.widget"; ?>
		</div>
		<div class="column is-centered">
			<?php include "widgets/footer_right.widget"; ?>
		</div>
	</div>

<!-- WIDGETS ZONE END -->

<!-- COPYRIGHTS START -->

	<div class="content has-text-centered">
		<? echo $text_footer_copyright; ?>
	</div>

<!-- COPYRIGHTS END -->

</footer>
<script src="<? echo $assetsDir; ?>/js/script.js"></script>
</body>
</html>