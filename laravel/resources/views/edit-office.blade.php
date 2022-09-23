<form method="post" action="/backoffice">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="">image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="image">
    </div>
    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name">
    </div>
    <div class="form-group">
        <label for="price">price</label>
        <input type="number" class="form-control" name="price" id="price" placeholder="price">
    </div>
    <div class="form-group">
        <label for="quantity">quantity</label>
        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="quantity">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

