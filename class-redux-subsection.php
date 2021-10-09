<?php
// Subsection Field.
defined( 'ABSPATH' ) || exit;

// Don't duplicate me!
if ( ! class_exists( 'Redux_Subsection', false ) ) {

	// Main Redux_subsection class
	class Redux_Subsection extends Redux_Field {

		// Field Render Function.
		public function render() {
			echo '</td></tr></table>';
            if (!empty($this->field['subtitle'])){
                echo '<h2 style="margin: -41px -20px -1px -20px;">'.$this->field['subtitle'].'</h2>';
            }
			echo '<table class="form-table no-border"><tbody><tr><th></th><td>';
		}
	}
}
class_alias( 'Redux_Subsection', 'ReduxFramework_Subsection' );
