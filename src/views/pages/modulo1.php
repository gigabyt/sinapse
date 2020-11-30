<?php $render('header');?>
<div class="container py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark">
                <li class="breadcrumb-item "><a href="#">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Modulo 1</li>
                <li class="breadcrumb-item active text-white" aria-current="page">Atividades</li>
            </ol>
        </nav>
        <div class="table-responsive container-table">
        <table class="table table-hover bg-white">
            <thead class="bg-dark text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Mod</th>
                <th scope="col">Visualizado</th>
                <th scope="col">Concluido</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Instruções</td>
                <td>Sim</td>
                <td>Sim</td>
                <td><a class="btn btn-sm btn-outline-success" href="<?=$base;?>exercicio/equacao">Ver</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Agenda de Contato - Instruções</td>
                <td>Sim</td>
                <td>Sim</td>
                <td><a class="btn btn-sm btn-outline-success" href="3">Ver</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Agenda de Contato - Página Inicial</td>
                <td>Sim</td>
                <td>Sim</td>
                <td><a class="btn btn-sm btn-outline-success" href="atividade_resolucao.html">Ver</a></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>

<?php $render('footer');?>