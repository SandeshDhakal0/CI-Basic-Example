<div class="col d-flex pt-5 justify-content-center">
<div class="card" style="width: 50rem;"> 
<div class="card-body">
<div class="card-header text-center">Show News</div>
<div class="row justify-content-center">
<div class="col-auto">
<table class="table table-responsive">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Text</th>
        </tr>
    </thead>
    <?php foreach($news as $n): ?>
    <tbody>
        <tr>
            <th ><?php echo $n['id'];?></th>
            <td><?php echo $n['title']; ?></td>
            <td><?php echo $n['slug']; ?></td>
            <td><?php echo $n['text'];?></td>
        </tr>
    </tbody>
    <?php endforeach ?>
</table>
</div>
    </div>
    </div>
    </div>
    </div>

  