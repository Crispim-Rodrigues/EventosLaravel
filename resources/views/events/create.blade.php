@extends('layouts.main')

@section('title', 'Criar')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3" >
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" name="image" id="image" class="from-control-file" required>
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento..." required>
            </div>
            <div class="form-group">
                <label for="city">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento..." required>
            </div>
            <div class="form-group">
                <label for="private">Evento privado?</label>
                <select name="private" id="private" class="form-control" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição do evento..." required></textarea >
            </div>
            <div class="form-group">
                <label for="items">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="OpenBar"> OpenBar
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="OpenFood"> OpenFood
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>    
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
    
@endsection