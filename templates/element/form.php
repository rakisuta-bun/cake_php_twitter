<div class="row justify-content-md-center">
    <div class="col-md-4">
        <?= $this->Form->create(null, ['type' => 'file']); ?>
        <div class="table-responsive">
            <h2 class="text-white">Dash Board</h2>
            <div class="my-3">
                <textarea name="body" class="form-control bg-dark text-white" id="exampleFormControlTextarea1"
                          rows="3"></textarea>
            </div>
            <button class="btn btn-dark mb-3 ml-3" type="submit">送信</button>
        </div>
        <input type="file" name="file">
        <?= $this->Form->end(); ?>
    </div>
</div>
