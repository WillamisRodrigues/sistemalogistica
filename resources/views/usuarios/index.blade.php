@extends('template.app')
@section('titulo','Usuários | Logistica')
@section('usuarios','active')
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
      <div class="col-md-2"></div>
        <div class="col-xl-8  order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-5">
                  <h3 class="mb-0">Usuários</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="/adicionar_usuario" class="btn btn- btn-primary">Adicionar Usuário</a>
                </div>
              </div>
            </div>
            <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
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