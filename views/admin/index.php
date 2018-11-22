<section ng-controller="IndexCtrl">
<?php echo form_open(null ,'class="form-inline" ') ?>
            
                <h4>Filtros</h4>
                <br>
                <div class="form-group col-md-4">
                    <?=form_dropdown('f_centro',array(''=>' [ Todos los centros/planteles ] ')+$centros,null,'class="form-control" ng-model="search.escuela" ')?>
                </div>
                <div class="form-group col-md-3">
                    <label>Activos</label>
                    
                    <?=form_dropdown(null,array(''=>' [ Todos ] ','0'=>'No','1'=>'Si'),null,'class="form-control" ng-model="search.activo" ')?>
                </div>
                <div class="form-group col-md-3">
                    
                    <?php echo form_input(null, '', 'style="width: 100%;" class="form-control" placeholder="Buscar por palabras claves" ng-model="search.$" ') ?>
                </div>
    
                
                
<?php echo form_close() ?>

        <div class="row col-md-12">

            <hr />
            <table class="table">
                <thead>
                    <tr>
                        <th width="10%">ID Alum</th>
                        <th>Centro/Plantel</th> 
                        <th>Matricula</th> 
                        <th>Nombre</th>    
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>

                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="alumno in alumnos | filter:search:strict|limitTo:20 " ng-class="{'danger':alumno.activo == '0',}" >
                        <td>{{alumno.id_alum}}</td>
                        <td>{{alumno.escuela}}</td>
                        <td>{{alumno.matricula}}</td>
                        <td>{{alumno.nombre}}</td>
                        <td>{{alumno.apellido_paterno}}</td>
                        <td>{{alumno.apellido_materno}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
</section>