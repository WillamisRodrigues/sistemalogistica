@extends('template.app')
@section('titulo','Entrada & Saída | Logistica')
@section('entrada','active')
@section('conteudo')
<div class="main-content">
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center">
      <!-- Mask -->
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12  order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-5">
                  <h3 class="mb-0">Entrada de Materiais</h3>
                </div>
                <div class="col-2">
                  <form action="">
                      filtrado de:
                      <input type="date" class="form-control">
                </div>
                <div class="col-2">
                      filtrado até:
                      <input type="date" class="form-control">
                </div>
                <div class="col-2 mt-3">
                      <input type="submit" class="btn btn-success form-control" value="Filtrar">
                  </form>
                </div>
              </div>
            </div>
            <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                    <th scope="col">Unidades</th>
                    <th scope="col">QTD. UND. <br>  IMPRESSA - OPEN CG</th>
                    <th scope="col">QTD. UND. <br> WEB - OPEN CG</th>
                    <th scope="col">QTD. UND. <br> VÍDEO - OPEN CG</th>
                    <th scope="col">QTD. UND. <br> GAMER ART</th>
                    <th scope="col">QTD. UND. <br> GAMER DEV</th>
                    <th scope="col">QTD. UND. <br> GAMER UNIFICADO</th>
                    <th scope="col">DATA ALTERAÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
                </table>
            </div>
          </div>
        </div>
        <div class="col-xl-12 mt-4  order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-5">
                  <h3 class="mb-0">Saída de Meriais</h3>
                </div>
                <div class="col-2">
                  <form action="">
                      filtrado de:
                      <input type="date" class="form-control">
                </div>
                <div class="col-2">
                      filtrado até:
                      <input type="date" class="form-control">
                </div>
                <div class="col-2 mt-3">
                      <input type="submit" class="btn btn-success form-control" value="Filtrar">
                  </form>
                </div>
              </div>
            </div>
            <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                    <th scope="col">Unidades</th>
                    <th scope="col">QTD. UND. <br>  IMPRESSA - OPEN CG</th>
                    <th scope="col">QTD. UND. <br> WEB - OPEN CG</th>
                    <th scope="col">QTD. UND. <br> VÍDEO - OPEN CG</th>
                    <th scope="col">QTD. UND. <br> GAMER ART</th>
                    <th scope="col">QTD. UND. <br> GAMER DEV</th>
                    <th scope="col">QTD. UND. <br> GAMER UNIFICADO</th>
                    <th scope="col">DATA ALTERAÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
                </table>
            </div>
          </div>
        </div>
        
      </div>
@endsection