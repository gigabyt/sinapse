<?php $render('header');?>
<div class="container py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark">
                <li class="breadcrumb-item "><a href="#">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Atividades</li>
                <li class="breadcrumb-item active text-white" aria-current="page">Modulo 1</li>
                <li class="breadcrumb-item active text-white" aria-current="page">Resolução</li>
            </ol>
        </nav>
        <div class="container-table">
            <div class="card">
                <div class="card-header">
                    Atividade
                </div>
                <div class="card-body">
                    <h5 class="card-title">Agenda de Contato - Página Inicial</h5>
                    <p class="card-text">Montar pagina inicial em php</p>
                    <a href="#" class="btn btn-secondary">Visualizar</a>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    Resolução
                </div>
                <div class="row">
                    <div class="form-container col-md-5">
                        <form class="p-3">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Quanto vale a?</label>
                                    <input type="text" class="form-control" id="a">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Quanto vale b?</label>
                                    <input type="text" class="form-control" id="a">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Quanto vale c?</label>
                                    <input type="text" class="form-control" id="a">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-block">Calcular</button>
                        </form>
                    </div>
                    <div class="form-container col-md-6">
                        
                    </div>
                </div>
            </div>


        </div>

    </div>
<?php $render('footer');?>