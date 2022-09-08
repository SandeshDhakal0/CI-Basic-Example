<div class="container pt-5" style="max-width:500px">
    <div class="card">
        <div class="card-header text-center">Add Products </div>
        <div class="card-body">

            <?php echo validation_errors(); ?>
            <?php echo form_open('news/create'); ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Id</label>
                    <input type="id" class="form-control" name="id" id="id" >
                </div>
                <div class="form-group col-md-6">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" id="title" >
                </div>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" >
            </div>
            <div class="form-group">
                <label>Text</label>
                <input type="text" class="form-control" name="text" id="text" >
            </div>
            <div class="pt-3">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>