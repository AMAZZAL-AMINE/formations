
<div class="d-flex justify-content-center align-items-center">
    <form wire:submit.prevent="creatFormation" class="bg-white p-5 w-50">
        <h1 class="border-bottom mb-5">Create A new Formation</h1>
        @if(session()->has("message"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><i class="mdi mdi-check-all"></i><span class="">{{ session("message") }}</span></strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
        @endif
        <div class="form-group">
            <label for="name">Fomration Name</label>
            <input id="name" class="form-control w-100 @error('name') border-2 border-danger @enderror" type="text" wire:model="name" name="name">
            @error("name")
                <p class="text-danger">*{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="slug">Fomration Slug</label>
            <input id="slug" class="form-control w-100 @error('slug') border-2 border-danger @enderror" type="text" wire:model="slug" name="slug">
            @error("slug")
                 <p class="text-danger">*{{ $message }}</p>
            @enderror
        </div>


        <div class="form-group">
            <label for="desc">Fomration Description</label>
            <textarea id="desc" class="form-control @error('desc') border-2 border-danger @enderror" name="desc" wire:model="desc" rows="5"></textarea>
            @error("desc")
                 <p class="text-danger">*{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Fomration Price</label>
            <input id="price" class="form-control w-100 @error('price') border-2 border-danger @enderror" type="number" wire:model="price" name="price">
            @error("price")
                 <p class="text-danger">*{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-gradient-primary btn-rounded "><i class="mdi mdi-content-save"></i>  Save</button>
    </form>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</div>
