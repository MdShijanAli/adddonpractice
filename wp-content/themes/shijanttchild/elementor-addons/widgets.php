<?php
class Shijan_Team_Members extends \Elementor\Widget_Base {

	public function get_name() {
		return 'shijan_team_members';
	}

	public function get_title() {
		return esc_html__( 'Team Members', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}



  protected function register_controls() {
    // Content Tab Start

		$this->start_controls_section(
	'content',
	[
		'label' => esc_html__( 'Content', 'elementor-addon' ),
		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
	]
);





$this->add_control(
	'list',
	[
		'label' => esc_html__( 'Repeater List', 'textdomain' ),
		'type' => \Elementor\Controls_Manager::REPEATER,
		'fields' => [
			[
				'name' => 'name',
				'label' => esc_html__( 'Name', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Md Shijan Ali' , 'textdomain' ),
				'label_block' => true,
			],

			[
				'name' => 'disignation',
				'label' => esc_html__( 'Disignation', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Md Shijan Ali' , 'textdomain' ),
				'label_block' => true,
			],

			[
				'name' => 'photo',
				'label' => esc_html__( 'Photo', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				
			],
			







	
				],
			],
		);



		$this->add_control(
			'style',
			[
				'label' => esc_html__( 'Style', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options'=>[
					'style1' => esc_html('Style 1', 'elementor-addon'),
					'style2' => esc_html('Style 2', 'elementor-addon'),
				],
			]
		);






		$this->end_controls_section();

		// Content Tab End












  }

	protected function render() {
    $settings = $this->get_settings_for_display();
		?>





<div class="shijan-team-member shijan-team-member-<?php echo $settings['style']; ?>">


  <div class="shijan-team-member-photo">
    <?php foreach($settings['list'] as $lst):  
			?>
    <?php echo wp_get_attachment_image($lst['photo']['id'], 'thumbnail'); ?>
    <?php endforeach; ?>
  </div>


  <div class="shijan-team-member-info">
    <?php foreach($settings['list'] as $lst):  
			?>
    <h3><?php echo $lst['name'] ?></h3>
    <?php endforeach; ?>



    <?php foreach($settings['list'] as $lst):  
			?>
    <p><?php echo $lst['disignation'] ?></p>
    <?php endforeach; ?>



  </div>
</div>

<?php
	}
}