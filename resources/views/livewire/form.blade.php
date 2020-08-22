<div class="form-group">
    <label for="">Titulo</label>
    <input type="text" class="form-control" wire:model="title">
    @error('title') <span>{{message}}</span>  @enderror
</div>
<div class="form-group">
    <label for="">Body</label>
    <textarea name="" id="" cols="30" rows="10" class="form-control" wire:model="body"></textarea>
    @error('body') <span>{{message}}</span>  @enderror
</div>