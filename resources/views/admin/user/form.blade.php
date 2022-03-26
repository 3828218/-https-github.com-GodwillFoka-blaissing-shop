<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" accept=".png, .jpg, .jpeg, .bmp, .gif" id="image"
        value="{{ isset($user->image) ? $user->image : '' }}" {{ $formMode === 'Modifer' ? '' : 'required' }}>
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email"
        value="{{ isset($user->email) ? $user->email : '' }}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="control-label">{{ 'Nom Complet' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($user->name) ? $user->name : '' }}"
        required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero') ? 'has-error' : '' }}">
    <label for="numero" class="control-label">{{ 'Téléphone' }}</label>
    <input class="form-control" name="numero" type="text" id="numero"
        value="{{ isset($user->numero) ? $user->numero : '' }}" required>
    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="control-label">{{ 'Mot de passe' }}</label>
    <input class="form-control" name="password" type="password" id="password"
         required>
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="control-label">{{ 'Confirmation Mot de passe' }}</label>
    <input onkeyup="test()" class="form-control" name="password" type="password" id="repassword">
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" disabled id="button" type="submit" value="{{ $formMode === 'Modifer' ? 'Modifer' : 'Ajouter' }}">
</div>

<script>
    var pass = document.getElementById("password");
    var repass = document.getElementById("repassword");
    var button = document.getElementById("button");

    function test() {
        if (pass.value == repass.value) {
            button.removeAttribute("disabled")
        } else {
            button.setAttribute("disabled", true)
        }
    }
</script>
