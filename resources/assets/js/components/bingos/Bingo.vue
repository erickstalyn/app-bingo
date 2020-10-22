<template>
    <div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-50">
                    <div class="cmp-tb-hd">
                        <h1>Bingos</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-7">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Buscar</h2>
                            </div>
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" placeholder="Buscar por código o persona">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
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
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
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
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
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
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Basic Example</h2>
                        <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Thor Walton</td>
                                    <td>Developer</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2013/08/11</td>
                                    <td>$98,540</td>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/07/07</td>
                                    <td>$87,500</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
    export default {
        methods: {
        },
        mounted() {
        }
    }
</script>
