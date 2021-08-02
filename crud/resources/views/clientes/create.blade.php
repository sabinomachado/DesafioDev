@extends('layouts.config')
@section('content')
    <section>
    <div class="container">
       <div class="jumbotron">
            <h1 class="display-4">Cadastro de Clientes</h1>
            <p class="lead">Cadastro simples de cliente, utilizando UF como chave estrangeira.</p>
        </div>
        
        
        <form action="{{ route('clientes.store') }}" class="form-horizontal" method="POST" enctype="multipartf/form-data">
          @csrf
        
        <div class="row">

            <div class="col-9">
                <label for="email"><b>Nome</b></label>
                <input value="{{old('nome')}}" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" type="text" name="nome" id="nome">
                @if($errors->has('nome'))
                <div class="erro {{$errors->has('nome') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('nome')}}</div>
                @endif
            </div>

            <div class="col-3">
                <label for="dt_nascimento"><b>Data de Nascimento</b></label>
                <input value="{{old('dt_nascimento')}}" type="date" class="form-control {{ $errors->has('dt_nascimento') ? 'is-invalid' : '' }}" type="date" name="dt_nascimento" id="dt_nascimento">
                @if($errors->has('dt_nascimento'))
                <div class="erro {{$errors->has('dt_nascimento') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('dt_nascimento')}}</div>
                @endif
            </div>


        </div>

        <div class="row">
            <div class="col-4">
                <label for="email"><b>Email</b></label>
                <input value="{{old('email')}}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email">
                @if($errors->has('email'))
                <div class="erro {{$errors->has('email') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('email')}}</div>
                @endif
            </div>

            <div class="col-4">
                <label for="email"><b>CPF</b></label>
                <input value="{{old('cpf')}}" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" type="text" name="cpf" id="cpf">
                @if($errors->has('cpf'))
                <div class="erro {{$errors->has('cpf') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('cpf')}}</div>
                @endif
            </div>

            <div class="col-4">
                <label for="email"><b>RG</b></label>
                <input value="{{old('rg')}}" class="form-control {{ $errors->has('rg') ? 'is-invalid' : '' }}" type="text" name="rg" id="rg">
                @if($errors->has('rg'))
                <div class="erro {{$errors->has('rg') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('rg')}}</div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="email"><b>Logradouro</b></label>
                <input value="{{old('logradouro')}}" class="form-control {{ $errors->has('logradouro') ? 'is-invalid' : '' }}" type="text" name="logradouro" id="logradouro">
                @if($errors->has('logradouro'))
                <div class="erro {{$errors->has('logradouro') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('logradouro')}}</div>
                @endif
            </div>

            <div class="col-2">
                <label for="email"><b>Número</b></label>
                <input value="{{old('numero')}}" class="form-control {{ $errors->has('numero') ? 'is-invalid' : '' }}" type="text" name="numero" id="numero">
                @if($errors->has('numero'))
                <div class="erro {{$errors->has('numero') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('numero')}}</div>
                @endif
            </div>

            <div class="col-2">
                <label for="email"><b>CEP</b></label>
                <input value="{{old('cep')}}" class="form-control {{ $errors->has('cep') ? 'is-invalid' : '' }}" type="text" name="cep" id="cep">
                @if($errors->has('cep'))
                <div class="erro {{$errors->has('cep') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('cep')}}</div>
                @endif
            </div>


            <div class="col-2">
                <label for="email"><b>Telefone</b></label>
                <input value="{{old('telefone')}}" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }}" type="text" name="telefone" id="telefone">
                @if($errors->has('telefone'))
                <div class="erro {{$errors->has('telefone') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('telefone')}}</div>
                @endif
            </div>

            <div class="col-2">
                <label for="email"><b>Celular</b></label>
                <input value="{{old('celular')}}" class="form-control {{ $errors->has('celular') ? 'is-invalid' : '' }}" type="text" name="celular" id="celular">
                @if($errors->has('celular'))
                <div class="erro {{$errors->has('celular') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('celular')}}</div>
                @endif
            </div>

        </div>

        <div class="row">
            <div class="col-3">
                <label for="email"><b>Bairro</b></label>
                <input value="{{old('bairro')}}" class="form-control {{ $errors->has('bairro') ? 'is-invalid' : '' }}" type="text" name="bairro" id="bairro">
                @if($errors->has('bairro'))
                <div class="erro {{$errors->has('bairro') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('bairro')}}</div>
                @endif
            </div>
      
            <div class="col-3">
                <label for="email"><b>Municipio</b></label>
                <input value="{{old('municipio')}}" class="form-control {{ $errors->has('municipio') ? 'is-invalid' : '' }}" type="text" name="municipio" id="municipio">
                @if($errors->has('municipio'))
                <div class="erro {{$errors->has('municipio') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('municipio')}}</div>
                @endif
            </div>
       
            <div class="col-3">
                <label for="email"><b>Estado</b></label>
                <input value="{{old('estado')}}" class="form-control {{ $errors->has('estado') ? 'is-invalid' : '' }}" type="text" name="estado" id="estado">
                @if($errors->has('estado'))
                <div class="erro {{$errors->has('estado') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('estado')}}</div>
                @endif
            </div>

            <div class="col-3">
                <label><b>Sexo</b></label>
                <select class="form-control {{ $errors->has('sexo') ? 'is-invalid' : '' }}" style="width: 100%;" name="sexo" id="sexo">
                <option selected disabled></option>
                <option>Masculino</option>
                <option>Feminino</option>
                </select>
                @if($errors->has('sexo'))
                <div class="erro {{$errors->has('sexo') ? 'invalid-feedback' : ''}}">
                    {{$errors->first('sexo')}}</div>
                @endif
            </div>
        </div>

        <br>
        <div class="row">
          
                <input type="file" id="imagem" name="imagem" class="from-control-file">         

        </div>
        <br>
        
        <div class="row">
            <button type="submit" class="btn btn-primary" style="font-size: 12px; font-weight: bold">Salvar</button>
                <button type="reset" class="btn btn-outline-danger ml-2" style="font-size: 12px; font-weight: bold"
                onclick="window.location.href='/clientes'">Cancelar</button>
            
        </div>
            
    
        </form>
      
      </div>
       
    </section>
@endsection
    


