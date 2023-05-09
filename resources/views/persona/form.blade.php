<label class="form-label">nombre:</label>
    <input type="text" name="nombre" id="nombre" value="{{ isset($persona)?$persona->nombre:'' }}" class="form-control" /><br />
    @error('nombre')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br />
    apellido
    <input type="text" name="apellido" id="apellido" value="{{ isset($persona)?$persona->apellido:'' }}" class="form-control"  /><br />
    @error('apellido')
    <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br />
  
    <button type="submit" class="btn btn-primary">Guardar</button>