<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				 <p><span><?php echo date('Y') ?> © Copyright SBMa Todos os direitos reservados</span> </p>
                                       <p> 	Lab. de Malacologia, PHLC - sala 525/2 - UERJ<br />
					Rua S Francisco Xavier, 524	<br />
					Maracanã, Rio de Janeiro<br />
					RJ, 20550900,<br />
					Rio de Janeiro, RJ, BRASIL 
            </p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>