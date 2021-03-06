<!-- Title area -->
<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>Edit <?php echo strtolower($ModelName)?></h5>
            <span><?php echo $this->Html->link('Index', array('action' => 'index')); ?></span>
        </div>
        <div class="middleNav">
	        <ul>
				<li class="mUser"><a href="<?php echo $settings["cms_url"].$ControllerName ?>" title="View List"><span class="list"></span></a></li>
	        </ul>
	    </div>
    </div>
</div>

<div class="line"></div>

<div class="wrapper">
	<div class="fluid">
		<div class="users form span8">
			<?php echo $this->Form->create($ModelName, array("type"=>"file",'url' => array("controller"=>$ControllerName,"action"=>"Edit"),'class' => 'form')); ?>
				<fieldset>
					<div class="widget">
						<div class="title">
							<img src="<?php echo $this->webroot ?>img/icons/dark/list.png" alt="" class="titleIcon" />
							<h6>Edit <?php echo strtolower($ModelName)?></h6>
						</div>
						
						<?php
							echo $this->Form->input('id', array('type' => 'hidden'));
							echo $this->Form->input('name', array(
								'label'			=> 'Gallery Name (*)',
								'div' 			=> 'formRow',
								'between'		=> '<div class="formRight">',
								'after' 		=> '</div>',
								'error' 		=> array('attributes' => array('wrap' => 'label', 'class' => 'formRight error')),
								'placeholder' 	=> 'Galleryy Title'
							));
						?>
						
						<?php
							echo $this->Form->input('place', array(
								'label'			=> 'Gallery Place (*)',
								'div' 			=> 'formRow',
								'between'		=> '<div class="formRight">',
								'after' 		=> '</div>',
								'error' 		=> array('attributes' => array('wrap' => 'label', 'class' => 'formRight error')),
								'placeholder' 	=> 'Gallery Place'
							));
						?>

						<?php
							echo $this->Form->input('address', array(
								'label'			=> 'Gallery Address (*)',
								'div' 			=> 'formRow',
								'between'		=> '<div class="formRight">',
								'after' 		=> '</div>',
								'error' 		=> array('attributes' => array('wrap' => 'label', 'class' => 'formRight error')),
								'placeholder' 	=> 'Gallery Address'
							));
						?>

						<?php
							echo $this->Form->input('status', array(
								'label'			=> 'Status (*)',
								'options'		=>	array('0' => 'Not Active', '1' => 'Active'),
								'value'			=>	'1',
								'div' 			=> 'formRow',
								'between'		=> '<div class="formRight">',
								'after' 		=> '</div>',
								'error' 		=> array('attributes' => array('wrap' => 'label', 'class' => 'formRight error')),
								'empty' 		=> 'Please Choose'
							));
						?>
						
						<div class="formSubmit">
							<input type="submit" value="Edit" class="redB" />
							<input type="reset" value="Reset" class="blueB"/>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>