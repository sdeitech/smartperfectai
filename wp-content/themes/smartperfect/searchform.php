<?php
/**
 * Template for displaying search forms in Smartdata New theme
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>


<form role="search" method="get" class="search-form" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
	<div class="container d-flex">
		<label for="<?php echo $unique_id; ?>">
			<span class="screen-reader-text"><?php echo _x( '', 'label', 'twentyseventeen' ); ?></span>
		</label>
		<input type="search"  id='search-text' class="search-field demooooooo" onkeyup="fetch()" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" required/>
		<button type="submit" id='search-button' class="search-submit">
			<svg id="searchNow" width="30" height="30" data-name="Search Now" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 490 490"><title>seach</title><path d="M495,466.2,377.2,348.4A205.77,205.77,0,0,0,424,217.5C424,103.5,331.5,11,217.5,11S11,103.5,11,217.5,103.4,424,217.5,424a205.41,205.41,0,0,0,130.8-46.7L466.1,495A20.4,20.4,0,0,0,495,466.2ZM217.5,382.9C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52,383,126.3,383,217.5,308.7,382.9,217.5,382.9Z" transform="translate(-11 -11)"/></svg></button>
	</div>
</form>
