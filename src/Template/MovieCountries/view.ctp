
<div class="movieCountries view col-lg-10 col-md-9">
    <h3><?= h($movieCountry->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($movieCountry->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($movieCountry->id) ?></td>
        </tr>
    </table>
</div>
