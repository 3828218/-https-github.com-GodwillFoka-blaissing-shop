<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" accept=".png, .jpg, .jpeg, .bmp, .gif" id="image" value="{{ isset($produit->image) ? $produit->image : ''}}" required>
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
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
    <label for="cathegorie_id" class="control-label">{{ 'Catégorie' }}</label>
    <select  class="form-control" name="cathegorie_id" id="cathegorie_id"  required>
        <option disabled selected>Selectionner une Cathégorie</option>
        @forelse ($cathegorie as $item)
        <option value="{{$item->id}}" {{ (isset($produit->cathegorie_id) && $produit->cathegorie_id == $item->id) ? 'selected' : ''}}>{{ $item->nom }}</option>
        @empty
        <option disabled>Aucune Catégorie</option>

        @endforelse
    </select>
    {!! $errors->first('cathegorie_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
