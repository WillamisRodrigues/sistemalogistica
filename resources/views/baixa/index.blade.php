@extends('template.app')
@section('titulo','Baixa | Logistica')
@section('baixa','active')
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
                  <h3 class="mb-0">Baixa de Materiais</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                    <th scope="col">Matricula</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Ação</th>
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