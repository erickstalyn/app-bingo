<template>
    <div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-10">
                    <div class="cmp-tb-hd">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                <h1>Bingo</h1>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 text-right">
                                <button class="btn btn-primary notika-btn-primary">Nuevo</button>
                                <button class="btn btn-danger notika-btn-danger">Report PDF</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Estado de juego</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Habilitado</option>
                                    <option>Inhabilitado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Estado de las bolillas</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Vacíos</option>
                                    <option>Llenos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Estado de venta</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Vendido</option>
                                    <option>Sin vender</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Buscar</h2>
                            </div>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>E. Juego</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Todos</option>
                                    <option>Habilitado</option>
                                    <option>Deshabilitado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>E. Venta</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Todos</option>
                                    <option>Vendidas</option>
                                    <option>Sin vender</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>E. Bolillas</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Todos</option>
                                    <option>Vacías</option>
                                    <option>LLenas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Buscar</h2>
                            </div>
                            <div class="form-group">
                                <div class="nk-int-st search-input search-overt">
                                    <input type="text" class="form-control" placeholder="Por código o persona" />
                                    <button class="btn search-ib">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <!-- <div class="basic-tb-hd" style="border:1px solid red">
                    </div> -->
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>E. Juego</th>
                                    <th>E. Bolillas</th>
                                    <th>E. Venta</th>
                                    <th>Responsable</th>
                                    <th>Jugador</th>
                                    <th>F. Venta</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RE729N34</td>
                                    <td>Habilitado</td>
                                    <td>Lleno</td>
                                    <td>Sin vender</td>
                                    <td>Oscar Melendez Perez</td>
                                    <td>Sofía Morales Quiroz</td>
                                    <td>-</td>
                                    <td>
                                        <button class="btn btn-info info-icon-notika"><i class="notika-icon notika-eye"></i></button>
                                        <button class="btn btn-warning warning-icon-notika"><i class="notika-icon notika-draft"></i></button>
                                        <button class="btn btn-success success-icon-notika"><i class="notika-icon notika-checked"></i></button>
                                        <button class="btn btn-danger danger-icon-notika"><i class="notika-icon notika-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>J482M47</td>
                                    <td>Deshabilitado</td>
                                    <td>Vacío</td>
                                    <td>Vendido</td>
                                    <td>Oscar Melendez</td>
                                    <td>María Guitierrez Cespedes</td>
                                    <td>18/10/2020</td>
                                    <td>
                                        <button class="btn btn-info info-icon-notika"><i class="notika-icon notika-eye"></i></button>
                                        <button class="btn btn-warning warning-icon-notika"><i class="notika-icon notika-draft"></i></button>
                                        <button class="btn btn-success success-icon-notika"><i class="notika-icon notika-checked"></i></button>
                                        <button class="btn btn-danger danger-icon-notika"><i class="notika-icon notika-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>J482M47</td>
                                    <td>Deshabilitado</td>
                                    <td>Vacío</td>
                                    <td>Vendido</td>
                                    <td>Oscar Melendez</td>
                                    <td>María Guitierrez Cespedes</td>
                                    <td>19/10/2020</td>
                                    <td>
                                        <button class="btn btn-info info-icon-notika"><i class="notika-icon notika-eye"></i></button>
                                        <button class="btn btn-warning warning-icon-notika"><i class="notika-icon notika-draft"></i></button>
                                        <button class="btn btn-success success-icon-notika"><i class="notika-icon notika-checked"></i></button>
                                        <button class="btn btn-danger danger-icon-notika"><i class="notika-icon notika-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RE729N34</td>
                                    <td>Habilitado</td>
                                    <td>Lleno</td>
                                    <td>Sin vender</td>
                                    <td>Oscar Melendez Perez</td>
                                    <td>Sofía Morales Quiroz</td>
                                    <td>-</td>
                                    <td>
                                        <button class="btn btn-info info-icon-notika"><i class="notika-icon notika-eye"></i></button>
                                        <button class="btn btn-warning warning-icon-notika"><i class="notika-icon notika-draft"></i></button>
                                        <button class="btn btn-success success-icon-notika"><i class="notika-icon notika-checked"></i></button>
                                        <button class="btn btn-danger danger-icon-notika"><i class="notika-icon notika-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination-inbox">
                        <ul class="wizard-nav-ac">
                            <li><a class="btn" href="#"><i class="notika-icon notika-back"></i></a></li>
                            <li class="active"><a class="btn" href="#">1</a></li>
                            <li><a class="btn" href="#">2</a></li>
                            <li><a class="btn" href="#">3</a></li>
                            <li><a class="btn" href="#"><i class="notika-icon notika-next-pro"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
    export default {
        data() {
            return {
                
            }
        },
        methods: {
        },
        mounted() {
        }
    }
</script>
