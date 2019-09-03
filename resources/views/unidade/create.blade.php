@extends('template.app')
@section('titulo','Adicionar Unidade | Logistica')
@section('unidades','active')
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
                  <h3 class="mb-0">Adicionar Unidade </h3>
                </div>
                <div class="col-6 text-right">
                  <a href="/unidades" class="btn btn- btn-primary">Lista Unidades</a>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Unidade:</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">UF:</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Cidade:</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Cod. Sophia:</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <button class="btn btn-success ">Adicionar Unidade</button>
              </form>
            </div>
          </div>
        </div>      
      </div>
@endsection