<?php

namespace WP_Table_Builder\Inc\Admin\Controls;

// If this file is called directly, abort the process.
use WP_Table_Builder\Inc\Admin\Managers\Controls_Manager;

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class Control_Section_Group_Collapse
 *
 * Adds a section grouping for the supplied control elements
 */
class Control_Section_Group_Collapse {

	/**
	 * Add control section group to control manager instance.
	 *
	 * @param string $section_id section id to be used as id property of the first section element
	 * @param string $section_label title for section group
	 * @param array $section_controls controls array as keys for control ids, values for control arguments
	 * @param callable $control_call function to add the section controls to control manager
	 * @param bool $open_state force section to start as opened or not
	 */
	public static function add_section( $section_id, $section_label, $section_controls, $control_call, $open_state = true ) {
		$section_controls = apply_filters( 'wp-table-builder/register-controls-section-group/' . $section_id, $section_controls, $section_id );
		$start_section_id = "${section_id}_section-group-start";
		$end_section_id   = "${section_id}_section-group-end";

		// add section start
		static::add_section_start( $section_label, $start_section_id, $open_state, $control_call );

		// add group controls
		foreach ( $section_controls as $control_id => $control_args ) {
			$control_pos = 0;
			if ( is_array( $control_args ) ) {
				if ( array_key_exists( 'control_pos', $control_args ) ) {
					$control_pos = $control_args['control_pos'];
				}
				if ( array_key_exists( 'control_args', $control_args ) ) {
					$control_args = $control_args['control_args'];
				}
			}
			call_user_func( $control_call, $control_id, $control_args, $control_pos );
		}

		// add section end
		static::add_section_end( $start_section_id, $end_section_id, $control_call );
	}

	/**
	 * Add section start control to control manager.
	 *
	 * @param string $section_label label for section start control
	 * @param string $section_id unique section id for identifying beginning of control group
	 * @param bool $open_state force section to start as opened or not
	 * @param callable $control_call function to add the section start control to control manager
	 */
	private static function add_section_start( $section_label, $section_id, $open_state, $control_call ) {
		call_user_func( $control_call, $section_id, [
			'type'      => Controls_Manager::SECTION_GROUP_COLLAPSE_START,
			'label'     => $section_label,
			'sectionId' => $section_id,
			'openState' => $open_state
		] );
	}

	/**
	 * Add section end control to control manager.
	 *
	 * @param string $start_id id of the first element of control group
	 * @param string $end_id id of the last element of control group
	 * @param callable $control_call function to add the section end to control manager
	 */
	private static function add_section_end( $start_id, $end_id, $control_call ) {
		call_user_func( $control_call, $end_id, [
			'type'    => Controls_Manager::SECTION_GROUP_COLLAPSE_END,
			'startId' => $start_id,
			'endId'   => $end_id,
		] );
	}
}
