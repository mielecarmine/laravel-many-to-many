@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
    
        <label for="types_id" class="form-label">Tipo</label>
        <select class="form-select" id="types_id" name="types_id">
            <option value="1">FrontEnd</option>
            <option value="2">BackEnd</option>
            <option value="3">FullStack</option>
        </select>
        
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" />
    
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}"/>
    
    
        <label for="link" class="form-label">Link al progetto</label>
        <input
            type="url"
            class="form-control @error('link') is-invalid @enderror"
            id="link"
            name="link"
            value="{{ old('link') }}"
        />
    
        <button type="submit" class="btn btn-primary mt-4">Salva</button>
    </form>
</div>
@endsection

@if ($errors->any())
<div class="alert alert-danger">
  <h4>Correggi i seguenti errori per proseguire: </h4>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif