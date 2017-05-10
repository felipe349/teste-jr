@extends('partials.master')

@section ('content')
<div class="container">
    <h1>Bem vindo, por favor insira os dados</h1>  <br/>
    <form class="form-inline">
        <div class="form-group">
            <label for="nome">Nome do vendedor:</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email do vendedor:</label>
            <input type="email" class="form-control">
        </div>
        <div class="form group">
            <br/>
            <label for="preço">Preço do produto:</label>
            <input type="text" class="form-control">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>