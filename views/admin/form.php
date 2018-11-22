<section>
    <div class="lead text-success">
        <?=sprintf(lang('area:'.$this->method),$area->nombre)?>
    </div>
    <?php echo form_open();?>
        <div class="form-group">
            <label>Centro/Plantel</label>
            <?php echo form_dropdown('id_centro',array(''=>' [ Elegir ] ')+$centros,$area->id_centro,'class="form-control"');?>
        </div>
        <div class="form-group">
            <label>Área</label>
            <?php echo form_input('nombre',$area->nombre,'class="form-control"')?>
        </div>
        <div class="form-group">
            <label>Usuarios</label>
        </div>
        <div class="divider"></div>
         <div class="form-actions">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )) ?>
		 </div>
    <?php echo form_close();?>
</section>