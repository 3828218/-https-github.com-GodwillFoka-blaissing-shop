<div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($produit->nom) ? $produit->nom : ''}}" required>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('etat') ? 'has-error' : ''}}">
    <label for="etat" class="control-label">{{ 'Etat' }}</label>
    <select name="etat" class="form-control" id="etat" required>
    @foreach (json_decode('{"En Stock":"En Stock","Solde":"Solde","Stock Epuis\u00e9":"Stock Epuis\u00e9"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($produit->etat) && $produit->etat == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('etat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descrition') ? 'has-error' : ''}}">
    <label for="descrition" class="control-label">{{ 'Descrition' }}</label>
    <textarea class="form-control" rows="5" name="descrition" type="textarea" id="descrition" >{{ isset($produit->descrition) ? $produit->descrition : ''}}</textarea>
    {!! $errors->first('descrition', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cathegorie_id') ? 'has-error' : ''}}">
    <label for="cathegorie_id" class="control-label">{{ 'Cathegorie Id' }}</label>
    <input class="form-control" name="cathegorie_id" type="number" id="cathegorie_id" value="{{ isset($produit->cathegorie_id) ? $produit->cathegorie_id : ''}}" >
    {!! $errors->first('cathegorie_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
