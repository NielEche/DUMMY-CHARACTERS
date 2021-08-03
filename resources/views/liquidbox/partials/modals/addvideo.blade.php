<div class="modal fade stick-up" id="addvideo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                        class="pg-close fs-14"></i>
                </button>
                <h5>Add <span class="semi-bold">Video link</span></h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data"
                    name="video" id="video">
                    @csrf
                    @method('POST')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label> Url</label>
                                <input type="text" id="link" name="link" placeholder="link"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4 m-t-10 sm-m-t-10">
                            <button type="submit" name="submit" id="submit" value="submit"
                                class="btn btn-primary btn-block m-t-5">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>